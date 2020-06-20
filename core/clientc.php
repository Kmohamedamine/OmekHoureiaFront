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
		echo "image:".$client->getimage()."<br>";
	}
	
	function ajouterclient($client){
		$code_carte = mt_rand(10000000,99999999); 
		$sql="insert into client (nom_client,prenom_client,password_client,tel_client,username_client,mail_client,adresse_client,datenaissance_client,image) 
						values (:nom_client,:prenom_client,:password_client,:tel_client,:username_client,:mail_client,:adresse_client,:datenaissance_client,:image;)";
		
		
		$sql1 = "SELECT id_client from client WHERE username_client=?";
		$sql2 = "INSERT INTO  carte (codecarte, nombres_points, id_client) VALUES (:codecarte, 0 , :id_client)";
	
		$db = config::getConnexion();
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
        $image=$client->getimage();
		$req->bindValue(':nom_client',$nom_client);
		$req->bindValue(':prenom_client',$prenom_client);
		$req->bindValue(':password_client',$password_client);
		$req->bindValue(':tel_client',$tel_client);
		$req->bindValue(':username_client',$username_client);
		$req->bindValue(':mail_client',$mail_client);
		$req->bindValue(':adresse_client',$adresse_client);
		$req->bindValue(':datenaissance_client',$datenaissance_client);
		$req->bindValue(':image',$image);
		$req->execute();

		$req = $db->prepare($sql1);
		$req->bindParam(1,$username_client);
		$req->execute();
		$result = $req->fetchAll();
		
		$req = $db->prepare($sql2);
		$req->bindValue(':id_client',$result['0']['id_client']);
		$req->bindValue(':codecarte',$code_carte);
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

    function loginclient($username_client,$password_client){
    	$sql="SELECT username_client, password_client FROM client WHERE username_client=? AND password_client=?";

    	$db = config::getConnexion();
		try{
			$stmt = $db->prepare($sql);
			
			$stmt->bindParam(1, $username_client);
			$stmt->bindParam(2, $password_client);
			$stmt->execute();
			$result = $stmt->fetchAll();

			//$liste=$db->query($stmt->fullQuery);
			return $result;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

    } 


    function profilclient($username_client){
    	$sql="SELECT nom_client,prenom_client,password_client,tel_client,username_client,mail_client,adresse_client,datenaissance_client,image FROM client WHERE username_client=?";
    	$db = config::getConnexion();
    	try{
    		$stmt = $db->prepare($sql);
    		$stmt->bindParam(1, $username_client);
    		$stmt->execute();
    		$result = $stmt->fetchAll();
    		return $result;
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