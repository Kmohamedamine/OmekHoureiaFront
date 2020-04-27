<?PHP
include "../core/clientc.php";
$client1c=new clientc();
$listeclients=$client1c->afficherclients();

//var_dump($listeclients->fetchAll());
?>
<table border="1">
<tr>
<td>Nom</td>
<td>Prenom</td>
<td>Mot de passe</td>
<td>Nom d'utilisateur</td>
<td>Telephone</td>
<td>Mail</td>
<td>adresse</td>
<td>date Naissance</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeclients as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom_client']; ?></td>
	<td><?PHP echo $row['prenom_client']; ?></td>
	<td><?PHP echo $row['password_client']; ?></td>
	<td><?PHP echo $row['username_client']; ?></td>
	<td><?PHP echo $row['tel_client']; ?></td>
	<td><?PHP echo $row['mail_client']; ?></td>
	<td><?PHP echo $row['adresse_client']; ?></td>
	<td><?PHP echo $row['datenaissance_client']; ?></td>

	<td><form method="POST" action="supprimerclient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_client']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierclient.php?id=<?PHP echo $row['id_client']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


