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
    
    
    
}
$DB  = new DBConn('localhost','user',1234,'student_db');
$DB->Connect();
