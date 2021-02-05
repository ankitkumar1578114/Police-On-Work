<?php
session_start();
$mobile=$_SESSION['mobilep'];
?>
<?php
$hostname="localhost";
$dbusername="u669999615_vpstation";
$dbpassword="asdfghjkl";
$dbname="u669999615_vpstation";
$conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$sq = "SELECT * from policedetail WHERE mobile = '$mobile'";
$result = mysqli_query($conn,$sq);
$resultcheck = mysqli_num_rows($result);        

if ($resultcheck>0) {
  while($row = mysqli_fetch_assoc($result)){
     $policesn =$row['policesn'];
   }
}
?>

<!DOCTYPE html>
<head>
<title>
your registered case
</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

<script>

$(document).ready(function(){
$("#bar").click(function(){
$("#navi").toggle();
});
$("#lside1").mouseover(function(){
$("#lside1").css({"background-color" :"white","color":"#0086b3"});
});


$("#lside1").mouseleave(function(){
$("#lside1").css({"background-color" :"#0086b3","color":"white"});
});
});



$(document).ready(function(){
$("#lside2").mouseover(function(){
$("#lside2").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside2").mouseleave(function(){
$("#lside2").css({"background-color" :"#0086b3","color":"white"});
});

});

$(document).ready(function(){
$("#lside3").mouseover(function(){

$("#lside3").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside3").mouseleave(function(){

$("#lside3").css({"background-color" :"#0086b3","color":"white"});

});
});

$(document).ready(function(){
$("#lside4").mouseover(function(){

$("#lside4").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside4").mouseleave(function(){

$("#lside4").css({"background-color" :"#0086b3","color":"white"});

});
});



$(document).ready(function(){
$("#lside1").click(function(){
$("#conv").show();
$("#box").hide();
$("#lside1").animate({"background-color" :"white","margin-left":"10px","font-size":"31px" ,"box-shadow":"2px 2px 5px black","color":"#0086b3"},250);
$("#lside2").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside3").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside4").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);

$("#lside2").css({"background-color" :"#0086b3","color":"white"});
$("#lside3").css({"background-color" :"#0086b3","color":"white"});
$("#lside4").css({"background-color" :"#0086b3","color":"white"});


$("#lside1").mouseleave(function(){
$("#lside1").css({"background-color" :"white","color":"#0086b3"});
});

$("#lside2").mouseover(function(){
$("#lside2").css({"background-color" :"white"  ,"color":"#0086b3"});
});
$("#lside2").mouseleave(function(){
$("#lside2").css({"background-color" :"#0086b3","color":"white"   } ); 
});

$("#lside3").mouseover(function(){

$("#lside3").css({"background-color" :"white"  ,"color":"#0086b3"});
});                                             
$("#lside3").mouseleave(function(){             
                         
$("#lside3").css({"background-color" :"#0086b3","color":"white" });

});

$("#lside4").mouseover(function(){

$("#lside4").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside4").mouseleave(function(){

$("#lside4").css({"background-color" :"#0086b3","color":"white"});

});


});

});

$(document).ready(function(){
$("#lside2").click(function(){
$("#conv").hide();
$("#box").show();
$("#lside2").animate({"background-color" :"white","margin-left":"10px","font-size":"31px" ,"box-shadow":"2px 2px 5px black","color":"#0086b3"},250);
$("#lside1").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside3").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside4").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside1").css({"background-color" :"#0086b3","color":"white"});
$("#lside3").css({"background-color" :"#0086b3","color":"white"});
$("#lside4").css({"background-color" :"#0086b3","color":"white"});


$("#lside2").mouseleave(function(){
$("#lside2").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside1").mouseover(function(){
$("#lside1").css({"background-color" :"white","color":"#0086b3"});
});


$("#lside1").mouseleave(function(){
$("#lside1").css({"background-color" :"#0086b3","color":"white"});
});




$("#lside3").mouseover(function(){

$("#lside3").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside3").mouseleave(function(){

$("#lside3").css({"background-color" :"#0086b3","color":"white"});

});

$("#lside4").mouseover(function(){

$("#lside4").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside4").mouseleave(function(){

$("#lside4").css({"background-color" :"#0086b3","color":"white"});

});

});

});

