<?php
    require 'modeles/include/steamconnection.php';
    if(isset($_SESSION['logUser'])){
        
        $user = new User($_SESSION['logUser']);

    }
?>