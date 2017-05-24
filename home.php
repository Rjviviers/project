<!DOCTYPE html>
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
    
    
  <form class="register-form" action="validate.php" method="POST">
    <input type="text" placeholder="email address"/>
    <input type="text" placeholder="Full Name"/>
    <input type="password" placeholder="Password"/>
    <input type="password" placeholder="Password Conformation"/>
    <input name="captcha" type="text" placeholder="enter numbers below">
    <img src="captcha.php" /><br>
    <input name="submit" type="submit" value="Submit" id="button">
    <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
  
    <form class="login-form" action="validate.php" method="POST">
    <input type="text" placeholder="username"/>
    <input type="password" placeholder="password"/>
    <input name="captcha" type="text" placeholder="enter numbers below">
    <img src="captcha.php" /><br>
    <input name="submit" type="submit" value="Submit" id="button">
   
    
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
    
    
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><!-- jquery library for simple movement between registration and Login  -->

    <script src="js/index.js"></script> 

        <?php
        

?>
    </body>
</html>
