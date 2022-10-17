<?php

include("connection.php");

if(isset($_POST['delete']))

{
    $id= $_POST['id_to_delete'];

    $query = "DELETE FROM `order` WHERE order_id ='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted")</script>';
        header("Location: index.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted") </script>';
    }
}
   