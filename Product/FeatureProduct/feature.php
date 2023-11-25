<?php 
    //import image
    $Casual_TShirt = "https://media.istockphoto.com/id/1281631373/vector/mockup-template-men-black-t-shirt-short-sleeve.jpg?s=1024x1024&w=is&k=20&c=UUEOMDVuYjQD21SFtzKHIyw1QvCQ9mjz2M3eNAZdaks=";
    $Denim_Jeans   = "https://media.istockphoto.com/id/1355391578/photo/blue-jeans-on-white-background.jpg?s=1024x1024&w=is&k=20&c=OiFTId3Mc6FXCcYB2oM4aNW8dHyPZwZsJnPZR5HsXYc=";
    $Cozy_Sweater  = "https://media.istockphoto.com/id/1495177165/photo/orange-sweater-on-white-background-top-view.jpg?s=1024x1024&w=is&k=20&c=favm8ESfSc6MvEUcNDDF4gx1rEf30TNC4i4xgci1DTQ=";
?> 
 
 <!-- Featured Products -->
 <div class="container mx-auto mt-12 p-4">
    <h2 class="text-3xl font-semibold mb-8 text-center">Featured Products</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Product 1 -->
        <div class="bg-white p-8 rounded-md shadow-md">
            <img <?php echo"src='$Casual_TShirt'";?> alt="Clothing" class="mb-4 rounded-md">
            <h3 class="text-xl font-semibold mb-2">Casual T-Shirt</h3>
            <p class="text-gray-600 mb-4">$24.99</p>
            <a href="#" class="bg-purple-500 text-white px-4 py-2 rounded-full inline-block">View Details</a>
        </div>
        <!-- Product 2 -->
        <div class="bg-white p-8 rounded-md shadow-md">
            <img <?php echo"src='$Denim_Jeans'";?> alt="Clothing" class="mb-4 rounded-md">
            <h3 class="text-xl font-semibold mb-2">Denim Jeans</h3>
            <p class="text-gray-600 mb-4">$49.99</p>
            <a href="#" class="bg-purple-500 text-white px-4 py-2 rounded-full inline-block">View Details</a>
        </div>
        <!-- Product 3 -->
        <div class="bg-white p-8 rounded-md shadow-md">
            <img <?php echo"src='$Cozy_Sweater'";?> alt="Clothing" class="mb-4 rounded-md">
            <h3 class="text-xl font-semibold mb-2">Cozy Sweater</h3>
            <p class="text-gray-600 mb-4">$39.99</p>
            <a href="#" class="bg-purple-500 text-white px-4 py-2 rounded-full inline-block">View Details</a>
        </div>
    </div>
</div>