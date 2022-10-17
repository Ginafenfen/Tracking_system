
<?php
include("connection.php");

// query for add new order //
if(isset($_POST['submit']))
{

        $company = $_POST['company'];
        $customer = $_POST['customer'];
        $customerRegNo = $_POST['customerRegNo'];


$query = "INSERT INTO `order`( `company`, `customer`, `customerRegNo`) VALUES ('$company','$customer','$customerRegNo')";

$insert = mysqli_query($conn,$query);
    if(!$insert) 
    {
    echo "there are some problem while inserting data";
    }

    else
    {
    echo  "New order added";
    header("Location: index.php ");

    }

}
?>




<!-- component -->
<script src="https://cdn.tailwindcss.com"></script>
<main class="flex min-h-screen flex-col justify-center bg-cyan-500 p-16">
  <h1 class="text-3xl font-bold text-white">New Order</h1>
  <p class="mb-8 font-semibold text-gray-100">ITOS interactive tracking operating system</p>

<!-- form for adding data -->
<form action="newOrder.php" method="POST">
  <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">
    <div class="mb-4 grid grid-cols-2 gap-4">
      <div class="flex flex-col">
        <label for="text" class="mb-2 font-semibold">Company</label>
        <input name="company" type="text" id="text" class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
      </div>
      <div class="flex flex-col">
        <label for="text" class="mb-2 font-semibold">customer</label>
        <input name="customer" type="text" id="text" class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
      </div>
    </div>
    <div class="mb-4 flex flex-col">
      <label for="text" class="mb-2 font-semibold">Customer Registration Number</label>
        <div class="relative">
        <input name="customerRegNo" type="text" id="text" class="w-full rounded-lg border border-slate-200 px-2 py-1 pl-8 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
        </div>
    </div>
 

    <div class="flex">
      <label for="privacy" class="mb-2 ">
        <input type="checkbox" name="privcay" id="privacy" class="mr-2 peer w-0 h-0" />
        <h1 class="font-semibold">I have read and agreed the privacy policy</h1>
        <div class="w-6 h-6  items-center inline-block justify-center hover:border-blue-500 focus:ring transition-all focus:ring-blue-500/40 border border-slate-200 rounded-lg peer-checked:bg-blue-500 peer-checked:[&>svg]:block [&>svg]:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto text-white " viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
        </div>
      </label>
  

<!-- btn for submit -->
<div >
  <div>
    <button  name="submit" class=" inline-block rounded-full bg-blue-600 text-white leading-normal uppercase shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-9 h-9">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download"
        class="w-3 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512">
        <path fill="currentColor"
          d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
        </path>
      </svg>
    </button>
</form>
  </div>
</div>

</div>
</div>
 
<!-- back to index.php -->
<div>
<a href="index.php" class="no-underline hover:underline text-color text-cyan-300" >back to index page</a>
</div>
</main>

