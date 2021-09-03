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
            
            <div class="nav-login">
                        <?php 
                            if(isset($_SESSION['u_id'])) {
                                echo '<form action="includes/logout.inc.php" method="post">
                                <ion-icon name="log-out-outline" style=margin-top:0.3rem;></ion-icon>
                                <button class="inputsBtn" type="submit" name="submit">Logout</button></form>
                                ';
                                
                            }else {
                                echo '<form action="includes/login.inc.php" method="post">
                                <input class="inputs" type="text" name="uid" placeholder="Username" />
                                <input class="inputs" type="password" name="pwd" placeholder="Password" />
                                <p style=font-size:2rem;color:orange;margin-top:0.2rem;margin-left:1rem>Policy📜 </p>';
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
            <a href="signup.php">Sign up</a>
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
 



  <div class="policy__container">
    <h1>Policy Reviews</h2>
    <h2 style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
      <div class="policy__wrapper">
     <div class="policy__list">
      <ul>#1
        <li>Lorem ipsum, dolor sit amet consectetur.</li>
        <li> enim tenetur sint eos, nobis officiis nemo.</li>
        <li>nemo illo accusantium officia magnam quod.</li>
      </ul>
      </div>
      <div class="policy__list">
      <ul>#2
        <li>Lorem ipsum, dolor sit amet consectetur.</li>
        <li> enim tenetur sint eos, nobis officiis nemo.</li>
        <li>nemo illo accusantium officia magnam quod.</li>
      </ul>
      </div>
      <div class="policy__list">
      <ul> 3#
        <li>Lorem ipsum, dolor sit amet consectetur.</li>
        <li> enim tenetur sint eos, nobis officiis nemo.</li>
        <li>nemo illo accusantium officia magnam quod.</li>
      </ul>
      </div>
      </div>
      <h2 style="text-align:center;">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
      repellat perspiciatis.</h2>
      <div class="policy__wrapper">
     <div class="policy__list">
      <ul>#4
        <li>Lorem ipsum, dolor sit amet consectetur.</li>
        <li> enim tenetur sint eos, nobis officiis nemo.</li>
        <li>nemo illo accusantium officia magnam quod.</li>
      </ul>
      </div>
      <div class="policy__list">
      <ul>#5
        <li>Lorem ipsum, dolor sit amet consectetur.</li>
        <li> enim tenetur sint eos, nobis officiis nemo.</li>
        <li>nemo illo accusantium officia magnam quod.</li>
      </ul>
      </div>
      <div class="policy__list">
      <ul> 6#
        <li>Lorem ipsum, dolor sit amet consectetur.</li>
        <li> enim tenetur sint eos, nobis officiis nemo.</li>
        <li>nemo illo accusantium officia magnam quod.</li>
      </ul>
      </div>
      </div>
  </div>  

  




    <footer class="footer" id="footer" style="margin-top:25rem;">
      <ul class="footer__list">
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="index.php">Home</a>
        </li>
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="index.php">Policy</a>
        </li>
        <li class="footer__list-1">
          <a class="footer__list-anchor" href="index.php">Terms & conditions</a>
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