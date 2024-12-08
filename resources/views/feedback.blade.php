<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .rating input {
            display: none;
        }
        .rating label {
            float: right;
            width: 20px;
            height: 20px;
            background: url('https://cdn-icons-png.flaticon.com/512/616/616489.png') no-repeat center center / contain;
            cursor: pointer;
        }
        .rating input:checked ~ label {
            background: url('https://cdn-icons-png.flaticon.com/512/616/616490.png') no-repeat center center / contain;
        }
        .rating label:hover,
        .rating label:hover ~ label {
            background: url('https://cdn-icons-png.flaticon.com/512/616/616490.png') no-repeat center center / contain;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-700">

<header class="bg-gray-200 py-4">
        <nav>
            <div class="container mx-auto flex justify-center items-center">
                <div class="top-[100px]">
                    <img src="/Assets/logo.png" class="w-full" alt="Logo Museum Nasional">
                </div>
            </div>
        </nav>
    </header>
    @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded">
        {{ session('success') }}
    </div>
@endif
<div class="container mx-auto my-10">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl font-semibold text-center mb-6">Feedback</h1>
        <form action="{{ route('feedback.store') }}" method="post">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="nama_feedback" class="block mb-2 font-semibold">Nama</label>
                    <input type="text" id="nama_feedback" name="nama_feedback" class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
                </div>
                <div>
                    <label for="email_feedback" class="block mb-2 font-semibold">Email</label>
                    <input type="email" id="email_feedback" name="email_feedback" class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
                </div>
            </div>
            <div class="mb-4">
                <label for="ulasan_feedback" class="block mb-2 font-semibold">Ulasan</label>
                <textarea id="ulasan_feedback" name="ulasan_feedback" rows="3" class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"></textarea>
            </div>
            <div class="mb-4">
                <label for="saran_feedback" class="block mb-2 font-semibold">Saran/Pesan</label>
                <textarea id="saran_feedback" name="saran_feedback" rows="3" class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"></textarea>
            </div>
            <div class="mb-6">
                <label class="block mb-2 font-semibold">Rating</label>
                <div class="rating flex gap-2 justify-center">
                    <input type="radio" id="star5" name="bintang_feedback" value="5">
                    <label for="star5" title="5 stars"></label>
                    <input type="radio" id="star4" name="bintang_feedback" value="4">
                    <label for="star4" title="4 stars"></label>
                    <input type="radio" id="star3" name="bintang_feedback" value="3">
                    <label for="star3" title="3 stars"></label>
                    <input type="radio" id="star2" name="bintang_feedback" value="2">
                    <label for="star2" title="2 stars"></label>
                    <input type="radio" id="star1" name="bintang_feedback" value="1">
                    <label for="star1" title="1 star"></label>
                </div>
            </div>
            <div>
                <button type="submit" class="w-full py-3 bg-gray-800 text-white rounded-lg hover:bg-green-500 font-semibold transition">Simpan</button>
            </div>
        </form>
    </div>
</div>

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
