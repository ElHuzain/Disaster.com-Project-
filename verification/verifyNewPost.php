<?php
// Library & Connection & Starting session to retrieve global variable userid
include("../library/functions.php");
$con = connect("disaster");
if(!$con) return header("Location: ../newPost.php?error=Couldn't connect to database \"disaster\".");
session_start();

// Making sure the user has entered actual data, not spaces!
if($_POST['title'] == " " || $_POST['body'] == " ") return header("Location: ../newPost.php?error=Please fill in all the blanks.");

// Storing data & redirecting user to home
$result = store("post", ["uid"=>$_SESSION['userid'], "title"=>$_POST['title'], "body"=>$_POST['body']], $con);
header("Location: ../home.php");

?>