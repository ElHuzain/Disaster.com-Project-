<?php

// Library & Connection
include("../library/functions.php");
$con = connect("disaster");
if(!$con) return header("Location: ../login.php?error=Couldn't connect to database \"disaster\".");

// Store data into library using library
$status = store('user', ["name"=>$_POST['name'], "gender"=>$_POST['gender'], "password"=>$_POST['pwd'], "address"=>$_POST['address']], $con);

// If data was successfully registered, send user to login page. Else, display error
if(!$status) header("Location: ../register.php?error=There was a problem creating an account.");
else header("Location: ../login.php");

?>