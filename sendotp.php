<?php
$otpnum= mt_rand(1000,5000);
$mono=$_GET['mobile'];
echo $mono;
$host="localhost";
$dbusername="root";
$dbpassword ="";
$dbname="userdetail";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
die('Connect Error('.mysqli_connect_errno().')'
	.mysqli_connect_error());
}
else {
$a=0;
$sq="SELECT * FROM otpchecker WHERE mono='$mono'";
$result=$conn->query($sq);
while($row=$result->fetch_assoc())
{if($row['mono']==$mono)
{$a++;}
}
if($a==0)
{
$sql="INSERT INTO otpchecker (mono,otpnum) 
values('$mono','$otpnum')";
}
else{
$sql="UPDATE otpchecker 
SET otpnum='$otpnum' 
where mono='$mono'
";
}
if($conn->query($sql))
{
$apiKey = urlencode('C+I5ino94Zo-Xi4q7Au0hlGYwBo6bvH4dULmKq55Rp');
     // Message details
   $numbers = array($mono);
   $sender = urlencode('TXTLCL');
   $message = rawurlencode($otpnum);
   $numbers = implode(',', $numbers);
   // Prepare data for POST request
   $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
   // Send the POST request with cURL
   $ch = curl_init('https://api.textlocal.in/send/');
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $response = curl_exec($ch);
   curl_close($ch);   
   // Process your response here
echo "OTP Sent";
}
else
{
echo "OTP Not Sent";
}

}



?>