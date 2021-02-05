<!DOCTYPE html>
<html>
<head>
	<title>aadhar verification</title>
	<meta name="viewport" content="width=device-width, initil-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		function gonext1(){
		$(document).ready(function(){	
		$("#i1").next('#i2').focus();
		});
		}
		function gonext2(){
		$(document).ready(function(){	
		$("#i2").next('#i3').focus();
		});
		}
		function gonext3(){
		$(document).ready(function(){	
		$("#i3").next('#i4').focus();
		});
		}
		function gonext4(){
		$(document).ready(function(){	
		$("#i4").next('#verify').focus();
		});
		}

	</script>
	<style >

	#whole{
	padding-top:150px;
	margin:auto;
	width:400px;
	height:auto;
	}
	#verify{
		font-family: regular;
		font-size: 25px;
		width:50%;
		padding: 10px;
		border-radius: 22px;
		font-family: roboto;
		border:1px solid #168591;
		background-color: #168591;
        text-align:center;
    	margin-top:25px;
        color:white;
	}
	#verify:focus{
	outline:none;
	}
	input{
	border:1px solid black;
	}
	input:focus{
	outline:none;	
	}
	#anotherwhole{
	box-shadow:0 0 3px;
	padding:50px;	
	}
	</style>
</head>
<body><div id="whole">
<div id="anotherwhole">
<form>
<table style="margin:auto;">
	<tr><td style="font-family:roboto; font-size: 25px;font-weight: regular;">Enter the Aadhar Card No.</td></tr>
	<tr><td style="font-family:roboto; font-size: 25px;font-weight: regular;"><input required type="text" style="width:100%;font-size:25px;height:25px; padding:7px;"><br><br>
</td></tr>
	<tr><td style="font-family:roboto; font-size: 25px;font-weight: regular;">Enter the Mobile no. to send OTP</td></tr>
	<tr><td style="font-family:roboto; font-size: 25px;font-weight: regular;"><input  required type="text" style="width:100% ;font-size:25px;height:25px; padding:7px;"><br><br>
</td></tr>
	<tr><td style="font-family:roboto; font-size: 25px;font-weight: regular;">Enter OTP</td></tr>
</table>
	<input type="number" id="i1" onkeypress="gonext1();" style="width:10%;font-size:30px;margin-left:5%;border:0px solid black;border-bottom:2px solid black;">
	<input type="number" id="i2" onkeypress="gonext2();" style="width:10%;font-size:30px;margin-left:5%;border:0px solid black;border-bottom:2px solid black;">
	<input type="number"  id="i3" onkeypress="gonext3();" style="width:10%;font-size:30px;margin-left:5%;border:0px solid black;border-bottom:2px solid black;">
	<input type="number" id="i4" onkeypress="gonext4();" style="width:10%;font-size:30px;margin-left:5%;border:0px solid black;border-bottom:2px solid black;">


   	<button id="verify" type="submit">VERIFY</button>
 </form>
 </div>
 </div>
</body>
</html>