<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration | Barter Trade</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
    
<div>
<?php


?>

</div>


<div>

<div class="main">
<div class="navbar">
  <div class="icon">
<h2 class="logo"> BarterTrade </h2>
  </div>
</div>


<form action="registration.php" action="" method="post">
<div class="container">

<div class="row">
    <div class="col-sm-3">
    
    <h2> <strong> CREATE ACCOUNT </strong> </h2>
    <br class="mb-3">

    <label for="firstname"></label>
    <input class="form-control" id="firstname" type="text" name="firstname" placeholder="First Name" required>

    
    <label for="lastname"></label>
    <input class="form-control" id="lastname" type="text" name="lastname" placeholder="Last Name" required>

    
    <label for="email"></label>
    <input class="form-control" id="email" type="text" name="email" placeholder="email" required>

    <label for="phonenumber"></label>
    <input class="form-control" id="phonenumber" type="text" name="phonenumber" placeholder="Phone Number" required>

  
    <label for="password"></label>
    <input class="form-control" id="password" type="password" name="password" placeholder="Password" required>


    <br class="mb-3">

    <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">

    <br class="mb-3">

    <p> Already have an account? <a href="login.php"> Login Here </a> </p>

</div>
<div>
</div>

</form>


</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(function(){
      $('#register').click(function(e){

          var valid = this.form.checkValidity();


          if(valid){

          var firstname   = $('#firstname').val();
          var lastname    = $('#lastname').val();
          var email       = $('#email').val();
          var phonenumber = $('#phonenumber').val();
          var password    = $('#password').val();

              e.preventDefault();

              $.ajax({
                  type: 'POST',
                  url: 'process.php',
                  data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
                  success: function(data){

                    Swal.fire({
                            'title': 'Sucessful',
                            'text': data,
                            'icon': 'success'
                              })

                  },
                  error: function(data){
                    Swal.fire({
                            'title': 'Errors',
                            'text': 'There was an Error Registering to Barter Trade',
                            'icon': 'error'
                              })

                  }

              });

              
          }else{
           
          }

         


  
        });

    
});



</script>
</body>
</html>