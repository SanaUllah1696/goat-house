<?php 
if (isset($_POST["submit"])){
    $name=$_POST["name"];
    $pw=$_POST["pw"];
    
    
}
$conn=mysqli_connect("localhost","root","","goathouse");

$sql="select * from goat where `name`='$name' and `GPassword`='$pw';";
$res=$conn->query($sql);
if(mysqli_num_rows($res)===1){
    $row=mysqli_fetch_assoc($res);
    if($row['name']===$name && $row['GPassword']===$pw){
        echo 'logined in successfully';
        $_SESSION['name']=$row['name'];
        $_SESSION['pw']=$row['GPassword']; 
        $_SESSION['id']=$row['Sno'];
        header("location:index.php? loged in");
        exit();
        
    } 
    else {
        header("location:index.html? error=Incorrect Password and Name");
        exit();
    }
}
else {
    header("location:index.html? error=Incorrect Password and Name");
    exit();
}


?>