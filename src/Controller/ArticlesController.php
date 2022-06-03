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

function addArticle($addArticleRequest){
    echo 'addArticle';

    if (isset($addArticleRequest['articleName']) &&
        isset($addArticleRequest['articlePrice']) &&
        isset($addArticleRequest['articleDescription'])
        //&& isset($addArticleRequest['articleImage'])
    ) {
        echo 'ici';
        $name = $addArticleRequest['articleName'];
        $price = $addArticleRequest['articlePrice'];
        $description = $addArticleRequest['articleDescription'];
        //$image = $addArticleRequest['articleImage'];


        require_once "model/ArticleManager.php";
        if (addNewArticle($name, $price, $description)){
            $_GET['action'] = "addSuccess";
            $snowsResults = getArticles();
            require "view/PageHome.php";
        }else{
            $_GET['addArticleError'] = true;
            require "view/formArticleAdd.php";
        }
    }else{
        require "view/formArticleAdd.php";
    }
}