<?php
// Library, Connection & Session
include('C:/Users/AcerJ/Desktop/ITI PHP/Project/EE/library/functions.php');
$con = connect('disaster');
session_start();

// Storing variables
store('comment', ['pid'=>$_GET['pid'], 'uid'=>$_SESSION['userid'], 'content'=>$_POST['content']], $con);

// Redirect to same page
header("Location: ../post.php?pid=".$_GET['pid']);