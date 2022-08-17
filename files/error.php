<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>

<html>
<header style="background-color: white; padding:1.5vh; min-height:6.5vh;">
    <h3 style="float:left">Disaster.com</h3>

    <h5 style="display:flex;float:right">Logged in as: <?php echo $_SESSION['username'] ?>       [log out]</h5>
    
</header>

</html>