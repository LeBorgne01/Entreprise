<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>

    <!--<?php include('menu.php'); ?>-->
    <?php
    if($_SESSION['Send'] == true){

       echo '<p> Merci d\'avoir pris contact avec notre entreprise </p>';
    }     ?>

        <form action="Contact_Controller.php" method="post">
            <h1>Contact</h1>
            <p>Nom : <input type="text" name="nom" /></p>
            <p>Prénom : <input type="text" name="prenom" /></p>
            <p>E-Mail : <input type="text" name="email" /></p>
            <p>Object : <input type="text" name="object" /></p>
            <p>Message : <input type="text" name="message" /></p>

            <input type="submit" value="Envoyer">


        </form>
   

</body>
</html>