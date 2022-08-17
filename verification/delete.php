<?php
// Library & Connection
include("../library/functions.php");
$con = connect("disaster");
if(!$con) return header("Location: ../newPost.php?error=Couldn't connect to database.");

// Deleting the post
delete($_GET['table'], $_GET['key'], $_GET['pid'], $con);

// Storing data & redirecting user to home
header("Location: ../home.php");

?>