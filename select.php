<?php

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "tour");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Attempt create table query execution

$sql = "create table tour(

    

    firstname CHAR(30) NOT NULL,
	lastname char(20),
	cnumber CHAR(10),
	email VARCHAR(40),
	subject VARCHAR(80),
	place VARCHAR(30),
	dream VARCHAR(90)
	
    

)";
//INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";


if(mysqli_query($link, $sql)){

    echo "Table created successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
/*$result = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";

if(mysqli_query($link, $result))
{

   echo "Records inserted successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);*/

 
// Close connection

mysqli_close($link);
?>
