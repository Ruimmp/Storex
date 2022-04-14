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
    require "./view/PageHome.php";
}
function UserProfile()
{
    require "./view/UserProfile.php";
}

function displayArticle()
{
    require "./view/annonce.php";
}