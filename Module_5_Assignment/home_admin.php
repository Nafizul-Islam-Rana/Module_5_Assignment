<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <script src="//cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="mx-auto container">
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                    Flowbite
                </a>

                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 text-white font-bold py-2 px-4 rounded">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Admin Panel
                        </h1> 
                    </div>

                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    

                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Welcome! <?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"];  ?>
                        </h2> 
                    </div>

                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Role: <?php echo $_SESSION["role"];  ?>
                        </h2>    
                    </div>

                </div>

                <button type="submit" class="p-6 space-y-4 md:space-y-6 sm:p-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <a href="logout.php">Log Out</a>                         
                </button>

            </div>
        </section>
    </section>
</body>
</html>