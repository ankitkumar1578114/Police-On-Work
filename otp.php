<?php 
$otpnumber=mt_rand(1,9999);
$textMessage=$otpnumber;
$mobileNumber=$_GET['mobile'];

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
$sql="INSERT INTO otpchecker (mono,otpnum)
values('$mobileNumber','$otpnumber')
";
if($conn->query($sql))
{
$apiKey = urlencode('T0NrwBTz+8w-cTRXujNy00LSr5C6DlKrB8jW1AvvQG');
   
   // Message details
   $numbers = array($mobileNumber);
   $sender = urlencode('TXTLCL');
   $message = rawurlencode($textMessage);
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
   echo "OTP Sent.";



}
}







?>