<!-- main.home.blade.php -->
@extends('landing.publiclayout')
@section('content')
    <x-banner />



    <div class="bg-gray-50  py-3 px-4  mt-2 shadow-sm" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-semibold text-gray-800 dark:hover:text-blue-400">
                    <svg class="w-4 h-4 me-2 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 2a1 1 0 0 1 .707.293l7 7a1 1 0 1 1-1.414 1.414L17 10.414V17a1 1 0 0 1-1 1h-3v-4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v4H6a1 1 0 0 1-1-1v-6.586l-.293.293A1 1 0 0 1 2.293 9.293l7-7A1 1 0 0 1 10 2Z" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-2 rtl:rotate-180" fill="none" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 6 10">
                        <path d="M1 9L5 5L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <a href="#" class="text-sm font-medium text-gray-600 dark:hover:text-blue-400">Shop</a>
                </div>
            </li>

            <li>
                <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-2 rtl:rotate-180" fill="none" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 6 10">
                        <path d="M1 9L5 5L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <a href="#" class="text-sm font-medium text-gray-600 dark:hover:text-blue-400">Shaker</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-2 rtl:rotate-180" fill="none" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 6 10">
                        <path d="M1 9L5 5L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span class="text-sm font-semibold text-gray-500 dark:text-gray-400"> Plastic Shaker</span>
                </div>
            </li>
        </ol>
    </div>

    <div class="  py-3 mt-10 ">
        <div class="flex justify-center items-center ">
            <h1 class="text-3xl">Featured Products</h1>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        /* Hide scrollbar (all browsers) */
        .no-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, Opera */
        }

        /* Prevent page-wide horizontal scroll */
        body {
            overflow-x: hidden;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Optional JS fallback for safety
            document.body.style.overflowX = 'hidden';
        });
    </script>
    <div class="relative py-4 px-4" x-data="{ slider: null }" x-init="slider = $refs.slider">

        <!-- Left Arrow -->
        <button @click="slider.scrollBy({ left: -320, behavior: 'smooth' })"
            class="absolute left-2 top-1/2 -translate-y-1/2 z-10 bg-gray-100 text-gray-600 hover:bg-gray-200 p-2 rounded-full shadow-md">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M12.707 15.707a1 1 0 01-1.414 0L6.586 11l4.707-4.707a1 1 0 011.414 1.414L9.414 11l3.293 3.293a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Right Arrow -->
        <button @click="slider.scrollBy({ left: 320, behavior: 'smooth' })"
            class="absolute right-2 top-1/2 -translate-y-1/2 z-10 bg-gray-100 text-gray-600 hover:bg-gray-200 p-2 rounded-full shadow-md">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M7.293 4.293a1 1 0 011.414 0L13.414 9l-4.707 4.707a1 1 0 01-1.414-1.414L10.586 9 7.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Product List -->
        <div x-ref="slider" class="flex gap-4 overflow-x-auto scroll-smooth no-scrollbar px-2">

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>


            <!-- More product cards as needed -->
        </div>
    </div>


    <!-- -----------------------------  2nd product show ----------- -->

    <div class=" px-10 mt-10 ">
        <div class="flex justify-between items-center ">
            <h1 class="text-2xl">GNC DEALS</h1>
            <a href="hover:text-red-500"><h3 class="text-lg">View All</h3></a>
        </div>
    </div>

    <div class="relative py-4 px-4" x-data="{ slider: null }" x-init="slider = $refs.slider">

        <!-- Left Arrow -->
        <button @click="slider.scrollBy({ left: -320, behavior: 'smooth' })"
            class="absolute left-2 top-1/2 -translate-y-1/2 z-10 bg-gray-100 text-gray-600 hover:bg-gray-200 p-2 rounded-full shadow-md">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M12.707 15.707a1 1 0 01-1.414 0L6.586 11l4.707-4.707a1 1 0 011.414 1.414L9.414 11l3.293 3.293a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Right Arrow -->
        <button @click="slider.scrollBy({ left: 320, behavior: 'smooth' })"
            class="absolute right-2 top-1/2 -translate-y-1/2 z-10 bg-gray-100 text-gray-600 hover:bg-gray-200 p-2 rounded-full shadow-md">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M7.293 4.293a1 1 0 011.414 0L13.414 9l-4.707 4.707a1 1 0 01-1.414-1.414L10.586 9 7.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Product List -->
        <div x-ref="slider" class="flex gap-4 overflow-x-auto scroll-smooth no-scrollbar px-2">

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>


            <!-- More product cards as needed -->
        </div>
    </div>




    <!-- -----------------------------  3rd product show ----------- -->

    <div class=" px-10 mt-10 ">
        <div class="flex justify-between items-center ">
            <h1 class="text-2xl">GNC DEALS</h1>
            <a href="hover:text-red-500"><h3 class="text-lg">View All</h3></a>
        </div>
    </div>

    <div class="relative py-4 px-4" x-data="{ slider: null }" x-init="slider = $refs.slider">

        <!-- Left Arrow -->
        <button @click="slider.scrollBy({ left: -320, behavior: 'smooth' })"
            class="absolute left-2 top-1/2 -translate-y-1/2 z-10 bg-gray-100 text-gray-600 hover:bg-gray-200 p-2 rounded-full shadow-md">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M12.707 15.707a1 1 0 01-1.414 0L6.586 11l4.707-4.707a1 1 0 011.414 1.414L9.414 11l3.293 3.293a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Right Arrow -->
        <button @click="slider.scrollBy({ left: 320, behavior: 'smooth' })"
            class="absolute right-2 top-1/2 -translate-y-1/2 z-10 bg-gray-100 text-gray-600 hover:bg-gray-200 p-2 rounded-full shadow-md">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M7.293 4.293a1 1 0 011.414 0L13.414 9l-4.707 4.707a1 1 0 01-1.414-1.414L10.586 9 7.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Product List -->
        <div x-ref="slider" class="flex gap-4 overflow-x-auto scroll-smooth no-scrollbar px-2">

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>

            <!-- Product Card -->
            <div class="relative w-55 flex-shrink-0 bg-white border rounded-2xl shadow   group p-4">

                <!-- Discount Tag -->
                <div class="absolute top-6 left-3 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded-br-md">
                    32% OFF
                </div>

                <!-- Wishlist Button -->
                <button class="absolute top-6 right-6 text-gray-400 hover:text-red-500 transition"
                    aria-label="Add to Wishlist">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 
                               4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                               3.81 14.76 3 16.5 3 19.58 3 22 5.42 
                               22 8.5c0 3.78-3.4 6.86-8.55 
                               11.54L12 21.35z" />
                    </svg>
                </button>

                <!-- Product Image -->
                <img src="https://picsum.photos/250/250?random=1" alt="Product"
                    class="w-full h-40 object-contain mx-auto " />

                <!-- Brand -->
                <p class="text-[11px] text-gray-500 mt-4 uppercase tracking-wide">RONNIE COLEMAN</p>

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-800 mt-1 leading-tight line-clamp-3">
                    (RC) Ronnie Coleman Pro Antium Supreme Multifaceted Protein Complex 5lbs
                </h3>

                <!-- Price -->
                <div class="mt-3 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">₹6,299.00</span>
                    <span class="text-sm text-gray-400 line-through">₹9,299.00</span>
                </div>

            </div>


            <!-- More product cards as needed -->
        </div>
    </div>





    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let nextDom = document.getElementById('next');
            let prevDom = document.getElementById('prev');
            let carouselDom = document.querySelector('.carousel');
            let SliderDom = carouselDom.querySelector('.carousel .list');
            let thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
            let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item');
            let timeDom = document.querySelector('.carousel .time');

            if (!nextDom || !prevDom || !carouselDom) {
                console.error('Carousel elements not found');
                return;
            }

            thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
            let timeRunning = 3000;
            let timeAutoNext = 7000;

            nextDom.onclick = function () {
                showSlider('next');
            };

            prevDom.onclick = function () {
                showSlider('prev');
            };

            let runTimeOut;
            let runNextAuto = setTimeout(() => {
                nextDom.click();
            }, timeAutoNext);

            function showSlider(type) {
                let SliderItemsDom = SliderDom.querySelectorAll('.carousel .list .item');
                let thumbnailItemsDom = document.querySelectorAll('.carousel .thumbnail .item');

                if (type === 'next') {
                    SliderDom.appendChild(SliderItemsDom[0]);
                    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
                    carouselDom.classList.add('next');
                } else {
                    SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
                    thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
                    carouselDom.classList.add('prev');
                }
                clearTimeout(runTimeOut);
                runTimeOut = setTimeout(() => {
                    carouselDom.classList.remove('next');
                    carouselDom.classList.remove('prev');
                }, timeRunning);

                clearTimeout(runNextAuto);
                runNextAuto = setTimeout(() => {
                    nextDom.click();
                }, timeAutoNext);
            }
        });
    </script>
@endsection