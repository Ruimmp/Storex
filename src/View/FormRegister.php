<?php
/**
 * @file        register.php
 * @brief       This view is designed to display the register form
 * @author      Created by Pascal.BENZONANA
 * @author      Updated by Nicolas.GLASSEY
 * @author      Updated by Monteiro.Rui
 * @version     31.03.2022
 */

$title = 'Anubis - Login/Logout';
ob_start();
?>

    <!DOCTYPE html>
    <html lang="fr">

<head>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
          crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="Assets/styles/FormRegister.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

<form action="index.php?action=register" method="post" id="registerForm">
    <div class="container">

        <div class="legend">
            <legend class="legend">INSCRIPTION</legend>
        </div>

        <div class="form-body">
            <div class="middle1">
                <label for="userFirstName" class="label">Prénom</label>
                <input type="userFirstName" class="write_box" name="inputUserFirstName" id="inputUserFirstName"
                       placeholder="Entrez votre prénom"/>
            </div>

            <div class="middle">
                <label for="userLastName" class="label">Nom</label>
                <input type="userLastName" class="write_box" name="inputUserLastName" id="inputUserLastName"
                       placeholder="Entrez votre nom de famille"/>
            </div>

            <div class="middle">
                <label for="email" class="label">E-mail</label>
                <input type="email" class="write_box" name="inputUserEmailAddress" id="inputUserEmailAddress"
                       placeholder="user@exemple.com"/>
            </div>

            <div class="middle">
                <label for="userPsw" class="label">Mot de passe</label>
                <input type="password" class="write_box" name="inputUserPsw" id="inputUserPsw"
                       placeholder="***************"/>
            </div>

            <div class="middle">
                <label for="psw-repeat" class="label">Confirmation</label>
                <input type="password" class="write_box" name="inputUserPswRepeat" id="inputUserPswRepeat"
                       placeholder="***************"/>
            </div>

            <div class="middle">
                <?php if ($registerErrorMessage = 'Création de compte refusée!' != null) : ?>
                    <span class="register-error"><?= $registerErrorMessage; ?></span>
                <?php endif ?>
            </div>

            <input type="submit" id="inscrire" class="btn" value="S'ENREGISTRER">

        </div>

    </div>
</form>
</body>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>