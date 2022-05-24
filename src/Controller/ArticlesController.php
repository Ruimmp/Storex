<?php
/**
 * @file      ArticlesController.php
 * @brief     This controller is designed to manage all articles actions
 * @author    Created by Monteiro.Rui
 * @version   17.05.2022
 */


function displayArticles()
{
    require_once 'model/dbConnector.php';
    $articlesQuery = 'SELECT ID, Name, Price, Description, Image, user_ID FROM storex.articles';

    return executeQuerySelect($articlesQuery);
    require_once "model/ArticleManager.php";
    return getArticles();
}

function addArticle($addArticleRequest)
{
    if (isset($addArticleRequest['articleName']) && isset($addArticleRequest['articlePrice']) && isset($addArticleRequest['articleDescription']) && isset($addArticleRequest['articleImage'])) {

        //extract parameters
        $name = $addArticleRequest['articleName'];
        $price = $addArticleRequest['articlePrice'];
        $description = $addArticleRequest['articleDescription'];
        $image = $addArticleRequest['articleImage'];

        require_once "model/articleManager.php";
        if (addNewArticle($name, $price, $image, $description)) {
            $_GET['action'] = "addSuccess";
            $articlesResults = getArticles();
            require "view/PageMyArticles.php";
        } else {
            $_GET['addArticleError'] = true;
            require "view/FormArticleAdd.php";
        }
    } else {
        require "view/FormArticleAdd.php";
    }
}