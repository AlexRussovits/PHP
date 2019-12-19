<?php

class modelAdmin
{
    public static function userAuth() {
        if(isset($_SESSION['userID'])){
            $logIn=true;
        }else{
            $logIn = false;
            if(isset($_POST['btnLogin'])) {
                if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != "" && !empty($POST['password'])){
                    $email =filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
                    $password = $_POST['password'];
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $db = new Database();
                    $item = $db-getOne($sql);
                    if ($item) {
                        if (password_verify($password,$item['password'])) {
                            $_SESSION['userID'] = $item['id'];
                            $_SESSION['username'] = $item['username'];
                            $_SESSION['status'] = $item['status'];

                            $_SESSION['session_id'] = session_id();
                            $logIn=true;
                        }
                    }
                }
            }
        }
        return $logIn;
    }

    public static function userLogout() {
        unset($_SESSION['userID']);
        unset($_SESSION['username']);
        unset($_SESSION['status']);
        unset($_SESSION['session_id']);
        session_destroy();
        return ;
    }
}