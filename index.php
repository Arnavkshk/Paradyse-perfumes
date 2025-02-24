<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}

$user_name = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Rudra Perfumes - Luxury Redefined</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .slider {
            position: relative;
            overflow: hidden;
        }
        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .slide {
            min-width: 80%;
            box-sizing: border-box;
        }
        .slide img {
            height: 500px;
            object-fit: cover; 
        }
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .prev {
            left: 10px;
        }
        .next {
            right: 10px;
        }
        nav a {
            font-size: 1.25rem; 
            margin: 0 15px; 
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-submenu {
            position: relative;
        }
        .dropdown-submenu .dropdown-content {
            top: 0;
            left: 100%;
            margin-left: 0.5rem;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-white text-black">
    <div class="text-3xl font-bold text-center py-2 px-4">RUDRA</div>
    <!-- Header -->
    <header class="border-b border-gray-200">
        <div class="container flex justify-between items-center py-4 px-6">
            <div>
                <img src="IMG/logo.png" alt="RUDRA Logo" class="h-14"> 
            </div>
            <nav class="space-x-8">
                <a class="text-black hover:underline" href="#">HOME</a>
                <div class="dropdown">
                    <a class="nav-link font-semibold text-gray-800 hover:text-gray-600 cursor-pointer">COLLECTIONS</a>
                    <div class="dropdown-content">
                        <div class="dropdown-submenu">
                            <a class="cursor-pointer" onmouseover="showPerfumesSubmenu()" onmouseout="hidePerfumesSubmenu()">Perfumes</a>
                            <div class="dropdown-content hidden" id="perfumes-submenu">
                                <a href="#him">Him</a>
                                <a href="#her">Her</a>
                                <a href="#unisex">Unisex</a>
                            </div>
                        </div>
                        <a href="#">Attar</a>
                    </div>
                </div>
                <a class="text-black hover:underline" href="#">ORDER TESTERS</a>
                <a class="text-black hover:underline" href="#">OUD COLLECTION</a>
                <a class="text-black hover:underline" href="#">COMBO</a>
                <a class="text-black hover:underline" href="#">WINTER SALE</a>
            </nav>
            <nav class=" items-center justify-between border-b">
                <div class="flex items-center ">
                    <a href="search.html" class=" flex items-center">
                        <i class="fas fa-search text-xl"></i>
                        <span class="absolute top-8 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition bg-white text-gray-800 px-2 py-1 rounded shadow-md text-sm">SEARCH</span>
                    </a>
                    <a href="login.php" class="relative group flex items-center">
                        <i class="fas fa-user text-s cursor-pointer"></i>
                        <div class="flex items-center">
                            <!-- Display the user's name here -->
                            <p class="w-10">Hello, <?php echo htmlspecialchars($user_name); ?>!</p>
                            <a href="logout.php" class="text-sm text-blue-600 hover:underline">Log Out</a>
                        </div>
                    </a>
                    <a href="cart.html" class="relative group flex items-center">
                        <i class="fas fa-shopping-bag text-2xl cursor-pointer"></i>
                        <span class="absolute top-8 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition bg-white text-gray-800 px-2 py-1 rounded shadow-md text-sm">Cart</span>
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <!-- Main Banner -->
    <section class="slider relative">
        <div class="slides">
            <div class="slide">
                <img alt="Banner with perfume bottles and hearts" class="w-full" src="https://storage.googleapis.com/a1aa/image/DCztYU3niDGPcKW59kyBfcI04Xh2Q2vqy-WgHCQlDvA.jpg"/>
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-4xl font-bold">LOVE AT FIRST SNIFF</h1>
                    <p class="text-2xl mt-2">UPTO 50% OFF SITEWIDE</p>
                </div>
            </div>
            <div class="slide">
                <img alt="Banner with perfume bottles and hearts" class="w-full" src="https://storage.googleapis.com/a1aa/image/DCztYU3niDGPcKW59kyBfcI04Xh2Q2vqy-WgHCQlDvA.jpg"/>
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-4xl font-bold">LOVE AT FIRST SNIFF</h1>
                    <p class="text-2xl mt-2">UPTO 50% OFF SITEWIDE</p>
                </div>
            </div>
            <div class="slide">
                <img alt="Banner with perfume bottles and hearts" class="w-full" src="https://storage.googleapis.com/a1aa/image/DCztYU3niDGPcKW59kyBfcI04Xh2Q2vqy-WgHCQlDvA.jpg"/>
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white">
                    <h1 class="text-4xl font-bold">LOVE AT FIRST SNIFF</h1>
                    <p class="text-2xl mt-2">UPTO 50% OFF SITEWIDE</p>
                </div>
            </div>
        </div>
        <button class="prev" onclick="moveSlide(-1)">❮</button>
        <button class="next" onclick="moveSlide(1)">❯</button>
    </section>
    <!-- Products Section --
    <section class="container mx-auto py-12 px-6">
        <div class="flex justify-center space-x-6">
            <img alt="Perfume bottle 1" class="h-48" src="https://storage.googleapis.com/a1aa/image/WslZgrTd1jip--1Yp1sAskQJSqR0cfDKNdIZ8qKYT38.jpg"/>
            <img alt="Perfume bottle 2" class="h-48" src="https://storage.googleapis.com/a1aa/image/YcN97h-EXntUqPyzeUCrams3D1BSYnQRMQg0Wpsi-y8.jpg"/>
            <img alt="Perfume bottle 3" class="h-48" src="https://storage.googleapis.com/a1aa/image/AlcqBjFCbx-5eFuwvg-ClXi0VI9f0gXUpUax5Uxv6HQ.jpg"/>
            <img alt="Perfume bottle 4" class="h-48" src="https://storage.googleapis.com/a1aa/image/YBNOGVVrvy1Ub7_vtHlXIfZ6sYAryaSXOyZN4PhyVLM.jpg"/>
        </div>
    </section>
    <!-- Features Section -->
    <div class="bg-gray-100 py-8 mt-14 rounded-lg shadow-lg"> <!-- Added rounded and shadow -->
        <div class="max-w-7xl mx-auto py-4"> <!-- Added padding -->
            <h2 class="text-2xl font-bold text-center mb-6">Our Commitment to Quality</h2> <!-- Added title -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4 text-center">
                <div>
                    <i class="fas fa-ban text-4xl mb-2"></i>
                    <p class="font-bold">NON-TOXIC</p>
                    <p>FORMULATION</p>
                </div>
                <div>
                    <i class="fas fa-hand-holding-heart text-4xl mb-2"></i>
                    <p class="font-bold">ETHICALLY</p>
                    <p>SOURCED</p>
                </div>
                <div>
                    <i class="fas fa-paw text-4xl mb-2"></i>
                    <p class="font-bold">CRUELTY</p>
                    <p>FREE</p>
                </div>
                <div>
                    <i class="fas fa-leaf text-4xl mb-2"></i>
                    <p class="font-bold">NATURAL</p>
                    <p>EXTRACTS</p>
                </div>
                <div>
                    <i class="fas fa-flask text-4xl mb-2"></i>
                    <p class="font-bold">PURE</p>
                    <p>ESSENCE</p>
                </div>
                <div>
                    <i class="fas fa-vial text-4xl mb-2"></i>
                    <p class="font-bold">SILICONE</p>
                    <p>FREE</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center py-12 px-4">
        <h1 class="text-2xl md:text-3xl font-bold mb-4">Discover Elegance with Rudra Perfume</h1>
        <p class="text-lg md:text-xl max-w-6xl mx-auto">
            Step into a world of sophistication with Rudra Perfume. Our exclusive range of fragrances for men and women is inspired by timeless classics yet crafted with a unique blend of luxury and affordability. Immerse yourself in captivating aromas that elevate every moment with grace and charm.
        </p>
    </div>
     <!-- Best Selling Section -->
     <section class="container mx-auto py-12 px-6">
        <h1 class="text-3xl font-bold text-center mb-8">BEST SELLING</h1>
        <div class="flex justify-center space-x-4">
            <!-- Product 1 -->
            <div class="text-center w-80">
                <div class="relative inline-block transition-transform transform hover:scale-105 hover:shadow-lg">
                    <span class="absolute top-0 left-0 bg-black text-white text-xs font-bold px-2 py-1">SAVE 63%</span>
                    <img alt="King Khan's Combination perfume bottles with ingredients" class="w-full h-auto" height="200" src="https://storage.googleapis.com/a1aa/image/ZJUIhhZ9fslenHJ_NEzv_psggbWkNrv0cJemvOzOevM.jpg" width="200"/>
                </div>
                <h2 class="text-lg font-bold mt-4 King Khan's Combination</h2>
                <p class="text-blue-600 font-bold">Rs. 1,499.00 <span class="line-through text-gray-500">Rs. 3,999.00</span></p>
                <p class="text-yellow-500">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    47 reviews
                </p>
                <button class="bg-black text-white font-bold py-2 px-4 mt-4">+ ADD TO CART</button>
            </div>
            <!-- Product 2 -->
            <div class="text-center w-80">
                <div class="relative inline-block transition-transform transform hover:scale-105 hover:shadow-lg">
                    <span class="absolute top-0 left-0 bg-black text-white text-xs font-bold px-2 py-1">SAVE 58%</span>
                    <img alt="Blue Rush perfume bottle with notes description" class="w-full h-auto" height="200" src="https://storage.googleapis.com/a1aa/image/dYQRos_uSptChbBqRrUPzvH9O4nFC3qH3UR69jIya4A.jpg" width="200"/>
                </div>
                <h2 class="text-lg font-bold mt-4">Blue Rush</h2>
                <p class="text-blue-600 font-bold">Rs. 849.00 <span class="line-through text-gray-500">Rs. 1,999.00</span></p>
                <p class="text-yellow-500">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    80 reviews
                </p>
                <button class="bg-black text-white font-bold py-2 px-4 mt-4">+ ADD TO CART</button>
            </div>
            <!-- Product 3 -->
            <div class="text-center w-80">
                <div class="relative inline-block transition-transform transform hover:scale-105 hover:shadow-lg">
                    <span class="absolute top-0 left-0 bg-black text-white text-xs font-bold px-2 py-1">SAVE 58%</span>
                    <img alt="Savage perfume bottle with ingredients" class="w-full h-auto" height="200" src="https://storage.googleapis.com/a1aa/image/fvyS3veDtGmS5_WiRPDxoJkRDDjV7EYwbPBIw8M6vLI.jpg" width="200"/>
                </div>
                <h2 class="text-lg font-bold mt-4">Savage</h2>
                <p class="text-blue-600 font-bold">Rs. 849.00 <span class="line-through text-gray-500">Rs. 1,999.00</span></p>
                <p class="text-yellow-500">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    86 reviews
                </p>
                <button class="bg-black text-white font-bold py-2 px-4 mt-4">+ ADD TO CART</button>
            </div>
            <!-- Product 4 -->
            <div class="text-center w-80">
                <div class="relative inline-block transition-transform transform hover:scale-105 hover:shadow-lg">
                    <span class="absolute top-0 left-0 bg-black text-white text-xs font-bold px-2 py-1">SAVE 58%</span>
                    <img alt="Aventus perfume bottle with ingredients" class="w-full h-auto" height="200" src="https://storage.googleapis.com/a1aa/image/cnvPrtNwjNWPAz2vYVfKUS5DHm6rDK-ILUomNtIlFFk.jpg" width="200"/>
                </div>
                <h2 class="text-lg font-bold mt-4">Aventus</h2>
                <p class="text-blue-600 font-bold">Rs. 849.00 <span class="line-through text-gray-500">Rs. 1,999.00</span></p>
                <p class="text-yellow-500">
                    <i class="fas fa-star"></i <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    47 reviews
                </p>
                <button class="bg-black text-white font-bold py-2 px-4 mt-4">+ ADD TO CART</button>
            </div>
        </div>
    </section>
    <body class="bg-white">
        <div class="container mx-auto py-8">
            <h1 class="text-center text-2xl font-bold mb-8">LUXURY CATEGORIES</h1>
            <div class="flex justify-center gap-4">
                <div class="relative text-center group">
                    <a href="https://example.com/luxury-perfumes">
                        <img alt="Luxury Perfumes with a bottle and fruits" class="mx-auto mb-4" height="250" src="https://storage.googleapis.com/a1aa/image/fKnZCbYVraKFuYATFq5Kt14XEA-zniA323G0tSSlt34.jpg" width="190"/>
                        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h2 class="text-orange-500 font-bold">LUXURY</h2>
                            <p class="text-gray-200">PERFUMES</p>
                        </div>
                    </a>
                </div>
                <div class="relative text-center group">
                    <a href="https://example.com/non-alcoholic-attars">
                        <img alt="Non-Alcoholic Attars with a bottle and flowers" class="mx-auto mb-4" height="250" src="https://storage.googleapis.com/a1aa/image/AxlL_SKRPAZjGv812G50kxTe9gJ3SEFwlw1fRmZ7i14.jpg" width="190"/>
                        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h2 class="text-green-500 font-bold">NON-ALCOHOLIC</h2>
                            <p class="text-gray-200">ATTARS</p>
                        </div>
                    </a>
                </div>
                <div class="relative text-center group">
                    <a href="https://example.com/moisturizing-fragrance-mists">
                        <img alt="Moisturizing Fragrance Mists with a bottle and flowers" class="mx-auto mb-4" height="250" src="https://storage.googleapis.com/a1aa/image/9T5hhKpg7cdr4ex6btP7_b_KkP7z5XabiTkx43zjLIE.jpg" width="190"/>
                        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h2 class="text-pink-500 font-bold">MOISTURIZING</h2>
                            <p class="text-gray-200">FRAGRANCE MISTS</p>
                        </div>
                    </a>
                </div>
                <div class="relative text-center group">
                    <a href="https://example.com/premium-gift-sets">
                        <img alt="Premium Gift Sets with multiple bottles" class="mx-auto mb-4" height="250" src="https://storage.googleapis.com/a1aa/image/Z8e4-Noq5N_9VCXMQQurG2ur7ziuHHUwbvtsyXBYN00.jpg" width="190"/>
                        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h2 class="text-purple-500 font-bold">PREMIUM</h2>
                            <p class="text-gray-200">GIFT SETS</p>
                        </div>
                    </a>
                </div>
                <div class="relative text-center group">
                    <a href="https://example.com/perfume-attar-combo">
                        <img alt="Perfume and Attar Combo with bottles and fruits" class="mx-auto mb-4" height="250" src="https://storage.googleapis.com/a1aa/image/p_lqrYLuquzZWY8EsK2PT-CAVUy31zZJ1IjUwBemH-U.jpg" width="190"/>
                        <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h2 class="text-orange-500 font-bold">PERFUME + ATTAR</h2>
                            <p class="text-gray-200">COMBO</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </body>
    <!-- NEW ARRIVAL  Section -->
    <section class="container mx-auto py-12 px-6">
        <h1 class="text-3xl font-bold text-center mb-8">NEW ARRIVAL</h1>
        <div class="flex justify-center space-x-4">
            <!-- Product 1 -->
            <div class="text-center w-80">
                <div class="relative inline-block transition-transform transform hover:scale-105 hover:shadow-lg">
                    <span class="absolute top-0 left-0 bg-black text-white text-xs font-bold px-2 py-1">SAVE 63%</span>
                    <img alt="King Khan's Combination perfume bottles with ingredients" class="w-full h-auto" height="200" src="https://storage.googleapis.com/a1aa/image/ZJUIhhZ9fslenHJ_NEzv_psggbWkNrv0cJemvOzOevM.jpg" width="200"/>
                </div>
                <h2 class="text-lg font-bold mt-4 King Khan's Combination</h2>
                <p class="text-blue-600 font-bold">Rs. 1,499.00 <span class="line-through text-gray-500">Rs. 3,999.00</span></p>
                <p class="text-yellow-500">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    47 reviews
                </p>
                <button class="bg-black text-white font-bold py-2 px-4 mt-4">+ ADD TO CART</button>
            </div>
            <!-- Product 2 -->
            <div class="text-center w-80">
                <div class="relative inline-block transition-transform transform hover:scale-105 hover:shadow-lg">
                    <span class="absolute top-0 left-0 bg-black text-white text-xs font-bold px-2 py-1">SAVE 58%</span>
                    <img alt="Blue Rush perfume bottle with notes description" class="w-full h-auto" height="200" src="https://storage.googleapis.com/a1aa/image/dYQRos_uSptChbBqRrUPzvH9O4nFC3qH3UR69jIya4A.jpg" width="200"/>
                </div>
                <h2 class="text-lg font-bold mt-4">Blue Rush</h2>
                <p class="text-blue-600 font-bold">Rs. 849.00 <span class="line-through text-gray-500">Rs. 1,999.00</span></p>
                <p class="text-yellow-500">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    80 reviews
                </p>
                <button class="bg-black text-white font-bold py-2 px-4 mt-4">+ ADD TO CART</button>
            </div>
            <!-- Product 3 -->
            <div class="text-center w-80">
                <div class="relative inline-block transition-transform transform hover:scale-105 hover:shadow-lg">
                    <span class="absolute top-0 left-0 bg-black text-white text-xs font-bold px-2 py-1">SAVE 58%</span>
                    <img alt="Savage perfume bottle with ingredients" class="w-full h-auto" height="200" src="https://storage.googleapis.com/a1aa/image/fvyS3veDtGmS5_WiRPDxoJkRDDjV7EYwbPBIw8M6vLI.jpg" width="200"/>
                </div>
                <h2 class="text-lg font-bold mt-4">Savage</h2>
                <p class="text-blue-600 font-bold">Rs. 849.00 <span class="line-through text-gray-500">Rs. 1,999.00</span></p>
                <p class="text-yellow-500">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    86 reviews
                </p>
                <button class="bg-black text-white font-bold py-2 px-4 mt-4">+ ADD TO CART</button>
            </div>
            <!-- Product 4 -->
            <div class="text-center w-80">
                <div class="relative inline-block transition-transform transform hover:scale-105 hover:shadow-lg">
                    <span class="absolute top-0 left-0 bg-black text-white text-xs font-bold px-2 py-1">SAVE 58%</span>
                    <img alt="Aventus perfume bottle with ingredients" class="w-full h-auto" height="200" src="https://storage.googleapis.com/a1aa/image/cnvPrtNwjNWPAz2vYVfKUS5DHm6rDK-ILUomNtIlFFk.jpg" width="200"/>
                </div>
                <h2 class="text-lg font-bold mt-4">Aventus</h2>
                <p class="text-blue-600 font-bold">Rs. 849.00 <span class="line-through text-gray-500">Rs. 1,999.00</span></p>
                <p class="text-yellow-500">
                    <i class="fas fa-star"></i <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    47 reviews
                </p>
                <button class="bg-black text-white font-bold py-2 px-4 mt-4">+ ADD TO CART</button>
            </div>
        </div>
    </section>
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlide(index) {
            if (index >= slides.length) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 1;
            } else {
                currentSlide = index;
            }
            const offset = -currentSlide * 100;
            document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
        }

        function moveSlide(step) {
            showSlide(currentSlide + step);
        }

        function autoSlide() {
            moveSlide(1);
        }

        setInterval(autoSlide, 3000); // Change slide every 3 seconds

        showSlide(currentSlide);
    </script>
</body>
</html>


-->