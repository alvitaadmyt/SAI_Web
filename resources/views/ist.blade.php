
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IST - Sekolah Alam Cibinong</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/jpg" sizes="16x16" href="{{ asset('logoatas.jpeg') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-green-500 p-2 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa697ylUcKcUOdk0mRZsZOx_gaxBNBqTjzGCrjaBbSomZGEYY_dfcCdrNP_w&s" alt="Logo Sekolah" class="h-10 mr-4">
                <ul class="flex space-x-4 text-white">
                    <li><a href="index" class="hover:text-orange-400">Beranda</a></li>

                    <li class="relative group">
                    <a href="profile" class="hover:text-orange-400 cursor-pointer">Profile</a>
                    <!-- Dropdown Profile
                    <ul class="absolute hidden group-hover:block bg-green-800 text-white mt-2 rounded shadow-lg z-50 top-full left-0 min-w-full">
                        <li><a href="#" class="block px-4 py-2 hover:bg-green-700">Sejarah</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-green-700">Visi Misi</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-green-700">Our Team</a></li>
                    </ul>
                    </li> -->

                    <li class="relative group">
                        <a href="#" class="hover:text-orange-400">PSB</a>
                        <!-- Dropdown PSB -->
                        <ul class="absolute hidden group-hover:block bg-green-800 text-white mt-2 rounded shadow-lg z-50">
                            <li><a href="#" class="block px-4 py-2 hover:bg-green-700">Panduan Pendaftaran</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-green-700">Formulir Pendaftaran</a></li>
                        </ul>
                    </li>

                    <ul class="flex space-x-4">
                    <li class="relative group">
                    <a href="#" class="hover:text-orange-400">Unit Pendidikan</a>
                        <!-- Dropdown Unit Pendidikan -->
                    <ul class="absolute hidden group-hover:flex flex-col bg-green-800 text-white mt-1 rounded shadow-lg z-50 w-28 opacity-0 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300 transform scale-95">
                        <li><a href="tk" class="block px-4 py-2 hover:bg-green-700">KBTK</a></li>
                        <li><a href="sd" class="block px-4 py-2 hover:bg-green-700">SD</a></li>
                        <li><a href="ist" class="block px-4 py-2 hover:bg-green-700">IST</a></li>
                    </ul>
                </li>
            </ul>

                    <li><a href="galeri" class="hover:text-orange-400">Galeri</a></li>
                    <li><a href="kontak" class="hover:text-orange-400">Kontak Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">
            <!-- Dropdown Menu -->
            <ul class="absolute hidden group-hover:block bg-green-800 text-white mt-2 rounded shadow-lg">
                <li><a href="#sejarah" class="block px-4 py-2 hover:bg-green-700">Sejarah</a></li>
                <li><a href="#visi-misi" class="block px-4 py-2 hover:bg-green-700">Visi Misi</a></li>
                <li><a href="#our-team" class="block px-4 py-2 hover:bg-green-700">Our Team</a></li>
            </ul>
        </div>

    
            <!-- Full Width Section for Visi & Misi -->
        <div class="w-screen bg-gray-100 py-8">
            <!-- Container to Center the Content -->
        <div class="container mx-auto px-4 md:px-8">
            <!-- Section Heading -->
        <div class="bg-green-500 text-white py-3 px-4 rounded-t-lg w-full md:w-1/3 mx-auto">
            <h2 class="font-bold text-xl text-center">IST SAI Cibinong</h2>
        </div>

        <div class="w-screen bg-gray-100 py-8">
    <!-- Container to Center the Content -->
<div class="container mx-auto px-4 md:px-8">
    <div class="grid grid-cols-1 gap-6 mt-4">
        <div class="flex flex-col md:flex-row items-center gap-10">
            <!-- Gambar -->
            <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/slide1.jpg') }}" alt="Team Member 4" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
            </div>
            <!-- Teks di samping gambar -->
            <div class="max-w-2xl leading-relaxed text-justify">
                <h3 class="font-bold text-lg">Inclusive Special Treatment (IST)</h3>
                <p class="text-black">
                IST atau Inclusive Special Treatment Sekolah Alam Indonesia Cibinong adalah level khusus untuk siswa berkebutuhan khusus. 
                Kami menangani siswa dengan diagnosa kekhususan dengan rekomendasi dari tim ahli. Ini terbentuk atas dasar data 
                evaluasi yang dilakukan oleh sekolah pada beberapa siswa yang dianggap memiliki kebutuhan khusus yang tergabung 
                di dalam kelas reguler dan mereka tidak mampu mencapai targetan pembelajaran kelas. Program yang akan diberikan kepada 
                siswa ini tersusun pada <span class="text-green-500 font-bold">Individual Education Program (IEP)</span> siswa. IEP akan menunjukkan bahwa tingkat perkembangan 
                dan kemampuan mereka yang berbeda dari usianya. Model pembelajaran yang digunakan dengan Project Based Learning 
                yang disesuaikan dengan targetan dari masing-masing siswa.
                </p>
            </div>
        </div>
    </div>
</div>

    <!-- Section Heading Sebelah Kiri -->
    <div class="bg-orange-400 text-white py-1 px-2 rounded-t-lg w-40 md:w-60 ml-8 mt-10">
        <h2 class="text-xl text-center">Program Utama</h2>
    </div>

    <!-- List Program Utama -->
    <div class="ml-8 mt-4 mb-11">
    <ul class="list-disc list-inside text-black">
        <li><span class="font-bold">Kegiatan Ibadah:</span>Shalat dhuha, Shalat dzuhur berjamaah, Tahsin, dan Tahfidz</li>
        <li><span class="font-bold">Outing:</span> Kegiatan belajar langsung ke lokasi belajar</li>
        <li><span class="font-bold">OTFA (out trekking fun adventure):</span>Kegiatan menginap atau kemping di luar sekolah</li>
        <li><span class="font-bold">Selebrasi Tema:</span> Kegiatan puncak dari Project Based Learning</li>
    </ul>
    </div>

    <!-- Section Heading Sebelah Kiri -->
    <!-- <div class="bg-blue-400 text-white py-1 px-2 rounded-t-lg w-40 md:w-60 ml-8 mt-10">
        <h2 class="text-xl text-center">Lorem Ipsum</h2>
    </div> -->

    <!-- List Program Utama -->
    <!-- <div class="ml-8 mt-4">
    <ul class="list-disc list-inside text-black">
        <li>Lorem Ipsum</li>
        <li>Lorem Ipsum</li>
        <li>Lorem Ipsum</li>
        <li>Lorem Ipsum</li>
    </ul>
    </div> -->

    <!-- Footer -->
<footer class="bg-blue-400 text-white py-4 mt-20">
    <div class="container mx-auto px-4 md:px-8 text-center">
        <p class="text-sm">&copy; 2024 SAI Cibinong. All Rights Reserved.</p>
    </div>
</footer>

    @vite('resources/js/app.js')
</body>
</html>