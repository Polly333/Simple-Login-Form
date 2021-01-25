<?php

//Connecting to the database
$host_name="localhost";
$user_name="root"; 
$password= ""; //000webhost, don't use dollar symbol in password
$database="wdl_exp_9"; //which database to be used, 000webhost

//Create a connection (Done using Procedural method) 
$con=mysqli_connect($host_name,$user_name,$password,$database);


//Die if connection was not successful 
if (!$con)
   {die("Connection failed:".mysqli_connect_error());  //.my.... is string concatenation
    }

echo"Connected successfully <br>";

//Taking inputs from form
$n1= $_POST['n'];  // name attribute of input 
$n2= $_POST['e'];
$n3= $_POST['p'];

//SQL query to be executed 
$sql="INSERT INTO `register` (`FULL_NAME`, `EMAIL_ID`, `PASSWORD`) VALUES ( '$n1', '$n2', '$n3');";
$result = mysqli_query($con,$sql);


//Will notify if record is added to table or not 
if($result)
{ echo "New Record Added Successfully";
}
else
{echo"The record cannot be added".mysqli_error($conn);
}


mysqli_close($con);   //  SEEEE THIS 
?>