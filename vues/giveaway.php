<!DOCTYPE html>
<html>
  <?php require 'vues/include/head.php' ?>
  <head>
      <title>Giveaway - DGS</title>
  </head>
  
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

  <body>

            <?php require 'vues/include/nav.php' ?>
            <main id='main'>
                <section>
                  <h1 style="text-align: center;">Not Available</h1>
                  <h4 style="text-align: center;">This page isn't available for the moment</h4>
                </section>
            </main>

            <?php require 'vues/include/footer.php'; ?>
  </body>

  <script type='text/javascript' src='vues/js/script.js'></script>
  <script type='text/javascript' src='vues/include/google.js'></script>



</html>