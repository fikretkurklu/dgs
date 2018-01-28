<!DOCTYPE html>
<html>
  <?php require 'vues/include/head.php' ?>
  <head>
      <title>About Us - DGS</title>
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
                <section id="sectionterms">
                    <h5 style="text-align:center;font-weight:bold;margin-bottom:60px;">ABOUT US</h5>
                    <h6 style="text-align:center;font-weight:bold;margin-bottom:60px;margin-top:-55px;">LEARN MORE ABOUT US</h6>
                    <div id='termswrapper'>
                      <h6>FIKRETKRK - WEB DEVELOPER</h6>
                        <p>The website diamondgamingshop.me was co-created and edited by : FikretKRK</p>
                        <p>His personal email adress is : fikret63@hotmail.fr</p>
                        <p>His twitter account is : <a href="https://www.twitter.com/FikretKRK" target="_blank">@FikretKRK</a></p>
                        <p>His youtube channel is : <a href="https://www.youtube.com/channel/UCmt2mndE_Jt2tTAJd32o1aA" target="_blank">Fikret KRK</a></p>
                        <p>He has got skills in web development, he know languages like HTML, CSS, PHP, Javascript</p>
                        <p>He speak French, English and Turkish</p>
                        <p>For professional cases, please contact him by using his personal adress or his twitter account</p>
                      <h6>AHMETKRK - WEB DEVELOPER AND WEB DESIGNER</h6>
                        <p>The website diamondgamingshop.me was co-created and designed by : AhmetKRK</p>
                        <p>His personal email adress is : ahmetkurklu2000@gmail.com</p>
                        <p>He has got skills in web development, he know languages like HTML, CSS, PHP, Javascript</p>
                        <p>He speak French, English and Turkish</p>
                        <p>For professional cases, please contact him by using his personal adress or his twitter account</p>
                    </div>

                </section>
            </main>

            <?php require 'vues/include/footer.php'; ?>
  </body>

  <script type='text/javascript' src='vues/js/script.js'></script>
  <script type='text/javascript' src='vues/include/google.js'></script>



</html>