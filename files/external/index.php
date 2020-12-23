<?php
/* 

BAN MANAGER 

1. Search if the ip have a banType 2 and die

2. Search if the account have a ban 

*/
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}

$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = $_SERVER['REMOTE_ADDR'];

if (filter_var($client, FILTER_VALIDATE_IP)) {
  $ip = $client;
} else if (filter_var($forward, FILTER_VALIDATE_IP)) {
  $ip = $forward;
} else {
  $ip = $remote;
}
$search_ban_ip = $mysqli->query("SELECT * FROM user_bans WHERE ip_user= '" . $ip . "' AND banType = 2");
//$search_ban_ip = $mysqli->query("SELECT * FROM user_bans WHERE ip_user= '".$ip."' AND banType = 2");
if (mysqli_num_rows($search_ban_ip) > 0) {
  header('Location: /maintenance');
  die();
}
require_once(INCLUDES . 'header.php'); ?>

<!-- Page Preloder  -->
<div id="preloder">
      <div class="loader"></div>
    </div>
<!-- Header section -->
<header class="header-section">
  <div class="container">
    <!-- logo -->
    <a class="site-logo" href="index.html">
      DeathSpaces
    </a>
    <div class="user-panel" id="myBtn">
      Login/ Register
    </div>
    <!-- responsive -->
    <div class="nav-switch">
      <i class="fa fa-bars"></i>
    </div>
    <!-- site menu -->
    <nav class="main-menu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="review.html">Updates</a></li>
        <li><a href="community.html">Players</a></li>
      </ul>
    </nav>
  </div>
</header>
<!-- Header section end -->

<!-- Hero section -->
<section class="hero-section">
  <div class="hero-slider owl-carousel">
    <div class="hs-item set-bg" data-setbg="img/authors/base1.png">
      <div class="hs-text">
        <div class="container">
          <h2 class="custom_style1">The best <span>MULTIPLAYER</span></h2>
          <p class="custom_style1">
            Hey! We are one of the best servers currently, with many
            characteristics that make us unique. <br />
            What are you waiting to discover them? <br />
            don't forget to invite your friends to receive amazing rewards
          </p>
          <a href="#news" class="site-btn">Read More</a>
        </div>
      </div>
    </div>
    <div class="hs-item set-bg" data-setbg="img/authors/base2.png">
      <div class="hs-text">
        <div class="container">
          <h2 class="custom_style1">Defend your <span>faction</span></h2>
          <p class="custom_style1">
            Defend your faction in jaw-dropping 1 vs 1 battles <br />
            dominate every map by building your company foundation <br />
            create clans with loyal and legendary people
          </p>
          <a href="#news" class="site-btn">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero section end -->

<!-- Latest news section -->
<div class="latest-news-section" id="news">
  <div class="ln-title">Latest News</div>
  <div class="news-ticker">
    <div class="news-ticker-contant">
      <div class="nt-item"><span class="new">new</span>Season Rose.</div>
      <div class="nt-item">
        <span class="strategy">new</span>Galaxy Gates.
      </div>
      <div class="nt-item">
        <span class="racing">new</span>Missions system.
      </div>
      <div class="nt-item">
        <span class="gold">new</span>Matchmaking system.
      </div>
    </div>
  </div>
</div>
<!-- Latest news section end -->

<!-- Feature section -->
<section class="feature-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 p-0">
        <div class="feature-item set-bg" data-setbg="img/authors/1.png">
          <span class="cata new">Registered accounts</span>
          <div class="fi-content text-white">
            <h5>3.500</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-0">
        <div class="feature-item set-bg" data-setbg="img/authors/2.png">
          <span class="cata strategy">Clans founded</span>
          <div class="fi-content text-white">
            <h5>300</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-0">
        <div class="feature-item set-bg" data-setbg="img/authors/3.png">
          <span class="cata new">ONLNE SINCE</span>
          <div class="fi-content text-white">
            <h5>25 February 2020</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-0">
        <div class="feature-item set-bg" data-setbg="img/authors/4.png">
          <span class="cata strategy">User online</span>
          <div class="fi-content text-white">
            <h5>50</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Feature section end -->

