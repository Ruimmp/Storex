<?php
/**
 * @file        FormRegister.php
 * @brief       This view is designed to display the register form
 * @author      Created by Monteiro.Rui
 * @version     12.04.2022
 */

$title = "Register Storex";
ob_start();
?>

    <!-- HTML SECTION -->
    <!DOCTYPE html>
    <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? $title ?></title>
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/templatemo-style.css">
</head>


<body>
<div class="container-fluid tm-mt-60">
    <div class="row tm-mb-50">
        <div class="col-lg-4 col-12 mb-5">
            <h2 class="tm-text-primary mb-5">Enregistrement</h2>
            <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
                <div class="form-group">
                    <input
                            type="text"
                            id="UserFirstName"
                            name="FirstName"
                            class="form-control rounded-0"
                            placeholder="Nom d'utilisateur"
                            required/>
                </div>

                <div class="form-group">
                    <input
                            type="text"
                            id="UserLastName"
                            name="LastName"
                            class="form-control rounded-0"
                            placeholder="Nom de famille"
                            required/>
                </div>

                <div class="form-group">
                    <input
                            type="email"
                            name="email"
                            class="form-control rounded-0"
                            placeholder="Email"
                            required/>
                </div>

                <div class="form-group">
                    <input
                            type="tel"
                            id="UserPhoneNumber"
                            name="PhoneNumber"
                            class="form-control rounded-0"
                            data-pattern="+** ** *** ** **"
                            data-prefix="+41 "
                            placeholder="Número de téléphone"
                            required/>
                </div>

                <div class="form-group tm-text-right">
                    <button type="submit" class="btn btn-primary">S'enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>