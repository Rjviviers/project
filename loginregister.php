<!DOCTYPE html><?php session_start();
include_once './Functions.php';
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="css/Style.css"/>
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
                <input type="text" placeholder="email address" name="email"/>
                <input type="text"  name="name" placeholder="Name"/>
                <input type="password" placeholder="Password" name="password"/>
                <input type="password" placeholder="Password Conformation" name="confirm"/>
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
<!--    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
        <script src='js/jquery-1.10.2.min.js'></script>
        <script>
            $('.message a').click(function () {
                $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
            });
        </script> 
        <div id="php-container">
        <?php
        if (isset($_POST['submitLogin'])) {
            
            if (isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]) {
               
                header('location:RegistrationStatus.php');
            } else {
                
                echo "Wrong Code Entered";
            }
        }
        if (isset($_POST['submitRegistration'])) {

            capcha();
            ValidatePassword($_POST['password'], $_POST['confirm']);
            ValidateTextFields("name");
            if (count($errors) > 0) {
                for ($i = 0; $i < count($errors); $i++) {
                    echo "$errors[$i]";
                }
            } else {
                header('location:RegistrationStatus.php');
            }
        }
        ?>
        </div>
    </body>
</html>