$(document).ready(function(){
$("#lside3").click(function(){
$("#lside3").animate({"background-color" :"white","margin-left":"10px", "font-size":"31px","box-shadow":"2px 2px 5px black","color":"#0086b3"},250);
$("#lside1").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside2").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside4").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside1").css({"background-color" :"#0086b3","color":"white"});
$("#lside2").css({"background-color" :"#0086b3","color":"white"});
$("#lside4").css({"background-color" :"#0086b3","color":"white"});


$("#lside3").mouseleave(function(){
$("#lside3").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside1").mouseover(function(){
$("#lside1").css({"background-color" :"white","color":"#0086b3"});
});


$("#lside1").mouseleave(function(){
$("#lside1").css({"background-color" :"#0086b3","color":"white"});
});

$("#lside2").mouseover(function(){
$("#lside2").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside2").mouseleave(function(){
$("#lside2").css({"background-color" :"#0086b3","color":"white"});
});




$("#lside4").mouseover(function(){

$("#lside4").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside4").mouseleave(function(){

$("#lside4").css({"background-color" :"#0086b3","color":"white"});

});

});

});

$(document).ready(function(){
$("#lside4").click(function(){
$("#lside4").animate({"background-color" :"white","margin-left":"10px", "font-size":"31px","box-shadow":"2px 2px 5px black","color":"#0086b3"},250);
$("#lside1").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside2").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside3").animate({"background-color" :"#0086b3","margin-left":"0px","font-size":"27px","box-shadow":"0px 0px 0px"},250);
$("#lside1").css({"background-color" :"#0086b3","color":"white"});
$("#lside2").css({"background-color" :"#0086b3","color":"white"});
$("#lside3").css({"background-color" :"#0086b3","color":"white"});


$("#lside4").mouseleave(function(){
$("#lside4").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside1").mouseover(function(){
$("#lside1").css({"background-color" :"white","color":"#0086b3"});
});


$("#lside1").mouseleave(function(){
$("#lside1").css({"background-color" :"#0086b3","color":"white"});
});

$("#lside2").mouseover(function(){
$("#lside2").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside2").mouseleave(function(){
$("#lside2").css({"background-color" :"#0086b3","color":"white"});
});

$("#lside3").mouseover(function(){

$("#lside3").css({"background-color" :"white","color":"#0086b3"});
});
$("#lside3").mouseleave(function(){

$("#lside3").css({"background-color" :"#0086b3","color":"white"});

});
});

});


$(document).ready(function(){
$("#out").click(function(){
$("#out").animate({"background-color":"white","padding":"5px"},200);

$("#out").mouseleave(function(){

$("#out").css({"background-color" :"white","color":"#0086b3"});

});
window.location.href="index.php";
});
});

$(document).ready(function(){
$("#out").mouseover(function(){

$("#out").css({"background-color" :"white","color":"#0086b3"});
});
$("#out").mouseleave(function(){

$("#out").css({"background-color" :"#0086b3","color":"white"});

});
});

