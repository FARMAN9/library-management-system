
<html>
<title>show books</title>
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
text-shadow:2px 1px black;}
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
p{    color:blue;
     background-color=powdergreen;
	font-family:courier;
font-size:150%;}
	</style>
	<h1 align="center" style="color:pink;">~MASTER INSTITUTE OF INFORMATION TECHNOLOGY~</h1>
	<a href="deletebook.php"><button id="bt1">delete<br>book</button></a>
	<a href="searchbook.php"><button>search<br>book</button></a>
	<a href="addbooks.php"><button id="bt1">add<br>books</button></a>
	<a href="issuebook.php"><button>issue<br>book</button></a>
	<a href="bookreturn.php"><button id="bt1">return<br>books</button></a>
	<a href="searchbookname.php"><button id="bt1">serach<br>book by name</button></a>
	<a href="showbooks.php"align="center"><button id="bt1"style="width:6%;"  >Reload<br>page</button></a>
	<p align="right">
	<a href="homepage.php"><button id="bt1">home</button></a>
	</p>
<h1 align="center"style="background-color:cyan;"> BOOKS IN OUR DATA_BASE</h1>
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

	$sql="Select  * from books";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{        echo"<tr>
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
    echo" 0 BOOKS"	;	
    }
	
?>
</table>
</p>
</body>
</html>