
<?php
$complainer_name="";
$complainer_num="";
$complainer_email="";
$complainer_address="";
$complainer_city="";
$complainer_state="";
$complainer_country="";
$complainer_aga_name="";
$complainer_aga_num="";
$complainer_aga_address="";
$complainer_aga_city="";
$complainer_aga_state="";
$complainer_aga_country="";
$complaint="";
;


if($_SERVER['REQUEST_METHOD']=="POST"){

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}	
	
$complainer_name=$_POST['complainer_name'];
$complainer_num=$_POST['complainer_num'];
$complainer_email=$_POST['complainer_email'];
$complainer_address=$_POST['complainer_address'];
$complainer_city=$_POST['complainer_city'];
$complainer_state=$_POST['complainer_state'];
$complainer_country=$_POST['complainer_country'];
$complainer_aga_name=$_POST['complainer_aga_name'];
$complainer_aga_num=$_POST['complainer_aga_num'];
$complainer_aga_address=$_POST['complainer_aga_address'];
$complainer_aga_city=$_POST['complainer_aga_city'];
$complainer_aga_state=$_POST['complainer_aga_state'];
$complainer_aga_country=$_POST['complainer_aga_country'];
$complaint=$_POST['complaint'];

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="userdetail";
$conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
die('connect Error('.mysqli_connect_error().')'
   .mysqli_connect_error());
}
else
{
  if (empty($complainer_name)) {
    echo'<script>alert("Name is required");</script>';
    
  }
  else {
    $name = test_input($complainer_name);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$complainer_name)) {
        echo "<script>alert('Only letters and white space allowed'); </script>";
	    
     }
	 else{
		$sq = "INSERT INTO user_complain(Name_of_Complainer) values('$complainer_name')";
		if($conn->query($sq)){	
		}
	}
  }

  if(empty($complainer_num)) {
    echo'<script>alert("Number is required");</script>';
    
  }
  else {
    $number = test_input($complainer_num);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[0-9]*$/",$complainer_num)) {
      echo"<script>alert('only number');</script>";
           
	 }
	 else{
		$sq = "UPDATE user_complain
            SET Mobile = '$complainer_num'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
  }
  }






    if(empty($complainer_email)) {
        echo"<script>alert('email is required');</script>";
	    }
	else {
    $email = test_input($complainer_email);
    // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             echo"<script>alert('Invalid email format');</script>";
                
	}
    	else{
		 $sq = "UPDATE user_complain
            SET email = '$complainer_email'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
		}
			
	}

  if(empty($complainer_address)) {
     echo"<script>alert('Address is required');</script>";
     
  }
  else {
    $adress = test_input($complainer_address);
    // check if name only contains letters and whitespace
		$sq = "UPDATE user_complain
            SET Address = '$complainer_address'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
   } 
  
  
  if(empty($complainer_city)) {
     echo"<script>alert('City is required');</script>";
   
  }
  else {
    $city = test_input($complainer_city);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$complainer_city)) {
       echo"<script>alert('Only letter and white space is allowed');</script>";
          
	}
	 else{
		$sq = "UPDATE user_complain
            SET City = '$complainer_city'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
         }
  }	

  if(empty($complainer_state)) {
    echo"<script>alert('State is required');</script>";
    
  }
  else {
    $state = test_input($complainer_state);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$complainer_state)) {
      echo"<script>alert('Only letter and white space is allowed');</script>";
     
	 }
	 else{
		$sq = "UPDATE user_complain
            SET State = '$complainer_state'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
         }
  }

  if(empty($complainer_country)) {
    echo"<script>alert('Country is required');</script>";
    
  }
  else {
    $country= test_input($complainer_country);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$complainer_country)) {
      echo"<script>alert('Only letter and white space is required');</script>";
      
	 }
	 else{
		$sq = "UPDATE user_complain
            SET Country = '$complainer_country'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
        }
   }

  if(empty($complainer_aga_name)) {
    echo"<script>alert('Name is required');</script>";
    
  }
  else {
    $name_aga = test_input($complainer_aga_name);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$complainer_aga_name)) {
      echo"<script>alert('Only letter and white space is allowed');</script>";
     
	 }
	 else{
		$sq = "UPDATE user_complain
            SET Name_of_person_against = '$complainer_aga_name'
			WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
        }
    }


  if(empty($complainer_aga_num)) {
     echo"<script>alert('Number is required');</script>";
     
  }
  else {
    $num_aga = test_input($complainer_aga_num);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[0-9]*$/",$complainer_aga_num)) {
       echo"<script>alert('Number is required');</script>";
      
	 }
	 else{
		$sq = "UPDATE user_complain
            SET Mobile_against = '$complainer_aga_num'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
         }
  }
  
  if(empty($complainer_aga_address)) {
     echo"<script>alert('Address is required');</script>";
    
  }
  else {
        $adress_aga= test_input($complainer_aga_address);
		$sq = "UPDATE user_complain
            SET Address_against = '$complainer_aga_address'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
  }
   
 
  if(empty($complainer_aga_city)) {
     echo"<script>alert('City is required');</script>";
    
  }
  else {
    $city_aga = test_input($complainer_city);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$complainer_city)) {
        echo"<script>alert('Only letter and white space is allowed');</script>";
      
	 }
	 else{
		$sq = "UPDATE user_complain
            SET City_against = '$complainer_aga_city'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
         }
   } 
  
  if(empty($complainer_aga_state)) {
     echo"<script>alert('state is required');</script>";
    
  }
  else {
    $state_aga = test_input($complainer_aga_state);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$complainer_aga_state)) {
       echo"<script>alert('Only letter and white space is allowed');</script>";
      
	 }
	 else{
		$sq = "UPDATE user_complain
            SET State_against = '$complainer_aga_state'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
         }
  }

  if(empty($complainer_aga_country)) {
     echo"<script>alert('Country is required');</script>";
    
  }
  else {
      $country_aga = test_input($complainer_aga_country);
    // check if name only contains letters and whitespace
     if(!preg_match("/^[a-zA-Z ]*$/",$complainer_aga_country)) {
        echo"<script>alert('Only letter and white space is allowed');</script>";
  	 }
	 else{
		$sq = "UPDATE user_complain
            SET Country_against= '$complainer_aga_country'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
         }
  }


  if(empty($complaint)) {
     echo"<script>alert('Complaint is required');</script>";
      
  }
  else {
        $comp = test_input($complaint);
		$sq = "UPDATE user_complain
            SET Details_of_complaint = '$complaint'
            WHERE Name_of_Complainer = '$complainer_name'";
			if($conn->query($sq)){		
			}
     }   
 




}
}

