<html> 
<body>
<?php
 ob_start();
 session_start(); 

 
	 if($_SESSION["uloga"] != 'Administrator')
	{
		echo "<script> window.location.assign('noaccess.php'); </script>";
	}

$imeServera = "localhost";
$username = "root";
$lozinka = "";
$imeBaze = "bazaprojekt";
$Ime=$_GET["ime"];
$Prezime=$_GET["prezime"];
$BrTel=$_GET["brojtel"];
$Adresa=$_GET["adresa"];
$KorIme= $_SESSION['KorisnickoIme'];



// Uspostava konekcije
$konekcija = mysqli_connect($imeServera, $username, $lozinka, $imeBaze);
// Provjera konekcije
if (!$konekcija) {
  die("Konekcija neuspjela: " . mysqli_connect_error());
}


$result = $konekcija -> query("UPDATE Musterija, Korisnik
				SET Ime ='$Ime', Prezime ='$Prezime', BrojTelefona ='$BrTel', Adresa ='$Adresa' 
				WHERE Musterija.IDKorisnika=Korisnik.ID AND Korisnik.KorisnickoIme='$KorIme'");

echo "<script> window.location.assign('profiladmin.php'); </script>";



$konekcija->close();
?>
</body>
</html> 