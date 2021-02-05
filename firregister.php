<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initil-scale=1">
	<title>details</title>
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

	<div  style="width:100%;">
		<div id="complainant_details"><div id="cd">Complainant Details</div>
		<table>
         <tr><td> Name of complainant *</td><td> <input type="text"></td></tr>
         <tr><td> Mobile/Phone *</td><td> <input type="text"></td></tr>
          <tr><td>E-mail Address * </td><td><input type="email"></td></tr>
         <tr><td> Address * </td><td><input type="text"></td></tr>
         <tr><td> City</td><td> <input type="text"></td></tr>
           <tr><td> State</td><td> <input type="text"></td></tr>
         <tr><td> Country</td><td><input type="text"></td></tr>
        </table>
            <br><br>


		</div>
		<div id="complaint_against"><div id="ca">Complaint Against</div>
	<table>
         <tr><td> Name of person</td><td> <input type="text"></td></tr>
         <tr><td> Mobile/Phone</td><td> <input type="text"></td></tr>
          <tr><td> Address </td><td><input type="email"></td></tr>
         <tr><td> City</td><td><input type="text"></td></tr>
         <tr><td> State</td><td> <input type="text"></td></tr>
         <tr><td> Country</td><td><input type="text"></td></tr>
        </table>
            <br><br>

		
	</div>
		
	</div>
<div id="complaint_details">
	<div id="cmd">Complaint Details</div><br>
	<table>
<tr><td style="font-size: 20px;">Details of Complaint *</td><td > </td></tr><br>
<tr><td><textarea rows="5" style="width:220%;"></textarea></td></tr>
<tr><td></td><td><span style="font-weight:700;font-size:18px;">Enter The Code Showing Above</span></td></tr><br>
<tr><td style="font-size: 20px;">Security Code *</td><td><input type="text" style="float:left; font-size:18px;width:40%; font-weight:700;">  &nbsp; </td></tr>
<tr><td></td><td><a href="adharverify.php"><input type="Submit" style="outline:none;border:2px solid teal;padding-top:3px;padding-bottom:3px;padding-left:10px;padding-right:10px;margin-top:10px;border-radius:5px;background-color:teal;color:white;width:auto;" ></a></td></tr>
</table>

</div>
</body>
</html>