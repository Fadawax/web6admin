<!DOCTYPE html>

<html  lang= "fr">

 <head>
 
  <meta charset="utf-8" />
  <meta name= "viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no" >
  
  <title>Web6Admin</title>
  
  <link rel= "stylesheet" href= "css/bootstrap.min.css">
  
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>

 </head>

 <body>
 
  <header>
    <nav class="navbar fixed-top bg-dark navbar-dark">
      <a class="navbar-brand" href="#">
      <img src="docs/logo.png" alt="Logo" style="width:40px;">
      Web6Admin
      </a>
    </nav>
  </header>        
  
  <section>
    <div id="login">
        <h3 class="text-center text-white pt-5"> Connexion </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info"> Connexion </h3>
                            <div class="form-group">
                                <label for="username" class="text-info"> Utilisateur : </label><br>
                                <input type="text" name="username" id="username" class="form-control shadow">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info"> Mot de passe : </label><br>
                                <input type="password" name="password" id="password" class="form-control shadow">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md shadow center" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>      
  
  <footer>
   <?php include('php/footer.php'); ?>
  </footer>

 </body>
 
</html>