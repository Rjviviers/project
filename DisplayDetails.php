<!DOCTYPE html>
<?PHP session_start(); 
include './Functions.php';?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="Style.css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div ><img src="images/mainlogo.png" id="logo-main-topleft"</div>
        <span id="Span-text">Thank You</span>
        <div class="form">
            <img src="images/avatar.jpg" alt="avatar" id="avatar"/> 
            <h2>Personal Details</h2>
            <p style="border-right: solid 1px #000;"></p>
            
            <label>
                <?php
                foreach ($_SESSION as $key => $value) {
                    echo "$key  :$value <br>";
                }
                    
                ?>
            </label>
        </div>
        
    </body>
</html>
