
<?php
include("connection.php");

//GET DATA FROM DB
$sql=" SELECT `Job_status`, `company`, `customer`, `customerRegNo`, `order_id` FROM `order` WHERE 1";

$result= mysqli_query($conn,$sql);

$orders = mysqli_fetch_all($result,MYSQLI_ASSOC);


?>



<!-- table title  -->
<script src="https://cdn.tailwindcss.com"></script>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 bg-cyan-100">
               Job_Status 
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 bg-cyan-100">
                Company
              </th>
              <th scope="col" class="text-sm font-medium text--900 px-6 py-4 bg-cyan-100">
                Customer
              </th>
              <th scope="col" class="text-sm font-medium text--900 px-6 py-4 bg-cyan-100">
                CusRegNo
              </th>
              <th scope="col" class="text-sm font-medium text--900 px-6 py-4 bg-cyan-100">
              </th>
              <th scope="col" class="text-sm font-medium text--900 px-6 py-4 bg-cyan-100">
              </th>
            </tr>
          </thead>




    <!-- data detail   -->
<?php foreach($orders as $order): ?>
    <tbody>
          <tr class="border-b bg-blue-100 border-blue-200">
            <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">

                <!-- edit job status -->
                <form action="edit_job_status.php" method="POST">
       
                    <input type="hidden" name="id_to_edit_status" value="<?php echo $order['order_id']?>" />
               
                    <input type="submit" name="edit_job_status" value="📋" class="no-underline hover:underline">
                    </input>
                    <?php echo htmlspecialchars($order['Job_status'])?>
                    </td>
                </form>
        
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo htmlspecialchars($order['company'])?>
              </td>

              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo htmlspecialchars($order['customer'])?>
              </td>

              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo htmlspecialchars($order['customerRegNo'])?>
       

    

              <!-- edit --> 
              <form action="edit.php" method="POST">
                <td>
                    <input type="hidden" name="id_to_edit" value="<?php echo $order['order_id']?>" />
               
                    <input type="submit" name="edit" value="⚙️" class="no-underline hover:underline"> 
                    </input>
               </td>
              </form>


              <!-- bin -->
              <form action="delete.php" method="POST">
               <td>
                <input type="hidden" name="id_to_delete" value="<?php echo $order['order_id']?>" />
                
                 <input type="submit" name="delete" value="🗑" class="no-underline hover:underline">  
                </input>
               </td>
            </form>
        </tr>
            
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


        <!-- add new order button  -->
         <button name="addBtn"class="inline-flex items-center justify-center w-10 h-10 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
        <a href="newOrder.php">
        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
        </a>
        </button>

