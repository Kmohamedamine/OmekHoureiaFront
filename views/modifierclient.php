
<?PHP
include "../entities/client.php";
include "../core/clientc.php";
$result = [];
$clientc=new clientc();
if (isset($_GET['id'])){
    $result=$clientc->recupererclient($_GET['id']);
}
	
?>

<HTML>
<head>
</head>
<body>
<form method="POST">
<table>
<caption>Modifier client</caption>

<?PHP
foreach($result as $row){
	?>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $row['nom_client']; ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $row['prenom_client']; ?>"></td>
</tr>
<tr>
<td>Telephone</td>
<td><input type="number" name="telephone" value="<?PHP echo $row['tel_client']; ?>"></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" value="<?PHP echo $row['username_client']; ?>"></td>
</tr>
<tr>
<td>Mail</td>
<td><input type="email" name="mail" value="<?PHP echo $row['mail_client']; ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $row['adresse_client']; ?>"></td>
</tr>
<tr>
<td>Date naissance</td>
<td><input type="Date" name="datenaissance" value="<?PHP echo $row['datenaissance_client']; ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="Password" name="password" value="<?PHP echo $row['password_client']; ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>

	<?PHP
}
?>
</table>
</form>
<?PHP
if (isset($_POST['modifier'])){
	$client=new client($_POST['nom'],$_POST['prenom'],$_POST['password'],$_POST['telephone'],$_POST['username'],$_POST['mail'],$_POST['adresse'],$_POST['datenaissance']);
	$clientc->modifierclient($client,($_GET['id']));
	header('Location: afficherclient.php');
}
?>
</body>
</HTMl>