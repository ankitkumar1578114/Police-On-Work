<?php
$mobile="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
$what=$_POST['what'];
if($what=="signup"){
$email=$_POST['email'];
$fname=$_POST['firstname'];
$sname=$_POST['secondname'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
if($password==$conpassword && !empty($password) &&strlen($password)>5)
{
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
$sql="INSERT INTO userdetail (email,password,fname,sname,mobile)
values('$email','$password','$fname','$sname','$mobile')
";
if($conn->query($sql))
{
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
$("#signuppage").show();
$( "#mobile" ).prop( "disabled", true );
$("#info").hide();
$("#otppage").show();
document.getElementById("background").style.filter="blur(5px)";
var xml= new XMLHttpRequest();
  xml.open("GET","otp.php?mobile="+<?php echo $mobile ?>,true)
  xml.send();
  xml.onreadystatechange=function(){
  if(xml.readyState==4&&xml.status==200)
  {
  alert(xml.responseText);
  }
  }

});
</script>
<?php
}
else{
echo "Not Sent";
}
}
}
}

if($what=="signupfp"){
$email=$_POST['email'];
$fname=$_POST['policesn'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
if($password==$conpassword && !empty($password) &&strlen($password)>5)
{
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
$sql="INSERT INTO policedetail (email,password,policesn,mobile)
values('$email','$password','$fname','$mobile')
";
if($conn->query($sql))
{
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
$("#signuppage").show();
$( "#mobile" ).prop( "disabled", true );
$("#info").hide();
$("#otppage").show();
document.getElementById("background").style.filter="blur(5px)";
var xml= new XMLHttpRequest();
  xml.open("GET","otp.php?mobile="+<?php echo $mobile ?>,true)
  xml.send();
  xml.onreadystatechange=function(){
  if(xml.readyState==4&&xml.status==200)
  {
  alert(xml.responseText);
  }
  }

});
</script>
<?php
}
else{
echo "Not Sent";
}
}
}
}



if($what=="login")
{
$mobile=$_POST['loginmobile'];
$password=$_POST['loginpassword'];
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
$sql="SELECT * from userdetail where mobile='$mobile'";
$result1 = mysqli_query($conn,$sql);
$resultcheck1 = mysqli_num_rows($result1);        
if($resultcheck1==0)
{
?>
<script type="text/javascript">
alert("Sign Up First");
</script>
<?php
}
if ($resultcheck1>0) {
while($row=$result1->fetch_assoc())
{
if($row['password']==$password)
{
session_start();
$_SESSION['mobile']=$mobile;
$_SESSION['seenou']=0;
$_SESSION['seenop']=0;

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
window.location.href = "cases.php";
});
</script>
<?php
}
else{
?>
<script>
alert("Mobile No or Password is Incorrect.")
</script>

<?php

}
}

}
}
}



if($what=="loginfp")
{
$mobile=$_POST['loginmobile'];
$password=$_POST['loginpassword'];
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
$sql="SELECT * from policedetail where mobile='$mobile'";
$result1 = mysqli_query($conn,$sql);
$resultcheck1 = mysqli_num_rows($result1);        
if($resultcheck1==0)
{
?>
<script>
alert("Sign Up First");
</script>
<?php
}
if ($resultcheck1>0) {
while($row=$result1->fetch_assoc())
{
if($row['password']==$password)
{
session_start();
$_SESSION['mobilep']=$mobile;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
window.location.href = "admin.php";
});
</script>
<?php
}
else{
?>
<script>
alert("Mobile No or Password is Incorrect.")
</script>

<?php

}
}
}

}

}



}

?>

<!DOCTYPE html>

