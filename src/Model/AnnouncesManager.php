<?php
/**
 * @file      AnnouncesManager.php
 * @brief     This model is designed to implements announces business logic
 * @author    Created by Monteiro.Rui
 * @version   17.05.2022
 * @modif modified by Pereira.Nuno
 * @description downloads of images helped by Viret.Loic
 */

/**
 * @brief Cette fonction sert à récupérer toutes les annonces dans la base de données
 */
function GetAnnounces(): array
{
    require_once 'Model/DataBaseConnector.php';
    $AnnouncesQuery = 'SELECT announces.ID, announces.Name, announces.Description, announces.Price, announces.Image, users.LastName, users.Firstname, users.Email FROM storex.announces INNER JOIN storex.users ON announces.user_ID = users.ID;';
    return executeQuerySelect($AnnouncesQuery);
}

/**
 * @brief Cette fonction sert à récupérer les annonces dans la base de données grâce à son index
 */
function GetAnAnnounceFromID($ID): array
{
    $strSeparator = '\'';
    $AnnouncesQuery = 'SELECT announces.ID, announces.Name, announces.Price, announces.Description, announces.Image, announces.user_ID, users.Email FROM storex.announces INNER JOIN storex.users ON announces.user_ID = users.ID WHERE announces.ID =' . $strSeparator . $ID . $strSeparator;

    require_once 'Model/DataBaseConnector.php';
    return executeQuerySelect($AnnouncesQuery);
}

/**
 * @brief Cette fonction sert à enregistrer une nouvelle annonce dans la base de données
 */
function AddNewAnnounce($name, $price, $description): bool
{
    $result = false;
    $folder = "./Assets/img/announces/";
    $path_file_Image = $folder . $_FILES["AnnounceImage"]["name"];   // variable qui stock le chemin ou est stocké l'image
    $strSeparator = '\'';
    $AddAnnounceQuery = 'INSERT INTO storex.announces (`Name`, `Price`,`Description`, `Image`, `user_ID`) VALUES (' . $strSeparator . $name . $strSeparator . ',' . $strSeparator . $price . $strSeparator . ',' . $strSeparator . $description . $strSeparator . ',' . $strSeparator . $path_file_Image . $strSeparator . ',' . $strSeparator . '1' . $strSeparator . ' )';

    move_uploaded_file($_FILES["AnnounceImage"]["tmp_name"], $path_file_Image);  // stock l'image dans le chemin défini au-dessus

    require_once 'Model/DataBaseConnector.php';
    $queryResult = executeQuerySelect($AddAnnounceQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}

/**
 * @brief Cette fonction sert à effacer une nouvelle annonce dans la base de données grâce a son index
 */
function DeleteAnAnnounceFromID($ID)
{
    $result = false;
    $strSeparator = '\'';
    $DeleteAnnounceQuery = 'DELETE FROM storex.announces WHERE (announces.ID) LIKE (' . $strSeparator . $ID . $strSeparator . ')';

    require_once 'Model/DataBaseConnector.php';
    $queryResult = executeQuerySelect($DeleteAnnounceQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}