<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

session_start();
require "controller/UsersController.php";
require "controller/NavigationController.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;

        /* Utilisateurs */
        case 'register' :
            UserRegister($_POST);
            break;
        case 'login':
            UserLogin($_POST);
            break;
        case 'logout' :
            UserLogout();
            break;
        case 'profile' :
            UserProfile();
            break;
        case 'editUser' :
            UserEditProfil();
            break;
        case 'editUserAdmin' :
            UserAdminEditProfil();
            break;


        /* Articles */
        case 'displayArticles' :
            displayArticles();
            break;


        /* navigations*/
        case 'lost' :
            Lost();
            break;

        /* Others */
        default :
            home();
    }
} else {
    home();
}