<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
  function checkotp(){
  $(document).ready(function(){
  var mobile=document.getElementById('mobile').value;    
  var otprec=document.getElementById('otprec').value;
  var xml= new XMLHttpRequest();
  xml.open("GET","checkotp.php?mobile="+mobile+"&otprec=+"+otprec,true);
  xml.send();
  xml.onreadystatechange=function(){
  if(xml.readyState==4&&xml.status==200)
  {
  alert(xml.responseText);
  }
  }
  });
  }




	$(document).ready(function(){
  $("#bar").click(function(){
  $("#slider").show(); 
  });
  $("#back").click(function(){
  $("#slider").hide(); 
  });
  $("#tps").click(function(){
  $("#slider").hide(); 
   $('html, body').animate({
        'scrollTop' : $("#xyzan").position().top
    });

  });
  $("#feat").click(function(){
  $("#slider").hide(); 
   $('html, body').animate({
        'scrollTop' : $("#whatwedo").position().top
    });

  });
    $("#cu").click(function(){
  $("#slider").hide(); 
   $('html, body').animate({
        'scrollTop' : $("#contactus").position().top
    });

  });


  $("#si").click(function(){
  $("#slider").hide();
  $("#inf").show();
 document.getElementById('background').style.filter="blur(5px)";
  });
  $("#sufpb").click(function(){
  $("#signupfp").show();
 document.getElementById('background').style.filter="blur(5px)";
  });

  $("#sifa").click(function(){
  $("#slider").hide();
  $("#signupfp").show();
 document.getElementById('background').style.filter="blur(5px)";
  });
  $("#sufpb").click(function(){
  $("#signupfp").show();
 document.getElementById('background').style.filter="blur(5px)";
  });



  $("#lfpb").click(function(){
  $("#lfu").hide();
  $("#lfp").show(); 
  });
	$("#lfub").click(function(){
  $("#lfp").hide();
  $("#lfu").show(); 
  });
  
  $("#sufub").click(function(){
  $("#inf").show();
 document.getElementById('background').style.filter="blur(5px)";
  });
  $("#sufpb").click(function(){
  $("#signupfp").show();
 document.getElementById('background').style.filter="blur(5px)";
  });
  

  $("#signup").click(function(){
	$("#inf").show();
 document.getElementById('background').style.filter="blur(5px)";
  });
    $("#cross").click(function(){
  $("#inf").hide();
 document.getElementById('background').style.filter="blur(0px)";
 });
    $("#signupfa").click(function(){
  $("#signupfp").show();
 document.getElementById('background').style.filter="blur(5px)";
 });
    $("#crossan").click(function(){
  $("#signupfp").hide();
 document.getElementById('background').style.filter="blur(0px)";
 });


	});
  function checkpass(){
  $(document).ready(function(){
 
 var firstpass=document.getElementById("pass_box").value;
 var secondpass=document.getElementById("conpass_box").value;
 if(firstpass!=secondpass)
 {
 alert("Password Should be same."); 
 }
 else{
  var strlen=firstpass.length;
  if(strlen==0)
  {
  alert("Password should not be empty.");
  }
  else{
  if(strlen>"6")
  {
  }
  else{
  alert("Password should have at least 6 characters.");
  }
  }
 }
  });
  }
  function checkpassfp(){
  $(document).ready(function(){
 
 var firstpass=document.getElementById("pass_boxp").value;
 var secondpass=document.getElementById("conpass_boxp").value;
 if(firstpass!=secondpass)
 {
 alert("Password Should be same."); 
 }
 else{
  var strlen=firstpass.length;
  if(strlen==0)
  {
  alert("Password should not be empty.");
  }
  else{
  if(strlen>"6")
  {
  }
  else{
  alert("Password should have at least 6 characters.");
  }
  }
 }
  });
  }

  function checkpassword(){
  $(document).ready(function(){
 
 var firstpass=document.getElementById("pass_box").value;
 var secondpass=document.getElementById("conpass_box").value;
 if(firstpass!=secondpass)
 {
 alert("Account Could Not Created. Because Password should be same."); 
   return false;

 }
 else{
  var strlen=firstpass.length;
  if(strlen>"6")
  {
  }
  else{
  alert("Account Could Not Created. Because Password should have at least 6 characters.");
  return false;
  }
  }
  });
  }
  function checkpasswordfp(){
  $(document).ready(function(){
 
 var firstpass=document.getElementById("pass_boxp").value;
 var secondpass=document.getElementById("conpass_boxp").value;
 if(firstpass!=secondpass)
 {
 alert("Account Could Not Created. Because Password should be same."); 
   return false;

 }
 else{
  var strlen=firstpass.length;
  if(strlen>"6")
  {
  }
  else{
  alert("Account Could Not Created. Because Password should have at least 6 characters.");
  return false;
  }
  }
  });
  }

  
  $(document).ready(function(){
  $("#feature").on('click',function() {
    $('html, body').animate({
        'scrollTop' : $("#whatwedo").position().top
    });
  });
  $("#contactusbutton").on('click',function() {
    $('html, body').animate({
        'scrollTop' : $("#contactus").position().top
    });
  });
  $("#help").on('click',function() {
    $('html, body').animate({
        'scrollTop' : $("#xyzan").position().top
    });
  });


  $("#signinbutton").click(function(){
  $("#coverbox").animate({
  marginLeft:"25%",
  });
  $("#coverbox").animate({
  marginLeft:"0%",
  });
  
  $("#logininfo").animate({
  marginLeft:"25%",
  });
  $("#logininfo").animate({
  marginLeft:"0%",
  });
 
  $("#info").animate({
  marginLeft:"25%",
  });
  $("#info").animate({
  marginLeft:"50%",
  });
  $("#loginbutton").show();
  $("#signinbutton").hide();

 
  });
  });

  
  $(document).ready(function(){
  $("#loginbutton").click(function(){
  $("#coverbox").animate({
  marginLeft:"25%",
  });
  $("#coverbox").animate({
  marginLeft:"50%",
  });
  
  $("#logininfo").animate({
  marginLeft:"25%",
  });
  $("#logininfo").animate({
  marginLeft:"0%",
  });
   $("#info").animate({
  marginLeft:"25%",
  });
  $("#info").animate({
  marginLeft:"50%",
  });
  $("#signinbutton").show();
  $("#loginbutton").hide();

  });
  });




  function checkmobile(){
  $(document).ready(function(){
  var mobile=document.getElementById("mobile_box").value;
  var xml= new XMLHttpRequest();
  xml.open("GET","checkemail.php?mobile="+mobile,true)
  xml.send();
  xml.onreadystatechange=function(){
  if(xml.readyState==4&&xml.status==200)
  {
  if(xml.responseText!=0)
  {
  alert("Mobile No. already exist.")
  }
  }
  }
  });
  }




	</script>
