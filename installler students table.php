<?php 
$dbhost="localhost:3306";
$dbuser="root";
$dbpass="";
$dbname="myDB";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

			if(!$conn)
{
	die('not connectected'.mysqli_error());
}
echo("connection_sucess\n");

			 $sql="USE myDB";
			     if($conn->query($sql)===TRUE)
                   {
                    	echo"<br> DATABASE ARE in USE".date("d/m/y")."";
						$temp=date("d/m/y");
						echo$temp;
                   }
                    else
                    {
	                  echo $conn->error;	
                    }
if(!$conn)
{
	die('not connectected'.mysqli_error());
}
echo("\nINSTELLER WORKING...\n");

			 $sql="  CREATE TABLE  students
 ( ROLL_NO INT(20) PRIMARY KEY UNIQUE NOT NULL,
 NAME VARCHAR(30) NOT NULL,
 CLASS VARCHAR(30)NOT NULL,
 address VARCHAR(30) NOT NULL,
 Phone VARCHAR(20)
 )";
			     if($conn->query($sql)===TRUE)
                   {
                    	echo"<br> BOOKS TABLE CREATED".date("d/m/y")."";
						$temp=date("d/m/y");
						echo$temp;
                   }
                    else
                    {
	                  echo "\n".$conn->error;	
                    }
?>