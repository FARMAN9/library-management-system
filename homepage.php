<html>
<title>HOME</title>
<body>
<style>
body
{
	background:repeating-radial-gradient(lightgreen,lightgreen);
}
button{
	border-style:outset;
	background-color:orange;
	color:white;
	border:4px solid #4CAF50;
	-webkit-transition-duration:0.4s;
	transition-duration:0.4s;
	padding:10px 25px;
	border-radius:9px 5px;
	
	
}
button:hover{
	background-color:green;
	color:white;
	border:4px solid #f44336;
	border-radius:88px 50px;
	border-style:inset;
}
h1{
	text-shadow:2px 2px gray;
	font-family:Snap ITC;
	color:f66667;
}
h2{color:cyan;
text-shadow:2px 2px black;
border:4px solid #f44336;
width:100%;
text-align:center;
background-color:#1f1341;
font-family:chiller;
font-size:200%;
border-radius:77px 40px ;
}
	
form{
	color:powderblack;
	font-family:cooper black;
font-size:100%;
}
 
h4{color:blue;
text-align:center;
font-family:Harlow Solid Italic;
font-size:200%;
}
h5{
	
	background:linear-gradient(blue,yellow,cyan);
	color:black;
	border:none;
	border-radius:55px,66px;
	text-shadow:0px 0.5px blue;
}
h4{
	font-family:chiller;
	text-shadow:2px 2px black;
}
h6{
	text-align:right;
	color:red;
	font-family:Impact;
	font-size:100%;
	text-shadow:1px 0.5px black;
}
 script {text-align:right;
	color:red;
	font-family:Impact;
	font-size:100%;
	text-shadow:1px 0.5px black;
   }
 .img-container {
	 text-align: center;
 }

	</style>
<marquee behavior="scroll" direction="right">
	  <img src="al2.png"  align="center"width="200" height="50"> </img>
	  </marquee>
	<script type="text/javascript">
alert("LABRARY MENAGEMENT\nPROJECT BY FARMAN ALI");
</script>
   
	<h1 align="center">~MASTER INSTITUTE OF INFORMATION TECHNOLOGY~</h1>
	<h5>



	<marquee behavior="scroll" direction="left">
WELL_COME_TO_MIIT_PULWAMA 
</marquee>

</h5>
<p> <font color="green">
STUTAS:
<?php
$dbhost="localhost:3306";
$dbuser="root";
$dbpass="";
$dbname="myDB";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
	echo("<font color='red'> <font align='right'> <font size=5%>\tDATA BASE IS OFFLINE ...</font></font></font>");
	echo"<font align='center'><font color='blue'> <font size=4%>".date("d/m/y")."</font></font></font>";
}
else
{
echo(" <font align='center'><font color='blue'><font size=5%><br>DATA BASE IS ONLINE...</font></font></font>");
echo"<font align='center'><font color='red'> <font size=4%>".date("d/m/y")."</font></font></font>";
}
?>
</font>
</p>

	<h2>LABRARY MENAGEMENT  </h2>
      <img src="miit2.png" align="left" height="400"></img>
      <img src="miit2.png" align="right" height="400"></img>
	<h4>BOOK</h4>
	<p align="center">
	<a href="showbooks.php"><button id="bt1">show<br>books</button></a>
	<a href="searchbook.php"><button>search<br>book</button></a>
	<a href="addbooks.php"><button id="bt1">add<br>books</button></a>
	<a href="deletebook.php"><button>delete<br>book</button></a>
	<a href="bookreturn.php"><button id="bt1">return<br>books</button></a>
	<a href="issuebook.php"align="center"><button >issue<br>book</button></a>
	</p>
	<h4>MEMBER</h4>
	<p align="center">
	<a href="show members.php"><button id="bt1">show<br>members</button></a>
	<a href="searchmember.php"><button>search<br>members</button></a>
	<a href="deletemember.php"><button id="bt1">delete<br>members</button></a>
	<a href="addmember.php"align="center"><button >add<br>member</button></a>
	</p>
	<br>
	<p align="center">
	
	<a href="homepage.php"><button id="bt1">	
	home</button></a>
	</p>
	<h5>
	<marquee behavior="scroll" direction="left">
	    ©PROJECT BY FARMAN ALI   ©PROJECT BY FARMAN ALI  ©PROJECT BY FARMAN ALI
		</marquee>
	</h5>
	<h6>SYED FARMAN ALI<h6>
	</body>
	</html>