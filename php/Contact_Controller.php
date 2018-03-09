<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 06/03/18
 * Time: 14:40
 */

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])  && !empty($_POST['object']) && !empty($_POST['message'])){
	$nom = securite($_POST['nom']);
	$prenom = securite($_POST['prenom']);
	$email = securite($_POST['email']);
	$object = securite($_POST['object']);
	$message = securite($_POST['message']);

	$to = "dorian.bonnamy@etu.univ-lyon1.fr";

	ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    /*$from = "test@votredomaine.com";
 
	

    $to = "adressedestinataire";
 
    $subject = "Vérification PHP mail";
 
    $message = "PHP mail marche";
 
    $headers = "From:" . $from;
 
    mail($to,$subject,$message, $headers);*/
 
    

    mail($to,$object,$message,"From" . $email);

	$_SESSION['Send'] = true;
	header('Location: Contact.php');

}



function securite($caractere){

		$value = addslashes($caractere);

		return $value;

	}