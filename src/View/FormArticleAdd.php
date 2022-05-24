<?php
/**
 * @file        FormArticleAdd.php
 * @brief       This view is designed to display the add article form
 * @author      Created by Monteiro.Rui
 * @version     14.04.2022
 */

$title = "Article Storex";
ob_start();
?>

    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Ajoutez un article</h2>
                    <form method="POST" action="index.php?action=createArticle" class="register-form"
                          id="register-form">

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input
                                    type="text"
                                    name="articleName"
                                    id="articleName"
                                    placeholder="Entrez le nom de l'article*"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input
                                    type="text"
                                    name="articlePrice"
                                    id="articlePrice"
                                    placeholder="Entrez le prix de l'article*"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input
                                    type="text"
                                    name="articleDescription"
                                    id="articleDescription"
                                    placeholder="Entrez la descritpion de l'article"
                            />
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input
                                    type="file"
                                    name="articleImage"
                                    id="articleImage"
                                    accept="image/*"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="agree-term" class="label-agree-term">
                                <span>
                                </span>
                            </label>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Ajouter"/>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>