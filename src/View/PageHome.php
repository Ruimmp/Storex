<?php
/**
 * @file        PageHome.php
 * @brief       This view is designed to display the home page
 * @author      Created by Monteiro.Rui
 * @version     12.04.2022
 */

$title = "Accueil Storex";
ob_start();
?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
         data-image-src="Assets/img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="tm-search-input" type="search" placeholder="Cherchez ici" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>


    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">Catégories</h2>
        </div>

        <div class="row tm-gallery">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <figure class="effect-ming tm-video-item">
                    <img src="Assets/img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Femmes</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <figure class="effect-ming tm-video-item">
                    <img src="Assets/img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Hommes</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <figure class="effect-ming tm-video-item">
                    <img src="Assets/img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Enfants</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <figure class="effect-ming tm-video-item">
                    <img src="Assets/img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Accessoires</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>


    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">Utilisateurs</h2>
        </div>

        <div class="row tm-gallery">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <figure class="effect-ming tm-video-item">
                    <img src="Assets/img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Femmes</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <figure class="effect-ming tm-video-item">
                    <img src="Assets/img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Hommes</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <figure class="effect-ming tm-video-item">
                    <img src="Assets/img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Enfants</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <figure class="effect-ming tm-video-item">
                    <img src="Assets/img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Accessoires</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>