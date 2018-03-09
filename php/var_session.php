<?php
session_start();
$_SESSION['Send']=false;

header('Location: Contact.php');
