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
</head>

<body>
    <!--Navigation-->
    <div id="nav" class="sticky">
        <?php include "components/nav.php"; ?>
    </div>

    <!--Main Content-->
    <main id="contact">
        <div class="contact-wrapper">
            <h2>Kontakt</h2>
            <p>Du hast eine Frage? Wir helfen Dir gerne!</p>
            <form class="contact-form">
                <input type="text" id="name" name="firstname" placeholder="Name">
                <input type="email" id="email" name="email" placeholder="E-Mail-Adresse">
                <select id="enquiry" name="type_of_enquiry">
                    <option value="order_question">Frage zur Bestellung</option>
                    <option value="product_range_question">Frage zum Sortiment</option>
                    <option value="bug_report">Darstellungsfehler</option>
                    <option value="other">Sonstiges</option>
                </select>
                <textarea class="opensans" id="subject" name="subject" placeholder="Was möchtest du uns mitteilen?" style="height:200px"></textarea>
                <button class="button" type="submit" value="Submit">Abschicken</button>

            </form>
        </div>
    </main>

    <!--Footer-->
    <?php include "components/footer.php"; ?>
</body>

</html>