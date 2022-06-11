<?php
/**
 * @file      NavigationController.php
 * @brief     This controller is designed to manage all navigation aspect (view controller view)
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

/**
 * @brief This function is designed to redirect the user to the home page (depending on the action received by the index)
 */
function home()
{
    require_once "./controller/ArticlesController.php";
    require "./view/PageHome.php";
}

function Lost()
{
    require "./view/PageLost.php";
}

function ManagerArticles()
{
    require "./view/PageArticlesAdmin.php";
}

function displayMyArticles()
{
    require "./view/PageMyArticles.php";
}