<?php
/**
 * @file        PageHome.php
 * @brief       This view is designed to display the home page
 * @author      Created by Monteiro.Rui
 * @version     12.04.2022
 */

$title = "Accueil Storex";
ob_start();
$rows=0; // Column count
?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
         data-image-src="Assets/img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="tm-search-input" type="search" placeholder="Cherchez ici" aria-label="Search">
            <button class="btn tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <article>
        <header>

            <div class="yox-view">

                <?php foreach ($articlesResults as $result ) : ?>
                    <?php $rows++; ?>
                    <?php if ($rows%4) : // tests to have 4 items / line ?>
                        <div class="row-fluid">
                        <ul class="thumbnails">
                        <?php $rows=0;?>
                    <?php endif ?>

                    <li class="span3">
                        <div class="thumbnail">
                            <img src="<?= $result['Image']; ?>" alt="<?= $result['Name']; ?>">
                            <div class="caption">
                                <h2><?= $result['Name']; ?></h2>
                                <h3><?= $result['Price']; ?></h3>
                                <p><?= $result['Description']; ?></p>
                            </div>
                        </div>
                    </li>

                    <?php if ($rows%4) :?>
                        </ul>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>

            </div>
        </header>
    </article>
    <hr/>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>