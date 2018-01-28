<?php
    require 'modeles/include/steamconnection.php';

    if(isset($_SESSION['logUser'])){
        
        $user = new User($_SESSION['logUser']);
    }

    if(!isset($_SESSION['logUser'])){
        header('Location: index.php');
    }
    
        if(isset($_POST) && !empty($_POST['tradeLink'])){
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