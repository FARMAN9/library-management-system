
<html>
<title>add member</title>
<body>
<style>
body{
	background-color:lightgreen;
	
}
button{
	background-color:orange;
	color:white;
	border:4px solid #4CAF50;
	-webkit-transition-duration:0.4s;
	transition-duration:0.4s;
	border-radius:10px;
	
}
button:hover{
	background-color:green;
	color:white;
	border:4px solid #f44336;
	border-radius:8px;
}
h1{color:blue;
font-family:chiller;
font-size:300%;
text-shadow:2px 2px black;}
	p{color:powderblack;
	
	font-family:courier;
font-size:200%;}
input{	background-color:orange;
	color:white;
	border:4px solid #4CAF50;
	-webkit-transition-duration:0.4s;
	transition-duration:0.4s;
	border-radius:10px;
}
input:hover{
	background-color:green;
	color:white;
	border:4px solid #f44336;
	border-radius:8px;
}
form{
	color:powderblack;
	
	font-family:cooper black;
font-size:100%;
}

	</style>
	<h1 align="center" style="color:pink;">~MASTER INSTITUTE OF INFORMATION TECHNOLOGY~</h1>
	<a href="show members.php"><button id="bt1">show<br>members</button></a>
	<a href="searchmember.php"><button>search<br>members</button></a>
	<a href="deletemember.php"><button id="bt1">delete<br>members</button></a>
	<a href="addmember.php"align="center"><button id="bt1"style="width:6%;"  >Reload<br>page</button></a>
	<p align="right">
	<a href="homepage.php"><button id="bt1">home</button></a>
	</p>
<h1 align="center"style="background-color:cyan;">  ADD MEMBER IN DATABASE</h1>

<form align="center" color="red" method="post">
<h1 align="center"  style="background-color:gold ;"> <font color="red"></font> </h1>
<font color="green">
NAME OF STUDENT:
<input type="text" name="name" id="name"/>

ROLL NUMBER OF STUDENT:
<input type="number" name="roll"/>
CLASS OR SEM:
<input type="text" name="class"/>
<hr>
ADDRESS:
<input type="text" name="ADDRESS"/>
PHONE NUMBER:
<input type="number" name="phone"/>
<hr>
<input type ="submit" name="submit" value="submit" style="border:6px solid blue;"/>
</font>
</form>
<p align="left" style="background-color:white;" style="font-color:blue;">
<?php 
if($_POST)
{
	
	
	$stn=$_POST['name'];
	$roll=$_POST['roll'];
	$class=$_POST['class'];
	$address=$_POST['ADDRESS'];
	$phone=$_POST['phone'];
	if($roll<=0||$stn==NULL||$class==NULL||$address==Null)
	{
		echo" <font color='red'>your form not  accpected !!!\n make your info carract!!! \n try again...</font>";
		exit();
	}
	if(strlen($phone)<10|| strlen($phone)>10|| $phone==0|| $phone==Null)
	{
		echo" <font color='red'>enter phone number carract!!!<br> your form not  accpected !!!<br> make your info carract!!! <br> try again...</font>";
		exit();
	}
$dbhost="localhost:3306";
$dbuser="root";
$dbpass="";
$dbname="myDB";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
	die('NOT connectected'.mysqli_error());
}
echo("DATA BASE IS ONLINE...");
    $filename="query";
	$file=fopen($filename,"a+");
 if($file==false)
{
	echo("error_reporting...");
	exit();
}
$data="\nINSERT INTO students VALUES(".$roll.$stn.$class.$address.$phone.")";
fwrite($file,$data);
fclose($file);
 $names="'".$stn."'";
 $classs="'".$class."'";
 $addrs="'".$address."'";
 
	$sql="INSERT INTO students VALUES(".$roll.",".$names.",".$classs.",".$addrs.",".$phone.")";
	if(mysqli_query($conn,$sql))
    {	
      echo"<font color='green'><br><b>MEMBER ADD IN DATABASE</b></font>";	
    }
	else 
	{
		echo "<font color='red'><br>sorry member already added<br>or some thing wrong<br></font>".mysqli_error($conn);

	}
	$sql="Select  * from students WHERE ROLL_NO=".$roll."";
$result=mysqli_query($conn,$sql);
	    	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
         echo "<font color='blue'><b><br>ROLL_NO:".$row["ROLL_NO"]."<br>"."NAME:".$row["NAME"]."<br>"."CLASS:".$row["CLASS"]."<br>"."ADDRESS:".$row["address"]."<br>"."PHONE NUMBER:".$row["Phone"]."<br></b></font>";	
		 }
	}
}
?>
</style>

</body>
</html>