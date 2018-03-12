<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

    <?php include('../html/navigation.php'); ?>
    <table class="Contour_page">
        <tr>
            <td>
            <?php
            if($_SESSION['Send'] == 1){
               echo '<p> Merci d\'avoir pris contact avec notre entreprise </p>';
            }     
            else {
            echo $_SESSION['Send'];
        }?>

            <form action="Contact_Controller.php" method="post" class="form_contact">
                <h1>Contact</h1>
                <p>Nom : </br><input type="text" name="nom" /></p>
                <p>Prénom : </br><input type="text" name="prenom" /></p>
                <p>E-Mail : </br><input type="text" name="email" /></p>
                <p>Object : </br><input type="text" name="object" /></p>
                <p>Message :</br> <textarea type="text" name="message"></textarea></p>

                <input type="submit" value="Envoyer">


            </form>
        </td>
        </tr>
    </table>
   
<?php include('footer.php'); ?>
</body>
</html>