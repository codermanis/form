<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_Name="sharma";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_Name);

if(!$conn){
    echo"Connection faild". mysqli_connect_error();
    exit;
}
$name = $_POST['name'];
$email = $_POST['email'];
$password= $_POST['password'];
$phoneno = $_POST['number'];

$sql = "INSERT INTO registretion VALUES('$name','$email','$password','$phoneno')";

$result = mysqli_query($conn,$sql);

if(!$result)
{   
echo "Error:". mysqli_error($conn);
exit;
}
echo"Registretion succesful";
mysqli_close($conn);
?>