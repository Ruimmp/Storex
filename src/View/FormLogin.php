<?php
/**
 * @file        FormLogin.php
 * @brief       This view is designed to display the login form
 * @author      Created by Monteiro.Rui
 * @version     13.04.2022
 */

$title = "Storex | Login";
ob_start();
?>
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Connectez vous</h2>
                    <form method="POST" class="register-form" id="register-form" action="index.php?action=UserLogin">

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
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input
                                    type="password"
                                    name="UserPassword"
                                    id="UserPassword"
                                    placeholder="Entrez votre mot de passe"
                                    required/>
                        </div>

                        <div class="form-group">
                            <label for="agree-term" class="label-agree-term">
                                <span>
                                    <span>
                                    </span>
                                </span>
                                Vous n'avez pas de compte? <a href="index.php?action=UserRegister" class="term-service">Créez
                                    un!</a>
                            </label>
                            <label for="agree-term" class="label-agree-term">
                                <?php if (@$_GET['UserLoginError'] == true) : ?>
                                    <span style="color:red">E-mail ou mot de passe incorrect!</span>
                                <?php endif ?>
                            </label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Login"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="../Assets/img/Login.png" alt="Logo du site"></figure>
                </div>


            </div>
        </div>
    </section>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>