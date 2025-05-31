<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
    <!-- Include Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>

<body class="bg-gray-100">
    <header class="bg-black text-white shadow-md">
        <nav class="flex items-center justify-between px-6 h-16 relative">
            <a href="#" class="text-2xl font-bold border-2 px-3 py-1 whitespace-nowrap">Go Fit</a>

            <!-- Desktop Menu -->
            <ul class="hidden lg:flex gap-6">
                <li><a href="#" class="hover:text-orange-400 transition cursor-pointer">Home</a></li>
                <li><a href="#" class="hover:text-orange-400 transition cursor-pointer">About</a></li>
                <li><a href="#" class="hover:text-orange-400 transition cursor-pointer">Category</a></li>
                <li><a href="#" class="hover:text-orange-400 transition cursor-pointer">Products</a></li>
            </ul>

            <!-- Desktop Buttons -->
            <div class="hidden lg:flex gap-4">
                <a href="#" class="hover:text-orange-400 transition">Login</a>
                <button class="bg-orange-400 text-black hover:bg-orange-500 rounded-lg px-4 py-1">Sign Up</button>
            </div>

            <!-- Mobile Toggle Button -->
            <div id="toggle-btn" class="lg:hidden cursor-pointer text-white">
                <i class="fas fa-bars fa-lg"></i>
            </div>
        </nav>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="hidden lg:hidden flex flex-col justify-center text-center font-semibold items-center gap-4 bg-gray-800 text-white py-4">
            <ul>
                <li><a href="#" class="hover:text-orange-400 cursor-pointer transition text-lg w-full text-center py-2">Home</a></li>
                <li><a href="#" class="hover:text-orange-400 cursor-pointer transition text-lg w-full text-center py-2">About</a></li>
                <li><a href="#" class="hover:text-orange-400 cursor-pointer transition text-lg w-full text-center py-2">Category</a></li>
                <li><a href="#" class="hover:text-orange-400 cursor-pointer transition text-lg w-full text-center py-2">Products</a></li>
            </ul>
           <div class="flex flex-col items-center" style="margin-bottom: 30px;">
             <a href="#" class="hover:text-orange-400 transition text-lg w-full text-center py-2">Login</a>
            <button class="bg-orange-400 text-black rounded-lg px-4 py-1">Sign Up</button>
           </div>
        </div>
    </header>

    

    <script>
        const toggleBtn = document.getElementById("toggle-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        toggleBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
            console.log("Toggle clicked, hidden class:", mobileMenu.classList.contains("hidden"));
        });
    </script>


    @section('content')
    @show



</body>

</html>