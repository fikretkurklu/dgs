<nav id='first_nav'>
                <div class="nav-wrapper">
                    <a href="http://diamondgamingshop.me" class="brand-logo center"><img style='width: 350px;margin-top: -45px' src='vues/css/logonav.png'/></a>
                    
                    <ul class="left hide-on-med-and-down second_nav_content">
                        <li><a href="index.php?page=index">Home</a></li>
                        <li><a href="index.php?page=giveaway">Giveaway</a></li>
                        <li><a href="index.php?page=shop">Shop</a></li>
                        <li><a href="index.php?page=getdiamond">Get Diamonds</a></li>
                        <li><a class='dropdown-button' href='#' data-beloworigin="true" data-constrainwidth = "false" data-hover='true' data-activates='dropdown2'>More<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="index.php?page=myaccount">My Account</a></li>
                        <li class="divider"></li>
                        <li><a href="index.php?page=myaccount&info=logout">Log out</a></li>
                    </ul>
                    <ul id='dropdown2' class="dropdown-content">
                        <li><a href="index.php?page=socialmedia">Social Media</a></li>
                        <li><a href="https://medium.com/@dgs" target="_blank">Blog</a></li>
                        <li><a href="index.php?page=terms">Terms</a></li>
                        <li><a href="index.php?page=faq">FAQ</a></li>
                        <li><a href="index.php?page=aboutus">About Us</a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <?php
                            if(empty($_COOKIE['steamID'])){
                                print ('<li><form action="?login" method="post">
                                    <button style="margin-right: 20px;" class="waves-effect waves-light blue darken-1 btn" title=\'Login\' name="login">Login</button>
                                    </form></li>'); 
                            }else{
                        ?>
                            <li><?php echo $user->getName();?></li>
                            <li><a class='dropdown-button' href='#' data-beloworigin="true" data-constrainwidth = "false" data-hover='true' data-activates='dropdown1'><i class="material-icons">settings</i></a></li>
                        <?php
                            }
                        ?>
                    </ul>

                </div>
            </nav>
            
          
            
