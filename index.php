<?php
// starting the session
session_start();
// removing error reporting
error_reporting(0);
require __DIR__.'/app/app.php';


 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/main.css"/>
    <title>PowerHouse</title>
  </head>

  <body>
    <header class="header">
      <div class="header__container" id="namai">
        <div class="header__login">
          <div class="header__login-1">
            
          <!-- Log in button regarding if signed in -->
            <div class="nav-login">
                        <?php 
                            if(isset($_SESSION['u_id'])) {
                                echo '<form action="includes/logout.inc.php" method="post">
                                <ion-icon name="log-out-outline" style=margin-top:0.3rem;></ion-icon>
                                <button class="inputsBtn" type="submit" name="submit">Logout</button></form>
                                <p style=font-size:2rem;color:green;margin-top:0.2rem;>You are succesfully logged in ✔</p>';
                                
                            }else {
                                echo '<form action="includes/login.inc.php" method="post">
                                <input class="inputs" type="text" name="uid" placeholder="Username" />
                                <input class="inputs" type="password" name="pwd" placeholder="Password" />
                                <ion-icon name="lock-open-outline"></ion-icon>
                                <button class="inputsBtn" type="submit" name="submit">Login</button>
                                </form>';
                            }
                            ?>
                        </div>
                       
          </div>
        </div>

        <ul class="header__list">
          <li class="header__list-1">
            <a href="#namas">Home</a>
          </li>
          <li class="header__list-1">
            <a href="signup.php">Sign up</a>
          </li>
          <li class="header__list-1">
            <a href="#programs">Programs</a>
          </li>
          <li class="header__list-1">
            <a href="#trainers">Trainers</a>
          </li>
          <li class="header__list-1">
            <a href="#deals">Deals</a>
          </li>
        </ul>
                            <!-- hidden mob navigation, only appears at certain width -->
        <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
         </button>


      </div>

     <!-- main page -->
      <div class="mainas" id="namas">
        <div class="mainas-container">
          <span class="mainas__header-1"> GO ON,</span>
          <span class="mainas__header"> REACH FOR IT!</span>
        </div>

        <ul class="mainas__list">
          <li>
            <ion-icon name="caret-forward-outline"></ion-icon>Amazing offers
          </li>
          <li>
            <ion-icon name="caret-forward-outline"></ion-icon>Get results quick!
          </li>
          <li>
            <ion-icon name="caret-forward-outline"></ion-icon>Experienced
            Trainers
          </li>
          <li>
            <ion-icon name="caret-forward-outline"></ion-icon>Free one-week
            Trials
          </li>
        </ul>
