<?php //session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function stickytext($ElementName)
            {
                if (isset($_POST['submit'])) {
                    if(!empty($_POST[$ElementName])){
                        echo  trim($_POST[$ElementName]);}
                    else{
                        echo  "";
                    }
                }
            }
            
    function stickyRadio($ElementName,$CheckedParam){
                    if (isset($_POST[$ElementName])) {
                        if ($_POST[$ElementName]== $CheckedParam) {
                            echo "Checked";
                        }
                        else{
                            echo "";
                        }
                    }
                }
                
  function ValidateTextFields($ElementName){
        if (isset($_POST['submit'])) {
            $value = trim($_POST[$ElementName]);
        switch ($ElementName) {
            
            case "firstName":
                 
                 if (!empty($value)) {
                 if (ctype_alpha($value)) {
                        $_SESSION[$ElementName] = $value;
                        return TRUE;
                    }
                    else
                    {
                        echo "Please fill in $ElementName... with only alphabet characters<br>";
                        return FALSE;
                    }
                }
                else
                {
                 echo "Please enter $ElementName...<br>"; 
                 return FALSE;
                }
            break;
            case "lastName":
                if (!empty($value)) {
                     if (ctype_alpha($value)) {
                            $_SESSION[$ElementName] = $value;
                            return TRUE;
                        }
                        else
                        {
                            echo "Please fill in $ElementName... with only alphabet characters<br>";
                            return FALSE;
                        }
                    }
                    else
                    {
                        echo "Please enter $ElementName...<br>";       
                        return FALSE;
                    }
            break;
            case "IDNumber":
                if (!empty($value)) {
                    if (ctype_digit($value)) {
                       $_SESSION[$ElementName] = $value;
                       return TRUE;
                    }
                    else
                    {
                        echo "Please fill in $ElementName... with only digets<br>";
                         return FALSE;
                    }
                }
                else{
                    echo "Please fill in the $ElementName field<br>";
                     return FALSE;
                }
            break;
            case "cellNumber":
                 if (!empty($value)) {
                    if (ctype_digit($value)) {
                       $_SESSION[$ElementName] = $value;
                       return TRUE;
                    }
                    else
                    {
                        echo "Please fill in $ElementName... with only digets<br>";
                        return FALSE;
                    }
                }
                else{
                    echo "Please fill in the $ElementName field<br>";
                    return FALSE;
                }
                break;
            default:
                break;
        }  
        }
        
    }
    
    function ValidateDropDown($ElementName){
        if (isset($_POST['ok'])) {
        $value = $_POST[$ElementName];
        if ($value == "-Select Option-") {
            echo "Please select an option in the $ElementName droptdown<br>";
        }
        else {
            echo "$ElementName  : $value<br>";
        }
        }
    }
    
    function ValidateRadio($ElementName){
        if(isset($_POST['ok'])){
            $value = $_POST[$ElementName];
            
            if(!empty($value)){
                echo "$ElementName : $value<br>";
            }
            else{
                echo "Please select the $ElementName fiel";
            }
        }
    }