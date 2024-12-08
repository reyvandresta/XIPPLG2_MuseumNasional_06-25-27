<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F6F5F2] font-sans">
    <header class="bg-[#f4f4f4] text-white p-5">
        <nav>
            <div class="text-center">
                <div class="w-1/2 mx-auto">
                    <img src="/Assets/logo.png" alt="logo museum" class="w-full h-auto">
                </div>
            </div>
        </nav>
    </header>

    <div class="relative">
        <img src="/Assets/Kunjungan.png" alt="person" class="w-full h-auto">
    </div>

    <section class="bg-gray-50 min-h-screen" id="berita-tentang-museum">
        <div class="container mx-auto px-4 py-8">
            <div class="mb-12">
                <h2 class="text-4xl font-semibold flex items-center">
                    Berita tentang museum
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </h2>
            </div>

            <div class="space-y-8">
                @foreach ($beritas as $berita)
                <div class="flex flex-col md:flex-row items-center bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('storage/' . $berita->picture) }}" alt="{{ $berita->title }}" class="w-full md:w-1/3 h-64 object-cover" />
                    <div class="p-6 md:w-2/3">
                        <h3 class="text-2xl font-semibold text-gray-800">{{ $berita->title }}</h3>
                        <p class="text-sm text-gray-500 mt-2">{{ $berita->content }}</p>
                        <a href="/berita/{{ $berita->id }}" class="mt-4 bg-black text-white text-sm py-2 px-4 rounded hover:bg-gray-800 inline-block">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="text-center my-16">
        <h1 class="text-4xl">Sekilas Tentang Museum Nasional Indonesia</h1>
    </div>

    <div class="px-16 space-y-8">
        <div class="text-xl">
            <h2 class="font-bold">Sekilas Tentang Museum Nasional Indonesia:</h2>
            <p>● Museum Nasional Indonesia adalah museum terbesar dan terlengkap di Indonesia.</p>
            <p>● Museum ini memiliki koleksi lebih dari 140.000 benda yang meliputi artefak prasejarah, sejarah, etnografi, dan geografi.</p>
            <p>● Museum ini didirikan pada tahun 1778 dan merupakan salah satu museum tertua di Asia Tenggara.</p>
            <p>● Museum ini terletak di Jalan Medan Merdeka Barat No. 12, Jakarta Pusat</p>
        </div>

        <div class="text-xl">
            <h2 class="font-bold">Koleksi Museum Nasional:</h2>
            <p>● Koleksi prasejarah meliputi artefak dari Zaman Batu, Zaman Perunggu, dan Zaman Besi.</p>
            <p>● Koleksi sejarah meliputi artefak dari masa kerajaan Hindu-Buddha di Indonesia, masa kolonial Belanda, dan masa kemerdekaan Indonesia.</p>
            <p>● Koleksi etnografi meliputi benda-benda budaya dari berbagai kelompok etnis di Indonesia.</p>
            <p>● Koleksi geografi meliputi peta, globe, dan model relief Indonesia.</p>
        </div>

        <div class="text-xl">
            <h2 class="font-bold">Kegiatan yang dapat dilakukan di Museum Nasional Indonesia:</h2>
            <p>● Mengikuti tur museum</p>
            <p>● Menonton film dokumenter tentang museum</p>
            <p>● Mengikuti workshop dan seminar</p>
            <p>● Mengunjungi pameran temporer</p>
            <p>● Berfoto di museum</p>
        </div>

        <div class="mt-4 text-lg italic">
            <p>Museum Nasional Indonesia adalah tempat yang ideal untuk belajar tentang sejarah, budaya, dan geografi Indonesia.</p>
        </div>

        <div class="text-center my-10">
            <h1 class="text-4xl">Harga Tiket dan Jam Museum Nasional Indonesia</h1>
        </div>

        <div>
            <h2 class="text-xl font-bold">Pengetahuan Jam Kunjungan</h2>
            <p>- Selasa - Minggu: 08:30 - 16:30 WIB</p>
            <p>- Senin: Tutup</p>
            <p>- Libur Nasional: Tutup</p>
        </div>

        <div>
            <h2 class="text-xl font-bold">Tiket Masuk</h2>
            <p>- Dewasa: Rp. 5.000,-</p>
            <p>- Anak-anak (3-12 tahun): Rp. 2.000,-</p>
            <p>- Mahasiswa: Rp. 3.000,-</p>
            <p>- Lansia (di atas 60 tahun): Rp. 3.000,-</p>
            <p>- WNA: Rp. 10.000,-</p>
        </div>

        <div>
            <h2 class="text-xl font-bold">Pembelian Tiket</h2>
            <p>- Loket Museum</p>
            <p>- Aplikasi Museum Nasional</p>
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
