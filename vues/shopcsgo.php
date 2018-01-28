<!DOCTYPE html>
<html>
  <?php require 'vues/include/head.php' ?>
  <head><title>Shop CSGO - DGS</title></head>
  <body>



      <?php
            if(empty($_SESSION['logUser'])){
      ?>

        <script type='text/javascript' >
                swal({
                    title: 'diamondgamingshop.me',
                    text: 'Log In or Register',
                    type: 'info',
                    animation: true
                });


        </script>

      <?php

        }

      ?>

            <?php require 'vues/include/nav.php' ?>
            <main id='main'>
                <section style='text-align:center;'>
                  <h5 style="font-weight:bold;margin-bottom:60px;">CS GO</h5>
                         <div class="row">
                        <?php
                                $objectmanager = new ObjectManager($bdd);
                                $result = $objectmanager->getListCsgo();
                                while ($donnes = $result->fetch()){
                                    $object = new Object($donnes);
                                    ?>
                                    <div class="col s12 m6 l3" style='margin-bottom: 10px; padding-bottom: 10px; padding-top: 10px;'>
                                        <?php
                                            if(strlen($object->getName()) > 8){
                                                $nameObject = $object->getName();
                                                $nameObject = substr($nameObject, 0, 8);
                                                $nameObject = $nameObject .' ...';
                                            }else{
                                                $nameObject = $object->getName();
                                            }
                                        ?>
                                        
                                        <img src='<?php echo $object->getImage(); ?>' />
                                        <h6 title='<?php echo $object->getName() ?>'><?php echo $nameObject; ?></h6>
                                        <p>CS GO</p>
                                        <?php 
                                        if(empty($_SESSION['logUser'])){?>
                                        <a class="waves-effect waves-light btn" style='width: 200px;'><?php echo $object->getPrice();?> Dmd</a>
                                        <?php 
                                        }
                                        if(!empty($_SESSION['logUser']) && $object->getNbreStock() > 0){
                                            if($user->getNbreDiamonds() < $object->getPrice()){?>
                                                <a class="waves-effect waves-light btn" style='width: 200px;'><?php echo $object->getPrice();?> Dmd</a>
                                            <?php
                                            }else if($user->getNbreDiamonds() >= $object->getPrice()){?><a class="waves-effect waves-light btn" style='width: 200px;' href="index.php?page=buyobject&id=<?php echo $object->getId(); ?>"><?php echo $object->getPrice();?> Dmd</a>
                                        <?php
                                        }
                                        }else if(!empty($_SESSION['logUser']) && $object->getNbreStock() == 0){?>
                                            <a class="waves-effect waves-light btn" style='width: 200px;'>OUT OF STOCK</a><?php 
                                        }
                                        ?>  
                               </div>
                            <?php } ?>
                    </div>
                </section>
            </main>

            <?php require 'vues/include/footer.php'; ?>
  </body>

  <script type='text/javascript' src='vues/js/script.js'></script>
    
<script src="https://code.jquery.com/jquery-2.2.0.min.js" charset="utf-8"></script>
<script type='text/javascript' src='vues/include/google.js'></script>


</html>