<?php
$bdd = new PDO('mysql:host=localhost;port=22;dbname=u186123755_dgs', 'u186123755_root', 'famasaidk6911');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    require '../../chargeClass.php';	
	$user = new User($_SESSION['logUser']);
	$prep = $bdd->prepare('DELETE FROM userinfo WHERE steamid = :steamid');
    $prep->execute(array(':steamid' => $user->getSteamid()));
?>