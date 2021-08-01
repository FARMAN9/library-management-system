
<html>
<title>add book</title>
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
font-size:100%;
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
	<a href="showbooks.php"><button id="bt1">show<br>books</button></a>
	<a href="searchbook.php"><button>search<br>book</button></a>
	<a href="deletebook.php"><button id="bt1">delete<br>books</button></a>
	<a href="issuebook.php"><button>issue<br>book</button></a>
	<a href="bookreturn.php"><button id="bt1">return<br>books</button></a>
	<a href="addbooks.php"align="center"><button id="bt1"style="width:6%;"  >Reload<br>page</button></a>
	<p align="right">
	<a href="homepage.php"><button id="bt1">home</button></a>
	</p>
<h1 align="center"style="background-color:cyan;">  ADD BOOKS IN DATABASE</h1>

<form align="center" color="red" method="post">
<h1 align="center"  style="background-color:gold ;"> <font color="red"></font> </h1>
<font color="green">
NAME OF BOOK:
<input type="text" name="name" id="name"/>
CODE OF BOOK:
<input type="number" name="code"/>
AUTHOR:
<input type="text" name="Author"/>
<br><br>
<input type ="submit" name="submit" value="submit" style="border:6px solid blue;"/>
</font>
</form>
<p align="left" style="background-color:white;">
<?php 
if($_POST)
{
	
	
	$BOOKNAME=$_POST['name'];
	$code=$_POST['code'];
	$author=$_POST['Author'];
	//$ROLL_NO=$_POST['ROLL_NO'];
	if($BOOKNAME==NULL||$code<=0||$author==NULL)
	{
		echo"ENTER VALID INFO";
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
   
 $names="'".$BOOKNAME."'";
 $autdr="'".$author."'";
  /*   $sql="Select * from students where ROLL_NO=".$ROLL_NO."";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
         echo "ROLL_NO:".$row["ROLL_NO"]."|"."NAME:".$row["NAME"]."|"."CLASS:".$row["CLASS"]."|"."ADDRESS:".$row["address"]."<br>";
		}
	}
    else
	{
    echo" MEMBER NOT FOUND";
    exit();	
    }*/
	
	$sql="INSERT INTO books VALUES(".$code.",".$names.",".$autdr.","."0".",'return','new book','new book')";
	
	if(mysqli_query($conn,$sql))
    {	
      echo"\nbook add in database";	
    }
	else 
	{
		echo "<br>sorry book is all ready added<br>".mysqli_error($conn);

	}
	
}
?>
</style>
</body>
</html>