?>







<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initil-scale=1">
	<title>details</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

<script>
$(document).ready(function(){
var i = (Math.floor(Math.random()*1000000));	
document.getElementById("code").innerHTML= i;
});	
</script>
<style>
#complainant_details{
  width:45%;
  font-size:20px;
  
height:250px;

float:left;

}
#complaint_against{
width:45%;
font-size:20px;
height:250px;
margin-left:50%;

}
#cmd,#cd,#ca{
border:1px #700808;
background :#700808;X

  font-size: 25px;
  color:white;
  font-family: arial;
  font-weight: 600;

}
td{
  width:50%;
}
input{
  width:250px;
  box-shadow:0 0 0.6px;
  font-size: 20px;
}
#complaint_details{

margin-top:50px;
width: 650px;

}
@media (max-width: 780px){
  #complaint_against{
    float:none;
    width:100%;
    margin-top: 110px;
    margin-left:0px;

  }
  #complainant_details{
    width:100%; 
    float:none;
  }
  #complaint_details{
    width:100%;
  }
}
@media (max-width: 450px){
input{
width:100%;
}

}


</style>
</head>
<body>

  <div style="font-size: 39px; font-family: arial; text-align:center;background:maroon;color:white;padding:5px;">MP POLICE</div><br>
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">

  <div  style="width:100%;">
    <div id="complainant_details"><div id="cd">Complainant Details</div>
    <table>
         <tr><td> Name of complainant *</td><td> <input type="text" name="complainer_name"></td></tr>
         <tr><td> Mobile/Phone *</td><td> <input type="text" name="complainer_num"></td></tr>
          <tr><td>E-mail Address * </td><td><input type="email" name="complainer_email"></td></tr>
         <tr><td> Address * </td><td><input type="text" name="complainer_address"></td></tr>
         <tr><td> City</td><td> <input type="text" name="complainer_city"></td></tr>
           <tr><td> State</td><td> <input type="text" name="complainer_state"></td></tr>
         <tr><td> Country</td><td><input type="text" name="complainer_country"></td></tr>
        </table>
            <br><br>


    </div>
    <div id="complaint_against"><div id="ca">Complaint Against</div>
  <table>
         <tr><td> Name of person</td><td> <input type="text" name="complainer_aga_name"></td></tr>
         <tr><td> Mobile/Phone</td><td> <input type="text" name="complainer_aga_num"></td></tr>
          <tr><td> Address </td><td><input type="email" name="complainer_aga_address"></td></tr>
         <tr><td> City</td><td><input type="text" name="complainer_aga_city"></td></tr>
         <tr><td> State</td><td> <input type="text" name="complainer_aga_state"></td></tr>
         <tr><td> Country</td><td><input type="text" name="complainer_aga_country"></td></tr>
        </table>
            <br><br>

    
  </div>
    
  </div>
<div id="complaint_details">
  <div id="cmd">Complaint Details</div><br>
  <table>
<tr><td style="font-size: 20px;">Details of Complaint *</td><td > </td></tr><br>
<tr><td><input type="text" name="complaint" style="width:220%;"></td></tr>
<tr><td></td><td><span style="font-weight:700;font-size:18px;">Enter The Code Showing Above</span></td></tr><br>
<tr><td style="font-size: 20px;">Security Code *</td><td><input type="text" style="float:left; font-size:18px;width:40%; font-weight:700;">  &nbsp; </td></tr>
<tr><td></td><td><input type="Submit" style="outline:none;border:2px solid teal;padding-top:3px;padding-bottom:3px;padding-left:10px;padding-right:10px;margin-top:10px;border-radius:5px;background-color:teal;color:white;width:auto;" ></td></tr>
</table>
</form>
</div>
</body>
</html>