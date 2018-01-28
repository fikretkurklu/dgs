<!DOCTYPE html>
<html>

  <?php require 'vues/include/head.php' ?>
  <head><title>My Account - DGS</title></head>
  <body>
    <?php require 'vues/include/nav.php' ?>
    <main id='myaccount'>
      <section>
        <div class="col s6" style="margin-top: 10px;">
          <?php echo '<div id="avatar" ><img src="'.$user->getAvatar().'" class="circle" id="avatar"/></div>';?>
          <h6 style="margin-bottom: 50px;" id='user-interface-info'><?php echo $user->getName(); ?></h6>
          <p id='user-interface-info'><?php echo $user->getNbreDiamonds(); ?> diamonds</p>
        </div>              
        <?php if(isset($_GET['info'])){

          if($_GET['info'] == 'logout'){
            ?>
              <form method='post' style="text-align: center;">
                <button class="waves-effect waves-light blue darken-1 btn" title="Logout" name="logout">
                  Logout
                </button></form>
            <?php
          }
        }else{

          ?>
            <div style="text-align: center;">
              <a href="#" id='tradelinkupdate'><img src="vues/css/tradelinkupdate.png"/></a>

              <?php
                if($user->getTradeLink() == NULL){

                }else{
                  ?>
                  <p>Your trade link is : <?php echo $user->getTradeLink(); ?></p>
                  <?php
                }
              ?>
            </div>
            <div id='tradelinksection'> 
              
            </div>
          <?php
        }

        ?>
        
      </section>
    </main>

    <?php require 'vues/include/footer.php'; ?>
  </body>
<script type='text/javascript' src='vues/js/script.js'></script>
<script type='text/javascript' src='vues/include/google.js'></script>

<script type="text/javascript">
  
$(document).ready(function(){

  $('#tradelinkupdate').click(function(){
    $('#tradelinksection').load('modeles/php/uptradelink.php');
  });

});

</script>

<script type="text/javascript">    
function fblogout() {    
          FB.logout(function () {    
     window.location.reload(); });    
    }    
      window.fbAsyncInit = function() {    
        FB.init({    
          appId   : '<?php echo $facebook->getAppId(); ?>',    
          session : <?php echo json_encode($session); ?>,    
          status  : true,    
          cookie  : true,    
          xfbml   : true    
        });    

        FB.Event.subscribe('auth.login', function() {    
          window.location.reload();    
        });    
      };    

      (function() {    
        var e = document.createElement('script');    
        e.src = document.location.protocol + '//connect.facebook.net/fr_FR/all.js';    
        e.async = true;    
        document.getElementById('fb-root').appendChild(e);    
      }());    
          //your fb login function    
          function fblogin() {    
     FB.login(function(response) {    
              //...    
            }, {perms:'read_stream,publish_stream,offline_access'});    
   redir();    
          }    
        </script>


</html>