<!-- Recent game section  -->
<section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.png">
  <div class="container">
    <div class="section-title">
      <!-- <div class="cata new">new</div> -->
      <h2>Events</h2>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="recent-game-item">
          <div class="rgi-thumb set-bg" data-setbg="img/authors/npcwars.png">
            <div class="cata new">Exclusive</div>
          </div>
          <div class="rgi-content">
            <h5>Npc Wars</h5>
            <p>
              Npc Wars emulates moba gameplay, where you have to defend an
              emperor from minions and enemy players.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="recent-game-item">
          <div class="rgi-thumb set-bg" data-setbg="img/authors/spaceball.png">
            <!--<div class="cata racing">racing</div>-->
          </div>
          <div class="rgi-content">
            <h5>Spaceball</h5>
            <p>
              Spaceball is an event in which your entire company will have
              to help you move the ball to the goal to score a goal.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="recent-game-item">
          <div class="rgi-thumb set-bg" data-setbg="img/authors/jackpot.png">
            <!--<div class="cata adventure">Adventure</div> -->
          </div>
          <div class="rgi-content">
            <h5>Jackpot Battle</h5>
            <p>
              Jackpot battle is an event that takes place every Saturday to
              demonstrate who is the best player.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="recent-game-item">
          <div class="rgi-thumb set-bg" data-setbg="img/authors/crazy.png">
            <!-- <div class="cata adventure">Adventure</div> -->
          </div>
          <div class="rgi-content">
            <h5>Crazy Cubikon</h5>
            <p>
              Crazy Cubikon is an event where for a limited time the cubikon
              throws more protegits and rewards on death.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Recent game section end -->

<!-- Tournaments section -->
<section class="tournaments-section spad">
  <div class="container">
    <div class="tournament-title">Tournaments</div>
    <div class="row">
      <div class="col-md-6">
        <div class="tournament-item mb-4 mb-lg-0">
          <!-- <div class="ti-notic">UBA Season</div> -->
          <div class="ti-content">
            <div class="ti-thumb set-bg" data-setbg="img/authors/uba2.jpg"></div>
            <div class="ti-text">
              <h4>UBA Season</h4>
              <ul>
                <li><span>Tournament Beggins:</span> April 14, 2020</li>
                <li><span>Tounament Ends:</span> May 14, 2020</li>
                <li><span>Participants:</span> All users</li>
                <li><span>Tournament Author:</span> DeathSpaces team</li>
              </ul>
              <p>
                <span>Prizes:</span> Goliath Gold, Goliath Silver, Goliath
                Bronze
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="tournament-item">
          <div class="ti-content">
            <div class="ti-thumb set-bg" data-setbg="img/authors/versus.png"></div>
            <div class="ti-text">
              <h4>1 vs 1 Tournament</h4>
              <ul>
                <li><span>Tournament Beggins:</span> Undefined</li>
                <li><span>Tounament Ends:</span> Undefined</li>
                <li><span>Participants:</span> All users</li>
                <li><span>Tournament Author:</span> DeathSpaces team</li>
              </ul>
              <p>
                <span>Prizes:</span> 1st place $20 usd, 2nd place: $15 usd
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tournaments section bg -->

<!-- Review section -->
<section class="review-section spad set-bg" data-setbg="img/review-bg.png">
  <div class="container">
    <div class="section-title">
      <!-- <div class="cata new">new</div> -->
      <h2>Gameplay</h2>
    </div>
    <p>
      <img data-video="N-_mhCi-fQY" alt="Play this video" src="img/authors/gameplay.png" width="100%" style="cursor: pointer;" />
    </p>
  </div>
</section>
<!-- Review section end -->

