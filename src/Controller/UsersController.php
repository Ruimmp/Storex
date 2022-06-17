<?php
/**
 * @file      UsersController.php
 * @brief     This controller is designed to manage all users actions
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

/**
 * @brief Cette fonction sert à créér une nouvelle session
 */
function CreateSession($UserEmail)
{
    $_SESSION['UserEmail'] = $UserEmail;
    $userType = GetUserTypeFromEmail($UserEmail);
    $_SESSION['usertype_ID'] = $userType;
}

/**
 * @brief Cette function sert à enregistrer un nouvel utilisateur dans la base de données
 */
function UserRegister($RegisterNewUserRequest)
{
    if (
        isset($RegisterNewUserRequest['UserFirstName']) &&
        isset($RegisterNewUserRequest['UserLastName']) &&
        isset($RegisterNewUserRequest['UserEmail']) &&
        isset($RegisterNewUserRequest['UserPhoneNumber']) &&
        isset($RegisterNewUserRequest['UserPassword']) &&
        isset($RegisterNewUserRequest['UserPasswordRepeat'])
    ) {
        //extract register parameters
        $UserEmail = $RegisterNewUserRequest['UserEmail'];
        //E-mail user set to lowercase
        $UserEmail = strtolower($UserEmail);

        $UserFirstName = $RegisterNewUserRequest['UserFirstName'];
        $UserLastName = $RegisterNewUserRequest['UserLastName'];
        $UserPhoneNumber = $RegisterNewUserRequest['UserPhoneNumber'];
        $UserPassword = $RegisterNewUserRequest['UserPassword'];
        $UserPasswordRepeat = $RegisterNewUserRequest['UserPasswordRepeat'];

        if ($UserPassword == $UserPasswordRepeat) {
            require_once "Model/UsersManager.php";
            if (RegisterNewUserAccount($UserFirstName, $UserLastName, $UserEmail, $UserPhoneNumber, $UserPassword)) {
                CreateSession($UserEmail);
                $_GET['registerError'] = false;
                $_GET['registerComplete'] = false;
                $_GET['registerNotFinished'] = false;
                $_GET['action'] = "home";
                require "View/PageAccueil.php";
            } else {
                $_GET['registerNotFinished'] = false;
                $_GET['registerComplete'] = false;
                $_GET['registerError'] = true;
                $_GET['action'] = "register";
                require "View/FormRegister.php";
            }
        } else {
            $_GET['registerNotFinished'] = false;
            $_GET['registerComplete'] = false;
            $_GET['registerError'] = false;
            $_GET['action'] = "register";
            require "View/FormRegister.php";
        }
    } else {
        $_GET['registerNotFinished'] = false;
        $_GET['registerComplete'] = false;
        $_GET['registerError'] = false;
        $_GET['action'] = "register";
        require "View/FormRegister.php";
    }
}

/**
 * @brief Cette fonction set à connecter un utilisateur
 */
function UserLogin($LoginUserRequest)
{
    if (
        isset($LoginUserRequest['UserEmail']) &&
        isset($LoginUserRequest['UserPassword'])
    ) {
        $UserEmail = $LoginUserRequest['UserEmail'];
        $UserPassword = $LoginUserRequest['UserPassword'];

        require_once "Model/UsersManager.php";
        if (IsUserLoginCorrect($UserEmail, $UserPassword)) {
            CreateSession($UserEmail);
            $_GET['loginError'] = false;
            $_GET['action'] = "home";
            require "View/PageAccueil.php";
        } else {
            $_GET['loginError'] = true;
            $_GET['action'] = "login";
            require "View/FormLogin.php";
        }
    } else {
        $_GET['action'] = "login";
        require "View/FormLogin.php";
    }
}

/**
 * @brief Cette fonction sert à déconnecter l'utilisateur
 */
function UserLogout()
{
    $_SESSION = array();
    session_destroy();
    require "View/PageAccueil.php";
}

function DisplayAdminUsers(): ?array
{
    require_once "Model/UsersManager.php";
    return GetUsers();
}