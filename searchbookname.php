
<html>
<title>SEARCH book name</title>
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
font-size:150%;}
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
	th{ color:powderblack;
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

form{
	font-color:green;
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
	<a href="deletebook.php"><button>delete<br>book</button></a>
	<a href="addbooks.php"><button id="bt1">add<br>books</button></a>
	<a href="issuebook.php"><button>issue<br>book</button></a>
	<a href="bookreturn.php"><button id="bt1">return<br>books</button></a>
	<a href="searchbook.php"align="center"><button id="bt1"style="width:6%;" >search book by code</button></a
	<a href="searchbookname"><button id="bt1">reload<br>page</button></a>
	<p align="right">
	<a href="homepage.php"><button id="bt1">home</button></a>
	</p>
<h1 align="center"style="background-color:cyan;"> SEARCH BOOK IN OUR DATABASE</h1>
<form align="center" color="red" method="post">
<h1 align="center"  style="background-color:gold ;"> <font color="red"></font> </h1>
<font color="green">
 NAME OF BOOK:
<input type="text" name="name"/>
<br><br>
<input type ="submit" name="submit" value="submit" style="border:6px solid blue;"/>
</form>
<p align="left" style="background-color:white;" style="font-color:blue;">
<?php 
if($_POST)
{
	$code=$_POST['name'];
	if(strlen($code)==0||$code==Null)
	{
		echo"<font color='red'>ENTER NAME OF BOOK</font>";
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
echo("<br>DATA BASE IS ONLINE...<br>");

	$sql="Select * from books WHERE BOOK_NAME="."'".$code."'";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0) //mysqli_n
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo"<table>
            <tr>
            <th>BOOK_CODE</th>
             <th>BOOK_NAME</th>
             <th>AUTHOR</th>
             <th>ROLL_NO</th>
             <th>STUTAS</th>
			   <th>ISSUED<br>DATE</th>
				  <th>RETURNED<br>DATE</th>
              </tr>";
         echo"<tr>";
         echo "<td>".$row["BOOK_CODE"]."</td>"."<td>".$row["BOOK_NAME"]."</td>"."<td>".$row["AUTHOR"]."</td>"."<td>".$row["ROLL_NO"]."</td>"."<td>".$row['varfi']."</td>"."<td>".$row['issuedate']."</td>"."<td>".$row['retuendate']."</td>";
		 echo"</tr></table>";
		 if($row["varfi"]="return")
		 {
		 $lastuser=$row['ROLL_NO'];
		 $user="LAST USER";
		 }
		 else
		 {
		 $lastuser=$row['ROLL_NO'];
		 $user="CURRENT USER";
		 }
		}
	}
    else
	{
    echo" BOOK NOT FOUND"	;	
	exit();
    }
	echo"<br>".$user." ID:".$lastuser;
}
?>
</p>

</table>
</body>
</html>