<meta name="viewport" content="width=device-width, intial-scale=1">
  
	<style>
    td{
    color:white;
    font-size:25px;
    text-align:center;
    font-family:ubuntu;
    box-shadow:0 0 1px ;
    padding:10px;
    }
    table{
    margin-top:10px;
    }
    #slider{
    width:300px;
    height:100%;
    background-color:hsl(200, 100%, 10%);
    position:absolute;
    z-index:1;
    padding-top:10px;
    display:none;
    }
    #whl{
    width:900px;
    margin:auto;
    }
    #x1,#x2,#x3{
    margin-left:35px;
    width:230px;
    height:350px;
    background-color:white;
    box-shadow:0 0 4px  gray;
    border-radius:10px;
    float:left;
    }
    #lfp{
    display:none;
    }
    #loginbox{
    width:45%;
    height:auto;
    float:left;
    margin-top:180px;
    position:absolute;
    }
    #blogin{
    box-shadow:0 0 4px white;
    width:340px;
    height:100%;
    border:1px solid white;
    margin:auto;
    background-color:white;
    padding-bottom:20px;
    border-radius:2px;
    }
    input:focus{
    outline:none;
    }
    #seeabout{
    float:right;
    width:120px;
    background-color:white;
    margin-right:20px;
    margin-top:20px;
    border-radius:10px;
    text-align:center;
    color:maroon;
    padding:12px;
    font-size:20px;
    font-family:arial;
    font-weight:500;
    }
    body{
    background-color:rgb(0,0,0,0.01);
    }
    #registericon{
    width:100%;
    height:40%;
    font-size:170px;
    text-align:center;
    color:teal;
    }
    #aboutfir,#aboutfir2{
    width:380px;
    height:400px;
    margin:auto;
    margin-top:30px;
    }
    #aboutfir2{
    width:1080px;
    }
    #xyz,#sis,#contactus,#xyzan{
    margin-top:0px;
    width:100%;
    padding-top:70px;
    }
    #contactus{
    }
    #whatwedo{
    border-radius:5px;
    margin-top:150px;
    width:100%;
    height:auto;
    padding-top:50px;
    padding-bottom:50px;
    float:left;
    }
    #loginbutton{
    display:none;
    }

		#logo{
			font-size: 35px;
			font-family: arial;
			color:white;
			padding:15px;
			float:left;
      padding-top:15px;
      font-family:ubuntu;
      background-color:black;
      color:white;
	    margin-left:7%;
      width:140px;
      margin-top:5px;
    }
	   #background{
	    width:100%;
      background-image: -webkit-linear-gradient(-30deg , #0086b3 50%, black 50%);
			height:110vh;
			background-size: cover;
	        background-position: center;
		        }
		        #navigation{
        		font-family: Segoe UI;
             	font-size: 25px;
		        	padding-top:30px;
		        	margin-left:4%;
		        	margin-top:0px;		        
              float:left;
            }
                #whi{
    float:right;
    }


		        
            #home,#feature,#help,#contactusbutton{
		        	 text-decoration: none;
                     color:white;
                     font-size: 25px;
                     text-align: center;
                     margin:2px;
                     padding:4px;
                 padding-left:10px;
                 padding-right:10px;
                 border-left:1px solid white;
                 cursor:pointer;
		        }
                
            #signupfa,#signup{
            	font-family: arial;
            float:right;
            font-size: 20px;
            background-color:white;
            margin:2px;
            padding:12px;
            border-radius:3px;
            margin-right: 40px;
            cursor:pointer;
            margin-top:30px;
  
            }
            hr{
            	margin-top: 35px;
            }
            #welcome_text{
            	position:absolute;
                margin-left:60%;
            	width:30%;
            	height:150px;
              float:right;
              margin-top:270px;
              display: none;
            }
   #register{
   	font-family: arial;
   	color:teal;
    width:60%;
    font-weight: 700;
   	font-size:25px;
   	background-color: white;
   	border:1px solid white;
   	border-radius:15px;
   	margin:auto;
   	margin-top: 30px;
   	padding-top: 10px;
    padding-bottom: 10px;
    text-align:center;
    cursor:pointer;
   
   }
   #signuppage{
   position:absolute;
   width:75%;
   margin-left:13%;
   height:600px;
   background-color:white;
   display:none;
   margin-top:100px;
   box-shadow:0 0px 10px;
   z-index:1;
   }
   input
   	color:white;
   	font-size: 30px;
   }
 #space{
 	height:600px;
 	width:28%;
 	background-color:teal;
 	box-shadow:0 0 8px;
 	float:left;


 }
 #info,#logininfo,#coverbox{
 	height:600px;
 	width:50%;
 	margin-left:50%;
  border:1px solid black;

 }
 #inf,#signupfp{
  display:none;
