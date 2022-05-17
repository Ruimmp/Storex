<?php
/**
 * @file      ArticlesController.php
 * @brief     This controller is designed to manage all articles actions
 * @author    Created by Monteiro.Rui
 * @version   17.05.2022
 */

/**
 * This function is designed to display Snows
 * There are two different view available.
 * One for the seller, an other one for the customer.
 */
function displayArticles()
{
    require_once "model/ArticleManager.php";
    $articlesResults = getArticles();

    $_GET['action'] = "displayArticles";
    if (isset($_SESSION['usertype_ID'])) {
        switch ($_SESSION['usertype_ID']) {
            case 1: //This is a CEO
                require "view/PageHome.php";
                break;
            case 2: //This is a CTO
                require "view/FormRegister.php";
                break;
            case 3: //This is a vendor
                require "view/FormLogin.php";
                break;
            default:
                require "view/PageHome.php";
                break;
        }
    } else {
        require "view/PageHome.php";
    }
}

?>