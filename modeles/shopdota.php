<?php 
    require 'modeles/include/steamconnection.php';
    if(isset($_SESSION['logUser'])){
        
        $user = new User($_SESSION['logUser']);
        if($user->getTradeLink() == NULL){
        	header('Location: index.php?tradelink=true');
        }
    }
    header('Location: index.php');
?>