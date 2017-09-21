<?php
	include("vues/v_sommaire.php");
	$action=$_REQUEST['action'];
	$lesForfaits = $pdo->getForfaits();
	switch($action){
		case 'voirForfait' :include("vues/v_gererForfaits.php");
							break;
		case 'modifierForfait' : foreach($lesForfaits as $forfait){
										$pdo->setForfait($forfait['id'],$_REQUEST[$forfait['id']]);

								}
								echo "Modification effectué";
								break;
	}
	
	
	
?>