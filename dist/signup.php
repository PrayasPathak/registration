<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <!-- Tailwind css CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- If the styles are not displayed correctly, please uncomment the above tailwindcss CDN link. Sorry for the inconvenience -->
    <!-- <link rel="stylesheet" href="./style.css"> -->
</head>

<body>
    <?php require "header.php";?>
    <section class="flex justify-center items-center">
        <div id="form" class="p-4 rounded-xl shodow-md w-90">
            <form action="./signup.php" class="flex flex-col gap-4">
                <h2 class="text-blue-700 text-3xl font-semibold my-4 underline underline-offset-[12px]">Register</h2>
                <div class="grid grid-cols-2 gap-2 h-10">
                    <!-- First Name -->
                    <input type="text" placeholder="First Name" name="fname"
                        class="bg-slate-200 shadow-slate-300 shadow-md outline-none rounded-sm p-2" required>
                    <!-- Last Name -->
                    <input type="text" placeholder="Last Name" name="lname"
                        class="bg-slate-200 shadow-slate-300 shadow-md outline-none rounded-sm p-2" required>
                </div>

                <div class="grid grid-cols-2 gap-2 h-10">
                    <!-- Email-->
                    <input type="email" placeholder="Email" name="email"
                        class="bg-slate-200 shadow-slate-300 shadow-md outline-none rounded-sm p-2" required>
                    <!-- Citizenship Number -->
                    <input type="number" placeholder="Citizenship Number" maxlength="11"
                        class="bg-slate-200 shadow-slate-300 shadow-md outline-none rounded-sm p-2" required>
                </div>
                <div class="grid grid-cols-2 gap-2 h-10">
                    <!-- Temporary Address -->
                    <input type="text" placeholder="Temporary Address" name="tempaddress"
                        class="bg-slate-200 shadow-slate-300 shadow-md outline-none rounded-sm p-2" required>
                    <!-- Permanent Address -->
                    <input type="text" placeholder="Permanent Address" name="permaddress"
                        class="bg-slate-200 shadow-slate-300 shadow-md outline-none rounded-sm p-2" required>
                </div>
                <div class="grid grid-cols-2 gap-2 h-10">
                    <!-- Nationality -->
                    <input type="text" placeholder="Nationality" name="nationality"
                        class="bg-slate-200 shadow-slate-300 shadow-md outline-none rounded-sm p-2">
                    <!-- District Name -->
                    <input type="text" placeholder="District Name" name="districtname"
                        class="bg-slate-200 shadow-slate-300 shadow-md outline-none rounded-sm p-2">
                </div>

                <div class="grid grid-cols-2 gap-2 h-10">
                    <!-- Municipality Name -->
                    <input type="text" placeholder="Municipality Name" name="municipalname"
                        class="bg-slate-200 shadow-slate-300 shadow-md outline-none rounded-sm p-2">
                    <!-- Ward Number-->
                    <input type="number" placeholder="Ward Number" name="wardno" maxlength="2"
                        class="bg-slate-200 shadow-slate-300 shadow-md outline-none rounded-sm p-2">
                </div>

                <!-- Signup Button and login button -->
                <div class="grid grid-cols-2 gap-4">
                    <button
                        class="rounded-lg bg-blue-600 p-1 shadow-lg text-md hover:bg-blue-900 hover:text-white duration-200">Register
                    </button>
                    <div class="flex justify-center items-center">
                        <p class="text-center">Already registered?
                            <a href="./signin.php"
                                class="text-blue-700 hover:underline hover:underline-offset-4 duration-200">Login
                            </a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php require "footer.php";?>
</body>

</html>