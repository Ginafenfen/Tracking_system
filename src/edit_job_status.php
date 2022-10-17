
<?php

include("connection.php");

if(isset($_POST['edit_job_status']))
{
    $id = $_POST['id_to_edit_status'];

    $query = "SELECT Job_status,order_id FROM `order` WHERE order_id ='$id' ";

    $result = mysqli_query($conn, $query);
    $orders = mysqli_fetch_assoc($result);

    if($result)
    {
        echo '<script> Selecting the correct file </script>';
    
    }
    else
    {
        echo '<script> alert("do not have data") </script>';
    }
}



if(isset($_POST['edit_status']))
{
    $id = $_POST['id_to_edit_status'];

   $job_Status= $_POST['edit_job_status'];
  

    $query = "UPDATE `order` SET Job_status='$job_Status' WHERE order_id= '$id'  ";

    $result = mysqli_query($conn, $query);

    if($result)
    {
        echo '<script> alert("Changes Updated") </script>';
        header("Location:index.php");
    
    }
    else
    {
        echo '<script> alert("Data not updated,please double check ") </script>';
    }
}



    ?>


<!-- html start here -->
<script src="https://cdn.tailwindcss.com"></script>
        
<center >
<div>
        <div class="container ">
            <div class="jumbotron">
                <h1 class="text-5xl" >Update data</h1>
                <br>
                <hr>
                <form action="edit_job_status.php" method="POST" >
                    
      <label class="block text-gray-500 font-bold " >
                    <input type="hidden" name="id_to_edit_status" value="<?php echo $orders['order_id']?>">
                  <div class="md:w-2/3">
                        <label for=""> Job Status </label>
                        <input type="text" name="edit_job_status" value="<?php echo $orders['Job_status']?>" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded  py-2 px-4 text-gray-700 leading-3 focus:outline-none focus:bg-white focus:border-purple-500">

                    </div>
                    <br>


                    <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-1/3">
                    <button type="submit" name="edit_status" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"> Save Data</button>
                    </div>
                    </div>
                    <br>
                    <a href="index.php" class="btn btn-danger  " > CANCEL</a>

                </form>
            </div>
        
        </div>
</div>
</center>


