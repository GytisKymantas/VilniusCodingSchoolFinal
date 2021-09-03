<?php 
    session_start();
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

    <link rel="stylesheet" href="css/main.css" />
    <title>Sign up</title>
  </head>

  <body>
    <header class="header">
      <div class="header__container header__signup" id="namai">
        <div class="header__login">
          <div class="header__login-1">
            <!-- <a href="signup.php" class="SignUp">Sign Up</a> -->
            <!-- <ion-icon name="lock-open-outline"></ion-icon
            > -->
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
                                <p style=font-size:2rem;color:orange;margin-top:0.2rem;margin-left:1rem;>Sign up 🖋</p>
                                </form>';
                            }
                            ?>
                        </div>
                        <section class="main-container">
                          <div class="main-wrapper">
                              
                              <?php
                                  if(isset($_SESSION['u_id'])) {
                                      // echo "<p style=font-size:2rem;color:green;>You have succesfully logged in ✔</p>";
                                  }
                              ?>
                          </div>
                        </section>
          </div>
        </div>

        <ul class="header__list">
          <li class="header__list-1">
            <a href="index.php">Home</a>
          </li>
          <li class="header__list-1">
            <a href="#">Sign up</a>
          </li>
          <li class="header__list-1">
            <a href="index.php">Programs</a>
          </li>
          <li class="header__list-1">
            <a href="index.php">Trainers</a>
          </li>
          <li class="header__list-1">
            <a href="index.php">Deals</a>
          </li>
        </ul>

        <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
         </button>


      </div>
    </header>
 


<!-- 
  <div class="policy__container">
    <h1>Policy Reviews</h2>
    <hr class="policy__container-hr"></hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi delectus perferendis sint quas. 
      Itaque maiores ullam illum illo laboriosam dolore, ipsum ipsam. Laborum distinctio recusandae odio qui ut dolorem eveniet.</p>
      <ul>
        <li>Lorem ipsum, dolor sit amet consectetur.</li>
        <li> enim tenetur sint eos, nobis officiis nemo.</li>
        <li>nemo illo accusantium officia magnam quod.</li>
      </ul>
      
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore ea laboriosam nulla explicabo tempore 
      repellat perspiciatis, voluptas doloribus, enim tenetur sint eos, nobis officiis nemo illo accusantium officia magnam quod.</p>

      <ul>
        <li>Lorem ipsum, dolor sit amet consectetur.</li>
        <li> enim tenetur sint eos, nobis officiis nemo.</li>
        <li>nemo illo accusantium officia magnam quod.</li>
      </ul>
  </div>  -->

  <!-- <div class="nav-login">
    <form class="signup-form" action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/email">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submit">Login</button>
    </form>
    <a href="signup.php">Sign up</a>
  </div> -->
  <section class="main-container">
            <div class="main-wrapper-signup">
                <h2>SIGN UP</h2>
                <form class="signup-form" action="includes/signup.inc.php" method="post">
                    <input type="text" name="first" placeholder="First Name">
                    <input type="text" name="last" placeholder="Last Name">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Sign up</button>
                </form>
            </div>

          
      
                    
        </section>





    <footer class="footer" id="footer" style="margin-top:25rem;">
      <ul class="footer__list">
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="index.php">Home</a>
        </li>
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="policy.php">Policy</a>
        </li>
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="policy.php">Terms & conditions</a>
        </li>
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="index.php">Reviews</a>
        </li>
      </ul>

      <span class="copyright"> Copyright <?= date('Y'); ?> by Gytis Kymantas </span>
    </footer>









    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
</body>
</html>