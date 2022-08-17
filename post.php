<?php
include('library/functions.php');
$con = connect('disaster');
if (!isset($_GET['pid'])) header('Location: home.php');
$id = $_GET['pid'];
$query = "SELECT * FROM user as u, post as p WHERE p.pid = $id AND u.uid = p.uid";
// $query = retrieve(["user", "post"], "where p.pid = $id AND u.uid = p.uid", $con);
$run = mysqli_query($con, $query);
$followingdata = $run->fetch_assoc();
// $data = retrieve(['comment, user, post'], "where c.uid = u.uid AND c.pid = p.pid AND p.pid = $id", $con);
$data = mysqli_query($con, "SELECT c.cid, c.uid, u.uid, u.name, c.date, c.content FROM comment c, user u, post p where c.uid = u.uid AND c.pid = p.pid AND p.pid = $id");
?>

<html>

<head>
    <title> Post </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="body-reg">

    <?php include("files/header.php"); ?>
    <div class="container">
        <div class="box">


            <div class="p">
                <div style="margin: auto;" class="up">
                    <h1 style="margin:auto auto;max-width:fit-content"><?php echo $followingdata['title']; ?></h1><br>
                    <h4 style="float:left;">Author: <?php echo $followingdata['name']; ?></h4>
                    <h4 style="float:right;">Date: <?php echo $followingdata['date']; ?></h4><br>
                    <hr>
                </div>
                <div style="min-height:100px;">
                    <p><?php echo $followingdata['body']; ?></p>
                </div>
            </div>

            <hr>
            <div class="p">
                <div class="newComment">
                    <form action="verification/verifyNewComment.php?pid=<?php echo $id; ?>" method="post">
                        <input style="width:90%;" name="content" required placeholder="New comment.." type="text"> <input type="submit">
                    </form>
                </div>
                <div>
                    <?php
                    foreach ($data as $d) {
                        // echo $d['uid'] == $_SESSION['userid'];
                        echo "<div class=\"comment\">";
                        if ($d['uid'] == $_SESSION['userid']) echo "<h5 style=\"width:fit-content;float:left;\">" . $d['name'] . " - " . $d['date'] . "</h5><h5 style=\"width:fit-content;float:right;\"><a href=\"verification/delete.php?table=comment&key=cid&pid=" . $d['cid'] . "\">Delete [❌]</a></h5>";
                        else echo "<h5 style=\"width:fit-content;float:left;\">" . $d['name'] . " - " . $d['date'] . "</h5>";
                        echo "<br><hr><p>" . $d['content'] . "</p></div>";
                    }
                    ?>
                </div>
            </div>


        </div>
    </div>
    <?php include("files/footer.php"); ?>
    <script src="./js/main.js"></script>
</body>

</html>