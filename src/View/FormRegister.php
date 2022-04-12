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

    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Créez un compte</h2>
                    <form method="POST" class="register-form" id="register-form">

                        <div class="form-group">
                            <label for="FirstName"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input
                                    type="text"
                                    name="LastName"
                                    id="UserLastName"
                                    placeholder="Entrez votre nom"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="LastName"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input
                                    type="text"
                                    name="FirstName"
                                    id="UserFirstName"
                                    placeholder="Entrez votre prénom"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input
                                    type="email"
                                    name="email"
                                    id="UserEmail"
                                    placeholder="Entrez une addresse mail"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="PhoneNumber"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input
                                    type="tel"
                                    name="PhoneNumber"
                                    id="UserPhoneNumber"
                                    data-pattern="+** ** *** ** **"
                                    data-prefix="+41 "
                                    placeholder="Entrez votre numéro de téléphone"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input
                                    type="password"
                                    name="password"
                                    id="UserPassword"
                                    placeholder="Entrez votre mot de passe"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input
                                    type="password"
                                    name="re_pass"
                                    id="re_pass"
                                    placeholder="Répétez votre mot de passe"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="agree-term" class="label-agree-term">
                                <span>
                                    <span>
                                    </span>
                                </span>
                                Vous avez déjà un compte <a href="index.php?action=login" class="term-service">Connectez-vous!</a>
                            </label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!--
        <div class="container-fluid tm-mt-60">
            <div class="row tm-mb-50">
                <div class="col-lg-4 col-12 mb-5">
                    <h2 class="tm-text-primary mb-5">Création du compte</h2>
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
    -->

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>