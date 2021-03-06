<?php
/*
 * Index page
 * Author: Vladimir Korennoy (lloft.dark@gmail.com)
 * Date:   16.01.2014
 * 
 */

require '../libs/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rumors.net - see what's on the air now!</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Rumors.net</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="/profile.php">Profile</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    
    <div class="container">

      <div class="jumbotron">
        <h1>Welcome!</h1>
        <p>Introduce your website content using this jumbotron! It's an awesome way to call attention to something that needs to be read! It's also a great alternative to using a banner image if you don't have a good quality picture!</p>
        <p><a class="btn btn-primary btn-large">Register</a></p>
      </div>
      
      <hr>
      
      <div class="row">
        <div class="col-lg-12">
           <h3>Latest rumors</h3>
        </div>
      </div><!-- /.row -->
      
      <div class="row text-center">

        <!-- TEASER BLOCK -->  
        <div class="col-lg-4 col-md-6">
          <div class="thumbnail">
            <div class="caption">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor...</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor quis posuere. Aenean vitae fermentum urna, ut mattis urna. Nam eros justo, sagittis non tincidunt eleifend, accumsan vitae tortor. Nunc eu mollis mauris, vitae interdum metus</p>
              <p align="right"><a href="#" class="btn btn-success">23 <span class="glyphicon glyphicon-thumbs-up"></span></a> 
                 <a href="#" class="btn btn-danger">2 <span class="glyphicon glyphicon-thumbs-down"></span></a>
            </div>
          </div>
        </div>
        <!-- // TEASER BLOCK -->
        
        <div class="col-lg-4 col-md-6">
          <div class="thumbnail">
            <div class="caption">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor...</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor quis posuere. Aenean vitae fermentum urna, ut mattis urna. Nam eros justo, sagittis non tincidunt eleifend, accumsan vitae tortor. Nunc eu mollis mauris, vitae interdum metus</p>
              <p align="right"><a href="#" class="btn btn-success">Like <span class="glyphicon glyphicon-thumbs-up"></span></a> 
                 <a href="#" class="btn btn-danger">Dislike <span class="glyphicon glyphicon-thumbs-down"></span></a>        
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="thumbnail">
            <div class="caption">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor...</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor quis posuere. Aenean vitae fermentum urna, ut mattis urna. Nam eros justo, sagittis non tincidunt eleifend, accumsan vitae tortor. Nunc eu mollis mauris, vitae interdum metus</p>
              <p align="right"><a href="#" class="btn btn-success">Like <span class="glyphicon glyphicon-thumbs-up"></span></a> 
                 <a href="#" class="btn btn-danger">Dislike <span class="glyphicon glyphicon-thumbs-down"></span></a>        
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="thumbnail">
            <div class="caption">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor...</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor quis posuere. Aenean vitae fermentum urna, ut mattis urna. Nam eros justo, sagittis non tincidunt eleifend, accumsan vitae tortor. Nunc eu mollis mauris, vitae interdum metus</p>
              <p align="right"><a href="#" class="btn btn-success">Like <span class="glyphicon glyphicon-thumbs-up"></span></a> 
                 <a href="#" class="btn btn-danger">Dislike <span class="glyphicon glyphicon-thumbs-down"></span></a>        
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="thumbnail">
            <div class="caption">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor...</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor quis posuere. Aenean vitae fermentum urna, ut mattis urna. Nam eros justo, sagittis non tincidunt eleifend, accumsan vitae tortor. Nunc eu mollis mauris, vitae interdum metus</p>
              <p align="right"><a href="#" class="btn btn-success">Like <span class="glyphicon glyphicon-thumbs-up"></span></a> 
                 <a href="#" class="btn btn-danger">Dislike <span class="glyphicon glyphicon-thumbs-down"></span></a>        
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="thumbnail">
            <div class="caption">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor...</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor quis posuere. Aenean vitae fermentum urna, ut mattis urna. Nam eros justo, sagittis non tincidunt eleifend, accumsan vitae tortor. Nunc eu mollis mauris, vitae interdum metus</p>
              <p align="right"><a href="#" class="btn btn-success">Like <span class="glyphicon glyphicon-thumbs-up"></span></a> 
                 <a href="#" class="btn btn-danger">Dislike <span class="glyphicon glyphicon-thumbs-down"></span></a>        
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="thumbnail">
            <div class="caption">
              <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor...</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis fermentum tortor quis posuere. Aenean vitae fermentum urna, ut mattis urna. Nam eros justo, sagittis non tincidunt eleifend, accumsan vitae tortor. Nunc eu mollis mauris, vitae interdum metus</p>
              <p align="right"><a href="#" class="btn btn-success">Like <span class="glyphicon glyphicon-thumbs-up"></span></a> 
                 <a href="#" class="btn btn-danger">Dislike <span class="glyphicon glyphicon-thumbs-down"></span></a>        
            </div>
          </div>
        </div>
          
      </div><!-- /.row -->
      
      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Company 2013</p>
          </div>
        </div>
      </footer>
      
    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>

</html>