<?php 
if (isset($_POST["submit"])){
    $name=$_POST["name"];
    $pw=$_POST["pw"];
    $rpw=$_POST["rpw"];
    
}
$conn=mysqli_connect("localhost","root","","goathouse");

$sql="INSERT INTO `goat` ( `name`, `GPassword`, `Confirm`) VALUES ( '$name', '$pw', '$rpw');";
$res=$conn->query($sql);
if($res==true);
{
    header("location:login.html? error=you have register your data with us");
}
?>