width:30%;
background-color:white;
 position:absolute;
 z-index:2;
margin-left:37%;
 margin-top:80px;
 box-shadow:0 0 10px black;
 border-radius:3px;
 }
 #inf{
display:none;
 }

 #info{
position:absolute;
 }
 #coverbox{
background-color:#168591;

 position:absolute;
 z-index:2 }
 #logininfo{
  margin-left:0%;
  float:left;
}
 #suwe{
 	font-family: Segoe UI;
 	font-size: 25px;
 	margin-top:40px;
 	font-weight: 700;
    color: rgba(112,87,87,1);
 	text-align:center;
 }
 #mobile_box,#pass_box,#conpass_box,#email_box,#mobile_boxlogin,#pass_boxlogin,#mobile_boxp,#pass_boxp,#policesn,#conpass_boxp{
 	outline:none;		
 	font-size: 17px;
 	width:80%;
 	border-radius:8px;
 	margin: 0px; 
  border:1px solid black;
 	color:black;
 	padding:8px;
     padding-left:15px;
     border-color: white;
box-shadow:0 0 3px ;
 }
 #firstname{
 		outline:none;
		font-size:17px;
 	float:left;
 	width:32%;
 	border-radius: 8px;
   border:1px solid white; 	
margin: 2px;
    border-color: white;
box-shadow:0 0 3px ;
      padding:8px;
         padding-left:16px;
         color:black;
 }
  #lastname{
 		outline:none;
		color:black;

  	font-size:20px;
  	border-radius: 8px;
 	border:1px solid white;
 	width:32%;

  margin: 1px;
    margin-left:8px;
    border-color: white;
box-shadow:0 0 3px ;

     padding:8px;
         padding-left:16px;
 }
 #c1{
 	font-size:15px;
 	margin-left:50px;
 	float:left;
 }
 #createacc{
 	color:white;
 	border:1px solid pink;
 	background-color:rgba(219,35,35,1);
 	margin-left:50px;
 	width:30%;
 	text-align: center;
 	border-radius: 4px;
 	font-size: 20px;
 	padding: 5px;

 }
 #googleimg,#facebookimg,#twitterimg{
 	width:32px;
 	height:32px;
 	margin-left:50px;
 	float:left;
 }
  #bar{float:left;
    margin-top:30px;
    font-size:30px;
    margin-left:20px;
    color:white;
    display:none;
  }
  #otppage{
  position:fixed;
  margin-left:39%;
  width:22%;
  height:50%;
  margin-top:150px;
  display:none;
  background-color:white;
  z-index:1;
  box-shadow:0 0 3px white;

  }
  #signinbutton,#loginbutton{
  width:150px;
  text-align:center;
  background-color:white;
  color:maroon;
  font-size:25px;
  font-weight:700;
  font-family:arial;
  margin:auto;
  margin-top:60%;
  padding:5px;
  border-radius:100px;
  box-shadow:0px 2px 4px;
  cursor:pointer;
  }
  #boxs{
  width:30%;
  }
  #policen,#policen2,#policen3,#policen4{
  width:22%;
  padding-bottom:20px;
  height:auto;
  background-image:linear-gradient(black 50%,white 50%);
  float:left;
  margin-left:2.5%;
  box-shadow:0 3px 30px 2px gray;
  border-radius:5px;
  cursor:pointer;
  }
  #xyzan{
  height:auto;
  }
  #xyzan{
  float:left;
  }
  @media(max-width:900px)
  {
    #inf,#signupfp{
    width:80%;
    margin-left:10%;
    }
    #whl{
    width:100%;
    }
    #x1,#x2,#x3{
    width:60%;
    margin-left:20%;
    margin-top:50px;
    }
    #loginbox{
    width:45%;
    height:auto;
    position:absolute;
    margin-top:180px;
    margin-left:27.5%;
    }
    #blogin{
    box-shadow:0 0 4px white;
    width:340px;
    height:100%;
    border:1px solid white;
    margin:auto;
    }

  #background{
  background-image:linear-gradient(#0086b3 50%,black 50%);
  }
  #policen,#policen2,#policen3,#policen4{
  width:70%;
  margin-left:20%;
  margin-top:30px;
  height:auto;
  }
  #policen3{
  margin-bottom:100px;
  }
  #policen4{
    margin-bottom:100px;
    display:none;
  }
  #whatwedo{
  margin-top:10px;
  }
  #xyzan{
  margin:auto;
  width:90%;
  }
  #aboutfir2{
  width:80%;
  }
  #boxs{
  width:100%;
  margin-bottom:50px;
  }
  #bar{
    display:block;
  }
  #logo{
    
  }
  #navigation{
  display: none;
  }
  #welcome_text{
    width:70%;
  }

  }
  @media(max-width:700px)
  {
  #whi{
  display:none;
  }
  #logo{
  float:none;
  margin:auto;
  width:250px;
  text-align:center;
  } 
  #loginbox{
  margin-top:90px;
  width:60%;
  margin-left:20%;
  }
  #blogin{
  width:100%;
  }
  }

  @media(max-width:542px)
  {
  #loginbox{
  width:70%;
  margin-left:15%;
  }
  #xyzan{
  width:100%;
  }
  #bar{
  display:block;
  }
  #navigation{
  display:none;
  }
  #signup,#login{
  display:none;
  }
  #logo{
    text-align:center;
  }
  }

	</style>
