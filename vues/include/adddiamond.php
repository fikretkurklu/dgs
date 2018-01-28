<?php
	session_start();

	if(empty($_SESSION['logUser'])){

		header('Location: http://diamondgamingshop.pe.hu/index.php?page=error');
	}

	$bdd = new PDO('mysql:host=localhost;port=22;dbname=u186123755_dgs', 'u186123755_root', 'famasaidk6911');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		require '../../chargeClass.php';
		
		$user = new User($_SESSION['logUser']);

		$rep = $bdd->prepare('SELECT minutetimestart FROM userinfo WHERE steamid = :steamid');
		$rep->execute(array(
			':steamid' => $user->getSteamid()
		));
		$datatimestart = $rep->fetch();

		if($datatimestart['minutetimestart'] - time() <= 0){
			$diamond = $user->getNbreDiamonds();
			$diamond = $diamond + 20;
			$user->setNbreDiamonds($diamond);
			$userM = new UserManager($bdd);
			$userM->updateDiamond($user);

			$rep = $bdd->prepare('DELETE FROM userinfo WHERE steamid = :steamid');
			$rep->execute(array(':steamid' => $user->getSteamid()));

			unset($_SESSION['codeDiamond']);

		}else{
			header('Location: http://diamondgamingshop.pe.hu/index.php?page=error');
			$rep = $bdd-prepare('DELETE FROM userinfo WHERE steamid = :steamid');
			$rep->execute(array(':steamid' => $user->getSteamid()));
		}
