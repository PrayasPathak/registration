<?php 
    require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National ID Card</title>
    <!-- Tailwind css CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- If the styles are not displayed correctly, please uncomment the above tailwindcss CDN link. Sorry for the inconvenience -->
    <!-- <link rel="stylesheet" href="./style.css"> -->
</head>
<body>
    <main class="bg-teal-900">
        <section class="flex justify-between items-center">
            <div>
                <img src="./img/logo.png" alt="Government of Nepal Logo" class="w-full h-32">
            </div>

            <div class="text-white">
                <p class="text-2xl">Government Of Nepal</p>
                <p class="text-2xl">Ministry of Health and Population</p>
                <p class="text-2xl">Kamaladi, kathmandu</p>
            </div>

            <div class="mr-3 flex flex-col">
                <img src="./img/nepal_logo.png" alt="National Falg of Nepal" class="w-12 h-12">
                <p class="text-2xl text-white"><?php echo date('Y-m-d');?></p>
            </div>
        </section>

        <!-- card section -->
        <section class="card flex justify-between items-center mt-10 gap-10">
            <div class="ml-4">
                <img src="./img/stupa.jpg" alt="Stupa" class="w-80 rounded-lg shadow-lg">
            </div>
            <div class="flex flex-col gap-4 text-white">
                <h3 class="text-4xl uppercase text-center">National Id Card</h3>

                <h5 class="text-xl text-center">Name: <?php echo $_SESSION['first_name']." ". $_SESSION['last_name']?></h5>

                <h5 class="text-xl text-center">Email: <?php echo $_SESSION['email']?></h5>

                <h5 class="text-xl text-center">Citizenship Number: <?php echo $_SESSION['citizenship_number']?></h5>

                <h5 class="text-xl text-center">Temporary Address: <?php echo $_SESSION['temporary_address']?></h5>

                <h5 class="text-xl text-center">Permanent Address: <?php echo $_SESSION['permanent_address']?></h5>

                <h5 class="text-xl text-center">Nationality: <?php echo $_SESSION['nationality']?></h5>

                <h5 class="text-xl text-center">District: <?php echo $_SESSION['district_name']?></h5>
                
                <h5 class="text-xl text-center">Municipality : <?php echo $_SESSION['municipality_name']?></h5>

                <h5 class="text-center text-xl">Issued Date: <?php echo $_SESSION['issued_date']?></h5>
            </div>
            <div class="mr-4">
                <img src="./img/nepal_map.jpg" alt="Map of Nepal" class="h-40 w-80 rounded-lg">
            </div>
        </section>

        
        <div class="flex flex-col items-end mt-10 mr-4 mb-4">
            <img src="./img/issued_by.jpg" alt="Signature of authority who issued the card" class="w-44">
            <h4 class="text-white text-3xl">Issued by:</h4>
        </div>
    </main>

    <?php require "footer.php"?>
</body>
</html>