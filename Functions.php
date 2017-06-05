<?php
$errors = array();

function stickytext($ElementName) {
    if (isset($_POST['submit'])) {
        if (!empty($_POST[$ElementName])) {
            echo trim($_POST[$ElementName]);
        } else {
            echo "";
        }
    }
}

function stickyRadio($ElementName, $CheckedParam) {
    if (isset($_POST[$ElementName])) {
        if ($_POST[$ElementName] == $CheckedParam) {
            echo "Checked";
        } else {
            echo "";
        }
    }
}

function ValidateTextFields($ElementName) {
    global $errors;
    if (isset($_POST['submit'])) {
        $value = trim($_POST[$ElementName]);
        switch ($ElementName) {

            case "firstName":

                if (!empty($value)) {
                    if (ctype_alpha($value)) {
                        $_SESSION[$ElementName] = $value;
                        // return TRUE;
                    } else {
                        echo "Please fill in $ElementName... with only alphabet characters<br>";
                        // return FALSE;
                    }
                } else {
                    echo "Please enter $ElementName...<br>";
                    //return FALSE;
                }
                break;
            case "lastName":
                if (!empty($value)) {
                    if (ctype_alpha($value)) {
                        $_SESSION[$ElementName] = $value;
                        // return TRUE;
                    } else {
                        $errors[] = "Please fill in $ElementName... with only alphabet characters<br>";
                        //return FALSE;
                    }
                } else {
                    $errors[] = "Please enter $ElementName...<br>";
                    // return FALSE;
                }
                break;
            case "IDNumber":
                if (!empty($value)) {
                    if (ctype_digit($value)) {
                        $_SESSION[$ElementName] = $value;
                        //return TRUE;
                    } else {
                        $errors[] = "Please fill in $ElementName... with only digets<br>";
                        // return FALSE;
                    }
                } else {
                    $errors[] = "Please fill in the $ElementName field<br>";
                    // return FALSE;
                }
                break;
            case "cellNumber":
                if (!empty($value)) {
                    if (ctype_digit($value)) {
                        $_SESSION[$ElementName] = $value;
                        // return TRUE;
                    } else {
                        $errors[] = "Please fill in $ElementName... with only digets<br>";
                        // return FALSE;
                    }
                } else {
                    $errors[] = "Please fill in the $ElementName field<br>";
                    // return FALSE;
                }
                break;
            default:
                break;
        }
    }
}

function ValidateDropDown($ElementName) {
    global $errors;
    if (isset($_POST['ok'])) {
        $value = $_POST[$ElementName];
        if ($value == "-Select Option-") {
            $errors[] = "Please select an option in the $ElementName droptdown<br>";
        } else {
            // echo "$ElementName  : $value<br>";
            $_SESSION[$ElementName] = $value;
        }
    }
}

function ValidateRadio($ElementName) {
    global $errors;
    if (isset($_POST[$ElementName])) {
        $_SESSION[$ElementName] = $_POST[$ElementName];
    } else {
        $errors[] = "Please select the $ElementName<br>";
    }
}

function validatePicture($elementName) {
    global $errors;
    $NameOfFile = $_FILES[$elementName]['name'];
    $SizeOfFile = $_FILES[$elementName]['size'];
    $TypeOfFile = $_FILES[$elementName]['type'];
    $TempFile = $_FILES[$elementName]['tmp_name'];

    if (empty($NameOfFile)) {//if()
        $_SESSION['picture'] = "<img src='/avatars/avatar.jpg' />";
    } else {
        $maxFileSize = 1024 * 1024 * 5;
        if ($SizeOfFile > $maxFileSize) {
            $errors[] = "Please make sure that the file is less than 5MB";
            //return false;
        } else {
            $TypeOfFileSearch = array("image/jpeg", "image/png", "image/bmp");

            if (in_array($TypeOfFile, $TypeOfFileSearch)) {
                $destination = "avatars/" . $_SESSION['firstName'];
                if (move_uploaded_file($TempFile, $destination)) {

                    $_SESSION['picture'] = "<img src='$destination' />";
                    //header("location:final.php");
                } else {
                    $errors[] = "problem moving the file";
                    //return false;
                }
            } else {
                $errors[] = "only images of type PNG, JPG, JPEG and BMP are allowed";
                // return false;
            }
        }
    }
}
