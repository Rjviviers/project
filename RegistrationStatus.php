<!DOCTYPE html><?php
session_start();
include './Functions.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="Style.css" />
        <meta charset="UTF-8">
        <title>Enter All personal details</title>
    </head>
    <body>
        <div ><img src="images/mainlogo.png" id="logo-main-topleft"</div>
        <span id="Span-text">hello <?php echo $_SESSION['name']; ?> ,Please fill in your personal details</span>
        <div class="form">  
            <div class="thumbnail"><img src="images/pencil.svg"/></div>

            <form class="" action="" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="First Name" name="firstName" value="<?php echo $_SESSION['name']; ?>"/>
                <input type="text" placeholder="Middle Name" name="MiddleName" value="<?php stickytext('MiddleName') ?>"/>
                <input type="text" placeholder="Last Name" name="lastName" value="<?php stickytext('lastName') ?>"/>
                <input type="text" placeholder="National ID Number" name="IDNumber" value="<?php stickytext('IDNumber') ?>"/> 
                <div id="form-row">
                    <label><span>Gender</span></label><br>
                    <div id="form-radio-buttons">           
                        <div>

                            <label>
                                <input <?php stickyRadio('gender', 'Male') ?> type="radio" name="gender" value="Male"> 
                                <span id="radio-Text">Male</span>
                            </label>
                        </div> 

                        <div>
                            <label>
                                <input <?php stickyRadio('gender', 'Female') ?> type="radio" name="gender" value="Female">
                                <span id="radio-Text">Female</span>
                            </label>
                        </div>
                    </div>
                </div>    
                <input type="text" placeholder="Mobile Number" name="cellNumber" value="<?php stickytext('cellNumber') ?>" />
                <input type="text" placeholder="Home Number" name="homeNumber" value="<?php stickytext('homeNumber') ?>"/>
                <span ><label>Chose profile pic</label></span>
                <input type="file" name="pic" id="fileToUpload">

                <input name="submit" type="submit" value="Submit" id="button"> 
            </form>
        </div>

        <div id="php-container">
            <?php
            var_dump($_SESSION);
            if (isset($_POST['submit'])) {
                
                //ValidateTextFields('firstName');
                ValidateTextFields('lastName');
                ValidateTextFields('IDNumber');
                ValidateTextFields('cellNumber');
                ValidateRadio('gender');
                validatePicture('pic');
                
                if (count($errors)> 0) {
                    for ($i = 0; $i < count($errors); $i++) 
                    echo "$errors[$i]";
                }
                else{
                    header("location:courseDetais.php");
                }
                for ($i = 0; $i < count($errors); $i++) {
                    if ($errors[$i] == FALSE) {
                        
                        break;
                    } else {
                        
                    }
                }
            }
            ?>
        </div>



        <footer>
            <ol class="progtrckr" data-progtrckr-steps="5">
                <li class="progtrckr-todo">Enter All Personal Details</li>
                <li class="progtrckr-todo">Select academic unit of registration</li>
                <li class="progtrckr-todo">Select Term</li>
                <li class="progtrckr-todo">Select a Course</li>
                <li class="progtrckr-todo">Display details</li>
            </ol>
        </footer>

        <?php
        ?>
    </body>
</html>
