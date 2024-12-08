<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="bg-gray-200 py-4">
    <nav>
        <div class="container mx-auto flex justify-center items-center">
            <div>
                <img src="/Assets/logo.png" class="w-full" alt="Logo Museum Nasional">
            </div>
        </div>
    </nav>
</header>
<div class="text-center mb-12">
    <h1 class="text-3xl font-semibold underline">Virtual Tour</h1>
</div>

<div class="flex mb-24 mx-10">
    <div class="flex-1 ml-20 mb-10">
        <p class="text-lg">Virtual tour museum adalah tur museum yang bisa diikuti secara online, tanpa perlu datang langsung ke museum tersebut.</p>
    </div>
</div>

<div class="flex justify-center">
    <iframe src="https://www.google.com/maps/embed?pb=!4v1714441629904!6m8!1m7!1shu28aHtNx76Up9e3NdeDAA!2m2!1d-6.176146431305235!2d106.8224409139945!3f268.80549948132415!4f1.591130038434457!5f0.7820865974627469" width="1260" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<section class="bg-gray-50 min-h-screen" id="video tentang museum">
    <div class="container mx-auto px-4 py-8">
        <div class="mb-12">
            <h2 class="text-4xl font-semibold flex items-center">
                video tentang museum
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </h2>
        </div>

        <div class="space-y-8">
            @foreach ($virtualTours as $virtualTour)
            <div class="flex flex-col md:flex-row items-center bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="{{ asset('storage/' . $virtualTour->picture) }}" alt="{{ $virtualTour->title }}" class="w-full md:w-1/3 h-64 object-cover" />
                <div class="p-6 md:w-2/3">
                    <h3 class="text-2xl font-semibold text-gray-800">{{ $virtualTour->title }}</h3>
                    <p class="text-sm text-gray-500 mt-2">{{ $virtualTour->link }}</p>
                    <a href="/virtualtour/{{ $virtualTour->id }}" class="mt-4 bg-black text-white text-sm py-2 px-4 rounded hover:bg-gray-800 inline-block">
                        lihat link
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<footer class="bg-gray-800 py-4 text-white py-6 mt-10">
    <div class="flex justify-between items-center mx-16">
        <div class="flex items-center">
            <img src="/Assets/tutwuri.png" alt="" class="w-24 h-auto">
            <img src="/Assets/logo m.png" alt="" class="w-24 h-auto">
        </div>
        <div class="text-left">
            <p class="mb-2 font-semibold">Tentang Kami</p>
            <p>Badan Layanan Umum Museum Nasional Indonesia Jl. Medan Merdeka Barat No.12, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia<br> Telepon: +62 21 3868172</p>
        </div>
        <div class="text-center space-y-2">
            <h2 class="text-blue-500 underline cursor-pointer hover:text-darkblue">Instagram</h2>
            <h2 class="text-blue-500 underline cursor-pointer hover:text-darkblue">Facebook</h2>
            <h2 class="text-blue-500 underline cursor-pointer hover:text-darkblue">Twitter</h2>
        </div>
    </div>
</footer>
</body>
</html>