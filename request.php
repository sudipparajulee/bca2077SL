<html>
    <head>
        <title>My title</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="myname" placeholder="Enter Name">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
    echo $_REQUEST['myname'];
}

?>