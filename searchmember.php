
<html>
<title>SEARCH member</title>
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
	p{color:blue;
	font-family:courier;
font-size:200%;}
form{
	color:green;
	
	font-family:cooper black;
font-size:100%;
}
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
	<a href="show members.php"><button id="bt1">show<br>members</button></a>
	<a href="deletemember.php"><button>delete<br>members</button></a>
	<a href="addmember.php"><button id="bt1">add<br>members</button></a>
     <a href="searchmembername.php"><button id="bt1">search<br>by name</button></a>
	<a href="searchmember.php"align="center"><button id="bt1"style="width:6%;"  >Reload<br>page</button></a>
	<p align="right">
	<a href="homepage.php"><button id="bt1">home</button></a>
	</p>
<h1 align="center"style="background-color:cyan;"> SEARCH MEMBER IN OUR DATABASE</h1>
<form align="center" color="red" method="post">
 
 ROLL_NO OF MEMBER:
<input type="number" name="code"/>
<br><br>
<input type ="submit" name="submit" value="submit"/>
</form>
<p align="left" style="background-color:white;" style="font-color:blue;">
<?php 
if($_POST)
{
	$code=$_POST['code'];
	if($code<=0)
	{
		echo"ENTER VALID ROLL_NO:".$code;
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
echo("<font size='20'><font color='blue'>DATA BASE IS ONLINE...</font></font><br>");

	$sql="Select * from students WHERE ROLL_NO=".$code;
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{  
         echo"<table><tr>
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
		echo"</table>";
	}
    else
	{
    echo" MEMBER NOT FOUND"	;	
	exit();
    }
	 echo"BOOK DATILE:";
}
?>
</p>
<table>
<?php
if($_POST)
{
	$code=$_POST['code'];
	if($code<=0)
	{
		echo"ENTER VALID ROLL_NO:".$code;
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
$sql="Select  * from books WHERE ROLL_NO=".$code;
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		echo"<tr>
                  <th>BOOK_CODE</th>
                  <th>BOOK_NAME</th>
                  <th>AUTHOR</th>
                  <th>ROLL_NO</th>
                  <th>STUTAS</th>
				  <th>ISSUED<br>DATE</th>
				  <th>RETURNED<br>DATE</th>
                  </tr>";
	while($row=mysqli_fetch_assoc($result))
		{
         echo "<tr><td>".$row["BOOK_CODE"]."</td>"."<td>".$row["BOOK_NAME"]."</td>"."<td>".$row["AUTHOR"]."</td>"."<td>".$row["ROLL_NO"]."</td>.<td><font color='blue'> <font style='b'>".$row['varfi']."</font></font></td>"."<td>".$row['issuedate']."</td>"."<td>".$row['retuendate']."</td>";
		 echo"</tr>";
		}
	}
    else
	{
    exit();	
  
	}
}
?>
</table>
</body>
</html>