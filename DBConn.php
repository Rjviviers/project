<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConn
 *
 * @author Ruan
 */
class DBConn {
    private $host ,$user,$pass,$db,$link;
    function __construct($host, $user, $pass, $db) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
    }

    
    function Connect(){
        $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$this->link){
            die('not conected');
        }
    }
    
    function insert($name,$firstname,$surname,$idnum,$contactnum,$email,$courseunit,$term,$courseid,$pass){
        $StudID = time()-1400000 + $_SESSION['name'];
        $query1 = "INSERT INTO `studentdetails` (`SID`, `StudentID`, `FirstName`, `LastName`, `IDNumber`, `ContactNumber`, `Email`) VALUES (NULL, '$StudID', '$firstname', '$surname', '$idnum', '$contactnum', '$email');";
        $query2 = "INSERT INTO `coursedetails` (`ID`, `CourseUnit`, `CourseTerm`, `CourseID`, `StudentID`) VALUES (NULL, '$courseunit', '$term', '$courseid', '$StudID');";
        $query3 = "INSERT INTO `logindetails` (`Username`, `Password`, `StudentID`) VALUES ('$email', '$pass', '$StudID');";
        mysqli_query($this->link, $query1);
        mysqli_query($this->link, $query2);
        mysqli_query($this->link, $query3);
        
    }
    
    
}
$DB  = new DBConn('localhost','user',1234,'student_db');
$DB->Connect();
