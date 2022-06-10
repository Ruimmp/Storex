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
}

    function addArticle($addArticleRequest)
    {

        if (isset($addArticleRequest['articleName']) &&
            isset($addArticleRequest['articlePrice']) &&
            isset($addArticleRequest['articleDescription'])
        ) {
            $name = $addArticleRequest['articleName'];
            $price = $addArticleRequest['articlePrice'];
            $description = $addArticleRequest['articleDescription'];

            require_once "model/ArticleManager.php";


            if (addNewArticle($name, $price, $description)) {

                $_GET['action'] = "addSuccess";
                $articlesResults = getArticles();
                require "view/PageHome.php";
            } else {
                $_GET['addArticleError'] = true;
                require "view/PageHome.php";
            }
        } else {
            require "view/formArticleAdd.php";
        }
    }

    /**
     * @brief Fonction pour supprimer les annonces grace a son index
     */
    function deleteArticle($Name)
    {
        require_once "model/ArticleManager.php";
        if (deleteAArticle($Name)) {
            $_GET['action'] = "deleteSuccess";
            $articlesResults = getArticles();
            require "view/PageHome.php";
        } else {
            $_GET['addArticleError'] = true;
            require "view/PageHome.php";
        }
    }