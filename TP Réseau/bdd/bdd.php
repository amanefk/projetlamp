<?php 

try{

	$user = "user";
	$pass = "xXmGSJud0EJmbC0s";
	$bdd = new PDO('mysql:host=localhost;dbname=lampbdd', $user, $pass);

}catch(PDOException $e){
	print "Erreur! :" .$e->getMessage() .
	"<br/>";
	die();
}

?>
