<?php
$mobile=$_GET['mobile'];
$otprec=$_GET['otprec'];
$hostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname="userdetail";
$conn=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
die('Connect Error');
}
else{
$sql="SELECT * from otpchecker where mono='$mobile'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
if($row['otpnum']==$otprec)
{
echo "OTP Is Right.";
}
else{
echo "OTP Is Wrong.";
}
}

}

?>