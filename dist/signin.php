<?php
    require "connection.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $citizenship_number = $_POST['citizenship_no'];
        $email = $_POST['email'];
        $query = "select * from users where email = '$email'";
        
        $result = mysqli_query($con, $query);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($citizenship_number, $row['citizenship_number'])){
                $_SESSION['info'] = $row;
                $_SESSION['isLoggedIn'] = true;
                header('Location: nid.php');
            }else{
                echo "Incorrect Password";
                echo $row['citizenship_number']."<br>";
                echo password_hash($citizenship_number, PASSWORD_BCRYPT);
            }
        }else{
            echo "User Doesnot exist";
        }
    }
    // 12378012331
 ?>

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
                        <input type="number" placeholder="Citizenship Number" required name="citizenship_no" maxlength="11"
                            class="bg-slate-200 outline-none p-2 h-10">
                    </div>
                    <div class="mt-4">
                        <input type="email" placeholder="Email" required class="bg-slate-200 outline-none h-10 p-2"
                            name="email">
                    </div>
                    <div class="mt-4 flex flex-col gap-3">
                        <button type="submit"
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