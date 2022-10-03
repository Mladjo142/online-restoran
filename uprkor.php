<!doctype html>

<?php
   ob_start();
   session_start();


	 if($_SESSION["uloga"] != 'Administrator')
	{
		echo "<script> window.location.assign('noaccess.php'); </script>";
	}
   
?>

<html lang="en">
  <head>
	
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <!-- Font Awesome -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
    <title> 
        Online dostava 
    </title> 
      <link rel = "icon" href =  "https://www.eart.hr/wp/wp-content/uploads/2016/11/besplatna-dostava.jpg?x10208" 
        type = "image/x-icon"> 
  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">DOSTAVA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
          </li>
	<li class="nav-item">
            <a class="nav-link" href="meniadmin.php">Meni</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="infoadmin.php">Informacije</a>
        </li>
                                   
          <li class="nav-item">
            <a class="nav-link" href="https://docs.google.com/document/u/2/d/1zyIfRIKb6JzAWilsPo4BWCkiWTeSeymO0CA2t6ucbSQ/mobilebasic" target="_blank">Vizija</a>
        </li>     
        </ul>
        
        <!--Modal: Login / Register Form-->

<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
<form action="login.php" method="GET">
                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate" name="email1">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="lozinka1">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Lozinka</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Zatvori</button>
</div>

            
</form>

          </div>
          <!--/.Panel 7-->


          <!--Panel 8-->

          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
	<form action="register.php" method="GET">
                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" name="email">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="lozinka">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Lozinka</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate" name="lozinka2">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Ponovite lozinku</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Registriraj se! <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Zatvori</button>
	</form>
            </div>
          </div>
          <!--/.Panel 8-->


        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->
<div>
            <a style="color:gray; text-decoration: none; margin-right:10px;" href="#">Upravljanje korisnicima</a>
        </div>
<div>
            <a style="color:gray; text-decoration: none;" href="profiladmin.php">Profil</a>
        </div>
<div class="text-center">
      
  <a class="btn btn-default btn-rounded my-3" href="index.php">
    Odjava</a>
</div>
      </div>
    </nav>


 <div style="overflow:auto; height:500px; font-size: 20px;"> 
<?php
$imeServera = "localhost";
$username = "pzi112022";
$lozinka = "csdigital2022";
$imeBaze = "pzi112022";

// Kreiranje konekcije
$konekcija = new mysqli($imeServera, $username, $lozinka, $imeBaze);
// Provjera konekcije
if ($konekcija->connect_error) {
  die("Konekcija neuspjela: " . $konekcija->connect_error);
}

/*Odabir svih podataka za prikaz u tablici, funkcija num_rows()
provjerava da li je odabrano više od 0 redaka. Ako postoji više
od 0 redaka, funkcija fetch_assoc() ispisuje sve podatke u tablicu.
*/

$sql = "SELECT ID, KorisnickoIme, Uloga FROM Korisnik";
$ispis = $konekcija->query($sql);

if ($ispis -> num_rows > 0) {
	echo "<table style='border: 1px solid black; width: 80%; margin-left: 10%; margin-top:3%'><tr><th style='border: 1px solid black; height: 50px; padding-left: 15px;'>ID</th><th style='border: 1px solid black; height: 50px; padding-left: 15px;'>E-mail</th><th style='border: 1px solid black; height: 50px; padding-left: 15px;'>Uloga</th></tr>";
  while($redak = $ispis->fetch_assoc()) {
    echo "<tr><td style='border: 1px solid black; height: 50px; padding-left: 15px;'>" . $redak["ID"]. 
	"</td><td style='border:1px solid black; height: 50px; padding-left: 15px;'>" . $redak["KorisnickoIme"]. "</td><td style='border:1px solid black; height: 50px; padding-left: 15px;'>" . $redak["Uloga"]. "</td></tr>";
  }
echo "</table>";
} else {
  echo "0 rezultata";
}
$konekcija->close();
?> 
</div><br><br>

<div style="height: 400px;">
<form action="delete.php" method="GET" style="width: 20%; display: inline-block;  margin-left: 15%;position: absolute">
	<h4>Za brisanje korisnika unesite njegov ID: </h4><input type="text" name="id"><br><br><br>
	<br><button type="submit" name="obriši" style="width:200px; background-color:red; border-radius:25px;">Brisanje Korisnika</button><br>
</form>
<form action="updateuloga.php" method="GET" style="width: 20%; display: inline-block;  margin-left: 60%; position: absolute">
	<h4>Za izmjenjivanje uloge korisnika unesite njegov ID i ulogu:</h4> <input type="text" name="id1"><br>
	<label for="uloga"><h5>Odaberite ulogu:</h5></label>
  	<select id="uloga" name="uloga">
    		<option value="Administrator">Administrator</option>
    		<option value="Musterija">Mušterija</option>
  	</select><br>
	<br><button type="submit" name="pruloge" style="width:200px; border-radius:25px;">Promjena uloge</button><br>
</form>
</div>


<div id="footer">
    <footer class="page-footer font-small unique-color-dark">

      <div style="background-color: #6351ce;">
        <div class="container">
      <div class="row py-4 d-flex align-items-center">
          </div>
        </div>
      </div>
      
    
      <div class="container text-center text-md-left mt-5">

        <div class="row mt-3">
 
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <h6 class="text-uppercase font-weight-bold">Credits</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>Mladen Šego</p>
            <p> Ante Soldo  </p>
            <p> Matej Dragičević </p>
           </div>

           <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <h6 class="text-uppercase font-weight-bold">Kontakt</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
           
             <p> <i class="fas fa-envelope mr-3"></i>Matej.dragicevic@fpmoz.sum.ba</p>
                 <p> <i class="fas fa-envelope mr-3"></i>antesoldo1911@gmail.com</p>
              <p>
                <p>
                  <i class="fas fa-envelope mr-3"></i> Mladen.sego@fpmoz.sum.ba</p>
                <p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
    
            <h6 class="text-uppercase font-weight-bold">Korisni linkovi</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 120px;">
            <p>
              <a href="https://www.w3schools.com/" target="_blank">w3schools</a>
            </p>
            <p>
              <a href="https://www.udemy.com/" target="_blank">Udemy</a>
            </p>
            <p>
              <a href="https://www.youtube.com/" target="_blank">YouTube</a>
            </p>
  
          </div>
       
        
        
    
        </div>
      
    
      </div>
    
    
    <hr>
    <div id="copy">
      <div class="footer-copyright text-center py-3">© 2022 FPMOZ
        <p> PZI </p>
      </div>
    </div>
    
    </footer>
  </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>
