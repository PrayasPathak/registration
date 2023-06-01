<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Tailwind css CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- If the styles are not displayed correctly, please uncomment the above tailwindcss CDN link. Sorry for the inconvenience -->
    <!-- <link rel="stylesheet" href="./style.css"> -->

</head>

<body>
    <?php require "header.php";?>

    <section class="flex justify-center items-center">
        <div class="p-6 m-10 rounded-3xl w-90 shadow-xl flex justify-center items-center">
            <div class="flex flex-col justify-center items-center gap-4 w-60">
                <h2 class="text-3xl underline underline-offset-[12px] text-blue-600 mt-6">Login</h2>
                <form action="./signin.php" method="post" class="flex flex-col gap-4 justify-center items-center mt-6">
                    <div class="mt-4">
                        <input type="text" placeholder="Citizenship Number" required
                            class="bg-slate-200 outline-none p-2 h-10">
                    </div>
                    <div class="mt-4">
                        <input type="email" placeholder="Email" required class="bg-slate-200 outline-none h-10 p-2">
                    </div>
                    <div class="mt-4 flex flex-col gap-3">
                        <button
                            class="p-2 text-md text-slate-100 bg-blue-600 duration-200 transition-all hover:bg-blue-900 hover:text-white rounded-lg w-full">Login</button>
                        <p>Haven't registered? <a href="./signup.php"
                                class="text-sm hover:underline hover:underline-offset-4 text-blue-500 font-semibold">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php require "footer.php";?>
</body>

</html>