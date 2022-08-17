<?php
// Library & Connection
include('C:/Users/AcerJ/Desktop/ITI PHP/Project/EE/library/functions.php');
$con = connect('disaster');
if(!$con) return header("Location: ../login.php?error=Couldn't connect to database \"disaster\".");

// Retreiving values entered by user
$usr = $_POST['name'];
$pwd = $_POST['pwd'];

// Applying query, and checking if the user is valid.
$rslt = mysqli_query($con, "SELECT * FROM user WHERE name = '$usr' AND password = '$pwd'");
if (mysqli_num_rows($rslt) <= 0) return header("Location: ../login.php?error=Incorrect login details.");

// Session to keep track of which user is logged in.
session_start();
$userdata = $rslt->fetch_assoc();
$_SESSION['username'] = $userdata['name'];
$_SESSION['userid'] = $userdata['uid'];

// Send user to home page
header("Location: ../home.php");
?>