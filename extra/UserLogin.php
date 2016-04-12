<?php

/**
 * Created by PhpStorm.
 * User: Dipak
 * Date: 4/11/2016
 * Time: 3:17 PM
 */
include_once("Connection.php");

class UserLogin{

    public function LogIn($uname,$pass){
        if(!empty($uname) && !empty($pass))
        {
            $stmt=$this->db->prepare("SELECT * FROM users WHERE uname=? AND pass=? ");
            $stmt->bindParam(1,$uname);
            $stmt->bindParam(2,$pass);
            $stmt->execute();

            if($stmt -> rowCount() == 1)
            {
                echo "Login Successfully...";
            }
            else
            {
                echo "Incorrect username and password...";
            }
        }
        else
        {
            echo "Please enter username and password";
        }
    }
}