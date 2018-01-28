<?php 
    require 'modeles/include/steamconnection.php';
    //header('Location: index.php?getdiamond=true');
    if(isset($_SESSION['logUser'])){
        
        $user = new User($_SESSION['logUser']);

    }
    
?>