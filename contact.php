<?php include "components/connection.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title>Releaf - Für Körper und Seele</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/jpg" href="img/icons/favicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/contact.js"></script>
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
            <p>
                Du hast eine Frage?
                Wir helfen Dir gerne!
            </p>
            <form class="contact-form" action="action_page.php">

                <!--Reverted input and label for adding styling to label depending on wether input is filled-->
                <div class="input-group">
                    <input type="text" id="name" name="firstname">
                    <label for="name">Name</label>
                </div>
                <div class="input-group">
                    <input type="email" id="email" name="email">
                    <label for="email">E-Mail-Adresse</label>
                </div>

                <div class="input-group">
                    <label for="country">Art der Anfrage</label>
                    <select id="enquiry" name="type_of_enquiry">
                        <option value="order_question">Frage zur Bestellung</option>
                        <option value="product_range_question">Frage zum Sortiment</option>
                        <option value="bug_report">Darstellungsfehler</option>
                        <option value="other">Sonstiges</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="subject">Betreff</label>
                    <textarea class="opensans" id="subject" name="subject" placeholder="Was möchtest du uns mitteilen?" style="height:200px"></textarea>
                </div>
                <button class="button" type="submit" value="Submit">Abschicken</button>

            </form>
        </div>
    </main>
</body>

<!--Footer-->
<?php include "components/footer.php"; ?>

</html>