<?php 
    require 'modeles/include/steamconnection.php';

    if(isset($_POST) && !empty($_POST['referrallink'])){


    		$usermanager = new UserManager($bdd);
	        $rep = $usermanager->referralLinkIsExist($_POST['referrallink']);
	        $data = $rep->fetch();
	        if($_POST['referralLink'] == $_SESSION['logUser']['affiliated']){
		        $error_message = 'You can\'t use your own referral link';
		    }else{
		    	if($data['nbre'] == 1){
		            $steamid = $user->getSteamid();
		            $reqUser = $usermanager->getUserByReferralLink($_POST['referralLink']);
		            $dataUser = $reqUser->fetch();
		            $userDA = new User($dataUser);
		            $referrallink = addslashes($_POST['referrallink']);
		            $referrallink = strip_tags($referrallink);
		            $usermanager->addingReferralLink($steamid, $referralLink);

		            $userDiamond = $user->getNbreDiamonds();
		            $newNbreDiamonds = $userDiamond + 30;
		            $user->setNbreDiamonds($newNbreDiamonds);
		            $usermanager->updateDiamond($user);

		            header('Location: index.php');
		        }else{

		            $error_message = 'This referral link doesn\'t exist';
		        	$_SESSION['logUser']['affiliated'] = False;
		        }
		    }
    	

        
    }

    if(isset($_SESSION['logUser'])){
        
        $user = new User($_SESSION['logUser']);

        if($_SESSION['logUser']['affiliated'] == True){

        	header('Location: index.php?page=error');
        }else{
        	$usermanager = new UserManager($bdd);
        	$affiliated = True;
        	$steamid = $user->getSteamid();
	        $usermanager->updateAffiliated($affiliated, $steamid);
        }
    }else{
    	header('Location: index.php?page=error');
    }
    
    
?>