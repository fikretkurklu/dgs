<!DOCTYPE html>
<html>

  <?php require 'vues/include/head.php' ?>
  <head><title>My Account - DGS</title></head>
  <body>
    <?php require 'vues/include/nav.php' ?>
    <main id='myaccount'>
      <section>
        
        <fieldset id='input_account'>
            <legend>Referral Link</legend>
            <form method="POST" action="index.php?page=myaccount">
              <div class="row">
                  <?php
                    if(isset($error_message)){
                      echo $error_message;
                    }
                  ?>
                  <label for="tradeLink">Referral Link</label><input type="text" name="referrallink" id="referrallink"/><br/>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
                </div>
            </form>
        </fieldset>

      </section>
    </main>

    <?php require 'vues/include/footer.php'; ?>
  </body>
  <script type='text/javascript' src='vues/js/script.js'></script>
  <script type='text/javascript' src='vues/include/google.js'></script>

</html>