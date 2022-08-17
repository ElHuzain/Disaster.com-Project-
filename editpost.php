<?php
include("./library/functions.php");
$con = connect("disaster");
if (!isset($_GET['body']) || !isset($_GET['title'])) header("Location: ./home.php");
$body = $_GET['body'];
$title = $_GET['title'];
if (isset($_POST['title']) && isset($_POST['body'])) {
    $t = $_POST['title'];
    $b = $_POST['body'];
    $query = "UPDATE post SET title = '$t', body = '$b' WHERE pid = " . $_GET['pid'];
    echo "YES";
    $r = mysqli_query($con, $query);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Edit Post </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="body-reg">
    <?php include("files/header.php"); ?>
    <form action="./verification/edit.php?pid=<?php echo $_GET['pid'] ?>" method="post">

        <div style="padding:5%;" class="container">
            <div class="modifiedLoginPage">
                <div class="">
                    <h1 style="text-align: center; color: #000;">Edit a post</h1>
                    <hr>
                    <?php if (isset($_GET['error'])) echo "<div class=\"error\"><p>" . $_GET['error'] . "</p></div>"; ?>
                    <label for="name"><b>Title</b></label>
                    <input id="name" type="text" name="title" value="<?php echo $title ?>" required class="form-control" />
                    <br>
                    <label for="pwd"><b>Description</b></label>
                    <textarea id="pwd" type="password" name="body" required class="form-control"><?php echo $body ?></textarea>
                    <br>

                    <br>
                    <div class="part"> <button type="Submit" class="btn"> EDIT </button> <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php include("files/footer.php"); ?>
</body>

</html>