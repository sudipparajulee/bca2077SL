<?php
session_start();
?>
<html>
    <body>
        <?php $_SESSION['user'] = 'Ram'; ?>

        <?php echo $_SESSION['user']; ?>

        <!-- destroy -->
        <?php unset($_SESSION['user']); ?>
        <?php session_destroy(); ?>
    </body>
</html>