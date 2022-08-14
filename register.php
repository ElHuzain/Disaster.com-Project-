<!DOCTYPE html>
<html>
  <head>
    <title> Register </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/index.css" rel="stylesheet">
  </head>
  <body class="body-reg">
    <form action="verification/verifyRegister.php" method="post">
      
      <div style="padding:5%;"class="container">
      <section class="modifiedHomePage reg">
        <!-- <div class="row"></div> -->
        <div class="col-xl-9 w-75 m-auto y-3">
        <h1 style="text-align: center; color: #000;">Registration</h1><hr>
        <label for="name"><b>Name</b></label>
        <input id="name" type="text" name="name" placeholder="Enter Name" required class="form-control" />
      <br>
      <label for="pwd"><b>Password</b></label>
        <input id="pwd" type="password" placeholder="Enter Password" name="pwd" required class="form-control"/>
        <br>
        <label><b>Gender</b></label>
        
      <label for="Male">Male</label>
      <input id="Male" type="radio" name="gender"  />
      <label for="Female">Female</label>
      <input id="Female" type="radio" name="gender" />
      <br>
      <label for="Address"><b>Address</b></label>
      <input id="Address" type="text"  placeholder="Enter Address" name="address" class="form-control"/>
      <br>
     <div class="part"> <button type="Submit" class="btn"> Create an account </button> <br>
      <br>
      <P> Already have an account? <a href="login.php"> Login </a> </P></div>
    </div>
    </div>
      </div>
    </form>
  </section>
  </body>
</html>
