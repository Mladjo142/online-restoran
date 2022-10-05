<html> 
<body>
<?php
$imeServera = "localhost";
$username = "pzi112022";
$lozinka = "csdigital2022";
$imeBaze = "pzi112022";
$KorisnickoIme=$_GET["email"];
$Lozinka=$_GET["lozinka"];
$Lozinka2=$_GET["lozinka2"];
$rowArray = [];


// Uspostava konekcije
$konekcija = mysqli_connect($imeServera, $username, $lozinka, $imeBaze);
// Provjera konekcije
if (!$konekcija) {
  die("Konekcija neuspjela: " . mysqli_connect_error());
}

$result = $konekcija -> query("SELECT * FROM korisnik WHERE KorisnickoIme = '$KorisnickoIme'");

if(mysqli_num_rows($result)!=1){
	if($Lozinka==$Lozinka2){
		//Dodavanje unesenih podataka u tablicu

		$sql = "INSERT INTO korisnik (KorisnickoIme, Lozinka)
		VALUES ('$KorisnickoIme', '$Lozinka');";
						
		
		if ($konekcija->query($sql) === TRUE) {
  			echo "<h1 style='text-align:center;'>Registracija uspješna!</h1>";
			$redak = "INSERT INTO musterija (IDKorisnika) 
			SELECT ID FROM korisnik WHERE KorisnickoIme='$KorisnickoIme';";
			$konekcija->query($redak);

			$uloga = $konekcija -> query("UPDATE Korisnik
				SET Uloga ='Musterija' 
				WHERE KorisnickoIme='$KorisnickoIme'");
			$konekcija->query($uloga);
			
			session_start();
			$_SESSION["login"] = true;
   			$_SESSION["KorisnickoIme"] = $KorisnickoIme;
		
			}
			else {
  			echo "Greska: " . $sql . "<br>" . $konekcija->error;
			}
	}
	else{
	echo "<h1 style='text-align:center;'>Lozinke se ne poklapaju!</h1>";
	}
	}
else{
	echo "Email vec postoji!";
}
$konekcija->close();
?>
</body>
</html> 
