<?php
/**
 * @file        FormRegister.php
 * @brief       This view is designed to display the register form
 * @author      Created by Monteiro.Rui
 * @version     12.04.2022
 */

$title = "Storex | Register";
ob_start();
?>
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Créez un compte</h2>
                    <form method="POST" class="register-form" id="register-form" action="index.php?action=UserRegister">

                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input
                                    type="text"
                                    name="UserLastName"
                                    id="UserLastName"
                                    placeholder="Entrez votre prénom"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="FirstName"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input
                                    type="text"
                                    name="UserFirstName"
                                    id="UserFirstName"
                                    placeholder="Entrez votre nom"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input
                                    type="email"
                                    name="UserEmail"
                                    id="UserEmail"
                                    placeholder="Entrez votre addresse mail"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="PhoneNumber"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                            <input
                                    type="tel"
                                    name="UserPhoneNumber"
                                    id="UserPhoneNumber"
                                    data-pattern="+41 ** *** ** **"
                                    data-prefix="+41 "
                                    placeholder="Entrez votre numéro de téléphone"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input
                                    type="password"
                                    name="UserPassword"
                                    id="UserPassword"
                                    placeholder="Entrez votre mot de passe"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="re-PasswordRepeat"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input
                                    type="password"
                                    name="UserPasswordRepeat"
                                    id="UserPasswordRepeat"
                                    placeholder="Répétez votre mot de passe"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="agree-term" class="label-agree-term">
                                <span>
                                    <span>
                                    </span>
                                </span>
                                Vous avez déjà un compte? <a href="index.php?action=UserLogin" class="term-service">Connectez-vous!</a>
                            </label>
                            <label for="agree-term" class="label-agree-term">
                                <?php if (@$_GET['registerError'] == true) : ?>
                                    <span style="color:red">Inscription refusée</span>
                                <?php endif ?>
                                <?php if (@$_GET['registerComplete'] == true) : ?>
                                    <span style="color:red">Inscription terminée</span>
                                <?php endif ?>
                                <?php if (@$_GET['registerNotFinished'] == true) : ?>
                                    <b><span style="color:red">Erreur Inscription</span></b>
                                <?php endif ?>
                            </label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img class="imgregister" src="../Assets/img/Register.png" alt="Logo du site"></figure>
                </div>
            </div>
        </div>
    </section>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>