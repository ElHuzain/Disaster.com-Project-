<!DOCTYPE html>
<html>

<head>
    <title> Register </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/test.css" rel="stylesheet">
</head>

<body class="body-reg">
    <form action="verification/verifyLogin.php" method="post">

        <div style="padding:5%;" class="container">
            <div class="modifiedLoginPage">
                <div class="">
                    <h1 style="text-align: center; color: #000;">SIGN IN</h1>
                    <hr>
                    <label for="name"><b>Name</b></label>
                    <input id="name" type="text" name="name" placeholder="Enter Name" required class="form-control" />
                    <br>
                    <label for="pwd"><b>Password</b></label>
                    <input id="pwd" type="password" placeholder="Enter Password" name="pwd" required class="form-control" />
                    <br>

                    <br>
                    <div class="part"> <button type="Submit" class="btn"> Sign in </button> <br>
                        <br>
                        <P> New to Disaster.com? <a href="register.php"> Sign Up </a> </P>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>