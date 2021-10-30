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
$sql = "SELECT * FROM  registretion";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo"Error:".mysqli_error($conn);
    exit;
}
while($row=mysqli_fetch_assoc($result)){
    echo $row['name']."<br/>";
    echo $row['email']."<br/>";
    echo $row['password']."<br/>";
    echo $row['number']."<br/><br/>";


}
mysqli_close($conn);
?>