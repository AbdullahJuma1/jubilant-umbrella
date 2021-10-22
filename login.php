<?php

include('config.php');

session_start();

if(isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0) {
       $row = mysqli_ftech_assoc($result);
       $_SESSION['email'] = $row['email'];

    } else {
        echo 'alert(Woops! Email or Password is wrong)';
    
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Barter Trade</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <div class="main">
<div class="navbar">
  <div class="icon">
<h2 class="logo"> BarterTrade </h2>
  </div>
</div>

    <form action="login.php" method="post">
        <div class="container">

        <div class="row">
        <div class="col-sm-3">
        <p> <strong> Login Page </strong> </p>
        <br class="mb-3">

        <input class="form-control" placeholder="email" type="text" name="email" required>

        <label for="password"></label>
        <input class="form-control" placeholder="password" type="text" name="password" required>

        <br class="mb-3">

<input class="btn btn-primary" type="submit" value="Login" >

<br class="mb-3">

<p> Do no have an account? <a href="registration.php"> Register Here </a> </p>

</div>
</div>
</div>
</form>

</div>
</div>
</head>
<body>
    
</body>
</html>