</head>
<body>
    <div id="otppage">
    <div style="margin-left:27px;margin-top:20px;font-size:18px;font-weight:550;font-family:roboto;">Mobile No.</div>
    <div style="margin-left:7%;width:80%;margin-top:10px;"><input name="otprec" id="mobile" value="<?php echo $mobile?>" style="width:100%;border:0px solid black;font-size:23px;border-radius:9px;padding:7px;box-shadow:0vh 0vh 3px;" type="text"></div>
    <div style="margin-left:27px;margin-top:20px;font-size:18px;font-weight:550;font-family:roboto;">Enter OTP</div>
    <div style="margin-left:7%;width:80%;margin-top:10px;"><input name="otprec" id="otprec" style="width:100%;border:0px solid black;font-size:23px;border-radius:9px;padding:7px;box-shadow:0vh 0vh 3px;" type="text"></div>
    </br> 
<input type="button" onclick="checkotp()" style="cursor:pointer;margin-left:7%;margin-top:20px;width:84%;background-color:black;color:white;text-align:center;padding:12px;font-size:23px;font-family:roboto;border-radius:8px;" value="Log In">
  
    </div>
    <div id="inf">
      <div style="text-align:right;padding-right:20px;padding-top:10px;"> 
      <i  id="cross"  style="float:right;cursor:pointer;"class="fa fa-times fa-2x"  aria-hidden="true"></i></div>
      <form onSubmit="checkpassword()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <div id="suwe">SignUp With Mobile</div><br>
      <div style="margin-left: 50px;"><input required id="mobile_box" onfocusout="checkmobile()" name="mobile" placeholder="Mobile No."></div><br>
             <div style="margin-left: 50px;"><input  required id="pass_box" type="password" name="password" placeholder="Password"></div><br>
                          <div style="margin-left: 50px;"><input  required id="conpass_box" onfocusout="checkpass()" name="conpassword" type="password" placeholder="Confirm password"></div>
            <br>
             <div style="margin-left:50px;"> <input tpye="text"  required id="firstname" name="firstname" placeholder="First name">
               <input tpye="text" id="lastname" placeholder="Last name" required  name="secondname"> </div><br>
               <div style="margin-left: 50px;"><input required id="email_box" type="email" name="email" placeholder="Email"></div><br>
            <input type="checkbox" required id="c1"> <div style="float:left;height:auto;width:80%;font-family: Microsoft Sans Serif;font-size:12px;">Create your account means you are agree, with the 
              <span style="color:rgba(219,35,35,1); ">
             TERM & CONDITION</span> and the policy of agreement.
    </div><br>
        <input type="text" name="what"  style="display:none" value="signup">
    <input type="submit" style="cursor:pointer;margin-left:12%;margin-top:20px;width:78%;background-color:rgb(102, 0, 77);color:white;text-align:center;padding:10px;font-size:19px;font-family:roboto;border-radius:8px;" value="Create Account">
        </form>
   <div style="text-align:center;font-family: Microsoft Sans Serif;margin-top:15px;">Already a member?<span style="color:rgb(0, 115, 230); font-weight: 700;"> Sign In</span></div><br></div>
  
 <div id="signupfp">
      <div style="text-align:right;padding-right:20px;padding-top:10px;"> 
      <i  id="crossan"  style="float:right;cursor:pointer;"class="fa fa-times fa-2x"  aria-hidden="true"></i></div>
      <form onSubmit="checkpasswordfp()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <div id="suwe">SignUp For Police Station</div><br>
      <div style="margin-left: 50px;"><input required id="mobile_boxp" onfocusout="checkmobile()" name="mobile" placeholder="Mobile No."></div><br>
             <div style="margin-left: 50px;"><input  required id="pass_boxp" type="password" name="password" placeholder="Password"></div><br>
                          <div style="margin-left: 50px;"><input  required id="conpass_boxp" onfocusout="checkpassfp()" name="conpassword" type="password" placeholder="Confirm password"></div></br>
             <div style="margin-left: 50px;">
             <select required name="policesn"  style="width:88%;font-size:20px;padding:8px;border-radius:8px;box-shadow:0 0 3px;">
             <option>Select Police Station</option>
             <option>Bhopal</option>
             <option>Chhatarpur</option>
             <option>Katni</option>
             </select>
             </div><br>
 
               <div style="margin-left: 50px;"><input required id="email_box" type="email" name="email" placeholder="Email"></div><br>
            <input type="checkbox" required id="c1"> <div style="float:left;height:auto;width:80%;font-family: Microsoft Sans Serif;font-size:12px;">Create your account means you are agree, with the 
              <span style="color:rgba(219,35,35,1); ">
             TERM & CONDITION</span> and the policy of agreement.
    </div><br>
        <input type="text" name="what"  style="display:none" value="signupfp">
    <input type="submit" style="cursor:pointer;margin-left:12%;margin-top:20px;width:78%;background-color:rgb(102, 0, 77);color:white;text-align:center;padding:10px;font-size:19px;font-family:roboto;border-radius:8px;" value="Create Account">
  
        </form>
        <div style="text-align:center;font-family: Microsoft Sans Serif;margin-top:15px;">Already a member?<span style="color:rgb(0, 115, 230); font-weight: 700;"> Sign In</span></div><br>
    <hr style="width:80%; margin:auto;"><br>
  </div>
  

