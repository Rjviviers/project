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
        <title>Application</title>
    </head>
    <body>
        <div ><img src="images/mainlogo.png" id="logo-main-topleft"</div>
        <span id="Span-text">Let's Get Started on that Application</span>
    <div class="form">  
        <div class="thumbnail"><img src="images/book.png"/></div>
        
        <form class="form-unit" action="" method="POST" >
            <select>
                <option>-Select A unit-</option>
                <option>PTA</option>
                <option>Cape Town</option>
                <option>JHB</option>
                <option>Nelspruit</option>
                <option>New York</option>
            </select><br>
            <button id="button"><a id="next" href="#" >Submit</a></button>
        </form>
        
        <form class="form-term" action="" method="POST" >
            <select>
                <option>-Select a Term-</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
            </select>
            <input name="submit" type="submit" value="Submit" id="button"> 
        </form>
        
        
    </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><!-- jquery library for simple movement between registration and Login  -->

    <script src="js/index.js"></script> 
        <?php
        if (isset($_POST['submit'])) {
            header('location:CourseSelect.php');
        }
        ?>
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
