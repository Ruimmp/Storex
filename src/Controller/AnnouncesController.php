<?php
/**
 * @file      AnnouncesController.php
 * @brief     This controller is designed to manage all announces actions
 * @author    Created by Monteiro.Rui
 * @version   17.05.2022
 */


/**
 * @brief Fonction pour ajouter afficher les annonces
 */
function DisplayAnnounce(): ?array
{
    require_once 'Model/DataBaseConnector.php';
    $AnnouncesQuery = 'SELECT ID, Name, Price, Description, Image, user_ID FROM storex.announces';

    return executeQuerySelect($AnnouncesQuery);
}

/**
 * @brief Fonction pour afficher les annonces dans la page ADMIN
 */
function DisplayAnnounces(): ?array
{
    require_once "Model/AnnouncesManager.php";
    return GetAnnounces();
}

/**
 * @brief Fonction pour ajouter des annonces
 */
function AddAnnounce($AddAnnounceRequest)
{
    if (isset($AddAnnounceRequest['AnnounceName']) &&
        isset($AddAnnounceRequest['AnnouncePrice']) &&
        isset($AddAnnounceRequest['AnnounceDescription'])
    ) {
        $name = $AddAnnounceRequest['AnnounceName'];
        $price = $AddAnnounceRequest['AnnouncePrice'];
        $description = $AddAnnounceRequest['AnnounceDescription'];

        require_once "Model/AnnouncesManager.php";

        if (AddNewAnnounce($name, $price, $description)) {
            $_GET['action'] = "addSuccess";
            $AnnouncesResults = GetAnnounces();
        } else {
            $_GET['RegisterAnnounceError'] = true;
        }
        require "View/PageAccueil.php";
    } else {
        require "View/FormAnnouncesAdd.php";
    }
}

/**
 * @brief Fonction pour supprimer les annonces grace a son index
 */
function DeleteAnnounce($ID)
{
    require_once "Model/AnnouncesManager.php";
    if (DeleteAnAnnounceFromID($ID)) {
        $_GET['action'] = "deleteSuccess";
        $AnnouncesResults = GetAnnounces();
    } else {
        $_GET['DeleteAnnounceError'] = true;
    }
    require "View/PageAnnouncesAdmin.php";
}

/**
 * @brief Fonction pour modifier une annonce grace a son index
 */
function ModifyAnnounce($ID)
{
    require_once "Model/AnnouncesManager.php";
    $announcesResults = GetAnAnnounceFromID($ID);
    require "View/FormAnnouncesModify.php";
}

/**
 * @brief Fonction pour afficher la page de détails d'une annonce grace a son index
 */
function DetailsAnnounce($ID)
{
    require_once "Model/AnnouncesManager.php";
    $announcesResults = GetAnAnnounceFromID($ID);
    require "View/PageAnnouncesDetails.php";
}

/**
 * @brief Fonction pour afficher le formulaire de contact grace a l'index de l'annonce
 */
function FormContact($ID)
{
    require_once "Model/AnnouncesManager.php";
    $announcesResults = GetAnAnnounceFromID($ID);
    require "View/FormContact.php";
}