<html>

<head>
    <meta charset="utf-8" />
    <link rel="styleSheet" href="app.css" />
</head>

<body>
    
    <table>
        <h1>Multi Table</h1>
        <?php
        $multi_result = $myinput;
        for ($i=1; $i <= 24; $i++) { 
            $result = $multi_result*$i;
            echo "<h2>$multi_result x $i = $result</h2>";
        }
        ?>
    </table>

</body>

</html>