<?php
/**
 * @file      UsersController.php
 * @brief     This controller is designed to manage all users actions
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

/**
 * Cette function sert à enregistrer un nouvel utilisateur dans la base de données
 * @param $registerRequest
 */
function UserRegister($registerRequest)
{
    if (
        isset($registerRequest['UserFirstName']) &&
        isset($registerRequest['UserLastName']) &&
        isset($registerRequest['UserEmail']) &&
        isset($registerRequest['UserPhoneNumber']) &&
        isset($registerRequest['UserPassword']) &&
        isset($registerRequest['UserPasswordRepeat'])
    ) {
        //extract register parameters
        $UserEmail = $registerRequest['UserEmail'];
        //E-mail user set to lowercase
        $UserEmail = strtolower($UserEmail);

        $UserFirstName = $registerRequest['UserFirstName'];
        $UserLastName = $registerRequest['UserLastName'];
        $UserPhoneNumber = $registerRequest['UserPhoneNumber'];
        $UserPassword = $registerRequest['UserPassword'];
        $UserPasswordRepeat = $registerRequest['UserPasswordRepeat'];

        if ($UserPassword == $UserPasswordRepeat) {
            require_once "model/UsersManager.php";
            if (registerNewAccount($UserFirstName, $UserLastName, $UserEmail, $UserPhoneNumber, $UserPassword)) {
                createSession($UserEmail);
                $_GET['registerError'] = false;
                $_GET['registerComplete'] = false;
                $_GET['registerNotFinished'] = false;
                $_GET['action'] = "home";
                require "view/PageHome.php";
            } else {
                $_GET['registerNotFinished'] = false;
                $_GET['registerComplete'] = false;
                $_GET['registerError'] = true;
                $_GET['action'] = "register";
                require "view/FormRegister.php";
            }
        } else {
            $_GET['registerNotFinished'] = false;
            $_GET['registerComplete'] = false;
            $_GET['registerError'] = false;
            $_GET['action'] = "register";
            require "view/FormRegister.php";
        }
    } else {
        $_GET['registerNotFinished'] = false;
        $_GET['registerComplete'] = false;
        $_GET['registerError'] = false;
        $_GET['action'] = "register";
        require "view/FormRegister.php";
    }
}

/**
 * This function is designed to create a new user session
 * @param $UserEmail : user unique id
 */
function createSession($UserEmail)
{
    $_SESSION['UserEmail'] = $UserEmail;
    //set user type in Session
    $userType = getUserType($UserEmail);
    $_SESSION['usertype_ID'] = $userType;
}

//region users management
/**
 * This function is designed to manage login request
 * @param $loginRequest containing login fields required to authenticate the user
 */
function UserLogin($loginRequest){
    //if a login request was submitted
    if (isset($loginRequest['UserEmail']) && isset($loginRequest['UserPassword'])) {
        //extract login parameters
        $UserEmail = $loginRequest['UserEmail'];
        $UserPassword = $loginRequest['UserPassword'];

        //try to check if user/psw are matching with the database
        require_once "model/UsersManager.php";
        if (isLoginCorrect($UserEmail, $UserPassword)) {
            createSession($UserEmail);
            echo 'loginerror false';
            $_GET['loginError'] = false;
            $_GET['action'] = "home";
            require "view/PageHome.php";
        } else { //if the user/psw does not match, login form appears again
            echo 'loginerror true';
            $_GET['loginError'] = true;
            $_GET['action'] = "login";
            require "view/FormLogin.php";
        }
    }else{ //the user does not yet fill the form
        echo 'loginerror autre';
        $_GET['action'] = "login";
        require "view/FormLogin.php";
    }
}

/**
 * @brief Cette fonction sert à déconnecter l'utilisateur
 */
function UserLogout()
{
    $_SESSION = array();
    session_destroy();
    require "view/PageHome.php";
}