<?php
session_start();
if (!isset($_SESSION['username'])) header("Location: login.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/test.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body class="body-reg">
    <?php include("files/header.php"); ?>

    <section>
        <div style="padding: 3%;" class="container">
            <div class="row">
                <div class="modifiedHomePage col-lg-9 m-auto">
                    <h1 style="margin: auto; max-width:fit-content;">Welcome to Disaster.com!</h1>
                    <hr><br>
                    <a href="newPost.php"><button>Add a new discussion topic</button></a><br><br>
                    <table class="table ">
                        <thead>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Replies</th>
                            <th>Content</th>
                            <th>Date</th>

                        </thead>
                        <tbody id="">
                            <!-- PHP Here -->
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include("files/footer.php");?>

</body>

</html>