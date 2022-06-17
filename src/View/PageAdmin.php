<?php
/**
 * @file        PageAdmin.php
 * @brief       This view is designed to display the home page
 * @author      Created by Monteiro.Rui
 * @version     11.06.2022
 */

$title = "Storex | Admin panel";
ob_start();
?>

    <div class="content">
        <div class="container">
            <h2 class="col-6 tm-text-primary">Panneau Admin</h2>
            <div class="table-responsive tm-mb-90">
                <div class="container-fluid tm-container-content tm-mt-60">
                    <div class="row tm-gallery">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 tm-mb-90">
                            <div class="card h-100">
                                <img class="card-img-top imgedit" src="../Assets/img/usermanager.jpg" alt=" "
                                     style="max-width:100%"/>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Utilisateurs</h5>
                                        <div class="form-group1 form-button">
                                            <a href="index.php?action=ManagerUsers">
                                                <input type="submit" class="form-submit btnDetails" value="Détails"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 tm-mb-90">
                            <div class="card h-100">
                                <img class="card-img-top" src="../Assets/img/annonce.jpg" alt=" "
                                     style="max-width:100%;height:100%"/>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Annonces</h5>
                                        <div class="form-group1 form-button">
                                            <a href="index.php?action=ManagerAnnounces">
                                                <input type="submit" class="form-submit" value="Détails"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
$content = ob_get_clean();
require 'gabarit.php';
?>