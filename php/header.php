<!DOCTYPE html>

<html  lang= "fr">

 <head>
  
  <title>Web6Admin</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>

 </head>

 <body>
 
  <header>
  
    <nav class="navbar fixed-top bg-dark navbar-dark shadown-lg">
      <a class="navbar-brand" href="#">
      <img src="../docs/logo.png" alt="Logo" style="width:40px;">
      Web6Admin
      </a>
    </nav>

  </header>        
    <form class="container">
        <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
        
            <!-- Icon -->
            <div class="fadeIn first">
              <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
            </div>
        
            <!-- Login Form -->
            <form>
              <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
              <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
              <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
        
            <!-- Remind Passowrd -->
            <div id="formFooter">
              <a class="underlineHover" href="#">Forgot Password?</a>
            </div>
        
          </div>
        </div>
    </form>
 </body>
 
</html>