function sendmsg(){
$(document).ready(function(){
var msg=document.getElementById("msginput").value;
if(msg.length==0)
{

}
else{
var to =document.getElementById("to").value;
var xml= new XMLHttpRequest();
  xml.open("GET","chat.php?from="+'<?php echo $policesn; ?>'+"&to="+to+"&msg="+msg,true)
  xml.send();
  xml.onreadystatechange=function(){
  if(xml.readyState==4&&xml.status==200)
  {
  document.getElementById("msginput").value="";
  document.getElementById("msginput").focus();
  get();
  }
  }
  }
  });
}

  function get()
  {
  var to=document.getElementById("to").value;
  var xml= new XMLHttpRequest();
  xml.open("GET","get.php?from="+'<?php echo $policesn ?>'+"&to="+to,true)
  xml.send();
  xml.onreadystatechange=function(){
  if(xml.readyState==4&&xml.status==200)
  {
  document.getElementById("chat").innerHTML=xml.responseText;
  $("#conv").scrollTop($("#chat").height());
  }
  }
  } 
  $(document).ready(function(){
  setInterval(function(){get();},250);
  get();
  $(document).keypress(function(e){
    if (e.which == 13){
        sendmsg();
    }
  });
  
$("#pol").mouseover(function(){
$("#hour").slideDown("slow");
});
$("#pol").mouseleave(function(){
$("#hour").slideUp("slow");
});
$("#msginput").focus(function(){
$("#sen").show();
$("#mic").hide();
});
});

</script>

<meta name="viewport" content="width=device-width, intial-scale=1">

<style>
#sen{
display:none;
}
#header{
font-weight:650;
width:98.15%;
box-shadow:0 0 8px gray;
padding-top:12px;
font-size:28px;
font-family:Segoe UI;
padding-bottom:12px;
padding-left:20px;
position:fixed;
background-color:white;
top:100px;
    
}
#chat{
margin-top:70px;
width:100%;
height:auto;
min-height:100%;
background-color:rgb(240,240,240);
padding:0px;
padding-top:10px;

}
#msgbox{
position:fixed;
bottom:0px;
background-color:white;
width:100%;
padding:10px;
box-shadow:0 0 2px gray;
}
#msginput{
font-size:20px;
width:70%;
padding:7px;
border-radius:10px;
border:0px solid black;
box-shadow:0 0 2px 1px gray;
color:rgb(0,0,0,0.9);
font-family:ubuntu;
margin-right:10px;
}
#msginput:focus{
outline:none;
}
#hischat{
float:left;
width:auto;
max-width:400px;
height:auto;
padding:15px;
font-size:20px;
background-color:white;
font-family:ubuntu;
border-radius:10px 10px 10px 0;
}
#mychat{
float:right;
width:auto;
height:auto;
max-width:400px;
padding:15px;
font-size:20px;
background-color:white;
font-family:ubuntu;
border-radius:10px 10px 0px 10px;
}

#hour{margin:auto;height:30px;width:auto;background-color:black;padding:10px 0px 10px 10px;color:white;text-align:center;font-size:20px;font-family:Bahnschrift SemiBold;display:none;}
*{margin:0px;padding:0px;}

#lside1,#lside2,#lside3,#lside4{width:92.5%;font-size:27px;margin-top:5px;padding:8px 0px 8px 15px;background-color:#0086b3;cursor:pointer;font-family:ubuntu;color:white;
}
#lside2{
background-color :white;
margin-left:10px;
font-size:35px;
color:#0086b3;
}
#side{margin-top:100px;}
#fa{margin-top:5px;}
#ap{margin-top:8px;color:green;}
#out{margin:10px 0px 0px 0px;font-size:25px;background-color:#0086b3;width:90%;color:white;cursor:pointer;padding:10px;font-family:ubuntu;}
#fout{margin-left:5px;margin-top:3px;}
#navi{width:20%;height:750px;background-color:#0086b3;float:left;position:fixed;}
#pol{cursor:pointer;margin:auto;height:auto;margin-top:10px;width:auto;background-color:black;padding:15px 0px 10px 10px;}
#po{color:white;font-family:ubuntu;font-size:30px;line-height:0.8;}
#box{display:block;height:600px;width:80%;float:right;overflow-y:auto;background-color:#f5f5f0;margin-top:100px;}
#conv{display:none;height:550px;width:80%;float:right;overflow-y:auto;background-color:#f5f5f0;margin-top:100px;}
#inbox{width:85%;height:auto;overflow-y:auto;margin:40px 0px 0px 80px;padding:1px;}
#upp{background-color:#0086b3;height:100px;width:100%;z-index:2;position:fixed;}
#dash{position:fixed;width:15%;background-color:#0086b3;border:2px inset white;font-size:35px;margin:20px 10px 0px 0px;float:left;font-family:Bahnschrift SemiBold;text-align:center;color:white;}
#regi{border:3px solid white;font-family:ubuntu;box-shadow:1px 2px 10px gray;padding:7px;padding-left:25px;padding-right:25px;color:white;background-color:black;width:auto;margin:20px 30px 0px 0px; 
font-size:30px;font-weight:800;text-align:center;float:right;border-radius:10px 10px 10px 10px; }
#detai{width:98%;background-color:white;height:60px;font-size:25px;padding:2px 5px 1px 10px;margin-top:10px;border-radius:10px;box-shadow:0 2px 6px gray;}
#detai:first-child{margin-top:0px;}
#detai:last-child{margin-bottom:0px;}
#re{width:auto;height:33px;float:left;font-size:20px;margin-top:10px;padding:5px;}

