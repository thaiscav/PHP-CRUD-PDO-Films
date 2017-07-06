<?php

//*************************************//
//*Parametres de configuration de BD:
require 'app\config\config.php';

//Parametres de creation de BD:
require 'app\config\createBd.php';

//Parametres de gestion de BD / Controller
include 'app\config\connexion.inc.php';

//Insertion de donnees(categorie et produits):
require 'app\config\insert.php';

//**************************************//

$id_session = session_id();
if(empty($id_session)) {
    session_start();
}

if(isset($_SESSION["cart_item"])){
    $item_total = 0;
}

//Head
include("app\layout\_head.php");

//Body Main
include("app\layout\_body.php");

//Footer
include("app\layout\_footer.php");

?>