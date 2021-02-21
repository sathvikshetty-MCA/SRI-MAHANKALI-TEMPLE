<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `contact`(`firstname`, `lastname`, `district`, `email`, `message`) VALUES ('".$firstname."','".$lastname."','".$district."','".$email."','".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "<h1>Thank You For Contacting Us. Balkur Sri mahankali temple archaka/poojari number: 9876543210 and schedule to the pooja timings</h1>";
$mysqli->close();
?>
<br>
<a href="index.html"><button style="color:red;" class="button"><h2>Back to Sri Mahankali Home page</h2></button></a>