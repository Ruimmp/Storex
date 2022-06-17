<?php
/**
 * @file      ArticleManager.php
 * @brief     This model is designed to implements articles business logic
 * @author    Created by Monteiro.Rui
 * @version   17.05.2022
 * @modif modified by Pereira.Nuno
 * @description downloads of images helped by Viret.Loic
 */

/**
 * This function is designed to get all active snows
 */
function getArticles(): array
{
    require_once 'model/dbConnector.php';
    $articlesQuery = 'SELECT articles.ID, users.LastName, users.Firstname, users.Email, articles.Name, articles.Description, articles.Price, articles.Image FROM storex.articles INNER JOIN storex.users ON articles.user_ID = users.ID;';
    return executeQuerySelect($articlesQuery);
}

/**
 * This function is designed to get only one snow
 * @param $ID : snow code to display (selected by the user)
 */
function getAArticle($ID): array
{
    $strSeparator = '\'';

    $articlesQuery = 'SELECT articles.ID, articles.Name, articles.Price, articles.Description, articles.Image, articles.user_ID, users.Email FROM storex.articles INNER JOIN storex.users ON articles.user_ID = users.ID WHERE articles.ID =' . $strSeparator . $ID . $strSeparator;

    require_once 'model/dbConnector.php';
    return executeQuerySelect($articlesQuery);
}


function addNewArticle($name, $price, $description): bool
{
    $result = false;
    $folder = "./Assets/img/articles/";
    $path_file_Image = $folder . $_FILES["articleImage"]["name"];   // variable qui stock le chemin ou est stocké l'image
    $strSeparator = '\'';
    $addArticleQuery = 'INSERT INTO storex.articles (`Name`, `Price`,`Description`, `Image`, `user_ID`) VALUES (' . $strSeparator . $name . $strSeparator . ',' . $strSeparator . $price . $strSeparator . ',' . $strSeparator . $description . $strSeparator . ',' . $strSeparator . $path_file_Image . $strSeparator . ',' . $strSeparator . '1' . $strSeparator . ' )';

    move_uploaded_file($_FILES["articleImage"]["tmp_name"], $path_file_Image);  // stock l'image dans le chemin défini au dessus

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($addArticleQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}


function deleteAArticle($ID)
{
    $result = false;

    $strSeparator = '\'';

    $deleteArticleQuery = 'DELETE FROM storex.articles WHERE (`ID`) LIKE (' . $strSeparator . $ID . $strSeparator . ')';

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($deleteArticleQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}