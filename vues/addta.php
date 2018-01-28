<!DOCTYPE html>
<html>
  <?php require 'vues/include/head.php'; ?>
    <?php

      if($_GET['info'] == 1){
        echo '<head><title>Add Trade Link - DGS</title></head>';
      }elseif($_GET['info'] == 2){
        echo '<head><title>Add Affiliation Code - DGS</title></head>';
      }

    ?>
  <body>

            <?php require 'vues/include/nav.php' ?>
            <main id='main'>
                <section>

                <?php
                  if($_GET['info'] == 1){
                  ?>
                    <fieldset id='input_account'>
                    <legend>Trade Link</legend>
                    <form method="POST" action="index.php?page=addta&info=1">
                      <div class="row">
                        <label for="tradeLink">Trade Link</label><input type="text" name="tradeLink" id="tradeLink"/><br/>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        </button>
                      </div>
                    </form>
                  </fieldset>

                  <?php  
                  }elseif($_GET['info'] == 2){
                    if(isset($error_message)){
                      echo $error_message;
                    }
                  ?>

                    <fieldset id='input_account'>
                    <legend>Affiliation Code</legend>
                    <form method="POST" action="index.php?page=addta&info=2">
                      <div class="row">
                        <label for="affiliationcode">Affiliation Code</label><input type="text" name="affiliationcode" id="affiliationcode"/><br/>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        </button>
                      </div>
                    </form>
                  </fieldset>
                  <?php
                  }


                ?>
                    
                </section>
            </main>

            <?php require 'vues/include/footer.php'; ?>
  </body>

  <script type='text/javascript' src='vues/js/script.js'></script>

<script type='text/javascript' src='vues/include/google.js'></script>



</html>