<div id="background">
  <div id="slider">
  <i  id="back" class="fa fa-arrow-left" style="color:white;margin:10px;font-size:20px"></i><span style="color:white;font-size:30px;margin-left:55px;font-family:ubuntu;">MP Police</span>
  <table>
  <tr><td>Home</td></tr>
  <tr><td id="tps">Top Police Stations</td></tr>
  <tr><td id="feat">Features</td></tr>
  <tr><td id="cu">Contact Us</td></tr>
  <tr><td id="si">Sign In</td></tr>
  <tr><td id="sifa">Sign In For Administration</td></tr>
  
  </table>
  </div>
  <div id="bar"><i class="fa fa-bars"></i></div>
  <div id="logo"> Police <div style="font-size:17px;margin-left:50px;">ON WORK</div> </div>
 
  <div id="navigation"><span id="home" style="border-left:0px solid white;">Home</span>
    <span id="help">Top Police Stations</span>
    <span id="feature">Features</span>
    <span id="contactusbutton">Contact Us</span>
    
  </div>
   <div id="whi">
   <div id="signup">Sign In</div>
   <div id="signupfa">Sign In As Administration</div>
   </div>

<div id="welcome_text" >
	<div id="welcomesome" style="text-align: center;width:100% ;font-size: 40px;color:white;">WELCOME!</div>
	<div style="text-align: center;width:100% ;font-size: 30px;color:white;">Get your case Registerd</div>
	<a href="cases.php" style="text-decoration:none;border-left:0px solid white;"><div id="register">REGISTER</div></a>


