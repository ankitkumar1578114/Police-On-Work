<?php
$mobile=$_GET['mobile'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="userdetail";
$count=0;
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
echo "Connect error";
}
else{
$sql="SELECT * FROM userdetail WHERE mobile='$mobile' ";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
$count++;
}
echo $count;
}
?>