#det{width:20%;height:33px;float:left;margin-left:25px;overflow-x:hidden;font-size:20px;margin-top:2px;padding:5px;}
#view{border-radius:5px;width:auto;;height:auto;background-image:linear-gradient(rgb(20,127,134),rgb(15,53,44));float:left;text-align:center;margin-left:30px;font-weight:bold;color:white;font-size:16px;margin-top:10px;padding:8px;cursor:pointer;}
#appro{width:120px;height:33px;float:right;margin-right:20px;font-size:15px;text-align:center;padding-top:10px;}
#bar{margin-top:30px;color:white;margin-left:30px;position:fixed;font-size:25px;display:none;z-index:3;}
@media(max-width:900px)
{
#navi{
width:35%;
}
#conv{
width:65%;
}
#msginput{
width:45%;
}
#box{
width:65%;
}
#det{
width:auto;
}
#inbox{
margin-left:2.5%;
width:95%;
}
#detai{
width:96%;
height:110px;
}
#view{
float:right;
margin-right:10px;
margin-left:10px;
border-radius:5px;
}
#det{
margin-left:10px;
}

    
}
@media(max-width:520px)
{

#lside1,#lside2,#lside3,#lside4{
padding-left:20px;
}
#det{
width:auto;
float:right;
}
#appro{
float:left;
}
#bar{
display:block;
}
#pol{
display:none;
}
#navi{
display:none;
width:50%;
z-index:1;}
#conv{
width:100%;
position:fixed;
bottom:60px;
}
#msginput{
width:65%;
}
#navi{
width:100%;
}
#box{
width:100%;
}
#inbox{
margin-left:2.5%;
width:95%;
}
#detai{
width:96%;
height:110px;
}
#view{
float:right;
margin-right:10px;
margin-left:10px;
width:auto;
}
#det{
margin-left:10px;
}
}
</style> 
</head>
<body>
<div id="bar"><i class="fa fa-bars"></i></div>
<div id ="navi">
<div id ="pol">
<pre id ="po">
  Police 
       <span style="font-size:24px;">on work<span></pre>
</div>
<div id="hour">24x7 hours</div>  

<div id="side">
<div id ="lside1">
<i id ="fa" class="fas fa-comment-alt">&nbsp &nbsp</i>Conversation</div>
<div id ="lside2">
<i class="fas fa-book-reader">&nbsp &nbsp</i>Previous FIR</div>
<div  id ="lside3">
<i id ="fa" class="fas fa-cog">&nbsp &nbsp</i>Settings</div>
<div id ="lside4">
<i  id ="fa" class="fas fa-user">&nbsp &nbsp</i>Profile</div>

</div>
<div id="out">
<i id="fout" class="fas fa-sign-out-alt"></i>
&nbsp;
Log Out</div>
</div>
<div id="upp">
<a href="complaint.php"><span id ="regi"><?php echo $policesn; ?></span></a>


</div>

