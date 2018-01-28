<?php
    if(isset($_SESSION['logUser'])){
        
        $user = new User($_SESSION['logUser']);
        
    }else{
        header('Location: index.php');
    }
    
    
    if(isset($_GET['id'])){
        $_GET['id'] = htmlspecialchars($_GET['id']);
        $_GET['id'] = addslashes($_GET['id']);
        $objectManager = new ObjectManager($bdd);
        $userManager = new UserManager($bdd);
        $resultExist = $objectManager->objectExist($_GET['id']);
        $donnesExist = $resultExist->fetch();
        
        if($donnesExist['nbre'] == 1){
            
            $resultDataObject = $objectManager->getObject($_GET['id']);
            $donnesDataObject = $resultDataObject->fetch();
            
            $object = new Object($donnesDataObject);
            
            if($object->getNbreStock() > 0){
                
                if($user->getNbreDiamonds() >= $object->getPrice()){
                    $object->setNbreStock($object->getNbreStock() - 1);
                    $objectManager->updateNbreStock($object->getId(), $object->getNbreStock());
                    $dataCommand = array(
                        'idUser' => $user->getId(),
                        'idCommande' => $object->getId(),
                        'tradeLink' => $user->getTradeLink(),
                        'commandeType' => $object->getCategory()
                    );
                    $commande = new Commande($dataCommand);
                    $commandeManager = new CommandeManager($bdd);
                    $commandeManager->add($commande);
                    $user->setNbreDiamonds($user->getNbreDiamonds() - $object->getPrice());
                    
                    if($user->getNbreDiamonds() < 0){
                        $user->setNbreDiamonds(0);
                    }
                    
                    $userManager->updateDiamond($user);
                    header('Location: index.php?commande=true');
                }else{
                    header('Location: index.php');
                }
            }else{
                header('Location: index.php');
            }
            
        }else{
            header('Location: index.php');
        }
        
    }
?>