</div>
    </header>
    <div class="main">
               <!-- Form container -->
      <div class="main__contentleft">
        <div class="main__contentleft-container">
          <h1 class="headerOne">PowerHouse Gym Free trial!</h1>
          <p class="paragraphOne">
            Choose from our various available programs. Enrol today! Receive
            customized meal plan and workout programs specifically for your
            goals.
            <br />
            <br />

            Enter your details and receive a free trial that includes a free 5
            day access to our gyms, as well as a one-time personal training
            session, that includes evaluation and customised screening program
            created specifically for You!
            <br />
            <br />
            Enter your details below and we will contact YOU!


          </p>
         
         <!-- Contact Form -->
        <div class="form__container">
            <form id="contact" action="index.php" method="post">
                <input class="input-1" type="text" placeholder="Your name" id="name" required="required" name="vardas" />
                <input class="input-1"
                      type="email"
                      placeholder="Yourname@email.com"
                      id="email"
                      required="required"
                      name="email"
                    />
                    <div class="knopke">
                      <button class="btn"
                        type="submit"
                        name="submit"
                        
                        id="contact-submit">Submit</button>
                      </div>
            </form>
          </div>
            </div>
        </div>
     
      <!-- Grid Form 2x2 -->
      <div class="main__contentright">
        <div class="main__contentright-grid">
          <div class="main__contentright-grid-1" id="programs">
            <a class="grid-nav" href="#customized"><h2>Customized programs</h2></a>
           
          </div>
          <div class="main__contentright-grid-1">
          <a class="grid-nav" href="#personal"><h2>Personal training</h2></a>
           
          </div>
          <div class="main__contentright-grid-1">
          <a class="grid-nav" href="#loseweight"><h2>Weight loss</h2></a>
         
          </div>
          <div class="main__contentright-grid-1">
          <a class="grid-nav" href="#strength"><h2>Strength training</h2></a>
         
          </div>
        </div>
      </div>
    </div>
    <!-- Intersection -->
    <section class="icons">
      <div class="icons__header">
        <span>Enrol today!</span>   
      </div>
      <div class="icons__container">
        <div class="icons__container-1">
          <ion-icon name="barbell"></ion-icon>
          <h6>Strength</h6>
          <p></p>
        </div>
        <div class="icons__container-1">
          <ion-icon name="pulse"></ion-icon>
          <h6>Lifestyle</h6>
          <p></p>
        </div>
        <div class="icons__container-1">
          <ion-icon name="bicycle-outline"></ion-icon>
          <h6>Endurance</h6>
          <p></p>
        </div>
      </div>
    </section>
    <!-- Program Gallery #1 -->
    <section class="gallery">
      <div class="gallery__container" id="personal">
        <img src="css/images/six-min-resize.jpg" alt="toned" class="gallery__container-img" />

        <div class="gallery__container-text">
          <h2 class="headerOne">Get Toned!</h2>
          <p class="paragraphOne">
            Get a feel of our High Intensity workout routine program designed to
            shake you to the core! Say goodbye to excess weight and stiffness in
            your body. Get a feel what your body is capable and is designed for.
            We guarantee that you will feel it the next day.
          </p>
          <div class="findout__container">
            <a class="findout" href="#">Find More</a>
          </div>
        </div>
      </div>
      
    </section>
    <!-- Program Gallery #2 -->
    <section class="gallery">
      <div class="gallery__container" id="strength">
        <img src="css/images/fullpower-resize.jpg" alt="strength" class="gallery__container-img" />

        <div class="gallery__container-text">
          <h2 class="headerOne">Get Strong!</h2>
          <p class="paragraphOne">
            Our powerlifting program regime will get you to overcome the biggest
            of obstacles. With our experienced trainer, you will be educated in
            the secrets of Powerlifting through the main compound exercises.
          </p>
          <div class="findout__container">
            <a class="findout" href="#">Find More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Program Gallery #3 -->
    <section class="gallery">
      <div class="gallery__container" id="loseweight">
        <img src="css/images/two-min-resize.jpg" alt="weightloss" class="gallery__container-img" />

        <div class="gallery__container-text">
          <h2 class="headerOne">Get Fast!</h2>
          <p class="paragraphOne">
            Our 12 week stamina improving exercise program regime, will get your
            heart racing like never before. With different approaches to
            cardiovascular training specifically guided by our instructor, be
            prepared to reach the best version of yourself.
          </p>
          <div class="findout__container">
            <a class="findout" href="#">Find More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Program Gallery #4 -->
    <section class="gallery">
      <div class="gallery__container">
        <img
          src="css/images/buildmuscle-resize.jpg"
          alt="musclegain"
          class="gallery__container-img"
        />

        <div class="gallery__container-text" id="customized">
          <h2 class="headerOne">Get Muscle</h2>
          <p class="paragraphOne">
            Our 6 month Hypertrophy focused exercise programs will surely show
            its impact. Track your progress each month with your trainer and see
            yourself take shape. Designed specifically to target specific muscle
            groups and to maximize efficiency in gaining size. What are you
            waiting for? 
          </p>
          <div class="findout__container">
            <a class="findout" href="#">Find More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Intersection -->
    <div class="reviews__header_container">
        <h3 class="reviews__header">Meet our Trainers</h3>
      </div>
    <!-- Trainers bio -->
    <section class="reviews" id="trainers">
      
      <div class="reviews__container">
        <div class="reviews__container-holder">
          <!-- langelis -->
          <div class="holder-1 negerai">
            <p class="reviews__container-text">Judy</p>
            <div class="holder-image">
              <img
                src="css/images/trainer1-minimum.jpg"
                alt="trainer1"
                class="reviews__container-faces"
              />
            </div>
            <!-- Achievements -->
            <ul class="reviews__container-info">
              <li>
                <ion-icon name="trophy-outline"></ion-icon>
                Three times winner Miss Physique Arnold Classic
              </li>
              <li>
                <ion-icon name="barbell-outline"></ion-icon>
                10 years of experience in professional bodybuilding
              </li>
              <li>
                <ion-icon name="body-outline"></ion-icon>
                Expert in Weight loss, Rehablitation and Martial arts
              </li>
              <li>
                <ion-icon name="school-outline"></ion-icon>
                Diploma in Kinesiotherapy and Biomechanics
              </li>
            </ul>
          </div>
        </div>
                  <!-- langelis -->
        <div class="reviews__container-holder">
          <div class="holder-1 negerai">
            <p class="reviews__container-text">Jill</p>
            <div class="holder-image">
              <img
                src="css/images/trainer4-minimum.jpg"
                alt="trainer2"
                class="reviews__container-faces"
              />
            </div>
            <!-- Achievements -->
            <ul class="reviews__container-info">
              <li>
                <ion-icon name="trophy-outline"></ion-icon>
                Finalist of Ironnman Triathlon
              </li>
              <li>
                <ion-icon name="barbell-outline"></ion-icon>
                Experienced in Endurance training and Weight loss
              </li>
              <li>
                <ion-icon name="body-outline"></ion-icon>
                Expert working with Women, Rehabilitation, HIIT training
              </li>
              <li>
                <ion-icon name="school-outline"></ion-icon>
                Diploma in Biomechanics
              </li>
            </ul>
          </div>
        </div>
        <div class="reviews__container-holder">
          <div class="holder-1 negerai">
            <p class="reviews__container-text">Joe</p>
            <div class="holder-image">
              <img
                src="css/images/trainer6-minimum.jpg"
                alt="trainer3"
                class="reviews__container-faces"
              />
            </div>

            <ul class="reviews__container-info">
              <li>
                <ion-icon name="trophy-outline"></ion-icon>
                Competitor in Crossfit Open games
              </li>
              <li>
                <ion-icon name="barbell-outline"></ion-icon>
                5 years experience in competitive Powerlifting and Strength
              </li>
              <li>
                <ion-icon name="body-outline"></ion-icon>
                EExpert in functional strength training
              </li>
              <li>
                <ion-icon name="school-outline"></ion-icon>
                Diploma in Strength and Conditioning
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
                          <!-- email catcher -->
    <section class="news-letter">
      <div class="subscription-box">
        <div class="subscription__wrapper">
          <h4 class="subscription__header">SUBSCRIBE TO OUR NEWSLETTER</h4>
          <p class="hearing">Enjoy 10% off your first order!</p>
          <div class="subscription__email">
            <label for="email">Enter your details</label>
            <form id="newsLetterContact" action="index.php" method="post">
           E-mail: <input 
                      type="email"
                      placeholder="Yourname@email.com"
                      
                      required="required"
                      name="email"
                    />
           Name: <input type="text" placeholder="John Smith" required="required" name="vardas" />

          </form>
          </div>
        </div>
      </div>
    </section> 

   


                            <!-- subscription plans -->
    <section id="deals">
      <h3 class="purchases__header">Our Subscription plans</h3>
      <div class="purchase__container">
        <div class="purchase__container-1">
          <span class="purchase__container-price">$33.99</span>
          <h2 class="purchase__container-header">1 month</h2>
          <div class="purchase__container-bigList">
            <ul class="purchase__container-list">
              <li class="badum">24/7 Gym access</li>
              <li class="badum">Access to Pool & Tennis area</li>
              <li class="badum">Access to Fitness classes</li>
              <li>1 training session</li>
            </ul>
            <div class="purchase__Btncontainer">
              <a href="#">Find More</a>
          </div>
          </div>
        </div>
        <div class="purchase__container-1">
          <span class="purchase__container-price">$249.99</span>
          <h2 class="purchase__container-header">12 months</h2>
          <div class="purchase__container-bigList">
            <ul class="purchase__container-list">
              <li class="badum">24/7 Gym access</li>
              <li class="badum">Access to Fitness classes</li>
              <li class="badum">Access to Pool & Tennis area</li>
              <li class="badum">15 training sessions</li>
              <!-- <li class="badum">50% discount on merchandise</li>
              <li>Private locker room</li> -->
            </ul>
            <div class="purchase__Btncontainer">
            <a href="#">Find More</a>
          </div>
          </div>
        </div>
        <div class="purchase__container-1">
          <span class="purchase__container-price">$156.99</span>
          <h2 class="purchase__container-header">6 months</h2>
          <div class="purchase__container-bigList">
            <ul class="purchase__container-list">
              <li class="badum">24/7 Gym access</li>
              <li class="badum">Access to Fitness classes</li>
              <li class="badum">Access to Pool & Tennis area</li>
              <li>10 training sessions</li>
            </ul>
            <div class="purchase__Btncontainer">
            <a href="#">Find More</a>
          </div>
          </div>
        </div>
      </div>
     
  </section>
                            <!-- footer -->
    <footer class="footer" id="footer">
      <ul class="footer__list">
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="#namai">Home</a>
        </li>
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="policy.php">Policy</a>
        </li>
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="policy.php">Terms & conditions</a>
        </li>
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="#deals">Reviews</a>
        </li>
      </ul>

      <span class="copyright"> Copyright <?= date('Y'); ?> by Gytis Kymantas </span>
    </footer>

    <!-- Ion-icons -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery/index.js"></script>
  
  </body>
</html>
