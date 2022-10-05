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
$username = "pzi112022";
$lozinka = "csdigital2022";
$imeBaze = "pzi112022";
$ID=$_GET["id1"];
$Uloga=$_GET["uloga"];





// Uspostava konekcije
$konekcija = mysqli_connect($imeServera, $username, $lozinka, $imeBaze);
// Provjera konekcije
if (!$konekcija) {
  die("Konekcija neuspjela: " . mysqli_connect_error());
}


$result = $konekcija -> query("UPDATE korisnik
				SET Uloga ='$Uloga' 
				WHERE ID='$ID'");

echo "<script> window.location.assign('uprkor.php'); </script>";



$konekcija->close();
?>
</body>
</html> 
