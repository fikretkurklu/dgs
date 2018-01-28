<?php
    require 'modeles/include/steamconnection.php';
    if(isset($_SESSION['logUser'])){
        
        $user = new User($_SESSION['logUser']);

    
    }else{
        header('Location: index.php');
    }

    if(empty($_GET['info'])){
        header('Location: index.php?page=error');
    }
    if($_GET['info'] == 1 || $_GET['info'] == 2){
        
    }else{
        header('Location: index.php?page=error');  
    }

    if($_GET['info'] == 1){
        if($_SESSION['logUser']['tradeLink'] != NULL){
            header('Location: index.php?page=error');
        }
    }

    if($_GET['info'] == 2){
        if($_SESSION['logUser']['code'] != NULL){
            header('Location: index.php?page=error');
        }
    }

    if(isset($_POST) && !empty($_POST['affiliationcode'])){
        if($_POST['affiliationcode'] == $user->getAffiliationCode()){
            $error_message = 'You couldn\'t use your own affiliation code';
        }else{
            $usermanager = new UserManager($bdd);
            $rep = $usermanager->affiliationCodeIsExist($_POST['affiliationcode']);
            $data = $rep->fetch();
            if($data['nbre'] == 1){

                $repuserbyac = $usermanager->getUserDataByAffiliationCode($_POST['affiliationcode']);

                $datauser = $repuserbyac->fetch();

                $userac = new User($datauser);

                $nbrediam = $userac->getNbreDiamonds();
                $nbrediam += 25;
                $userac->setNbreDiamonds($nbrediam);
                $usermanager->updateDiamond($userac);
                $affiliationcode = addslashes($_POST['affiliationcode']);
                $affiliationcode = strip_tags($affiliationcode);
                $usermanager->addingAffiliationCode($user, $affiliationcode);
                header('Location: index.php?page=myaccount');
            }else{

                $error_message = 'This affiliation code doesn\'t exist';
            }
        }
    }elseif(isset($_POST) && !empty($_POST['tradeLink'])){

        $usermanager = new UserManager($bdd);
        $rep = $usermanager->tradeLinkIsExist($_POST['tradeLink']);
        $data = $rep->fetch();
        if($data['nbre'] == 0){
            $steamid = $user->getSteamid();
            $tradeLink = addslashes($_POST['tradeLink']);
            $tradeLink = strip_tags($tradeLink);
            $usermanager->updateTradeLink($steamid, $tradeLink);

            header('Location: index.php?page=myaccount');
        }else{

            $error_message = 'This trade link is already used';
        }
    }

?>