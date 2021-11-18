<?php

set_include_path("./src");



require_once("Router.php");
require_once("Model/CompteStorageMysql.php");
require_once("Model/VoitureStorageMysql.php");

 try {
     $bd = new PDO("mysql:host=mysql.info.unicaen.fr;port=3306;dbname=22009791_0;charset=utf8", "22009791", "Mae6toivohqu9fai");
 } catch (Exception $e) {
     echo "ERROR";
 }



$compte_bd = new CompteStorageMysql($bd);
$voiture_bd = new VoitureStorageMysql($bd);
$router = new Router();
$router->main($compte_bd,$voiture_bd);





?>
