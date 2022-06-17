<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

session_start();
require "Controller/NavigationController.php";

require "Controller/UsersController.php";
require "Controller/AnnouncesController.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        /* Utilisateurs */
        case 'UserRegister' :
            UserRegister($_POST);
            break;
        case 'UserLogin' :
            UserLogin($_POST);
            break;
        case 'UserLogout':
            UserLogout();
            break;

        /* Announces */
        case 'AddAnnounce' :
            AddAnnounce($_POST);
            break;
        case 'DisplayAnnounce' :
            DisplayAnnounce();
            break;
        case 'DetailsAnnounce':
            DetailsAnnounce($_GET['ID']);
            break;
        case 'DeleteAnnounce' :
            DeleteAnnounce($_GET['ID']);
            break;
        case 'ModifyAnnounce' :
            ModifyAnnounce($_GET['ID']);
            break;
        case 'DisplayMyAnnounce' :
            DisplayMyAnnounce();
            break;

        /* navigations*/
        case 'Accueil' :
            Accueil();
            break;
        case 'Lost' :
            Lost();
            break;
        case 'FormContact':
            FormContact($_GET['ID']);
            break;

        /* Admin */
        case 'AdminPanel' :
            AdminPanel();
            break;
        case 'ManagerAnnounces' :
            ManagerAnnounces();
            break;
        case 'ManagerUsers' :
            ManagerUsers();
            break;

        /* Others */
        default :
            Accueil();
    }
} else {
    Accueil();
}