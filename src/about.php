
<?php 
//everytime if wan tto check user login
session_start();


include("connection.php");
include("function.php");

$user_data = check_login($conn);
 

 ?>




<a href="index.php">back to index page</a>