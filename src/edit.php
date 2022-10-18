
<?php

include("connection.php");
        
//===edit====//
if(isset($_POST['edit']))
{
    $id = $_POST['id_to_edit'];

    $query = "SELECT company,customer,customerRegNo,order_id FROM `order` WHERE order_id ='$id' ";

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


//=====update=====//
if(isset($_POST['update']))
{
    $id = $_POST['id_to_edit'];


    $company = $_POST['company'];
    $customer = $_POST['customer'];
    $customerRegNo = $_POST['customerRegNo'];
  

    $query = "UPDATE `order` SET company= '$company', customer= '$customer', customerRegNo= '$customerRegNo' WHERE order_id= '$id'  ";
    

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

<center>
<div class="bg-lime-100 ">
<form class="w-full max-w-sm" action="edit.php" method="POST">
<h1 class="text-5xl">Edit data</h1>
<br>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">

      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" >
        <input type="hidden" name="id_to_edit" value="<?php echo $orders['order_id']?>">
       <label> Company Name</label>
       
    </div>
    <div class="md:w-2/3">
      <input type="text" name="company" value="<?php echo $orders['company']?>" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" >
    </div>
  </div>


  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" >
       Customer Name
      </label>
    </div>
    <div class="md:w-2/3">
      <input type="text" name=" customer" value="<?php echo $orders['customer']?>" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"  >
    </div>
  </div>


<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" >
      customerRegNo
      </label>
    </div>
    <div class="md:w-2/3">
      <input type="text" name="customerRegNo" value="<?php echo $orders['customerRegNo']?>" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"   >
    </div>
  </div> 



<div class="md:flex md:items-center mb-3">
    <div class="md:w-1/3"></div>
  
  </div>

  <div class="md:flex md:items-center md:w-1/3">
 
    <div class="md:w-3/3">
      <button type="submit" name="update" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >
       Save
      </button><br/><a href="index.php" class="no-underline hover:underline"> CANCEL</a>
    </div>
  </div>
</form>
</div>
</center>
