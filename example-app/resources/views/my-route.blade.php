<html>

<head>
    <meta charset="utf-8" />
    <link rel="styleSheet" href="app.css" />
</head>
<style>
    h1 {
        font-family: Arial, sans-serif;
    }

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

    .overFlowScroll {
        width: 300px;
        height: 500px;
        overflow: auto;
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

    <h1>Result = </h1>
    <div class="overFlowScroll">
        <?php
        $multi_result = $myinput;
        for ($i=1; $i <= 24; $i++) { 
            $result = $multi_result*$i;
            echo "<h2>$multi_result x $i = $result</h2>";
        }
        ?>
    </div>

</body>

</html>