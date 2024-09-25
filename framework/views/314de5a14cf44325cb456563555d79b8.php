<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CameraZone</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-red-600 text-white p-4 flex justify-between items-center">
        <div class="text-2xl font-bold">
            CameraZone
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="#" class="hover:underline">Products</a>
            <a href="#" class="hover:underline">My Account</a>
            <a href="#" class="hover:underline">My Cart</a>
            <span>0771234567</span>
        </div>
        <div class="md:hidden">
            <button id="menu-btn" class="text-white focus:outline-none">
                <!-- Hamburger Icon -->
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="bg-red-600 text-white hidden">
        <ul class="flex flex-col items-center">
            <li><a href="#" class="block p-2 hover:bg-red-700">Products</a></li>
            <li><a href="#" class="block p-2 hover:bg-red-700">My Account</a></li>
            <li><a href="#" class="block p-2 hover:bg-red-700">My Cart</a></li>
            <li><span class="block p-2">0771234567</span></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Cover Image Section -->
        <section class="bg-gray-900 text-white p-0">
            <img src="./cover.jpg" alt="Cover Image" class="w-full h-auto rounded-lg">
        </section>

        <!-- Features Section -->
        <section class="my-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-200 p-4 rounded-lg text-center">
                <img src="./logos/camera.png" alt="Camera" class="mx-auto">
                <p>Evolved imaging intelligence</p>
                <p>Capture your kids back to school moments with extraordinary resolution</p>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg text-center">
                <img src="./logos/drone.png" alt="Drone" class="mx-auto">
                
                <p>Capture your moments from above with a mini drone, FPV or professional aerial camera</p>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg text-center">
                <img src="./logos/tripad.png" alt="Tripod" class="mx-auto">
                <p>Capture perfect shots with premium camera accessories: high-quality lenses, sturdy tripods, and versatile bags</p>
            </div>
        </section>

        <!-- Products Section -->
        <section class="my-8">
            <h2 class="text-xl font-bold text-center mb-4">Our Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white p-4 rounded-lg text-center">
                    <img src="https://via.placeholder.com/100" alt="Product 1" class="mx-auto">
                    <p>EOS R8 RF24-50mm F4.5-6.3 IS STM Lens Kit</p>
                    <p>400,000 LKR</p>
                </div>
                <div class="bg-white p-4 rounded-lg text-center">
                    <img src="https://via.placeholder.com/100" alt="Product 2" class="mx-auto">
                    <p>EF 16-35mm f/4L IS USM</p>
                    <p>675,000 LKR</p>
                </div>
                <div class="bg-white p-4 rounded-lg text-center">
                    <img src="https://via.placeholder.com/100" alt="Product 3" class="mx-auto">
                    <p>DJI Mavic 3 Pro</p>
                    <p>1,000,000 LKR</p>
                </div>
                <div class="bg-white p-4 rounded-lg text-center">
                    <img src="https://via.placeholder.com/100" alt="Product 4" class="mx-auto">
                    <p>HERO11 Black Mini</p>
                    <p>112,000 LKR</p>
                </div>
            </div>
        </section>

        <!-- Brands Section -->
        <section class="my-8 text-center ">
            <h2 class="text-xl font-bold mb-4">Our Brands</h2>
            <div class="flex flex-wrap justify-center space-x-4">
                <img src="./logos/canon.png" alt="Canon" class="w-26 h-24 object-contain">
                <img src="./logos/nikon.png" alt="Nikon" class="w-26 h-24 object-contain">
                <img src="./logos/sony.png" alt="Sony" class="w-26 h-24 object-contain">
                <img src="./logos/gopro.png" alt="GoPro" class="w-26 h-24 object-contain">
                <img src="./logos/dji.png" alt="DJI" class="w-26 h-24 object-contain">
                <img src="./logos/insta.png" alt="Insta360" class="w-26 h-24 object-contain">
 
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white p-6 mt-8">
        <div class="container mx-auto text-center md:text-left md:flex justify-between">
            <div class="mt-4 md:mt-0">
                <p> Dashboard </p>
                <br>
                <p> Products </p>
            </div>
            <div>
                <h4 class="text-xl font-bold">Store Opening Hours</h4>
                <p>Monday - Saturday: 9.00am to 7.00pm</p>
                <p>Sunday: 9.00am to 3.00pm</p>
                <p>Closed on Poya days</p>
            </div>
            <div class="mt-4 md:mt-0">
                <p class="text-xl font-bold">Address<p>

                </p> No 40, 5th Floor,
                <br> Majestic City, Colombo 04,
                <br>Western</p>
                <p>077 123 4567</p>
                <p>camerazone@gmail.com</p>
            </div>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
 <?php /**PATH C:\xampp\htdocs\cameraZone\cameraShop\resources\views\welcome.blade.php ENDPATH**/ ?>