<!-- Footer top section -->
<section class="footer-top-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="footer-logo text-white">
          <img src="img/authors/logo.png" alt="" />
          <p>
            DeathSpaces is a Public, Bug and Lagfree Private Server! 24/7
            Online! With Multiple Instances and High Performance Servers we
            are Different and unique.DeathSpaces gets updated Daily with
            Bug-fixes, Features and Performance improvements to give you the
            best game-experience that you all want!.
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="footer-widget">
          <h4 class="fw-title">Developers</h4>
          <div class="top-comment">
            <div class="tc-item">
              <div class="tc-thumb set-bg" data-setbg="img/authors/user.png"></div>
              <div class="tc-content">
                <p><a href="#">ImNotNode</a></p>
                <p>Website Developer, Emulator Developer, parter</p>
              </div>
            </div>
            <div class="tc-item">
              <div class="tc-thumb set-bg" data-setbg="img/authors/user.png"></div>
              <div class="tc-content">
                <p><a href="#">MGL_Reload</a></p>
                <p>Website Developer, Emulator Developer, parter</p>
              </div>
            </div>
            <div class="tc-item">
              <div class="tc-thumb set-bg" data-setbg="img/authors/user.png"></div>
              <div class="tc-content">
                <p><a href="#">Oscar</a></p>
                <p>Web Developer, Security expert, partener</p>
              </div>
            </div>
            <div class="tc-item">
              <div class="tc-thumb set-bg" data-setbg="img/authors/user.png"></div>
              <div class="tc-content">
                <p><a href="#">Olcay</a></p>
                <p>Expert designer, Partner and Support chief</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="footer-widget">
          <h4 class="fw-title">Support Team</h4>
          <div class="top-comment">
            <div class="tc-item">
              <div class="tc-thumb set-bg" data-setbg="img/authors/user.png"></div>
              <div class="tc-content">
                <p><a href="#">CM_Colombiano</a></p>
                <p>The only way to do a great job is to love what you do</p>
              </div>
            </div>
            <div class="tc-item">
              <div class="tc-thumb set-bg" data-setbg="img/authors/user.png"></div>
              <div class="tc-content">
                <p><a href="#">CM_Valkyer</a></p>
                <p>Responsibility is the most important thing in a team</p>
              </div>
            </div>
            <div class="tc-item">
              <div class="tc-thumb set-bg" data-setbg="img/authors/user.png"></div>
              <div class="tc-content">
                <p><a href="#">ADM_BeatingAss</a></p>
                <p>eh, you gotta answer to me here and now</p>
              </div>
            </div>
            <div class="tc-item">
              <div class="tc-thumb set-bg" data-setbg="img/authors/user.png"></div>
              <div class="tc-content">
                <p><a href="#">SP_Legend</a></p>
                <p>If the opponent is too big, the fall will be harder</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="contact-form-warp">
      <div class="row">
        <div class="col-md-12">
          <img src="img/authors/logo.png" alt="" srcset="" width="23%" style="margin-left: auto; margin-right: auto; display: block;" />
        </div>
        <div class="col-md-12" style="padding-left: 10%; padding-right: 10%;" >
        
          <div class="contact-form-warp" id="form_container">
            <h4 class="comment-title" style="color: white;">LOGIN</h4>
            <form class="comment-form">
              <div class="row">
                <div class="col-md-12">
                  <input type="text" placeholder="username" id="username"/>
                </div>
                <div class="col-md-12">
                  <input type="password" placeholder="password" id="password"/>
                </div>
                <input type="button" class="custom_login" onclick="loginFunction()" value="Login"><br />
                <br />
                <p class="custom_login2" onclick="switchView()">
                  I do not have an account
                </p>
              </div>
            </form>
          </div>
    
          <div class="contact-form-warp" id="form_container2" style="display: none; position: absolute;">
            <h4 class="comment-title" style="color: white;">REGISTER</h4>
            <form class="comment-form">
              <div class="row">
                <div class="col-md-12">
                  <span style="color: red; position: absolute; visibility: hidden;" id="error-form1">please put a valid username like "hunter007" (Without special characters)</span>
                  <input type="text" placeholder="username" id="username-r" required maxlength="20" />
                </div>
                <div class="col-md-12">
                  <!--<span style="color: red; position: absolute; visibility: hidden;" id="error-form2">please put a valid email</span> -->
                  <input type="text" placeholder="email" id="email-r" required maxlength="45" />
                </div>
                <div class="col-md-12">
                  <!--<span style="color: red; position: absolute; visibility: hidden;" id="error-form3">please put a valid password</span>-->
                  <input type="password" placeholder="password" id="password-r" required maxlength="20" />
                </div>
                <div class="col-md-12">
                  <!--<span style="color: red; position: absolute; visibility: hidden;" id="error-form4">the password aren't the same</span> -->
                  <input type="password" placeholder="confirm password" id="password2-r" required maxlength="20" />
                </div>
                <div class="col-md-12" id="container_loader" style="position: absolute; display:none;">
                  <img src="img/authors/loader.gif" alt="" srcset="" width="100px" style="margin-left: auto; margin-right: auto; display: block;">
                </div>

                  <div class="col-md-12" id="container_captcha">
                    <div class="g-recaptcha" data-sitekey="6LchougUAAAAAHmQsfJU-Z2WhHZppUz_r7e60TzG"></div>
                  </div>
                  <br> <br> <br> <br>

                  <input type="button" class="custom_login" onclick="sendRegister()" value="Register"  id="container_captcha2"><br />

                  <p class="custom_login2" onclick="switchView()"  id="container_captcha3">
                    I already have an account
                  </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer section -->
<footer class="footer-section">
  <div class="container">
    <p class="copyright">
      Copyright &copy;
      <script>
        document.write(new Date().getFullYear());
      </script>
      All rights reserved to play.deathspaces.com | This CMS is made with
      <i class="fa fa-heart-o" aria-hidden="true"></i> by ImNotNode
    </p>
  </div>
</footer>
<!-- Footer section end -->
<div id="snackbar">Some text some message..</div>

<?php require_once(INCLUDES . 'footer.php'); ?>