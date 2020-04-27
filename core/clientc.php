<?PHP
include "../config.php";
class clientc {
	function afficherclient ($client){
		echo "id_client: ".$client->getid_client()."<br>";
		echo "nom_client: ".$client->getnom_client()."<br>";
		echo "prenom_client: ".$client->getprenom_client()."<br>";
		echo "password_client:".$client->getpassword_client()."<br>";
		echo "tel_client: ".$client->gettel_client()."<br>";
		echo "username_client: ".$client->getusername_client()."<br>";
		echo "mail_client: ".$client->getmail_client()."<br>";
		echo "adresse_client: ".$client->getadresse_client()."<br>";
		echo "datenaissance_client: ".$client->getdatenaissance_client()."<br>";
	}
	
	function ajouterclient($client){
		$sql="insert into client (id_client,nom_client,prenom_client,password_client,tel_client,username_client,mail_client,adresse_client,datenaissance_client) values (:id_client,:nom_client,:prenom_client,:password_client,:tel_client,:username_client,:mail_client,:adresse_client,:datenaissance_client)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_client=$client->getid_client();
        $nom_client=$client->getnom_client();
        $prenom_client=$client->getprenom_client();
        $password_client=$client->getpassword_client();
        $tel_client=$client->gettel_client();
        $username_client=$client->getusername_client();
        $mail_client=$client->getmail_client();
        $adresse_client=$client->getadresse_client();
        $datenaissance_client=$client->getdatenaissance_client();
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nom_client',$nom_client);
		$req->bindValue(':prenom_client',$prenom_client);
		$req->bindValue(':password_client',$password_client);
		$req->bindValue(':tel_client',$tel_client);
		$req->bindValue(':username_client',$username_client);
		$req->bindValue(':mail_client',$mail_client);
		$req->bindValue(':adresse_client',$adresse_client);
		$req->bindValue(':datenaissance_client',$datenaissance_client);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherclients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * from client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($id_client){
		$sql="DELETE FROM client where id_client= :id_client";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_client',$id_client);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierclient($client,$id_client){
		$sql="UPDATE client SET nom_client=:nom_client,prenom_client=:prenom_client,password_client=:password_client,tel_client=:tel_client,username_client=:username_client,mail_client=:mail_client,adresse_client=:adresse_client,datenaissance_client=:datenaissance_client WHERE id_client=:id_client";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom_client=$client->getnom_client();
        $prenom_client=$client->getprenom_client();
        $password_client=$client->getpassword_client();
        $tel_client=$client->gettel_client();
        $username_client=$client->getusername_client();
        $mail_client=$client->getmail_client();
        $adresse_client=$client->getadresse_client();
        $datenaissance_client=$client->getdatenaissance_client();
		$datas = array(':id_client'=>$id_client, ':nom_client'=>$nom_client,':prenom_client'=>$prenom_client,':password_client'=>$password_client,':tel_client'=>$tel_client,':username_client'=>$username_client,':mail_client'=>$mail_client,':adresse_client'=>$adresse_client,':datenaissance_client'=>$datenaissance_client);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nom_client',$nom_client);
		$req->bindValue(':prenom_client',$prenom_client);
		$req->bindValue(':password_client',$password_client);
		$req->bindValue(':tel_client',$tel_client);
		$req->bindValue(':username_client',$username_client);
		$req->bindValue(':mail_client',$mail_client);
		$req->bindValue(':adresse_client',$adresse_client);
		$req->bindValue(':datenaissance_client',$datenaissance_client);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   	//echo " Les datas : " ;
  	//print_r($datas);
        }
		
	}
	function recupererclient($id_client){
		$sql="SELECT * from client where id_client=$id_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeclients($tel_client){
		$sql="SELECT * from client where tel_client=$tel_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>