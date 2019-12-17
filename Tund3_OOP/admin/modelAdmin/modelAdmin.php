<?php

class modelAdmin
{
    public static function userAuth() {
        if(isset($_SESSION['userID'])){
            $logIn=true;
        }else{
            $logIn = false;
        }
    }
}