<!DOCTYPE html>
<?PHP session_start(); 
include './Functions.php';
$Areas = array('PTA','Cape Town','JHB','Nelspruit','New York');
$courses = array('BsC Computer Sciences','Dip Arts&Design','BsC Arts&Design','Masters : Coding','Masters : Arts&Design');
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
        <title>Application</title>
    </head>
    <body>
        <div ><img src="images/mainlogo.png" id="logo-main-topleft"</div>
        <span id="Span-text">What are you interested in doing</span>
    <div class="form">  
        <div class="thumbnail"><img src="images/book.png"/></div>
        
        <form class="form-unit" action="" method="POST" >
            <select name="unit">
                <option>-Select A unit-</option>
                <?PHP 
                for ($i = 0; $i < count($Areas); $i++) {
                    echo "<option>$Areas[$i]</option>";
                }
                ?>
            </select> <br><br>
            <select name="Term">
                <option>-Select A Term-</option>
                <?Php 
                for ($i = 2017; $i <= 2022; $i++) {
                    echo "<option>$i</option>";
                }
                ?>
            </select> <br><br>
            <select name="Course"> 
                <option>-Select A Course-</option>
                <?php 
                for ($i = 0; $i < count($courses); $i++) {
                    echo "<option>$courses[$i]</options>";
                }
                ?>
                
            </select><br>
            <input name="submit" type="submit" value="Submit" id="button"> 
        </form>
        
        
    </div>
       <div id="php-container">
        <?php
        if (isset($_POST['submit'])) {
             ValidateDropDown('unit');
             ValidateDropDown('Term');
             ValidateDropDown('Course');
             if (count($errors) > 0) {
                for ($i = 0; $i < count($errors); $i++) {
                    echo "$errors[$i]";
                }
            } else {
                 header('location:DisplayDetails.php');
            }
            
        }
        ?></div>
        <footer>
            <ol class="progtrckr" data-progtrckr-steps="5">
                <li class="progtrckr-done">Enter All Personal Details</li>
                <li class="progtrckr-todo">Select academic unit of registration</li>
                <li class="progtrckr-todo">Select Term</li>
                <li class="progtrckr-todo">Select a Course</li>
                <li class="progtrckr-todo">Display details</li>
            </ol>
        </footer>
    </body>
</html>
