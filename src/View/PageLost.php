<?php
/**
 * @file        PageLost.php
 * @brief       This view is designed to display the Lost page
 * @author      Created by Monteiro.Rui
 * @version     26.04.2022
 */

$title = "Error Storex";
ob_start();
?>;

    <link rel="stylesheet" href="Assets/styles/PageLost.css">

    <div class="mainbox">
        <div class="err">4</div>
        <i class="far fa-question-circle fa-spin"></i>
        <div class="err2">4</div>
        <div class="msg">Cette page a été bougée? <br>Vous l'avez été supprimée? <br>N'a jamais existé en premier lieu?<p>Retourner à l'<a href="index.php?action=home">accueil</a></p></div>
    </div>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>