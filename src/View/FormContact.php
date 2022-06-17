<?php
/**
 * @file        FormContact.php
 * @brief       This view is designed to display the contact to a user
 * @author      Created by Pereira.Nuno
 * @version     14.06.2022
 */

$title = "Storex | Formulaire de contact";
ob_start();
?>

    <section class="signup">
        <div class="container">
            <?php foreach ($announcesResults as $result) : ?>
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Formulaire de contact</h2>
                        <form class="register-form" method="POST" action="index.php?action=FormContact">
                            <div class="form-group">
                                <label for="mailDescription"><i class="zmdi zmdi-format-subject"></i></label>
                                <input
                                        type="text"
                                        name="mailDescription"
                                        id="mailDescription"
                                        placeholder="Entrez le message à envoyer"
                                        required/>
                            </div>

                            <div class="form-group">
                                <div class="text-center mb-5 form-button btn-dtl">
                                    <a href="mailto:<?= $result['Email']; ?>?subject=Achat de l'annonce '<?= $result['Name']; ?>'"
                                       class="form-submit btn btn-primary tm-btn-big">Contacter
                                        l'annonceur</a>
                                </div>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>