<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

session_start();
require "controller/NavigationController.php";

require "controller/UsersController.php";
require "controller/ArticlesController.php";

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

        /* Articles */
        case 'addArticle' :
            addArticle($_POST);
            break;
        case 'displayArticles' :
            displayArticles();
            break;
        case 'displayMyArticles' :
            displayMyArticles();
            break;
        case 'deleteArticle' :
            deleteArticle($_GET['ID']);
            break;
        case 'modifyArticle' :
            modifyArticle($_GET['ID']);
            break;
        case 'PageArticleDetails':
            PageArticleDetails();
            break;


        /* navigations*/
        case 'lost' :
            Lost();
            break;

        /* Admin */
        case 'AdminPanel' :
            AdminPanel();
            break;
        case 'ManagerArticles' :
            ManagerArticles();
            break;
        case 'ManagerUsers' :
            ManagerUsers();
            break;

        /* Others */
        default :
            home();
    }
} else {
    home();
}