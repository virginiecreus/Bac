<?php
$_SESSION['logged']= (isset($_SESSION['logged']))?$_SESSION['logged']:false;

ini_set('display_error', 1);
error_reporting(E_ALL);
date_default_timezone_set('UTC');

define('NOM_DB' , 'bac');
define('UTILISATEUR_DB' , 'root');
define('MDP_DB' , 'amine88000');


$bdd = mysqli_connect("localhost", "root", "amine88000", "bac");
session_start();
?>