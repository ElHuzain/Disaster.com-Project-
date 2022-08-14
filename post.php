<!-- PHP here -->

<html>

<head>
    <title> Post </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/test.css" rel="stylesheet">
</head>

<body class="body-reg">

    <?php include("files/header.php");?>
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
                    <form action="verification/verifyNewComment.php?pid=<?php echo $id;?>" method="post">
                        <input style="width:90%;" name="content" required placeholder="New comment.." type="text"> <input type="submit">
                    </form>
                </div>
                <div>
                    <?php
                    // PHP here
                    ?>
                </div>
            </div>


        </div>
    </div>
    <?php include("files/footer.php");?>
</body>

</html>