</div>
<div id="loginbox">
<div id="blogin">
<div id="front">
</div>
<div id="back">
<div id="lfu">
<div style="margin-left:27px;margin-top:20px;font-size:18px;font-weight:550;font-family:roboto;">Mobile No.</div>
<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  <div style="margin-left:7%;width:80%;margin-top:10px;"><input name="loginmobile" required style="width:100%;border:0px solid black;font-size:23px;border-radius:9px;padding:7px;box-shadow:0vh 0vh 3px;" type="text"></div>
<div style="margin-left:27px;margin-top:20px;font-size:18px;font-weight:550;font-family:roboto;">Password</div>
<div style="margin-left:7%;width:80%;margin-top:10px;"><input  required name="loginpassword" style="width:100%;border:0px solid black;font-size:23px;border-radius:9px;padding:7px;box-shadow:0vh 0vh 3px;" type="password"></div>
<div style="font-size:12px;font-family:Segoe UI;margin-left:7%;width:85%;margin-top:10px;">
Make sure it's at least 15 characters OR at least 8 characters including a number and a lowercase letter. Learn more.
</div>
<input type="text" name="what"  style="display:none" value="login">
<input type="submit" style="cursor:pointer;margin-left:7%;margin-top:20px;width:84%;background-color:black;color:white;text-align:center;padding:12px;font-size:23px;font-family:roboto;border-radius:8px;" value="Log In">
</form>
<div style="text-align:right;font-size:14px;font-family:Segoe UI;margin-right:7%;width:89%;margin-top:10px;font-weight:500;">
Dont have Account <span id="sufub" style="cursor:pointer;color:purple;font-weight:700">Sign UP</span>
</div>
<div style="margin-left:27px;margin-top:10px;font-size:18px;font-weight:550;font-family:roboto;">Log In As</div>
<div id="lfpb" style="cursor:pointer;margin-left:8%;margin-top:10px;width:76%;background-color:rgb(0, 187, 255);color:white;text-align:center;padding:12px;font-size:23px;font-family:roboto;border-radius:8px;">Administator</div>
</div>
<div id="lfp">
<div style="margin-left:27px;margin-top:20px;font-size:18px;font-weight:550;font-family:roboto;">Mobile No.</div>
<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  <div style="margin-left:7%;width:80%;margin-top:10px;"><input  required name="loginmobile" style="width:100%;border:0px solid black;font-size:23px;border-radius:9px;padding:7px;box-shadow:0vh 0vh 3px;" type="text"></div>
<div style="margin-left:27px;margin-top:20px;font-size:18px;font-weight:550;font-family:roboto;">Password</div>
<div style="margin-left:7%;width:80%;margin-top:10px;"><input  required name="loginpassword" style="width:100%;border:0px solid black;font-size:23px;border-radius:9px;padding:7px;box-shadow:0vh 0vh 3px;" type="password"></div>
<div style="font-size:12px;font-family:Segoe UI;margin-left:7%;width:85%;margin-top:10px;">
Make sure it's at least 15 characters OR at least 8 characters including a number and a lowercase letter. Learn more.
</div>
<input type="text" name="what"  style="display:none" value="loginfp">
<input type="submit" style="cursor:pointer;margin-left:7%;margin-top:20px;width:84%;background-color:black;color:white;text-align:center;padding:12px;font-size:23px;font-family:roboto;border-radius:8px;" value="Log In">
</form>
<div style="text-align:right;font-size:14px;font-family:Segoe UI;margin-right:7%;width:89%;margin-top:10px;font-weight:500;">
Dont have Account <span id="sufpb" style="cursor:pointer;color:purple;font-weight:700">Sign UP</span>
</div>

<div style="margin-left:27px;margin-top:10px;font-size:18px;font-weight:550;font-family:roboto;">Log In As</div>
<div id="lfub" style="cursor:pointer;margin-left:8%;margin-top:10px;width:76%;background-color:rgb(0, 187, 255);color:white;text-align:center;padding:12px;font-size:23px;font-family:roboto;border-radius:8px;">User</div>
</div>


</div>
</div>
</div>

</div>
<div id="xyzan" style="margin-top:70px;">
<h2 style="text-align:center;font-family:arial;font-size:35px;margin:auto;margin-bottom:20px;">Top Police Stations In MP</h2>
<div id="opt" style="width:90%;height:100%;margin:auto;">
<div id="policen">
<h1 style="text-align:center;font-family:arial;font-size:35px;margin:auto;padding-top:10px;padding-bottom:10px;color:white;">#1 Bhopal</h1>
<img src="police4.jpg" style="width:100%;border-radius:5px;">
<div style="text-align:center;font-size:20px;font-family:roboto;">Ratting
</div>
<div style="text-align:center;font-size:30px;color:#FF9529;">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

</div>

</div>

