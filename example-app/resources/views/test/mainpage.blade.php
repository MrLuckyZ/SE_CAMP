<h1>Main Page in folder</h1>
<h1> <?php echo $val_a; ?> </h1>

<form method="post" action="/my-route">
    @csrf
    <input type="number" name="myinput">
    <button type="submit">submit</button>
</form>