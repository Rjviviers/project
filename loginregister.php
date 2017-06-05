<!DOCTYPE html><?php session_start(); ?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="Style.css"/>
        <meta charset="UTF-8">
        <title>Login Page</title>
    </head>
    <body>

        
        <div class="container">
        
        <div class="info">
            <div ><img src="images/mainlogo.png" id="logo-main-topleft"</div>
          
        </div>
        </div>
      <div class="form">
    <div class="thumbnail"><img src="images/hat.svg"/></div>
    
    
  <form class="register-form" method="POST">
    <input type="text" placeholder="email address"/>
    <input type="text" placeholder="Full Name"/>
    <input type="password" placeholder="Password"/>
    <input type="password" placeholder="Password Conformation"/>
    <input name="captcha" type="text" placeholder="enter numbers below">
    <img src="captcha.php" /><br>
    <input name="submitRegistration" type="submit" value="Submit" id="button">
    <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
  
    <form class="login-form"  method="POST">
    <input type="text" placeholder="username"/>
    <input type="password" placeholder="password"/>
    <input name="captcha" type="text" placeholder="enter numbers below">
    <img src="captcha.php" /><br>
    <input name="submitLogin" type="submit" value="Submit" id="button">
   
    
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
    
    
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><!-- jquery library for simple movement between registration and Login  -->

    <script> 
        $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
$('#button a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

    </script> 

        <?php
        if (isset($_POST['submitLogin'])) {
            if (isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]) {

                header('location:RegistrationStatus.php');
            } else {
                echo "Wrong Code Entered";
            }
        }
         if (isset($_POST['submitRegistration'])) {
            if (isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]) {

                header('location:RegistrationStatus.php');
            } else {
                echo "Wrong Code Entered";
            }
        }
        ?>
    
    </body>
</html>