<div id="policen2">
<h1 style="text-align:center;font-family:arial;font-size:35px;margin:auto;padding-top:10px;padding-bottom:10px;color:white;">#2 Satna</h1>
<img src="police4.jpg" style="width:100%;">
<div style="text-align:center;font-size:20px;font-family:roboto;">Ratting
</div>
<div style="text-align:center;font-size:30px;color:#FF9529;">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
<div id="policen3">
<h1 style="text-align:center;font-family:arial;font-size:35px;margin:auto;padding-top:10px;padding-bottom:10px;color:white;">#3 Katni</h1>
<img src="police4.jpg" style="width:100%;">
<div style="text-align:center;font-size:20px;font-family:roboto;">Ratting
</div>
<div style="text-align:center;font-size:30px;color:#FF9529;">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
<div id="policen4">
<h1 style="text-align:center;font-family:arial;font-size:35px;margin:auto;padding-top:10px;padding-bottom:10px;color:white;">#4 Chhatarpur</h1>
<img src="police4.jpg" style="width:100%;">
<div style="text-align:center;font-size:20px;font-family:roboto;">Ratting
</div>
<div style="text-align:center;font-size:30px;color:#FF9529;">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
</div>
</div>
<div id="whatwedo" style="margin-bottom:250px;">
<h1 style="text-align:center;font-family:arial;width:210px;margin:auto;margin-bottom:70px;">What We Do?</h1>
<div id="whl">
<div id="x1">
<h2 style="font-family:Tahoma;text-align:center;margin-top:30px;">Online FIR</h2> 
<p style="font-size:18px;font-family:verdana;width:90%;margin-left:5%;margin-top:30px;">It is really the best website and it find my case got registered in station, and case got solved it a week.
</p>
</div>
<div id="x2">
<h2 style="font-family:Tahoma;text-align:center;margin-top:30px;">Data Management</h2> 
<p style="font-size:18px;font-family:verdana;width:90%;margin-left:5%;margin-top:30px;">It is really the best website and it find my case got registered in station, and case got solved it a week.
</p>
</div>
<div id="x3">
<h2 style="font-family:Tahoma;text-align:center;margin-top:30px;">Conversation</h2> 
<p style="font-size:18px;font-family:verdana;width:90%;margin-left:5%;margin-top:30px;">It is really the best website and it find my case got registered in station, and case got solved it a week.
</p>
</div>
</div>
<div style="z-index:-1;margin-top:160px;width:99%;height:400px;background-color:rgb(0, 134, 179,0.5);position:absolute;"></div>
<div style="z-index:-1;margin-top:210px;width:99%;height:400px;background-color:#0086b3;position:absolute;"></div>
</div>
</div>
<div id="xyz" style="height:auto;padding-bottom:350px;display:none;">
<h1 style="text-align:center;font-family:arial;width:280px;margin:auto;">What User Says?</h1>
<div id="aboutfir2" style="height:auto;">
<div id="boxs" style="float:left;color:rgb(0,0,50);border-left:0px solid black;font-size:20px;text-align:center;font-family:arial;margin-top:5px;">
It is really the best website and it find my case got registered in station, and case got solved it a week.
<div id="img" style="margin-right:30px;width:50px;margin-left:30px;margin-top:10px;margin-bottom:15px;float:left;">
<img src="download.jfif" style="width:100%;border-radius:200px;">
</div>
<div id="commentuser">
<div style="margin-top:10px;text-align:left;margin-left:40px;font-weight:600;">Mr. John</div>
<div style="margin-top:1px;text-align:left;margin-left:40px;font-size:17px;">Used it 5 times.</div>
</div>
</div>
<div id="boxs" style="border-left:4px solid black;font-size:20px;margin-left:2%;float:left;color:rgb(0,0,50);font-size:20px;text-align:center;font-family:arial;margin-top:5px;">
It is really the best website and it find my case got registered in station, and case got solved it a week.<div id="img" style="margin-right:30px;width:50px;margin-left:30px;margin-top:10px;margin-bottom:15px;float:left;">
<img src="download (1).jfif" style="width:100%;border-radius:200px;">
</div>
<div id="commentuser">
<div style="margin-top:10px;text-align:left;margin-left:40px;font-weight:600;">Amy</div>
<div style="margin-top:1px;text-align:left;margin-left:40px;font-size:17px;">Used it 3 times.</div>
</div>
</div>
<div id="boxs" style="border-left:4px solid black;font-size:20px;margin-left:2%;float:left;color:rgb(0,0,50);font-size:20px;text-align:center;font-family:arial;margin-top:5px;">
This is realy a best plateform to make FIR fast. I got its response very fast as I thaught. Really It is a very helpful for me.
<div id="img" style="margin-right:30px;width:50px;margin-left:30px;margin-top:10px;margin-bottom:15px;float:left;">
<img src="download (1).jfif" style="width:100%;border-radius:200px;">
</div>
<div id="commentuser">
<div style="margin-top:10px;text-align:left;margin-left:40px;font-weight:600;">Amy</div>
<div style="margin-top:1px;text-align:left;margin-left:40px;font-size:17px;">Used it 3 times.</div>
</div>
</div>


</div>
</div>
<div id="sis" style="height:auto;padding-bottom:150px;">
<h1 style="font-size:30px;text-align:center;font-family:arial;margin:auto;">Search In Social Media.</h1>
<div style="margin:auto;margin-top:50px;width:370px;height:100px;">
<img src="facebook.png" style="width:50px;margin-left:30px;box-shadow:0 0 5px;border-radius:7px;">
<img src="linkdin.png" style="width:50px;margin-left:30px;box-shadow:0 0 5px;border-radius:7px;">
<img src="twitter.png" style="width:50px;margin-left:30px;box-shadow:0 0 5px;border-radius:7px;">
<img src="insta.jfif" style="width:50px;margin-left:30px;box-shadow:0 0 5px;border-radius:7px;">

</div>
</div>
<div id="contactus" style="background-color:rgb(0, 115, 153);height:250px;">
</div>	

</body>
</html>
