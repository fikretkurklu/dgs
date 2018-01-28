<!DOCTYPE html>
<html>
  <?php require 'vues/include/head.php' ?>
    <head><title>DiamondGamingShop</title></head>
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
                 
        }if(isset($_GET) && !empty($_GET['commande']) && $_GET['commande'] == true){ 

      ?>
            
                 <script type='text/javascript' >
                    swal(
                      'Good job!',
                      'Thanks for buying an object in our website, you will receive your object in minimum 1 week and maximum 2 weeks',
                      'success'
                    )
                </script>
      <?php
          }if(isset($_GET) && !empty($_GET['tradelink']) && $_GET['tradelink'] == true){

            ?>
                <script type='text/javascript' >
                    swal(
                      'Warning !',
                      'You have to set your trade link in \'My Account\' before accessing the shop (if you already set it, wait for the confirmation !',
                      'warning'
                    )
                </script>
            <?php
          }if(isset($_GET) && !empty($_GET['getdiamond']) && $_GET['getdiamond'] == true){

            ?>
                <script type='text/javascript' >
                    swal(
                      'Info !',
                      'This page will open soon !',
                      'info'
                    )
                </script>
            <?php
          }
        ?>
        
     
            <?php require 'vues/include/nav.php' ?>
            <main id='home'>
                <section>
                      <div class="row container">
                        <h2 class="header center-align">Welcome to diamondgamingshop.me</h2>
                        <p class="grey-text text-darken-3 lighten-3">diamondgamingshop.me is an online website, accessible by browser only on PC (for the moment). You can win diamonds for free and buy with them some cool stuff available in the shop. There is also giveaway that we organize every month, the winner are announced during live on our Youtube channel</p>
                      </div>
                      <div class="row container">
                        <h5 class="header right-align">How does it work ?</h5>
                        <p class="grey-text text-darken-3 lighten-3">All the contents in the website are free, If you want to buy some cool stuff in the website, first you just need to watch the dailymotion live in the page 'get diamond', every 20 minutes you're going to win diamonds. With those diamonds you can buy whatever you want in the shop. If you want to participate to a giveaway, you just need to watch ads the number of time that is needed, you can watch 5 ads every 24 hours.</p>
                      </div>
                      <div class="row container">
                        <h5 class="header left-align">What can I do with diamonds ?</h5>
                        <p class="grey-text text-darken-3 lighten-3">You can use, the diamonds you won, in the shop. You can buy some cool stuff like Steam Game Key, CSGO Skin, etc...</p>
                      </div>
                      <div class="row container">
                        <h5 class="header right-align">Can I organize giveaway ?</h5>
                        <p class="grey-text text-darken-3 lighten-3">We give you the possibility to organize for your community, giveaway for free. If you want to organize a giveaway, just contact us by sending a message to our <a href="#">Facebook Page</a> or <a href="https://twitter.com/diamondgshopme">Twitter</a>.</p>
                      </div>
                      <div class="row container">
                        <h5 class="header center-align">To learn more about the webiste go to the page FAQ or go to our <a href="https://www.youtube.com/channel/UCmt2mndE_Jt2tTAJd32o1aA">Youtube Channel</a> where you can watch some video where we explain you how the website work.</h5>
                        <p class="grey-text text-darken-3 lighten-3"></p>
                      </div>
                </section>
            </main>

            <?php require 'vues/include/footer.php'; ?>
  </body>

<script type='text/javascript' src='vues/js/script.js'></script>
<script type='text/javascript' src='vues/include/google.js'></script>



</html>
