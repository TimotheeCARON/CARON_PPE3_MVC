<?php
include("vues/v_sommaire.php");
?>
<div id="contenu">
	<h2 class="contenu"> Modifier les forfaits</h2>
	<form action="requeteForfaits.php" method="post">
		Forfait Etape : <input type="text" name="ETP" placeholder="getForfaits(ETP)"><br>
		Frais Kilométrique : <input type="text" name="KM"><br>
		Nuitée Hôtel : <input type="text" name="NUI"><br>
		Repas Restaurant : <input type="text" name="REP"><br>
		<input type="submit" name="valider">
	</form>
</div>