<div id="conv">
<div id="header">
<img src="download.jfif" style="width:45px;border-radius:25px;margin-right:10px;float:left;">
<div style="float:left;"> Bhopal, MP Police </div>
<div style="float:left;margin-left:50%;">
<form>
<select id="to" onchange="get()" style="font-size:25px;">
<?php
$hostname="localhost";
$dbusername="u669999615_vpstation";
$dbpassword="asdfghjkl";
$dbname="u669999615_vpstation";
$conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$sq = "SELECT * from user_complain WHERE policesn = '$policesn';";
$result = mysqli_query($conn,$sq);
$resultcheck = mysqli_num_rows($result);        

if ($resultcheck>0) {
  while($row = mysqli_fetch_assoc($result)){
     $mobilen =$row['Mobile'];
?>
<option> <?php echo $mobilen ?></option>
<?php

  }
}
?>
</select>
</form>
</div>
</div>
<div id="chat">
</div>
<div id="msgbox"><input type="text" id="msginput"><i id="sen" onclick="sendmsg()" style="margin-left:15px;font-size:30px;" class="fa fa-paper-plane" aria-hidden="true"></i><i id="mic" style="margin-left:15px;font-size:30px;" class="fas fa-microphone"></i><i class="fas fa-image" style="margin-left:15px;font-size:30px;"></i></div> 

</div>

<div id ="box">

