<!DOCTYPE html>

<html>

 <head>
 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  
  <title>Web6Admin</title>
  
  <link rel= "stylesheet" href= "../css/bootstrap.min.css">
  
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
 
 </head>

 <body>
 
  <header>
   <?php include('../php/header-nav.php'); ?>
  </header>        
  
  <section>
    <br>
    <br>
    <br>
    <br>
	  <div class="container col-md-10 bg-info rounded shadow">
        <div id="apache80-row" class="row justify-content-center align-items-center">
          <div id="apache80-column" class="col-md-10">
            <div id="apache80-box" class="col-md-12">
              <form id="login-form" class="form" action="" method="post">
              <br>
              <h1 class="text-center text-secondary"><strong> VirtualHost Apache (port:80) </strong></h1>
              <div class="form-group">
                <label for="ipserver" class="text-dark"><strong> Veuillez renseigner l'IP d'ecoute : (laisser vide si pas utile) </strong></label><br>
                <input type="text" name="ipserver" id="ipserver" class="form-control shadow" placeholder=" IP d'ecoute "> 
              </div>              
              <div class="form-group">
                <label for="url" class="text-dark"><strong> Veuillez renseigner l'URL principale : </strong></label><br>
                <input type="text" name="url" id="url" class="form-control shadow" placeholder=" URL principale ">
              </div>
              <div class="form-group">
                <label for="alias" class="text-dark"><strong> Veuillez renseigner les alias (laisser vide si pas utile, separer avec un espace si plusieurs) : </strong></label><br>
                <input type="text" name="alias" id="alias" class="form-control shadow" placeholder=" alias ">            
              </div>
              <div class="form-group">
                <label for="directory" class="text-dark"><strong> Veuillez renseigner le directory : </strong></label><br>
                <input type="text" name="directory" id="directory" class="form-control shadow" placeholder=" directory ">              
              </div>
              <div class="form-group">
                <label for="acceptip" class="text-dark"><strong> Veuillez renseigner les ip autorisees (laisser vide si pas utile) : </strong></label><br>
                <input type="text" name="acceptip" id="acceptip" class="form-control shadow" placeholder=" IP autorisees ">              
              </div>
              <div class="form-group">
                <label for="acceptuser" class="text-dark"><strong> Veuillez renseigner les utilisateurs autorises (laisser vide si pas utile) : </strong></label><br>
                <input type="text" name="acceptuser" id="acceptuser" class="form-control shadow" placeholder=" Utilisateurs autorises ">              
              </div>
              <div class="form-group text-black"><br>
                <input type="cancel" name="cancel" class="btn btn-danger col-md-3 float-left shadow text-white" value="Cancel">
                <button type="button" name="button" id="btngenerate" class="btn btn-success col-md-3 float-right shadow text-white" data-toggle="modal" data-target="#myModal">Generate</button>
              <br>
              <br>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
  </section>      

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h3 class="modal-title text-right">VirtualHost Apache (HTTP)</h3>
      </div>

      <!-- Modal body -->
      <div class="modal-body bg-info">
          <textarea class="form-control shadow-textarea" rows="20" cols="85">
<VirtualHost *:80>
  DocumentRoot /data/webs/example.com
  ServerName example.tld
  ServerAlias www.example.tld



</VirtualHost>
		  </textarea>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer bg-info">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>
   
   
  <footer>
   <?php include('../php/footer.php'); ?>
  </footer>
        
 </body>
 
</html>