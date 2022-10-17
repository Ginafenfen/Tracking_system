<?php 
//everytime if wan tto check user login
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($conn);
 

//GET DATA FROM DB
$sql='SELECT user_id,user_name FROM users';

$result= mysqli_query($conn,$sql);

$users = mysqli_fetch_all($result,MYSQLI_ASSOC);


 ?>




<!-- data display  -->
<script src="https://cdn.tailwindcss.com"></script>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    All User's ID
                </th>
                <th scope="col" class="py-3 px-6">
                    All user's Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($users as $user) : ?>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         <?php echo htmlspecialchars($user['user_id'])?>
                    </th>

                    <td class="py-4 px-6">
                        <?php echo htmlspecialchars($user['user_name'])?>
                    </td>
               
                    <td class="py-4 px-6">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
              </tr>
          
        <?php endforeach ?> 
        </tbody>
    </table>
</div>


<a href="index.php">back to index page</a>

