<?php
// Library, Connection & Session
include("library/functions.php");
session_start();
$con = connect('disaster');
if(!$con) return header("Location: login.php?error=Couldn't connect to database \"disaster\".");

// If a user is not logged in, redirect to home
if (!isset($_SESSION['username'])) return header("Location: login.php?error=You need to login first.");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body class="body-reg" onclick="start()">
    <?php include("files/header.php"); ?>

    <section>
        <div style="padding: 3%;" id="container" class="container">
            <div class="row">
                <div class="modifiedHomePage col-lg-9 m-auto">
                    <h1 style="margin: auto; max-width:fit-content;">Welcome to Disaster.com!</h1>
                    <hr><br>
                    <?php if (isset($_GET['error'])) echo "<div class=\"error\"><p>" . $_GET['error'] . "</p></div>"; ?>
                    <a href="newPost.php"><button class="btn" style="width:fit-content;background-color:black;background-image:none;">Add a new discussion topic</button></a><br><br>
                    <table class="table ">
                        <thead>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Replies</th>
                            <th>Content</th>
                            <th>Date</th>
                            <th>Operation</th>
                        </thead>
                        <tbody id="">
                            <?php
                        
                            $result = retrieveAll("homePage", $con);

                            foreach ($result as $post) {
                                echo "<tr>";
                                echo "<td><a href=\"post.php?pid=" . $post['pid'] . "\">" . $post['title'] . "</a></td>";
                                echo "<td>" . $post['name'] . "</td>";
                                echo "<td>" . $post['replies'] . "</td>";
                                echo "<td>" . substr($post['body'], 0, 25) . "..</td>";
                                echo "<td>" . $post['date'] . "</td>";
                                // if($_SESSION['userid'] == $post['uid']) echo "<td><a href=\"#\">Delete [❌]</a>  <a href=\"#\">Update[✏️]</a></td>";
                                if ($_SESSION['userid'] == $post['uid'])
                                    echo "<td><a href=\"verification/delete.php?pid=" . $post['pid'] . "&table=post&key=pid\">[❌]</a>  <a href=\"./editpost.php?pid=" . $post['pid'] . "&title=" . $post['title'] . "&body=" . $post['body'] . "\">[✏️]</a></td>";
                                else echo "<td></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include("files/footer.php"); ?>
    <script src="./js/main.js"></script>
</body>

</html>