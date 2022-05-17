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
function getArticles(){
    $articlesQuery = 'SELECT ID, Name, Price, Description, Image, user_ID FROM storex.articles';

    require_once 'model/dbConnector.php';
    return executeQuerySelect($articlesQuery);
}