<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Sekolah Alam Cibinong</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/jpg" sizes="16x16" href="{{ asset('logoatas.jpeg') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-green-500 p-2 sticky top-0 z-5">
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

        <!-- Heading -->
    <div class="w-screen bg-gray-100 py-8">
    <!-- Container to Center the Content -->
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Heading -->
        <div class="bg-orange-500 text-white py-3 px-4 rounded-t-lg w-full md:w-1/3 mx-auto">
            <h2 class="font-bold text-xl text-center">Mengenal SAI Cibinong</h2>
        </div>

        <!-- Content Wrapper -->
        <div class="container mt-6 px-7">
        <!-- Gambar Besar di Atas Konten -->
        <div class="mb-8">
            <img src="{{ asset('img/sai.jpg') }}" alt="Gambar Sekolah" class="w-1/2 h-auto rounded-lg shadow-lg mx-auto">
        </div>
        <!-- Content Sections -->
        <div class="mt-6 px-7">
            <!-- Sejarah Section -->
                <p class="text-black">
                Sekolah Alam Indonesia (SAI), berdiri sejak 1998, menggunakan kurikulum inti yang dibingkai dalam 3 Ranah yang terdiri dari: 
                <span class="text-green-500 font-bold">Akhlak</span> sebagai bekal dasar anak-anak mengenal diri, lingkungan dan Tuhannya, 
                <span class="text-orange-500 font-bold">Leadership</span> sebagai pondasi kemandirian dan tanggung jawab serta 
                <span class="text-blue-500 font-bold">Thinking Skill</span> sebagai bekal cara berpikir sebagai seorang problem solver.
                </p>

            <!-- Flex Container for Tentang Sekolah, Visi, and Misi
        <div class="flex justify-center items-center h-screenflex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6 mt-4"> -->
        <!-- Box 1: Gambar di Sebelah Kanan -->
        <!-- <div class="md:w-1/3 flex items-center justify-center">
            <img src="{{ asset('img/vm.png') }}" alt="Gambar Sekolah" class="rounded-lg shadow-lg w-full h-auto">
        </div> -->
        <!-- Box 2: Gambar di Sebelah Kanan -->
        <!-- <div class="md:w-1/3 flex items-center justify-center">
            <img src="{{ asset('img/vm.png') }}" alt="Gambar Sekolah" class="rounded-lg shadow-lg w-full h-auto">
        </div>
        </div> -->

        <!-- Flex Container for Model Pembelajaran, Visi & Misi Boxes, Konsep pendidikan -->
        <div class="flex flex-col md:flex-row justify-start items-start space-y-6 md:space-y-0 md:space-x-6 mt-4">

        <!-- Box 1: Konsep pendidikan -->
        <div class="bg-green-400 p-6 rounded-lg shadow-lg w-full md:w-1/2">
        <h2 class="text-white font-bold text-2xl">Konsep Pendidikan</h2>
        <p class="text-white mb-4 mt-3">
        Sekolah Alam INDONESIA awalnya hanya sebuah gagasan yang kemudian diwujudkan menjadi model sekolah dengan alam sebagai sumber ilmu, di mana para siswa berperan dalam pengelolaannya. Sekolah ini tidak menggunakan gedung mewah, melainkan saung dari kayu, mengurangi biaya pembangunan. Fokus utama pendidikan berkualitas terletak pada kualitas guru, metode yang benar, dan buku-buku yang memadai.
    </p>
    <p class="text-white mb-4">
        Konsep pendidikan ini berlandaskan Al-Qur'an dan hadits, dengan tujuan menciptakan manusia sebagai khalifah di bumi. Oleh karena itu, Sekolah Alam INDONESIA memprioritaskan tiga pokok materi dalam pendidikannya:
    </p>
    
    <ol class="list-none space-y-4 pl-6">
    <li class="text-white flex items-start">
        <!-- Ganti link di bawah dengan link gambar atau ikon hijab yang sesuai -->
        <img src="{{ asset('img/personality.png') }}" alt="Icon" class="w-10 h-10 mr-4">
        <div>
            <div class="bg-orange-400 text-white font-bold px-2 py-1 rounded">
                <strong>Akhlakul Karimah (Sikap Hidup)</strong>
            </div>
            <p class="ml-4 mt-2">Metode utama: Keteladanan</p>
        </div>
    </li>
    <li class="text-white flex items-start">
        <!-- Ganti link di bawah dengan ikon atau gambar yang diinginkan -->
        <img src="{{ asset('img/brain.png') }}" alt="Icon" class="w-10 h-10 mr-4">
        <div>
            <div class="bg-orange-400 text-white font-bold px-2 py-1 rounded">
                <strong>Falsafah Ilmu Pengetahuan (Logika Berpikir)</strong>
            </div>
            <p class="ml-4 mt-2">Metode utama: Active learning dan diskusi</p>
        </div>
    </li>
    <li class="text-white flex items-start">
        <!-- Ganti link di bawah dengan ikon atau gambar yang diinginkan -->
        <img src="{{ asset('img/leadership.png') }}" alt="Icon" class="w-10 h-10 mr-4">
        <div>
            <div class="bg-orange-400 text-white font-bold px-2 py-1 rounded">
                <strong>Latihan Kepemimpinan (Leadership)</strong>
            </div>
            <p class="ml-4 mt-2">Metode utama: Dynamic group dan Outbound Training</p>
        </div>
    </li>
</ol>
</div>

    <!-- Box 2: Model Pembelajaran -->
<div class="bg-blue-400 p-6 rounded-lg shadow-lg w-full md:w-1/2">
    <h2 class="text-white font-bold text-2xl mb-4 underli">Model Pembelajaran</h2>
    <ul class="text-white list-none space-y-2">
        <li class="bg-orange-400 p-2 rounded">
            <button class="flex items-center justify-between w-full focus:outline-none" onclick="toggleDetail('pjblDetail')">
                <span class="font-bold">Project Based Learning (PJBL)</span>
                <span id="pjblIcon" class="ml-2">▶</span>
            </button>
            <div id="pjblDetail" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out pl-4">
                Model pembelajaran yang digunakan oleh SAI menggunakan Project Based Learning sebagai implementasi pembelajaran aktif 
                yang berorientasi pada Student Centered dan Integrated Learning.
            </div>
        </li>
        <li class="bg-orange-400 p-2 rounded">
            <button class="flex items-center justify-between w-full focus:outline-none" onclick="toggleDetail('quranDetail')">
                <span class="font-bold">Qur'an</span>
                <span id="quranIcon" class="ml-2">▶</span>
            </button>
            <div id="quranDetail" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out pl-4">
                Pembelajaran Quran dengan bimbingan tajwid dengan metode Ar Risalahdan juga menghafal minimal Juz 30.
            </div>
        </li>
        <li class="bg-orange-400 p-2 rounded">
            <button class="flex items-center justify-between w-full focus:outline-none" onclick="toggleDetail('outbondDetail')">
                <span class="font-bold">Outbond</span>
                <span id="outbondIcon" class="ml-2">▶</span>
            </button>
            <div id="outbondDetail" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out pl-4">
                Untuk melatih kemandirian, keberanian, dan kepemimpinan.
            </div>
        </li>
        <li class="bg-orange-400 p-2 rounded">
            <button class="flex items-center justify-between w-full focus:outline-none" onclick="toggleDetail('classOutingDetail')">
                <span class="font-bold">Class Outing</span>
                <span id="classOutingIcon" class="ml-2">▶</span>
            </button>
            <div id="classOutingDetail" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out pl-4">
                Berkelana ke sumber belajar dan membersamai alam.
            </div>
        </li>
        <li class="bg-orange-400 p-2 rounded">
            <button class="flex items-center justify-between w-full focus:outline-none" onclick="toggleDetail('lifeSkillDetail')">
                <span class="font-bold">Life Skill</span>
                <span id="lifeSkillIcon" class="ml-2">▶</span>
            </button>
            <div id="lifeSkillDetail" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out pl-4">
                Melatih keterampilan dasar yang diperlukan dalam keseharian.
            </div>
        </li>
        <li class="bg-orange-400 p-2 rounded">
            <button class="flex items-center justify-between w-full focus:outline-none" onclick="toggleDetail('classProjectDetail')">
                <span class="font-bold">Class Project</span>
                <span id="classProjectIcon" class="ml-2">▶</span>
            </button>
            <div id="classProjectDetail" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out pl-4">
                Project kelas yang mengintegrasikan kemampuan berpikir, kreativitas dan kerjasama.
            </div>
        </li>
    </ul>
</div>

<script>
    function toggleDetail(id) {
        const detail = document.getElementById(id);
        detail.classList.toggle('max-h-0');
        detail.classList.toggle('max-h-[100px]'); // Pastikan nilai ini cukup untuk konten

        // Mengubah ikon
        const icon = document.getElementById(id + 'Icon');
        icon.textContent = detail.classList.contains('max-h-0') ? '▶' : '▲';
    }
</script>


    <!-- Box 3: Visi Misi -->
    <div class="bg-orange-400 p-6 rounded-lg shadow-lg w-full md:w-1/2">
        <h2 class="text-white font-bold text-2xl">Visi</h2>
        <p class="text-white mb-6">
            Global center of excellence in education system.
        </p>
        <h2 class="text-white font-bold text-2xl">Misi</h2>
        <p class="text-white">
            To develop leading generation with noble character through real life experience within community.
        </p>
    </div>
</div>
</div>
</div>
</div>
</div>

            <!-- Our Team Section -->
            <div class="bg-orange-500 text-white py-3 px-4 rounded-t-lg w-full md:w-1/3 mx-auto mt-10">
                <h2 class="font-bold text-xl text-center">Our Team</h2>
            </div>

            <!-- Container to Center the Content Image -->
            <div class="container mx-auto px-4 md:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 mt-6">
                <!-- Card 1 -->
                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/our1.jpg') }}" alt="Team Member 1" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="mt-4 text-center">
                    <h3 class="font-semibold text-lg">Pak Edy</h3>
                    <p class="text-gray-600">OTS Gibran (SD 3)</p>
                </div>
            </div>
                <!-- Card 2 -->
                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/our2.jpg') }}" alt="Team Member 2" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="mt-4 text-center">
                    <h3 class="font-semibold text-lg">Pak Hendry</h3>
                    <p class="text-gray-600">OTS Azra (SD 4)</p>
                </div>
            </div>
                <!-- Card 3 -->
                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/our3.jpg') }}" alt="Team Member 3" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="mt-4 text-center">
                    <h3 class="font-semibold text-lg">Pak Ardhy</h3>
                    <p class="text-gray-600">OTS Dhira (SD 3)</p>
                </div>
            </div>
                <!-- Card 4 -->
                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/our4.jpg') }}" alt="Team Member 4" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="mt-4 text-center">
                    <h3 class="font-semibold text-lg">Pak Fauzi</h3>
                    <p class="text-gray-600">Principal</p>
                </div>
            </div>
                <!-- Card 5 -->
                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/our5.jpg') }}" alt="Team Member 5" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="mt-4 text-center">
                    <h3 class="font-semibold text-lg">Bu Iam</h3>
                    <p class="text-gray-600">Kepsek SD</p>
                </div>
            </div>
                <!-- Card 6 -->
                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/our6.jpg') }}" alt="Team Member 6" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="mt-4 text-center">
                    <h3 class="font-semibold text-lg">Bu Dini</h3>
                    <p class="text-gray-600">OTS Kayla (SD 2)</p>
                </div>
            </div>
                 <!-- Card 7 -->
                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/our7.jpg') }}" alt="Team Member 7" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="mt-4 text-center">
                    <h3 class="font-semibold text-lg">Bu Ajeng</h3>
                    <p class="text-gray-600">OTS Habibie (SD 4)</p>
                </div>
            </div>
                <!-- Card 8 -->
                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/our8.jpg') }}" alt="Team Member 8" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="mt-4 text-center">
                    <h3 class="font-semibold text-lg">Bu Dede</h3>
                    <p class="text-gray-600">Community Dev</p>
                </div>
            </div>
                <!-- Card 9 -->
                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/our9.jpg') }}" alt="Team Member 9" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="mt-4 text-center">
                    <h3 class="font-semibold text-lg">Pak Alim</h3>
                    <p class="text-gray-600">Human Capital</p>
                </div>
            </div>
                <!-- Card 10 -->
                <div class="p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('img/our10.jpg') }}" alt="Team Member 10" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="mt-4 text-center">
                    <h3 class="font-semibold text-lg">Pak Deby</h3>
                    <p class="text-gray-600">OTS Khalifa (SD 5)</p>
                </div>
            </div>
        </div>
    </div>
</div>
            
        </div>
            </div>
    </div>

    <!-- Footer -->
<footer class="bg-blue-400 text-white py-4 mt-8">
    <div class="container mx-auto px-4 md:px-8 text-center">
        <p class="text-sm">&copy; 2024 Your Company. All Rights Reserved.</p>
    </div>
</footer>

    @vite('resources/js/app.js')
</body>
</html>
