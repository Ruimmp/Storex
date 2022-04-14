<?php
/**
 * @file        PageUserProfile.php
 * @brief       This view is designed to display the user profile
 * @author      Created by Monteiro.Rui
 * @version     14.04.2022
 */

$title = "Profile Storex";
ob_start();
?>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>