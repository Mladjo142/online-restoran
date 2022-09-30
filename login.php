<html> 
<body>
<?php
$imeServera = "localhost";
$username = "root";
$lozinka = "";
$imeBaze = "bazaprojekt";
$KorisnickoIme=$_GET["email1"];
$Lozinka=$_GET["lozinka1"];



// Uspostava konekcije
$konekcija = mysqli_connect($imeServera, $username, $lozinka, $imeBaze);
// Provjera konekcije
if (!$konekcija) {
  die("Konekcija neuspjela: " . mysqli_connect_error());
}


$result = $konekcija -> query("SELECT * FROM Korisnik WHERE KorisnickoIme = '$KorisnickoIme' AND Lozinka = '$Lozinka'");


if(mysqli_num_rows($result)==1){
	session_start();
	$_SESSION["login"] = true;
   	$_SESSION["KorisnickoIme"] = $KorisnickoIme;
	

	$musterija = $konekcija -> query("SELECT * FROM Korisnik WHERE KorisnickoIme = '$KorisnickoIme' AND Lozinka = '$Lozinka' AND Uloga='Musterija'");
	if(mysqli_num_rows($musterija)==1){
	$_SESSION["uloga"] = 'Musterija';
	echo "<script> window.location.assign('indexkorisnik.php'); </script>";
	}
	else{
	$_SESSION["uloga"] = 'Administrator';
	echo "<script> window.location.assign('admin.php'); </script>";
	}
}
else{
	echo "<h1 style='text-align:center;'>Neuspješna prijava!</h1>";
}

$konekcija->close();
?>
</body>
</html> 