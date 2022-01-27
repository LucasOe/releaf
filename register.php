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
</head>

<body>
    <!--Navigation-->
    <div id="nav" class="sticky">
        <?php include "components/nav.php"; ?>
    </div>

    <!--Main Content-->
    <main id="registration">
        <div class="registration-wrapper">
            <h2>Registieren</h2>
            <form class="contact-form">
                <p>
                    Zuerst brauchen wir von Dir ein paar Infos.
                </p>

                <!--Reverted input and label for adding styling to label depending on wether input is filled-->
                <div class="input-group">
                    <input type="text" id="name" name="firstname">
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
                    <input type="checkbox" checked="checked">
                    <span class="box"></span>
                    <span>Ich habe die <a href="" title="Allgemeine Geschäftsbedingungen">AGB und den Datenschutz</a> gelesen und bin einverstanden. </span>
                </label>
        </div>
        <button class="button" type="submit" value="Submit">Weiter</button>

        </form>
        </div>
    </main>

    <!--Footer-->
    <?php include "components/footer.php"; ?>
</body>

</html>