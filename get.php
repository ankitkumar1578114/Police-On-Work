<?php
$from=$_GET['from'];
$to=$_GET['to'];
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
echo "<table style='width:100%'>";
$sql="SELECT * from chatmsg where (fromuser='$from' and touser='$to') or (fromuser='$to' and touser='$from') ";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
if($row['fromuser']==$from)
{
echo "<tr><td id='mychat'>".$row['msg']."</td></tr>";
}
if($row['fromuser']==$to)
{
echo "<tr><td id='hischat'>".$row['msg']."</td></tr>";
}
}
echo "</table>";
}
?>