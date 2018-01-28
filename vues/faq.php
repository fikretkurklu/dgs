<!DOCTYPE html>
<html>
  <?php require 'vues/include/head.php' ?>
  <head>
      <title>FAQ - DGS</title>
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
                <section id='sectionterms'>
                    <h5 style="text-align:center;font-weight:bold;margin-bottom:60px;">FAQ</h5>
                    <h6 style="text-align:center;font-weight:bold;margin-bottom:60px;margin-top:-55px;">ANSWERS TO ALL YOUR QUESTIONS</h6>
                    <div id='termswrapper'>
                        <div>
                        	<h6>IN WHICH CATEGORY IS SITUATED YOUR PROBLEM ?</h6>
                        	<a href='index.php?page=faq#diamondgamingshopme'>- diamondgamingshop.me</a></br>
                          <a href='index.php?page=faq#diamondandshop'>- diamond and shop</a></br>
                          <a href='index.php?page=faq#giveaway'>- giveaway</a></br>
                          <a href='index.php?page=faq#getdiamonds'>- get diamonds</a></br>
                          <a href='index.php?page=faq#partnership'>- partnership</a>
                          <p>If you don't find a solution to your problem, ask it to use by using the social media.</p>
                        </div>
						            
            						<div id="diamondgamingshopme">
            						
            							<h6>I- DIAMONDGAMINGSHOP.ME</h6>
                          <p>WHAT IS DIAMONDGAMINGSHOP.ME ?</p>
                          <p>diamondgamingshop.me is an online website, accessible by browser only on PC. You can win diamonds for free and buy with them some cool stuff available in the shop.</p>
                          <p>HOW TO USE DIAMONDGAMINGSHOP.ME ?</p>
                          <p>First you have to register to the website, for that you need a steam account. After that you have to go the page "Get Diamonds", every 20 minutes you will win 20 diamonds. You can spend your collected diamonds in the shop, by buying some cool stuff.</p>
                        
                        </div>

                        <div id='diamondandshop'>

                          <h6>II- DIAMONDS AND SHOP</h6>
            		          <p>TELL ME MORE ABOUT THE DIAMONDS ?</p>
                          <p>The diamonds are only available on diamondgamingshop.me, you can collect as many diamonds as you can, you cannot give them to another user. When you use your diamond for an object in the shop, you can't get them back.</p>
                          <p>HOW CAN I ACCESS TO THE SHOP, AND HOW I RECEIVE THE OBJECT THAT I BUY  ?</p>
                          <p>To access to the shop, you first need to set your trade link in the page 'My Account' of the website, you can find your trade link in your steam account by following : Inventory/Trade Offers/Who can send me Trade Offers?/Third-Party Sites/Trade URL, after that we are going to confirm it. After that you buy an object in the shop we are going to send you a trade offer but you need to set your STEAM INVENTORY TO PUBLIC</p>
                          <p>WHAT IS THE DELAY TO RECEIVE THE OBJECTS THAT I BOUGHT ?</p>
                          <p>Count from 1 week to 2 weeks for digital stuff, we do our best to provide you the stuff you bought as fast as we can</p>

              					</div>

                        <div id='giveaway'>
                          
                          <h6>III- GIVEAWAY</h6>
                          <p>HOW DOES IT WORK</p>
                          <p>There will be giveaway every month, there will be lots of prize to win, If you want to participate to a giveaway, you just need to watch ads the number of time that is needed, you can watch 5 ads every 24 hours. The winner are announced during live on our <a href="#">Youtube channel</a></p>
                          <p>CAN I ORGANIZE A GIVEAWAY</p>
                          <p>>We give you the possibility to organize for your community, giveaway for free. If you want to organize a giveaway, just contact us by sending a message to our <a href="#">Facebook Page</a> our by contacting <a href="https://twitter.com/FikretKRK">FikretKRK</a>.</p>
                        </div>

                        <div id='getdiamonds'>
                          <h6>IV- GET DIAMONDS</h6>
                          <p>HOW DO I WIN DIAMONDS</p>
                          <p>In diamondgamingshop.me you watch video provided by dailymotion, when you are watching the video, a timer starts, and after 20 seconds you win 20 diamonds. You don't need to refresh the page every 20 minutes (the timer will automaticly restart).</p>
                          <p>IF I OPEN AN OTHER TAB IN MY BROWSER, DOES IT STILL WORK</p>
                          <p>No, you can't open the page get diamonds in multiple tabs</p>
                          <p>WHICH BROWSER DO I NEED TO USE DIAMONDGAMINGSHOP.ME</p>
                          <p>diamondgamingshop.me work on every browser, but the best is google chrome !</p>
                        </div>

                        <div id='partnership'>
                          <h6>V- PARTNERSHIP</h6>
                          <p>If you want to became our partners, you can contact us via the social media like twitter or facebook. Or by sending us an email to fikret63@hotmail.fr or fkurklu68@gmail.com</p>
                        </div>
                    </div>
                </section>
            </main>

            <?php require 'vues/include/footer.php'; ?>
  </body>

  <script type='text/javascript' src='vues/js/script.js'></script>
  <script type='text/javascript' src='vues/include/google.js'></script>



</html>