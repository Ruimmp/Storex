<?php
/**
 * @file      users.php
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

function UserRegister()
{
    require "view/FormRegister.php";
}