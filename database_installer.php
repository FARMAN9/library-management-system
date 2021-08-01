<?php 
$dbhost="localhost:3306";
$dbuser="root";
$dbpass="";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
	die('not connectected'.mysqli_error());
}
echo("connection_sucess");

			 $sql="CREATE DATABASE myDB";
			     if($conn->query($sql)===TRUE)
                   {
                    	echo"<br> DATABASE CREATED:".date("d/m/y")."";
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
echo("connection_sucess");

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
?>
