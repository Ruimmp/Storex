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
function getArticles(): array
{
    require_once 'model/dbConnector.php';
    $articlesQuery = 'SELECT ID, Name, Price, Description, Image, user_ID FROM storex.articles';

    return executeQuerySelect($articlesQuery);
}

function addNewArticle($name, $price, $description, $image): bool
{
    $result = false;
    $folder = "./Assets/img/articles/";
    $path_file_Image = $folder . $image;
    move_uploaded_file($_FILES[$image], $folder);

    $strSeparator = '\'';
    $addArticleQuery = 'INSERT INTO storex.articles (`Name`, `Price`,`Description`, `Image`, `user_ID`) VALUES (' . $strSeparator . $name . $strSeparator . ',' . $strSeparator . $price . $strSeparator . ',' . $strSeparator . $description . $strSeparator . ',' . $strSeparator . $path_file_Image . $strSeparator . ',' . $strSeparator . '1' . $strSeparator . ' )';

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($addArticleQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}
<<<<<<< Updated upstream

function deleteAArticle($ID)
{
    $result = false;

    $strSeparator = '\'';

    $deleteArticleQuery = 'DELETE FROM storex.articles WHERE (`Name`) LIKE (' . $strSeparator . $ID . $strSeparator . ')';

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($deleteArticleQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}
=======
>>>>>>> Stashed changes
