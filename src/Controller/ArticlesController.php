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

<<<<<<< Updated upstream
function addArticle($addArticleRequest)
{
=======
function addArticle($addArticleRequest){

>>>>>>> Stashed changes

    if (isset($addArticleRequest['articleName']) &&
        isset($addArticleRequest['articlePrice']) &&
        isset($addArticleRequest['articleDescription'])
        && isset($addArticleRequest['articleImage'])
    ) {
        $name = $addArticleRequest['articleName'];
        $price = $addArticleRequest['articlePrice'];
        $description = $addArticleRequest['articleDescription'];
        $image = $addArticleRequest['articleImage'];



        require_once "model/ArticleManager.php";
<<<<<<< Updated upstream
        if (addNewArticle($name, $price, $description)) {
=======
        if (addNewArticle($name, $price, $description, $image)){
>>>>>>> Stashed changes
            $_GET['action'] = "addSuccess";
            $snowsResults = getArticles();
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
        $snowsResults = getArticles();
        require "view/PageHome.php";
    } else {
        $_GET['addArticleError'] = true;
        require "view/PageHome.php";
    }
}