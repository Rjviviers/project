<!DOCTYPE html>
<?PHP session_start(); 
include './Functions.php';

?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="Style.css"/>
        <meta charset="UTF-8">
        <title>Select course</title>
    </head>
    <body>
        <div ><img src="images/mainlogo.png" id="logo-main-topleft"</div>
        <span id="Span-text">Just the course left</span>
    <div class="form">  
        <div class="thumbnail"><img src="images/book.png"/></div>
        
        <form class="form-unit" action="" method="POST" >
            
            <input name="submit" type="submit" value="Submit" id="button"> 
        </form>
        
        
        
        
    </div>
        
        <?php
        if (isset($_POST['submit'])) {
            header('location:DisplayDetails.php');
        }
        ?>
        </div>
        <footer>
            <ol class="progtrckr" data-progtrckr-steps="5">
                <li class="progtrckr-done">Enter All Personal Details</li>
                <li class="progtrckr-done">Select academic unit of registration</li>
                <li class="progtrckr-done">Select Term</li>
                <li class="progtrckr-todo">Select a Course</li>
                <li class="progtrckr-todo">Display details</li>
            </ol>
        </footer>
    </body>
</html>
