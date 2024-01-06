<html>

<style>
    body {
        color: white;
        font-family: Arial, sans-serif;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f7f7f7;
    }

    .btn-3 {
        font-family: Arial, sans-serif;
        --clr: #5559AB;
        --outline: 2px solid white;
        border: 2px solid var(--clr);
        background: var(--clr);
        color: white;
        outline: var(--outline);
        transition: outline-offset 200ms ease;
        width: 100px;
        height: 40px;
    }

    .btn-3:hover,
    .btn-3:focus {
        outline: var(--outline);
        outline-offset: -6px;
        // because of normalize
    }

    .textCenter {
        text-align: center;
        width: 250px;
        height: 50px;
    }

    body {
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 100vh;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }
</style>

<body>
    <form method="post" action="/my-route">
        <h1>
            <?php echo $val_a; ?>
        </h1>
        @csrf
        <h1>
            <input class="textCenter" type="number" name="myinput">
        </h1>
        <button class="btn btn-3" type="submit">S U B M I T</button>
    </form>
</body>

</html>