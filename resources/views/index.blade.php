<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="bg-gray-200 py-6">
    <nav>
        <div class="container mx-auto flex flex-col items-center">
            <img src="/Assets/logo.png" alt="Logo Museum" class="w-[1000px]">
            <ul class="flex space-x-8">
                <li><a href="#home" class="text-lg font-bold hover:underline">Home</a></li>
                <li><a href="#Layanan" class="text-lg font-bold hover:underline">About</a></li>
                <li><a href="#Collection" class="text-lg font-bold hover:underline">Collection</a></li>
                <li><a href="#History" class="text-lg font-bold hover:underline">History & Art</a></li>
            </ul>
        </div>
    </nav>
</header>

<section id="home" class="relative">
    <div>
        <img id="slideshow" src="/Assets/msuemm 1 (2).png" alt="Slideshow" class="w-full h-auto">
        <script src="home.js"></script>
    </div>
    <div class="absolute top-[600px] left-[300px] transform -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 text-white p-6 rounded">
        <p class="text-4xl font-bold">Welcome To Museum<br>Indonesia!</p>
        <a href="index.html" class="mt-4 inline-block text-lg underline">Visit</a>
    </div>
</section>

<section id="Layanan">
    <div class="left-[100px]">
        <p class="text-xl">Temporarily closed, more information on Instagram: 
            <a href="https://www.instagram.com/museumnasionalindonesia/" class="text-blue-500 hover:underline">@museumnasionalindonesia</a>
        </p>
    </div>
</section>

<div class="flex justify-center py-12">
    <div class="flex max-w-6xl w-full">
        <div class="w-full lg:w-1/3 bg-gray-200 p-6 rounded-md shadow-md text-center lg:ml-[-200px] mb-8 lg:mb-0">
            <h2 class="text-xl font-bold">Layanan Museum</h2>
            <p class="mt-2 text-gray-600">Memberikan Layanan Secara Fisik Maupun Daring.</p>
        </div>

        <div class="w-full lg:w-2/3 lg:ml-[100px] space-y-8">
            <div class="flex items-center justify-between bg-white p-6 rounded-md shadow-md">
                <img src="/Assets/kunjungan museum.png" alt="Kunjungan Museum" class="w-[100px] h-auto rounded">
                <div class="flex-1 px-6">
                    <h2 class="text-2xl font-bold">Kunjungan Museum</h2>
                    <p class="text-lg mt-2">Menjelajahi Museum Nasional Indonesia</p>
                </div>
                <a href="/kunjungan">
                    <img src="/Assets/home4.png" class="w-[50px] hover:scale-105 transition-transform">
                </a>
            </div>

            <div class="flex items-center justify-between bg-white p-6 rounded-md shadow-md mb-8">
                <img src="/Assets/Virtual Tour.png" alt="Virtual Tour" class="w-[100px] h-auto rounded">
                <div class="flex-1 px-6">
                    <h2 class="text-2xl font-bold">Virtual Tour</h2>
                    <p class="text-lg mt-2">Menjelajahi Museum Nasional Indonesia</p>
                </div>
                <a href="/virtualtour">
                    <img src="/Assets/home4.png" class="w-[50px] hover:scale-105 transition-transform">
                </a>
            </div>

            <div class="flex items-center justify-between bg-white p-6 rounded-md shadow-md">
                <img src="/Assets/Feedback.png" alt="Feedback" class="w-[100px] h-auto rounded">
                <div class="flex-1 px-6">
                    <h2 class="text-2xl font-bold">Feedback</h2>
                    <p class="text-lg mt-2">Menjelajahi Museum Nasional Indonesia</p>
                </div>
                <a href="/feedback">
                    <img src="/Assets/home4.png" class="w-[50px] hover:scale-105 transition-transform">
                </a>
            </div>
        </div>
    </div>
</div>

<section class="bg-gray-50 min-h-screen py-12" id="Collection">
    <div class="container mx-auto">
        <div class="left-[100px] mb-12">
            <h2 class="text-4xl font-semibold">Collection</h2>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>

        <div class="flex space-x-8 mb-12">
            <a href="#artefak" class="bg-gray-800 text-white py-2 px-6 rounded-lg hover:bg-blue-600">Artefak</a>
            <a href="#seni" class="bg-gray-800 text-white py-2 px-6 rounded-lg hover:bg-blue-600">Seni</a>
            <a href="#pusaka" class="bg-gray-800 text-white py-2 px-6 rounded-lg hover:bg-blue-600">Pusaka</a>
            <a href="#sejarah" class="bg-gray-800 text-white py-2 px-6 rounded-lg hover:bg-blue-600">Sejarah</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div id="artefak" class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="/Assets/koleksi.png" alt="Sounde Strait" class="w-full h-64 object-cover" />
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Sounde Strait</h3>
                    <p class="text-sm text-gray-500 mt-2">Ujang Mulyadi - Oktober 25, 2022</p>
                    <a href="/koleksi" class="mt-4 bg-black text-white text-sm py-1 px-4 rounded hover:bg-gray-800 inline-block text-center">
                        Koleksi
                    </a>
                </div>
            </div>

            <div id="seni" class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="/Assets/koleksi.png" alt="Sounde Strait" class="w-full h-64 object-cover" />
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Sounde Strait</h3>
                    <p class="text-sm text-gray-500 mt-2">Ujang Mulyadi - Oktober 25, 2022</p>
                    <a href="/koleksi" class="mt-4 bg-black text-white text-sm py-1 px-4 rounded hover:bg-gray-800 inline-block text-center">
                        Koleksi
                    </a>
                </div>
            </div>

            <div id="pusaka" class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="/Assets/koleksi.png" alt="Sounde Strait" class="w-full h-64 object-cover" />
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Sounde Strait</h3>
                    <p class="text-sm text-gray-500 mt-2">Ujang Mulyadi - Oktober 25, 2022</p>
                    <a href="/koleksi" class="mt-4 bg-black text-white text-sm py-1 px-4 rounded hover:bg-gray-800 inline-block text-center">
                        Koleksi
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="History" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-8">History Museum Nasional Indonesia</h1>
        <div class="grid md:grid-cols-2 gap-8">
            <div>
               