<div id ="inbox">
<div id ="comp">
<?php
$hostname="localhost";
$dbusername="u669999615_vpstation";
$dbpassword="asdfghjkl";
$dbname="u669999615_vpstation";
$conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$sql = "SELECT * from user_complain WHERE policesn ='$policesn'";
$result1 = mysqli_query($conn,$sql);
$resultcheck1 = mysqli_num_rows($result1);        
if ($resultcheck1>0) {
  while($row = mysqli_fetch_assoc($result1)){
?>    
    <div id = 'detai'>
      <div id ='re'>
     <?php
        echo $row['Mobile'];
     ?>      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
     </div><div id ='det'>
        Approved <i  id='ap' class='fas fa-circle'></i>
          </div> 
          
      <div id='view' onclick="
        detail='<?php echo $row['Details_of_complaint'];?>';
      nameofcomplaint='<?php echo $row['Name_of_Complainer'];?>';
      Mobile='<?php echo $row['Mobile'];?>';
      email='<?php echo $row['email'];?>';
      Address='<?php echo $row['Address'];?>';
      City='<?php echo $row['City'];?>';
      State='<?php echo $row['State'];?>';
      Country='<?php echo $row['Country'];?>';
      nameofpersonagainst='<?php echo $row['Name_of_person_against'];?>';
      mobileagainst='<?php echo $row['Mobile_against'];?>';
      addressagainst='<?php echo $row['Address_against'];?>';
      cityagainst='<?php echo $row['City_against'];?>';
      stateagainst='<?php echo $row['State_against'];?>';
      countryagainst='<?php echo $row['Country_against'];?>';
      detailofcomplaint='<?php echo $row['Details_of_complaint'];?>';
      policesn='<?php echo $row['policesn'];?>';
      var doc=new jsPDF();
      doc.text(70,20,'COMPLAINANT DETAILS');
      doc.text(20,30,'NAME OF COMPLAINANT: ');
      doc.text(100,30,nameofcomplaint);
      doc.text(20,40,'MOBILE NO: ');
      doc.text(100,40,Mobile);
      doc.text(20,50,'E-mail ADDRESS:');
      doc.text(100,50,email);
      doc.text(20,60,'ADDRESS:');
      doc.text(100,60,Address);
      doc.text(20,70,'CITY:');
      doc.text(100,70,City);
      doc.text(20,80,'STATE: ');
      doc.text(100,80,State);
      doc.text(20,90,'COUNTRY:');
      doc.text(100,90,Country);
  
          
      doc.text(70,110,'COMPLAINT AGAINST');
      doc.text(20,120,'NAME OF PERSON :');
      doc.text(100,120,nameofpersonagainst);
      doc.text(20,130,'MOBILE NO: ');
      doc.text(100,130,mobileagainst);
       doc.text(20,140,'ADDRESS:');
      doc.text(100,140,addressagainst);
      doc.text(20,150,'CITY:');
      doc.text(100,150,cityagainst);
      doc.text(20,160,'STATE: ');
      doc.text(100,160,stateagainst);
      doc.text(20,170,'COUNTRY:');
      doc.text(100,170,countryagainst);
      doc.text(70,190,'COMPAINT DETAILS');
      doc.text(20,200,'POKLICE STATION NAME:');
      doc.text(100,200,policesn);
      doc.text(20,210,'DETAILS OF COMPLAINT:');
      doc.text(100,210,detailofcomplaint);

          
          doc.text(20,230,'RECEIVED BY:');
      doc.text(100,230,'POLICE STATION');
       doc.text(20,240,'DATE:');
      doc.text(100,240,'12/12/2019');
       doc.text(20,250,'TIME:');
      doc.text(100,250,'10:00 P.M');


      doc.save('document.pdf');


      ">
           VIEW DETAILS     
      </div>
      <script type="text/javascript">
      </script>     
      <div id='appro'>
      <div>
      <?php
      $i=1;
      $policesn=$row['policesn'];             
      while($i<=1)
      {
      ?>
      <i class='far fa-star' onclick="a1()" style='font-size:18px;color:#ff9529'></i>
      <i class='far fa-star' onclick="a2()" style='font-size:18px;color:#ff9529'></i>
      <i class='far fa-star' onclick="a3()" style='font-size:18px;color:#ff9529'></i>
      <i class='far fa-star' onclick="a4()" style='font-size:18px;color:#ff9529'></i>
      <i class='far fa-star' onclick="a5())" style='font-size:18px;color:#ff9529'></i>     
        <script>
        function a1(){
        $(document).ready(function(){
        var xml= new XMLHttpRequest();
        xml.open('GET','rate.php?mobile='+'<?php echo $policesn ?>'+'&rate='+<?php echo '1' ?>,true);
        xml.send();
        xml.onreadystatechange=function(){
        if(xml.readyState==4&&xml.status==200)
        {
        alert(xml.responseText);
          }
        }

      });
        }
        function a2(){
        $(document).ready(function(){
        var xml= new XMLHttpRequest();
        xml.open('GET','rate.php?mobile='+'<?php echo $policesn ?>'+'&rate='+<?php echo '2' ?>,true);
        xml.send();
        xml.onreadystatechange=function(){
        if(xml.readyState==4&&xml.status==200)
        {
        alert(xml.responseText);
          }
        }

      });
        }
        function a3(){
        $(document).ready(function(){
        var xml= new XMLHttpRequest();
        xml.open('GET','rate.php?mobile='+'<?php echo $policesn ?>'+'&rate='+<?php echo '3' ?>,true);
        xml.send();
        xml.onreadystatechange=function(){
        if(xml.readyState==4&&xml.status==200)
        {
        alert(xml.responseText);
          }
        }

      });
        }
        function a3(){
        $(document).ready(function(){
        var xml= new XMLHttpRequest();
        xml.open('GET','rate.php?mobile='+'<?php echo $policesn ?>'+'&rate='+<?php echo '3' ?>,true);
        xml.send();
        xml.onreadystatechange=function(){
        if(xml.readyState==4&&xml.status==200)
        {
        alert(xml.responseText);
          }
        }

      });
        }
        function a4(){
        $(document).ready(function(){
        var xml= new XMLHttpRequest();
        xml.open('GET','rate.php?mobile='+'<?php echo $policesn ?>'+'&rate='+<?php echo '4' ?>,true);
        xml.send();
        xml.onreadystatechange=function(){
        if(xml.readyState==4&&xml.status==200)
        {
        alert(xml.responseText);
          }
        }

      });
        }
        
        </script>
      <?php
      $i=$i+1;
      }
      ?>
      </div></div>
      </div>
<?php   
      }        
}

?>
</div>
</div>
</div>



</body>
</html>
