<?php include "components/connection.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title>Releaf - Für Körper und Seele</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/jpg" href="img/icons/favicon.ico" />

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/small_page.js"></script>
    <script src="js/input_forms.js"></script>
    <script src="js/register.js"></script>
</head>

<body>
    <!--Navigation-->
    <div id="nav" class="sticky">
        <?php include "components/nav.php"; ?>
    </div>

    <!--Main Content-->
    <main id="registration">
        <div class="registration-wrapper">
            <form id="registration-login" class="contact-form">
                <h2>Registieren</h2>
                <p>
                    Zuerst brauchen wir von Dir ein paar Infos.
                </p>

                <!--Reverted input and label for adding styling to label depending on wether input is filled-->
                <div class="input-group">
                    <input type="text" id="username" name="username">
                    <label for="name">Nutzername</label>
                </div>
                <div class="input-group">
                    <input type="email" id="email" name="email">
                    <label for="email">E-Mail-Adresse</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password">
                    <label for="password">Passwort</label>
                </div>
                <div class="input-group">
                    <input type="confirm_password" id="confirm_password" name="confirm_password">
                    <label for="confirm_password">Passwort wiederholen</label>
                </div>
                <label class="checkbox-container">
                    <input type="checkbox">
                    <span class="box"></span>
                    <span>Ich habe die <a href="" title="Allgemeine Geschäftsbedingungen">AGB und den Datenschutz</a> gelesen und bin einverstanden. </span>
                </label>
                <a class="button next" type="next">Weiter</a>
            </form>

            <form id="registration-adress" class="contact-form">
                <h3>
                    Adresse
                </h3>
                <p>
                    Bitte gib eine Lieferadresse an.
                </p>
                <!--Reverted input and label for adding styling to label depending on wether input is filled-->
                <div class="input-group">
                    <input type="text" id="lastname" name="lastname">
                    <label for="lastname">Nachname</label>
                </div>
                <div class="input-group">
                    <input type="text" id="firstname" name="firstname">
                    <label for="firstname">Vorname</label>
                </div>
                <div class="input-group">
                    <input type="text" id="street" name="street">
                    <label for="street">Straße inkl. Hausnummer</label>
                </div>
                <div class="input-group">
                    <input type="text" id="plz" name="plz">
                    <label for="plz">PLZ</label>
                </div>
                <a class="button next" type="next">Registieren</a>
            </form>

            <div id="registration-complete">
                <img src="img/heart_circle.svg" alt="Herz Kreis"/>
                <h3> Fast geschafft! </h3>
                <p>Wir haben Dir eine E-Mail geschickt. Bitte schaue in Deinem Postfach nach, um deine E-Mail-Adresse zu verifizieren.</p>
            </div>
        </div>

        </div>
    </main>

    <!--Footer-->
    <?php include "components/footer.php"; ?>
</body>

</html>