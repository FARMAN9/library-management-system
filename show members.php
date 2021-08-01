
<html>
<title>show member</title>
<body>
<style>
body{
	background-color:lightgreen;
}
button{
	align:center;
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
	table{
		   color:powderblack;
		   background-color:cyan;
	high:10px;
    width:100%;
	border:2px solid black;
	border:collapse:collapse;
	font-family:courier;
	border-radius:20px;
    font-size:120%;
	}
	tr,th{ color:powderblack;
		   background-color:red;
		high:30%;
    width:30%;
	border:2px solid black;
	border-radius:5px
	}
	td{
		   color:powderblack;
		   background-color:lightgreen;
	high:30%;
    width:30%;
	border:1px solid black;
	border:collapse:collapse;
	font-family:courier;
	border-radius:3px;
	}
}
p{    color:blue;
     background-color=powdergreen;
	font-family:courier;
font-size:150%;}
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
	</style>
	<h1 align="center" style="color:pink;">~MASTER INSTITUTE OF INFORMATION TECHNOLOGY~</h1>
	<a href="deletemember.php"><button id="bt1">delete<br>members</button></a>
	<a href="searchmember.php"><button>search<br>members</button></a>
	<a href="addmember.php"><button id="bt1">add<br>members</button></a>
	<a href="show members.php"align="center"><button id="bt1"style="width:6%;"  >Reload<br>page</button></a>
	<p align="right">
	<a href="homepage.php"><button id="bt1">home</button></a>
	</p>
<h1 align="center"style="background-color:cyan;"> MEMBERS IN OUR DATA_BASE</h1>
<p align="left" style="background-color:white;">
<table>
<?php 
$dbhost="localhost:3306";
$dbuser="root";
$dbpass="";
$dbname="myDB";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
	die('NOT connectected'.mysqli_error());
}
echo("DATA BASE IS ONLINE...<br>");

	$sql="Select  * from students";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{ echo"<tr>
                  <th>ROLL_NO</th>
                  <th>NAME<br></th>
                  <th>CLASS</th>
                  <th>ADDRESS<br></th>
				  <th>PHONE_NUMBER</th>
                  </tr>";
		while($row=mysqli_fetch_assoc($result))
		{
         echo "<tr><td>".$row["ROLL_NO"]."</td>"."<td>".$row["NAME"]."</td>"."<td>".$row["CLASS"]."</td>"."<td>".$row["address"]."<td>".$row["Phone"]."</td>";
		 echo"</tr>";
		}
	}
    else
	{
    echo" 0 member"	;	
    }
	
?>
</table>
</p>
</body>
</html>