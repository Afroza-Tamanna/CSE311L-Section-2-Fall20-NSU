<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cse311_section_1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE  student(
    snum NUMERIC(9,0) NOT NULL PRIMARY KEY ,
    sname VARCHAR(50) NOT NULL UNIQUE,
    major VARCHAR(255) NOT NULL,
    level VARCHAR(2) NOT NULL,
    age NUMERIC(3,0) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>