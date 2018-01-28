<?php

    session_start();

    require 'chargeClass.php';
    
	
	function isMobile() {
		return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}	

    
	/*$bdd = new PDO('mysql:host=localhost;port=22;dbname=u186123755_dgs', 'u186123755_root', 'famasaidk6911');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/


	//require 'controleurs/comingsoon.php';
	
		 
	if (isMobile())
	{
	    
		require 'controleurs/mobile.php';

	}else{
		if(!empty($_GET['page']) AND is_file('controleurs/'.$_GET['page'].'.php')){

        	require 'controleurs/'.$_GET['page'].'.php';

	    }elseif(empty($_GET['page'])){

	    	include('controleurs/index.php');

	    }
	    else{

	        include('controleurs/error.php');

	    }
	}

    

?>
