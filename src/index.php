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

/* Déclaration de constantes */
const TYPE_CEO = 1;
const TYPE_CTO = 2;
const TYPE_CLIENT = 3;

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'register' :
            UserRegister();
            break;
        case 'login':
            UserLogin();
            break;
        case 'logout' :
            UserLogout();
            break;
        case 'profile' :
            UserProfile();
            break;
        case 'myArticles' :
            DisplayMyArticles();
            break;
        case 'displayArticleDetails':
            DisplayArticleDetails($_GET['articleID']);
            break;
        case 'addArticle':
            AddArticle($_POST, $_FILES);
            break;
        case 'editArticle':
            EditArticle($_GET['articleID'], $_POST);
            break;
        case 'deleteArticle':
            DeleteArticle($_GET['articleID']);
            break;
        case 'contact' :
            ContactArticleUser();
            break;
        case 'sendEmail':
            SendEmail($_POST);
            break;
        default :
            home();
    }
} else {
    home();
}