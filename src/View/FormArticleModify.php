<?php
/**
 * @file        FormArticleModify.php
 * @brief       This view is designed to display the edit article form
 * @author      Created by Monteiro.Rui
 * @version     12.06.2022
 */

$title = "Storex | Modification d'annonce";
ob_start();
?>



    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Connectez vous</h2>

                    <?php foreach ($announcesResults as $result) : ?>
                        <form method="POST" class="register-form" id="register-form"
                              action="index.php?action=modifyArticle">

                            <div class="form-group">
                                <label><i class="zmdi zmdi-code"></i></label>
                                <input
                                        type="text"
                                        name="articleName"
                                        id="articleName"
                                        value="<?= $result['Name']; ?>"
                                        disabled
                                        required/>
                            </div>
                        </form>

                    <?php endforeach ?>


                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Enregistrer"/>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>