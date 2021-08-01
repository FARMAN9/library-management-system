<title>delete BOOK</title>
<body >
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
form{
	color:powderblack;
	font-family:cooper black;
font-size:100%;}
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
	<a href="showbooks.php"><button id="bt1">show<br>books</button></a>
	<a href="searchbook.php"><button>search<br>book</button></a>
	<a href="addbooks.php"><button id="bt1">add<br>books</button></a>
	<a href="issuebook.php"><button>issue<br>book</button></a>
	<a href="bookreturn.php"><button id="bt1">return<br>books</button></a>
	<a href="deletebook.php"align="center"><button id="bt1"style="width:6%;"  >Reload<br>page</button></a>
	<p align="right">
	<a href="homepage.php"><button id="bt1">home</button></a>
	</p>
<h1 align="center"style="background-color:cyan;"> DELETE BOOK</h1>
<form align="center" color="red" method="post">
<h1 align="center"  style="background-color:gold ;"> <font color="red"></font> </h1>
<font color="green">
 CODE OF BOOK:
<input type="number" name="code"/>
<br><br>
<input type ="submit" name="submit" value="submit"/>
</form>
<p align="left" style="background-color:white;" style="font-color:blue;">
<?php 
if($_POST)
{
	$roll=$_POST['code'];
	if($roll<=0)
	{
		echo"ENTER CODE TO DELETE BOOK";
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
$data="\book deleted roll no:".$roll;
fwrite($file,$data);
fclose($file);
$sql="Select  * from books WHERE BOOK_CODE=".$roll."";
$result=mysqli_query($conn,$sql);
	    	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
         echo "BOOK_CODE:".$row["BOOK_CODE"]."|"."BOOK_NAME:".$row["BOOK_NAME"]."|"."AUTHOR:".$row["AUTHOR"]."|"."ROLL_NO:".$row["ROLL_NO"]."|"."->".$row['varfi']."<br>";
		}
	}
    else
	{
    echo" \nBOOK_CODE :  ".$roll." NOT FOUND";	
	exit();
    }
	
	$sql="Select varfi from books where BOOK_CODE=".$roll;
	$result=mysqli_query($conn,$sql); 
  if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo"<br>BOOK STATUS: ".$row['varfi']."<br>";
			$stu =$row['varfi'];
			if($stu=="RETURN"||$stu=="return")
			{		 
    $sql="DELETE FROM books WHERE BOOK_CODE=".$roll;
	if($conn->query($sql)===TRUE)
      {
	    echo"\nBOOK DELETE BOOK_CODE: ".$roll;	
      }
    else
     {
	echo $conn->error;
	 }
			}
			else
			{
				echo"<br>BOOK NOT DELETED";
				exit();
			}
	    }
	}
	
	
}	
?>
</p>

</body>
</html>