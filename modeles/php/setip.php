<?php
$bdd = new PDO('mysql:host=localhost;port=22;dbname=u186123755_dgs', 'u186123755_root', 'famasaidk6911');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $prep = $bdd->prepare('DELETE FROM pageinfo WHERE ip = :ip');
    $ip = $_SERVER['REMOTE_ADDR'];
    $prep->execute(array(':ip' => $ip));
?>