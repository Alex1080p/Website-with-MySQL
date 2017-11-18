<?php
	$con = mysqli_connect("localhost", "fromthenorth","Xk5W17TbzyEi" ,"fromthenorth")
			or die("Failed to connect mysql server " .mysqli_connect_error());
			
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$Battletag=mysqli_real_escape_string($con,$_POST['Battletag']);
$CharacterName=mysqli_real_escape_string($con,$_POST['CharacterName']);
$AGR=mysqli_real_escape_string($con,$_POST['AGR']);
$Klassen=mysqli_real_escape_string($con,$_POST['Klassen']);
$Raidtage=mysqli_real_escape_string($con,$_POST['Raidtage']);
$Raidkoalition=mysqli_real_escape_string($con,$_POST['Raidkoalition']);
$seitwann=mysqli_real_escape_string($con,$_POST['seitwann']);
$Raiderfahrungen=mysqli_real_escape_string($con,$_POST['Raiderfahrungen']);
$Bosskampf=mysqli_real_escape_string($con,$_POST['Bosskampf']);
$Mikrofron=mysqli_real_escape_string($con,$_POST['Mikrofron']);
$specs=mysqli_real_escape_string($con,$_POST['specs']);

$query= "INSERT INTO fromthenorth(username,password,email,Battletag,CharacterName,AGR,Klassen,Raidtage,Raidkoalition,seitwann,Raiderfahrungen,Bosskampf,Mikrofron,specs)
VALUES ('$username','$password','$email','$Battletag','$CharacterName','$AGR','$Klassen','$Raidtage','$Raidkoalition','$seitwann','$Raiderfahrungen','$Bosskampf','$Mikrofron','$specs')";

if(!mysqli_query($con, $query))
{
	echo "Error" .mysqli_error($con);
}
	
?>