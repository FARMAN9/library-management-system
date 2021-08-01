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
echo("connection_sucess");

			 $sql="DROP  TABLE students ";
			     if($conn->query($sql)===TRUE)
                   {
                    	echo"<br> alter table student BY add phone no date:".date("d/m/y")."";
						$temp=date("d/m/y");
						echo$temp;
                   }
                    else
                    {
	                  echo $conn->error;	
                    }
?>