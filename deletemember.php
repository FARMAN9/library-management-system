<title>delete member</title>
<body>
<style>
body{
	background-color:lightgreen;
}
h1{color:blue;
font-family:chiller;
font-size:300%;
text-shadow:2px 2px black;}
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
	p{color:powderblack;
	font-family:courier;
font-size:200%;}
form{
	color:powderblack;
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
	<a href="searchmember.php"><button>search<br>members</button></a>
	<a href="addmember.php"><button id="bt1">add<br>members</button></a
	<a href="deletemember.php"align="center"><button id="bt1"style="width:6%;"  >Reload<br>page</button></a>
	<p align="right">
	<a href="homepage.php"><button id="bt1">home</button></a>
	</p>
<h1 align="center"style="background-color:cyan;"> DELETE MEMBER</h1>
<form align="center" color="red" method="post">
<h1 align="center"  style="background-color:gold ;"> <font color="red"></font> </h1>
<font color="green">
ROLL NUMBER OF STUDENT:
<input type="number" name="roll"/>
<br><br>
<input type ="submit" name="submit" value="submit" />
</form>
<p align="left" style="background-color:white;" style="font-color:blue;">
<table>
<?php 
if($_POST)
{
	$roll=$_POST['roll'];
	if($roll<=0)
	{
		echo"ENTER ROLL_NO TO DELETE MEMBER";
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
echo("DATA BASE IS ONLINE...<br>");
    $filename="query";
	$file=fopen($filename,"a+");
 if($file==false)
{
	echo("error_reporting");
	exit();
}
$data="\nmember deleted roll no:".$roll;
fwrite($file,$data);
fclose($file);
$sql="Select * from students WHERE ROLL_NO=".$roll."";
$result=mysqli_query($conn,$sql);
	    	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
         echo "<font color ='red'><b>ROLL_NO:</font>".$row["ROLL_NO"]."<br>"."<font color ='red'><b>NAME:       </font>".$row["NAME"]."<br>"."<font color ='red'><b>CLASS:     </font>".$row["CLASS"]."<br>"."<font color ='red'><b>ADDRESS:</font>".$row["address"]."<br>"."<font color ='red'><b>Phone:</font>".$row["Phone"]."<br>";
		}
	}
    else
	{
    echo" \nROLL_NO:  ".$roll." NOT FOUND";	
	exit();
    }
	$sql="Select  * from books WHERE ROLL_NO=".$roll;
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
    
	}
	$num=0;
	$sql="Select varfi from books where ROLL_NO=".$roll;
	$result=mysqli_query($conn,$sql); 
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
		     if($row['varfi']=="issued")
		          {
		            $num++;
				  }
	    }
    }
	 else
	{
  echo"<font color='blue'>BOOK TO RETURN : 0<br></font>";
     $sql="DELETE from students where ROLL_NO=".$roll;
						   if($conn->query($sql)===TRUE)
                                   {
	                                echo"<br>MEMBER DELETED : ".$roll;	
									exit();
								   }
                                      else
                                        {
	                                     echo $conn->error;
	                                     }	
    }
	                 if($num==0)
					{
						$sql="DELETE from students where ROLL_NO=".$roll;
						   if($conn->query($sql)===TRUE)
                                   {
	                                echo"\nMEMBER DELETED ".$roll."</font>";
                                    exit();									
								   }
                                      else
                                        {
	                                     echo $conn->error;
	                                     }
										 exit();
		
					}						
				  else
				  {
					  echo"<font color='red'><br>MEMBER CAN NOT DELETED: ".$roll."</font>";
					  echo"<font color='blue'><br>BOOKS TO RETURN: </font>"."<font color='green'>".$num."</font>";
				  }
}	

?>
</table>
</p>

</body>
</html>