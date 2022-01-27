<?php include "components/connection.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title>Releaf - Für Körper und Seele</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/jpg" href="img/icons/favicon.ico" />
</head>

<body>
    <!--Navigation-->
    <div id="nav" class="sticky">
        <?php include "components/nav.php"; ?>
    </div>

    <!--Main Content-->
    <main>
<h2>Kontakt</h2>  
<form action="action_page.php">

<label for="name">Name</label>
<input type="text" id="name" name="firstname" placeholder="Your name..">

<label for="email">E-Mail-Adresse</label>
<input type="text" id="email" name="email" placeholder="Your last name..">

<label for="country">Betreff</label>
<select id="enquiry" name="type_of_enquiry">
  <option value="order_question">Frage zur Bestellung</option>
  <option value="product_range_question">Frage zum Sortiment</option>
  <option value="bug_report">Darstellungsfehler</option>
  <option value="other">Sonstiges</option>
</select>

<label for="subject">Subject</label>
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

<input type="submit" value="Submit">

</form>
    </main>
</body>

</html>