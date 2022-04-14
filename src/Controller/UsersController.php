<?php
/**
 * @file      UsersController.php
 * @brief     This controller is designed to manage all users actions
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

function UserRegister1()
{
    try {
        if (
            isset($registerRequest['UserFirstName']) &&
            isset($registerRequest['UserLastName']) &&
            isset($registerRequest['UserEmail']) &&
            isset($registerRequest['UserPhoneNumber']) &&
            isset($registerRequest['UserPassword']) &&
            isset($registerRequest['UserPswRepeat'])
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
                require_once "model/usersManager.php";
                $registerResult = registerNewAccount($UserFirstName, $UserLastName, $UserEmail, $UserPhoneNumber, $UserPassword);
                if ($registerResult) {
                    createSession($UserEmail);
                    $registerErrorMessage = null;
                    home();
                } else if (!$registerResult) {
                    $registerErrorMessage = "Ce nom d'utilisateur est déjà utilisé!";
                    require "view/FormRegister.php";
                }
            } else {
                $registerErrorMessage = "Les mots de passe ne correspond pas!";
                require "view/FormRegister.php";
            }
        }
    } catch
    (error $ex) {
        $RegisterErrorMessage = "Nous sommes en maintenance, réessayez dans quelques minutes!";
        require "view/FormRegister.php";
    }
}

/**
 * @brief Cette function sert a enregistrer un utilisateur
 * @remark Toutes les données inscrites dans le formulaire, seront stockées dans la base de données
 * @param $UserRegisterRequest
 */
function UserRegister()
{
    require "view/FormRegister.php";
}

/**
 * @brief Cette function sert a connecter un utilisateur
 * @remark Elle vérifie les informations dans la base de données
 * @param $UserLoginRequest
 */
function UserLogin()
{
    require "view/FormLogin.php";
}

/**
 * @brief Cette fonction sert a déconnecter l'utilisateur
 */
function UserLogout()
{
    $_SESSION = array();
    session_destroy();
    require "view/PageHome.php";
}