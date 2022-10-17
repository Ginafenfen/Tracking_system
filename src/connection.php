<?php

$host ='localhost';		
$user ='root';		
$pass ='';		
$db ='login_sample_db';		


//db connection 							
$conn = mysqli_connect($host,$user,$pass,$db);		

if(!$conn) {							
    echo "There are some problem while connecting the database";							
}
// else{
//     echo "db connected";
// }					
