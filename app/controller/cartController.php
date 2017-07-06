<?php

session_start();

require_once("../config/connexion.inc.php");

$db_handle = new connexion();

if(!empty($_GET["action"])) {
	
	switch($_GET["action"]) {
		case "add":
			if(!empty($_GET["quantite"])) {

			$productByCode = $db_handle->EXEC_QUERY("SELECT * FROM films WHERE code_film ='" . $_GET["code_film"] . "'");	    
			$itemArray = array($productByCode[0]["code_film"]=>array('titre'=>$productByCode[0]["titre"], 'code_film'=>$productByCode[0]["code_film"], 'quantite'=>$_GET["quantite"], 'prix'=>$productByCode[0]["prix"]));
				if(!empty($_SESSION["cart_item"])) {
					if(in_array($productByCode[0]["code_film"],array_keys($_SESSION["cart_item"]))) {
						foreach($_SESSION["cart_item"] as $k => $v) {
								if($productByCode[0]["code_film"] == $k) {
									if(empty($_SESSION["cart_item"][$k]["quantite"])) {
										$_SESSION["cart_item"][$k]["quantite"] = 0;
									}
									$_SESSION["cart_item"][$k]["quantite"] += $_POST["quantite"];
								}
						}
					} else {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
					}
				} else {
					$_SESSION["cart_item"] = $itemArray;
				}
			}
			sleep(5);
		break;
		case "remove":
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($_GET["code_film"] == $k)
							unset($_SESSION["cart_item"][$k]);				
						if(empty($_SESSION["cart_item"]))
							unset($_SESSION["cart_item"]);
				}           
			}
		break;
		case "empty":
			unset($_SESSION["cart_item"]);
		break;	
	}
}
header('Location: ../../index.php');
exit;
?>