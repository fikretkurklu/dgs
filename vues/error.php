<!DOCTYPE html>
<html>
  <?php require 'vues/include/head.php' ?>
    <head><title>Page not found ! 404 Error</title></head>
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
                <section>
                    <h1 style="text-align: center;">404 Error</h1>
                    <h4 style="text-align: center;">Page not found | This page doesn't exist</h4>
                </section>
            </main>

            <?php require 'vues/include/footer.php'; ?>
  </body>

  <script type='text/javascript' src='vues/js/script.js'></script>



</html>