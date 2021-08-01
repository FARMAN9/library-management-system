
<html>
<title>RETURN book</title>
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
	<a href="addbooks.php"><button id="bt1">add<br>books</button></a>
	<a href="issuebook.php"><button>issue<br>book</button></a>
	<a href="deletebook.php"><button id="bt1">delete<br>books</button></a>
	<a href="bookreturn.php"align="center"><button id="bt1"style="width:6%;"  >Reload<br>page</button></a>
	<p align="right">
	<a href="homepage.php"><button id="bt1">home</button></a>
	</p>
<h1 align="center"style="background-color:cyan;"> RETURN BOOK</h1>

<form align="center" color="red" method="post">
<h1 align="center"  style="background-color:gold ;"> <font color="red"></font> </h1>
<font color="green">
CODE OF BOOK:
<input type="number" name="code"/>

ROLL_NO ISSUED:
<input type="number" name="ROLL_NO"/>
<br>
<input type ="submit" name="submit" value="submit" style="border:6px solid blue;"/>
</font>
</form>
<p align="left" style="background-color:white;">
<?php 
if($_POST)
{
	
	$code=$_POST['code'];
	$ROLL_NO=$_POST['ROLL_NO'];
	if($code<=0||$ROLL_NO<=0)
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

     $sql="Select * from students where ROLL_NO=".$ROLL_NO."";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
          echo "<b><font color='blue'><br>ROLL_NO:".$row["ROLL_NO"]."<br>"."NAME:".$row["NAME"]."<br>"."CLASS:".$row["CLASS"]."<br>"."ADDRESS:".$row["address"]."<br>";
		   echo "PHONE NUMBER:".$row["Phone"]."<br></font><b>";
		}
	}
    else
	{
    echo"<br>MEMBER NOT FOUND";
    exit();	
    }
	
	$sql="Select * from books  WHERE BOOK_CODE=".$code;
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
        echo"<font align='left'><font color='red'>BOOK_Code:".$row["BOOK_CODE"]."<br>"."NAME :".$row["BOOK_NAME"]."<br>"."AUTHOR:".$row["AUTHOR"]."<br>"."ROLL_NO:".$row["ROLL_NO"]."<br>"."STUTAS:".$row["varfi"]."</font>";
		 if( $ROLL_NO==$row["ROLL_NO"])
		 {
			// $sql="UPDATE  books  SET ROLL_NO=".$ROLL_NO." where BOOK_CODE=".$code;//
			 $sql="UPDATE  books  SET varfi='return'"." where BOOK_CODE=".$code;
			  if($conn->query($sql)===TRUE)
                   {
                    	echo"<br> BOOK RETURNED BY ROLL_NO:".$ROLL_NO;	
                   }
                    else
                    {
	                  echo $conn->error;	
                    }
					 $sql="UPDATE  books  SET retuendate="."'".date("d/m/y")."'"."where BOOK_CODE=".$code;
			     if($conn->query($sql)===TRUE)
                   {
                    	echo"<br><font color='green'>HAVE A GOOOD DAY</font>";
                   }
                    else
                    {
	                  echo $conn->error;	
                    }
		 }
		 else
		 {
				echo"<br>YOU HAVE NOT TAKE THIS BOOK";
				exit();
		 }
		}
    }
    else
	{
    echo"BOOK NOT FOUND";
    exit();	
    }
}
?>
</style>
</body>
</html>