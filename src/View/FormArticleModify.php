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



<?php foreach ($announcesResults as $result) : ?>

    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Modification d'annonce</h2>

                    <form method="POST" class="register-form tm-mb-40" id="register-form"
                          action="index.php?action=modifyArticle">

                        <div class="form-group">
                            <p><i class="zmdi zmdi-code"></i><span class="colorOr"> ID de l'annonce</span></p>

                            <input
                                    class="containerModify"
                                    type="text"
                                    name="announceID"
                                    id="announceID"
                                    value="<?= $result['ID']; ?>"
                                    disabled
                                    required/>
                        </div>

                        <div class="form-group">
                            <p><i class="zmdi zmdi-label"></i><span class="colorOr"> Nom de l'annonce</span></p>

                            <input
                                    class="containerModify"
                                    type="text"
                                    name="announceName"
                                    id="announceName"
                                    value="<?= $result['Name']; ?>"
                                    required/>
                        </div>

                        <div class="form-group">
                            <p><i class="zmdi zmdi-shopping-cart"></i><span class="colorOr"> Prix de l'annonce</span></p>
                            <input
                                    class="containerModify"
                                    type="text"
                                    name="announcePrice"
                                    id="announcePrice"
                                    value="<?= $result['Price']; ?>"
                                    required/>
                        </div>

                        <div class="form-group">
                            <p><i class="zmdi zmdi-image"></i><span class="colorOr"> Image de l'annonce</span></p>

                            <input
                                    class="containerModify"
                                    type="text"
                                    name="announceImage"
                                    id="announceImage"
                                    value="<?= $result['Image']; ?>"
                                    required/>
                        </div>

                        <div class="form-group">
                            <p><i class="zmdi zmdi-sort-amount-desc"></i><span class="colorOr"> Description de l'annonce</span></p>

                            <textarea
                                    rows="10"
                                    class="containerModifyTextarea"
                                    name="announceDescription"
                                    id="announceDescription"
                                    required>
                                <?= $result['Description']; ?>
                            </textarea>
                        </div>

                    </form>

                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit btn btn-primary tm-btn-big" value="Enregistrer"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endforeach ?>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>