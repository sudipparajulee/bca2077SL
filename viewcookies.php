<html>
    <head>
        <title>View Cookies</title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE["user"]))
        {
            echo "Cookie not found <br>";
        }
        else
        {
            echo "<br>Cookie Value : " . $_COOKIE["user"];
        }
        ?>
    </body>
</html>