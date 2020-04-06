<?php

//--- CONNEXION BDD
$bdd = new PDO('mysql:host=localhost;dbname=np_gmg', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//--- SESSION
session_start();
// $_SESSION['membre']['statut'] = 1;
// $_SESSION['membre']['pseudo'] = "naltpom";
//--- CONTANTE (chemin)
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT']."/");
// Cette ocnstante retourne le chemin physique du dosier 10-boutique sur le serveur
// Lors de l'enregistrement d'image / photos, nous aurons besoin du chemin complet vers le dossier photo pour enregistrer la photo

//$_SERVER['DOCUMENT_ROOT'] --> c:/xampp/htdocs (chemin vers le dossier htdocs sur le serveur)
//echo RACINE_SITE . '<hr>';

define('URL', '/gmg/new_GMG/');
// Cette constante servira par exemple à enregistrer l'url d'une photo / image dans la BDD, on ne peut pas conserver la photo elle même dans la BDD

//--- FAILLES XSS
// POST
foreach($_POST as $key => $value)
{
    $_POST[$key] = strip_tags(trim($value));
}
// GET
foreach($_GET as $key => $value){$_GET[$key] = strip_tags(trim($value));}
ini_set('display_errors', 1);
error_reporting(E_ALL); 
//--- INCLUSION
require_once('fonction.php');
$result = $bdd->query("SELECT * FROM gmg_maintenance");
$maintenance = $result->fetchAll(PDO::FETCH_ASSOC);
if($maintenance[0]["etat"] == 0): //endif; dans include/footer.php
    require_once('include/maintenance.php');
else: