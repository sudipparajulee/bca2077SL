<html>
    <head>
        <title>Cookies Example</title>
    </head>
    <body>
        <?php
            setcookie("user","Bibash");
            echo "<br>Cookie Value: " . $_COOKIE["user"];
            echo "<br> <a href='viewcookies.php'>View Next Page</a> ";
        ?>
    </body>
</html>

<?php
//setting a cookie
//setcookie(name,value,expire,path,domain,secure,httponly);
setcookie("cookiename","value");
setcookie("cookiename","value",time()+1*60*60); //expires after 1 hour.

//destroy
setcookie("cookiename","value",time()-100);


?>