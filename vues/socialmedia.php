<!DOCTYPE html>
<html>
  <?php require 'vues/include/head.php' ?>
  <head>
      <title>Social Media - DGS</title>
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
                <section style="text-align: center;">
                    <a class="twitter-timeline" data-width="500" data-height="800" href="https://twitter.com/diamondgshopme">Tweets by diamondgshopme</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/diamondgshopme/" data-tabs="timeline" data-width="500" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/diamondgshopme/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/diamondgshopme/">diamondgamingshop.me</a></blockquote></div>
                </section>
            </main>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8&appId=1874659449432775";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <?php require 'vues/include/footer.php'; ?>
  </body>

  <script type='text/javascript' src='vues/js/script.js'></script>
  <script type='text/javascript' src='vues/include/google.js'></script>

  

</html>