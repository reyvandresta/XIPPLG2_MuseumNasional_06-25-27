<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="bg-gray-200 py-4">
        <nav>
            <div class="container mx-auto flex justify-center items-center">
                <div class="top-[100px]">
                    <img src="/Assets/logo.png" class="w-full" alt="Logo Museum Nasional">
                </div>
            </div>
        </nav>
    </header>
    <div class="top-[100px]">
    <div class="max-w-3xl mb-20 mx-auto my-5 p-500 bg-white rounded-lg shadow-md">
        <h1 class="text-4xl font-semibold text-center mb-20">Feedback</h1>
        <form action="{{ route('feedback.store') }}" method="post">
    @csrf
    <table class="w-full">
        <tr>
            <td class="py-2">Nama</td>
            <td><input type="text" name="nama_feedback" class="w-full p-2 border border-gray-300 rounded-md"></td>
        </tr>
        <tr>
            <td class="py-2">Email</td>
            <td><input type="text" name="email_feedback" class="w-full p-2 border border-gray-300 rounded-md"></td>
        </tr>
        <tr>
            <td class="py-2">Ulasan</td>
            <td><input type="text" name="ulasan_feedback" class="w-full p-2 border border-gray-300 rounded-md"></td>
        </tr>
        <tr>
            <td class="py-2">Saran/Pesan</td>
            <td><input type="text" name="saran_feedback" class="w-full p-2 border border-gray-300 rounded-md"></td>
        </tr>
        <tr>
            <td>Rating</td>
            <td>
                <div class="rating">
                    <input type="radio" id="star5" name="bintang_feedback" value="5"><label for="star5" title="5 star"></label>
                    <input type="radio" id="star4" name="bintang_feedback" value="4"><label for="star4" title="4 stars"></label>
                    <input type="radio" id="star3" name="bintang_feedback" value="3"><label for="star3" title="3 stars"></label>
                    <input type="radio" id="star2" name="bintang_feedback" value="2"><label for="star2" title ="2 stars"></label>
                    <input type="radio" id="star1" name="bintang_feedback" value="1"><label for="star1" title="1 star"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses" class="w-full p-2 bg-gray-800 text-white rounded-md cursor-pointer hover:bg-green-500 font-semibold text-lg"></td>
        </tr>
    </table>
</form>
    </div>
</div>
@if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded">
        {{ session('success') }}
    </div>
@endif

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
