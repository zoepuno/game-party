<?php 
session_start();

session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>


</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gameparty</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <a href= "logout.php">Logout</a>
  </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>

          <div class="navbar-brand">
            <a href="index.php"><h1>gameparty</h1></a>
            <p>
              
              <br>
					Hello, <?php echo $user_data['user_name'];?>
            </p>
          </div>

          <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li class="visible-xs active">
              <a href="index.php">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
              <a href="accounts.php">
                <span class="#"></span><br class="hidden-xs"> ABC Games</a>
            </li>
            <li>
              <a href="accounts.php">
                <span class="#"></span><br class="hidden-xs"> Math Games</a>
            </li>
            <li>
              <a href="accounts.php">
                <span class="#"></span><br class="hidden-xs"> Cool Games!</a>
            </li>
            <li>
              <a href="accounts.php">
                <span class="#"></span><br class="hidden-xs"> Art Games</a>
            </li>
            <li>
              <a href="accounts.php">
                <span class="#"></span><br class="hidden-xs"> Accounts</a>
            </li>
           
          
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>

  <div id="call-btn" class="visible-xs">
    <a class="btn" href="tel:123-456-7890">
    <span class="glyphicon glyphicon-earphone"></span>
    123-456-7890
    </a>
  </div>
  <div id="xs-deliver" class="text-center visible-xs"></div>

  <div id="main-content" class="container">
    <!--<div class="jumbotron">
      <img src="images/jumbotron_768.jpg" alt="Picture of restaurant" class="img-responsive visible-xs">
    </div>-->

    <div id="home-tiles" class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="menu-categories.html"><div id="math-tile"><span>Math Games</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="single-category.html"><div id="art-tile"><span>Art Games</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="single-category.html"><div id="alphabet-tile"><span>ABC Games</span></div></a>
      </div>
            
    
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="menu-categories.html"><div id="game-tile"><span>Cool Games</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="single-category.html"><div id="tbd-tile"><span>tbd</span></div></a>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <a href="single-category.html"><div id="tbd-tile"><span>tbd</span></div></a>

      </div>

    </div><!-- End of #home-tiles -->
  </div><!-- End of #main-content -->

  <footer class="panel-footer">
    <div class="container">
      <div class="row">
       
  </body>
        <section id="address" class="col-sm-4">
          <span>Contact:</span><br>
          gameparty@gmail.com<br>
          
          <hr class="visible-xs">
        </section>
        <section id="testimonials" class="col-sm-4">
          <p>"This website has helped my kid so much!                            -Parent"</p>
          <p>"I have learned so much from this website!                          - Kid"</p>
        </section>
      </div>
            <div class="text-center">&copy; Copyright gameparty 2022</div>

    </div>
  </footer>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
