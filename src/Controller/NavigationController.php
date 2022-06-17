<?php
/**
 * @file      NavigationController.php
 * @brief     This controller is designed to manage all navigation aspect (view controller view)
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

/**
 * @brief Those functions are designed to redirect the user to the home page (depending on the action received by the index)
 */

function Accueil()
{
    require_once "./Controller/AnnouncesController.php";
    require "./View/PageAccueil.php";
}

function Lost()
{
    require "./View/PageLost.php";
}

function AdminPanel()
{
    require "./View/PageAdmin.php";
}

function ManagerAnnounces()
{
    require "./View/PageAnnouncesAdmin.php";
}

function ManagerUsers()
{
    require "./View/PageUsersAdmin.php";
}

function DisplayMyAnnounce()
{
    require "./View/PageMyAnnounces.php";
}