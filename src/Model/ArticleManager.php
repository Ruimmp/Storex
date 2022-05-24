<?php
/**
 * @file      ArticleManager.php
 * @brief     This model is designed to implements articles business logic
 * @author    Created by Monteiro.Rui
 * @version   17.05.2022
 */

/**
 * This function is designed to get all active snows
 * @return array : containing all information about snows. Array can be empty.
 */
function getArticles()
{
    require_once 'model/dbConnector.php';
    $articlesQuery = 'SELECT ID, Name, Price, Description, Image, user_ID FROM storex.articles';

    return executeQuerySelect($articlesQuery);
}

function addNewArticle($name, $price, $description, $image)
{
    $result = false;

    $strSeparator = '\'';

    $addArticleQuery = 'INSERT INTO storex.articles (`Name`, `Price`,`Description`, `Image`,`user_ID`) VALUES (' . $strSeparator . $name . $strSeparator . ',' . $strSeparator . $price . $strSeparator . ',' . $strSeparator . $description . $strSeparator . ',' . $strSeparator . $image . $strSeparator . ',' . $strSeparator . '1' . $strSeparator . ')';

    require_once 'model/dbConnector.php';
    $queryResult = executeQueryInsert($addArticleQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}