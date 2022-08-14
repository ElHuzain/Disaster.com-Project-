<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title> New Post </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/test.css" rel="stylesheet">
</head>

<body class="body-reg">
    <?php include("files/header.php"); ?>
    <form action="verification/verifyNewPost.php" method="post">

        <div style="padding:5%;" class="container">
            <div class="modifiedLoginPage">
                <div class="">
                    <h1 style="text-align: center; color: #000;">Post a new disaster!</h1>
                    <hr>
                    <label for="name"><b>Title</b></label>
                    <input id="name" type="text" name="title" placeholder="Enter Title" required class="form-control" />
                    <br>
                    <label for="pwd"><b>Description</b></label>
                    <textarea id="pwd" type="password" placeholder="I am the storm that is approaching." name="body" required class="form-control"></textarea>
                    <br>

                    <br>
                    <div class="part"> <button type="Submit" class="btn"> POST </button> <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php include("files/footer.php"); ?>
</body>

</html>