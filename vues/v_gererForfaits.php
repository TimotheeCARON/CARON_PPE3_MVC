 <?php
 foreach($lesForfaits as $forfait){
 	echo '  <form method="POST" action="index.php?uc=gererForfaits&action=modifierForfait">
	 			<table class="tabNonQuadrille">
		 			<tr>
		 				<td>
		 					'.$forfait['libelle'].'
		 				</td>
		 				<td>
		 					<input type="number" step=0.01 name="'.$forfait['id'].'" value="'.$forfait['montant'].'"
		 				</td>
		 			</tr>
		 		</table>
		 		';

 }
 echo '	<input type="submit" value="Modifier" name="valider">
        <input type="reset" value="Annuler" name="annuler">
	 	</form>';
 ?>