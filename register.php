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
                <h2>Registrieren</h2>
                <p>
                    Zuerst brauchen wir von Dir ein paar Infos.
                </p>

                <!--Reverted input and label for adding styling to label depending on wether input is filled-->
                <div class="inputContainer">
                    <input type="text" id="username" name="username" placeholder="Nutzername">
                    <input type="email" id="email" name="email" placeholder="E-Mail-Adresse">
                    <input type="password" id="password" name="password" placeholder="Passwort">
                    <input type="confirm_password" id="confirm_password" name="confirm_password" placeholder="Passwort wiederholen">
                    <label class="checkbox-container">
                        <input type="checkbox">
                        <span class="box"></span>
                        <span>Ich habe die <a href="" title="Allgemeine Geschäftsbedingungen">AGB und den Datenschutz</a> gelesen und bin einverstanden. </span>
                    </label>
                </div>
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
                <div class="inputContainer">
                    <input type="text" id="lastname" name="lastname" placeholder="Nachname">
                    <input type="text" id="firstname" name="firstname" placeholder="Vorname">
                    <input type="text" id="street" name="street" placeholder="Straße inkl. Hausnummer">
                    <input type="text" id="plz" name="plz" placeholder="PLZ">
                </div>
                <a class="button next" type="next">Registieren</a>
            </form>

            <div id="registration-complete">
                <img src="img/heart_circle.svg" alt="Herz Kreis" />
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