<?php
/**
 * @file        FormAnnouncesAdd.php
 * @brief       This view is designed to display the add annonce form
 * @author      Created by Monteiro.Rui
 * @version     14.04.2022
 */

$title = "Storex | Création d'annonce";
ob_start();
?>

    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Ajoutez une annonce</h2>
                    <form class="register-form" method="POST" action="index.php?action=AddAnnounce" enctype="multipart/form-data">


                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-tag"></i></label>
                            <input
                                    type="text"
                                    name="AnnounceName"
                                    id="AnnounceName"
                                    placeholder="Entrez le nom de l'annonce*"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-shopping-basket"></i></label>
                            <input
                                    type="text"
                                    name="AnnouncePrice"
                                    id="AnnouncePrice"
                                    placeholder="Entrez le prix de l'annonce*"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-format-subject"></i></label>
                            <input
                                    type="text"
                                    name="AnnounceDescription"
                                    id="AnnounceDescription"
                                    placeholder="Entrez la descritpion de l'annonce"
                            />
                        </div>

                        <div class="form-group">
                            <div class="upload-btn-wrapper">
                                <button class="btn">Choisir une image</button>
                                <input type="file"
                                       name="AnnounceImage"
                                       id="AnnounceImage"
                                       required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="agree-term" class="label-agree-term">
                                <?php if (@$_GET['RegisterAnnounceError']) :?>
                                    <h5><span style="color:red">Une erreur est sur-venue</span></h5>
                                <?php endif ?>

                                <?php if (@$_GET['RegisterAnnonceNameError']) :?>
                                    <h5><span style="color:red">Le nom de l'annonce est trop long</span></h5>
                                <?php endif ?>

                                <?php if (@$_GET['RegisterAnnoncePriceError']) :?>
                                    <h5><span style="color:red">Le prix de l'annonce est trop long</span></h5>
                                <?php endif ?>

                                <?php if (@$_GET['RegisterAnnonceDescriptionError']) :?>
                                    <h5><span style="color:red">La description de l'annonce est trop long</span></h5>
                                <?php endif ?>
                            </label>
                        </div>

                        <div class="form-group">
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