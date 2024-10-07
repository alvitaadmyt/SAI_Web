<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda - Sekolah Alam Cibinong</title>
    <!-- Tambahkan link ke Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/jpg" sizes="16x16" href="{{ asset('logoatas.jpeg') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    </style>
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
                        <li><a href="profile" class="block px-4 py-2 hover:bg-green-700">Tentang sekolah</a></li>
                        <li><a href="profile" class="block px-4 py-2 hover:bg-green-700">Pembelajaran</a></li>
                        <li><a href="profile" class="block px-4 py-2 hover:bg-green-700">Our Team</a></li>
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
                    </ul></li>
                </ul>
            </div>
        </div>
    </nav>
        
        <!-- Tombol Scroll ke Atas -->
            <button id="scrollUp" class="fixed bottom-5 right-20 bg-green-500 text-white p-2 shadow-lg hover:bg-green-700 transition">
             &#8593; <!-- Ikon Panah Atas -->
            </button>

        <script>
        // Tombol Scroll Ke Atas
            const scrollUpButton = document.getElementById('scrollUp');
            scrollUpButton.addEventListener('click', () => {
            window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
        </script>

    <!-- Icon WA di sebelah kiri dengan tooltip berbentuk percakapan -->
<a href="https://wa.me/1234567890" target="_blank" class="fixed bottom-4 left-4 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-700 transition flex items-center justify-center group">
    <i class="fab fa-whatsapp text-2xl"></i> <!-- Ikon WhatsApp dari Font Awesome -->
    <span class="absolute left-16 bg-blue-400 text-white text-sm px-3 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap before:absolute before:top-1/2 before:-left-3 before:-translate-y-1/2 before:border-8 before:border-transparent before:border-r-white">
        Hubungi kami disini
    </span>
</a>




    <!-- Main Content -->
    <!-- Slideshow Container -->
    <div class="w-full h-96 bg-gray-100 relative overflow-hidden">
        <!-- Slides -->
        <div id="slideshow" class="w-full h-full flex transition-transform duration-1000 ease-in-out">
            <!-- Slide 1 -->
            <div class="w-full h-full flex-shrink-0">
                <img src="/img/sai.jpg" alt="Slide 2" class="w-full h-full object-cover">
            </div>

            <!-- Slide 2 -->
            <div class="w-full h-full flex-shrink-0 relative">
                <img src="/img/wakaf.png" alt="Slide 1" class="w-full h-full object-cover">
                <!-- Caption and Button for Slide 1 -->
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center">
                    <a href="https://www.wakafsai.org/" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-orange-500 transition duration-300">Lihat Selengkapnya</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="w-full h-full flex-shrink-0 relative">
                <img src="/img/kg1.jpg" alt="Slide 1" class="w-full h-full object-cover">
                <!-- Caption and Button for Slide 1 -->
                <!-- <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center">
                    <h3 class="text-white text-lg font-bold mb-2">kdhbfhdgfdbvhdg</h3>
                    <a href="/detail-1" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300">Lihat Selengkapnya</a>
                </div> -->
            </div>

            <!-- Slide 4 -->
            <div class="w-full h-full flex-shrink-0">
                <img src="/img/kg2.jpg" alt="Slide 2" class="w-full h-full object-cover">
            </div>

            <!-- Slide 5 -->
            <div class="w-full h-full flex-shrink-0 relative">
                <img src="/img/kg3.jpg" alt="Slide 3" class="w-full h-full object-cover">
                <!-- Caption and Button for Slide 3 -->
                <!-- <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center">
                    <h3 class="text-white text-lg font-bold mb-2">dfgiuwegfiuegfiegf</h3>
                    <a href="/detail-3" class="bg-orange-400 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300">Lihat Selengkapnya</a>
                </div> -->
            </div>

            <!-- Slide 6 -->
            <div class="w-full h-full flex-shrink-0">
                <img src="/img/kg4.jpg" alt="Slide 4" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-4 py-2">Prev</button>
        <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-4 py-2">Next</button>
    </div>

    <!-- JavaScript for Slideshow -->
    <script>
        const slideshow = document.getElementById('slideshow');
        const slides = slideshow.children;
        let index = 0;

        // Function to show the next slide
        function showNextSlide() {
            index = (index + 1) % slides.length;
            slideshow.style.transform = `translateX(-${index * 100}%)`;
        }

        // Set interval for automatic slide change
        setInterval(showNextSlide, 5000); // Change slide every 3 seconds

        // Navigation buttons
        document.getElementById('next').addEventListener('click', () => {
            showNextSlide();
        });

        document.getElementById('prev').addEventListener('click', () => {
            index = (index - 1 + slides.length) % slides.length; // Move to the previous slide
            slideshow.style.transform = `translateX(-${index * 100}%)`;
        });
    </script>

<!-- <div class="container mx-auto px-4 py-8"> -->
    <!-- Wrapper for the Posters -->
    <!-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4"> -->
        <!-- Poster 1 -->
        <!-- <div class="p-4">
            <img src="{{ asset('img/Poster.png') }}" alt="Poster 1" class="w-full h-auto rounded">
            <div class="mt-4 text-center">
                <h3 class="text-xl font-semibold">Poster 1</h3>
            </div>
        </div> -->
        <!-- Poster 2 -->
        <!-- <div class="bg-white shadow-lg rounded-lg p-4">
            <img src="{{ asset('img/poster2.jpg') }}" alt="Poster 2" class="w-full h-auto rounded">
            <div class="mt-4 text-center">
                <h3 class="text-xl font-semibold">Poster 2</h3>
            </div>
        </div> -->
        <!-- Poster 3 -->
        <!-- <div class="bg-white shadow-lg rounded-lg p-4">
            <img src="{{ asset('img/poster3.jpg') }}" alt="Poster 3" class="w-full h-auto rounded">
            <div class="mt-4 text-center">
                <h3 class="text-xl font-semibold">Poster 3</h3>
            </div>
        </div> -->
        <!-- Poster 4 -->
        <!-- <div class="bg-white shadow-lg rounded-lg p-4">
            <img src="{{ asset('img/poster4.jpg') }}" alt="Poster 4" class="w-full h-auto rounded">
            <div class="mt-4 text-center">
                <h3 class="text-xl font-semibold">Poster 4</h3>
            </div>
        </div>
    </div>
</div> -->

    <!-- Full Width Section for Visi & Misi -->
<div class="w-screen bg-gray-100 py-8">
    <!-- Container to Center the Content -->
    <div class="container mx-auto px-4 md:px-8">

        <!-- Flex Container for Tentang Sekolah, Visi, and Misi -->
        <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6 mt-4">
    <!-- Box 1: Tentang Sekolah (Teks) -->
    <div class="bg-white p-6 rounded-lg shadow-lg md:w-2/3">
    <h2 class="text-green-500 font-bold text-2xl mb-4">Sekapur Sirih</h2>
    <h3 class="text-orange-400 font-bold text-2xl mb-4">Iťs a dream comes true!</h3>
    <div class="flex flex-col space-y-4">
    <!-- Paragraf 1 -->
    <p class="text-black">
        Sekolah Alam Indonesia mengusung pendekatan pendidikan yang berbeda, dengan menekankan 
        <span class="text-blue-500 font-bold">kebebasan</span> 
        <span class="text-green-500 font-bold">bereksplorasi</span> dan 
        <span class="text-orange-500 font-bold">berkreasi</span> tanpa batasan dinding kelas. 
        Siswa tumbuh dalam lingkungan yang mendekatkan mereka dengan alam, belajar melalui pengalaman langsung.
    </p>
    <!-- Paragraf 2 -->
    <p class="text-black">
        Kami fokus pada <span class="text-green-500 font-bold">pengembangan karakter mulia</span>, 
        <span class="text-blue-500 font-bold">pengetahuan luas</span>, dan 
        <span class="text-orange-500 font-bold">kemampuan menjadi pemimpin</span> bumi. 
        Tanpa tekanan nilai atau ranking, setiap anak didorong untuk menemukan kegembiraan dalam belajar, sesuai dengan potensinya.
    </p>
    <!-- Paragraf 3 -->
    <p class="text-black">
    Para guru kami berperan sebagai 
    <span class="text-orange-500 font-bold">pengetahuan luas</span>, 
    <span class="text-green-500 font-bold">pembimbing</span>, 
    dan <span class="text-blue-500 font-bold">teman</span> yang membantu siswa memahami kelebihan dan kekurangannya, sambil membentuk pribadi yang mandiri, berilmu, dan berakhlak mulia.
</p>
</div>
</div>
<!-- Box 2: Gambar di Sebelah Kanan -->
<div class="md:w-1/3 flex items-center justify-center">
        <img src="{{ asset('img/pyramid.png') }}" alt="Gambar Sekolah" class="rounded-lg shadow-lg w-full h-auto">
    </div>
</div>

<!-- Flex Container for Model Pembelajaran, Visi & Misi Boxes, Konsep pendidikan -->
<div class="flex flex-col md:flex-row justify-between space-y-6 md:space-y-0 md:space-x-6 mt-4">

        <!-- Box 1: Visi Misi -->
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

<!-- Box 2: Konsep pendidikan -->
<div class="bg-green-400 p-6 rounded-lg shadow-lg w-full md:w-1/2">
        <h2 class="text-white font-bold text-2xl">Konsep Pendidikan</h2>
        <p class="text-white mb-6">
        Sekolah Alam Indonesia memprioritaskan pada tiga pokok materi dalam konsep pendidikannya, yaitu:
        <ul class="text-white list-disc ml-6">
        <li>Akhlakul Karimah (sikap hidup) </li>
        <li>Falsafah limu Pengetahuan (logika berfikir)</li>
        <li>Latihan kepemimpinan (Leadership)</li>
    </ul>
        </p>
    </div>

    <!-- Box 3: Model Pembelajaran -->
<div class="bg-blue-400 p-6 rounded-lg shadow-lg w-full md:w-1/2">
    <h2 class="text-white font-bold text-2xl mb-4">Model Pembelajaran</h2>
    <ul class="text-white list-disc ml-6">
        <li>Project Based Learning (PJBL)</li>
        <li>Qur'an</li>
        <li>Outbond</li>
        <li>Class Outing</li>
        <li>Life Skill</li>
        <li>Class Project</li>
    </ul>
</div>
</div>
</div>
</div>
</div>
</div>

    <!-- Section 4: Unit Pendidikan -->
    <div class="w-screen bg-gray-100 py-8">
        <!-- Container to Center the Content -->
        <div class="container mx-auto px-4 md:px-8">
            <!-- Section Heading -->
            <div class="bg-green-500 text-white py-3 px-4 rounded-t-lg w-full md:w-1/3 mx-auto">
                <h2 class="font-bold text-xl text-center">Unit Pendidikan</h2>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-4">
            <div class="flex flex-col md:flex-row items-center gap-10 mt-4">
            <!-- Gambar -->
            <img src="{{ asset('img/berita3.jpg') }}" alt="Gambar KBTK" class="w-80 h-64 object-cover rounded-lg shadow-lg">
            <!-- Teks di samping gambar -->
            <div>
                <a href="tk" h3 class="font-bold text-lg text-[#f96e3c]">KBTK (Kelompok Belajar & Taman Kanak-kanak)</h3></a>
                <p class="text-black-700"><div>
                <p class="text-black-700">Konsep KB-TK Sekolah Alam Indonesia Cibinong terintegrasi dengan konsep Sekolah Alam Indonesia 
                    yang memiliki 3 ranah pendidikan yaitu 
                    <span class="text-green-500 font-bold">Akhlak mulia</span>, 
                    <span class="text-orange-500 font-bold">Kepemimpinan</span>, dan 
                    <span class="text-blue-500 font-bold">Fisik (motorik)</span>.
                    Pembelajaran di KB-TK berfokus pada tahapan perkembangan anak sesuai usianya yaitu 
                    TUNTAS MOTORIK DAN SIAP BELAJAR. Dengan mengutamakan tiga ranah pendidikan Sekolah Alam Indonesia 
                    dan berfokus pada ketuntasan motorik agar siap belajar, maka diharapkan siswa siswi KBTK Sekolah Alam Indonesia Cibinong 
                    memiliki kemampuan untuk berkembang lebih baik lagi di masa depan mereka. Untuk menguatkan hal tersebut, model pembelajaran 
                    KBTK SAI Cibinong menggunakan Project Based Learning dengan kekhususan Play Based Learning.</p>
                    <!-- Button -->
                <div class="flex-col justify-center items-center mt-3">
                    <a href="/tk" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-orange-500 transition duration-300">Lihat Selengkapnya</a>
                </div>
            </div>
                </p>
            </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mt-4">
            <div class="flex flex-col md:flex-row items-center gap-10 mt-4">
            <!-- Gambar -->
            <img src="{{ asset('img/berita1.jpeg') }}" alt="Gambar SD" class="w-80 h-64 object-cover rounded-lg shadow-lg">
            <!-- Teks di samping gambar -->
            <div>
            <a href="sd" class="font-bold text-lg text-[#f96e3c]">Sekolah Dasar</a>
            <p class="text-black">
                Model pembelajaran yang digunakan oleh Sekolah Dasar Sekolah Alam Indonesia Cibinong adalah 
                <span class="text-green-500 font-bold">“Integrated Learning”</span>dan 
                <span class="text-blue-500 font-bold">“Experiental Learning”</span> 
                dengan pendekatan pembelajaran “Project Based Learning” (PjBL). 
                Dengan model pembelajaran ini, setiap mata pelajaran akan saling terkait satu sama lain secara terintegrasi. 
                Dengan demikian siswa dapat belajar melihat suatu hal/masalah dari berbagai sudut pandang yang berbeda dan mampu 
                menemukan solusi terhadap permasalahan tersebut. Selain itu, siswa akan mampu berkolaborasi dan bekerja sama untuk 
                menentukan ide besar dari kebutuhan masing-masing mereka. Sehingga nantinya, mereka akan memiliki kemampuan critical.
            </p>
            <!-- Button -->
            <div class="flex-col justify-center items-center mt-3">
            <a href="/sd" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-orange-500 transition duration-300">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>

            <!-- IST -->
            <div class="grid grid-cols-1 gap-6 mt-4">
            <div class="flex flex-col md:flex-row items-center gap-10 mt-4">
            <!-- Gambar -->
            <img src="{{ asset('img/kg1.jpg') }}" alt="Gambar ist" class="w-80 h-64 object-cover rounded-lg shadow-lg">
            <!-- Teks di samping gambar -->
            <div>
            <a href="tk" class="font-bold text-lg text-[#f96e3c]">IST</a>
            <p class="text-black-700">
                IST atau Inclusive Special Treatment Sekolah Alam Indonesia Cibinong adalah level khusus untuk siswa berkebutuhan khusus. 
                Kami menangani siswa dengan diagnosa kekhususan dengan rekomendasi dari tim ahli. Ini terbentuk atas dasar data 
                evaluasi yang dilakukan oleh sekolah pada beberapa siswa yang dianggap memiliki kebutuhan khusus yang tergabung 
                di dalam kelas reguler dan mereka tidak mampu mencapai targetan pembelajaran kelas. Program yang akan diberikan kepada 
                siswa ini tersusun pada <span class="text-green-500 font-bold">Individual Education Program (IEP)</span> siswa. IEP akan menunjukkan bahwa tingkat perkembangan 
                dan kemampuan mereka yang berbeda dari usianya. Model pembelajaran yang digunakan dengan Project Based Learning 
                yang disesuaikan dengan targetan dari masing-masing siswa.
            </p>
            <!-- Button -->
            <div class="flex-col justify-center items-center mt-3">
            <a href="/ist" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-orange-500 transition duration-300">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
            
    <!-- Section 5: Galeri -->
<div class="w-screen bg-gray-100 py-8" x-data="{ open: false, selectedImage: '' }">
    <!-- Container to Center the Content -->
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Heading -->
        <div class="bg-green-500 text-white py-3 px-4 rounded-t-lg w-full md:w-1/3 mx-auto">
            <h2 class="font-bold text-xl text-center">Galeri</h2>
        </div>

        <!-- Grid Gambar -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-4">
            <div @click="open = true; selectedImage = '{{ asset('img/g1.jpg') }}'" class="cursor-pointer">
                <img src="{{ asset('img/g1.jpg') }}" alt="Image 1" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
            </div>
            <div @click="open = true; selectedImage = '{{ asset('img/g2.jpg') }}'" class="cursor-pointer">
                <img src="{{ asset('img/g2.jpg') }}" alt="Image 2" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
            </div>
            <div @click="open = true; selectedImage = '{{ asset('img/g3.jpg') }}'" class="cursor-pointer">
                <img src="{{ asset('img/g3.jpg') }}" alt="Image 3" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
            </div>
            <div @click="open = true; selectedImage = '{{ asset('img/g4.jpg') }}'" class="cursor-pointer">
                <img src="{{ asset('img/g4.jpg') }}" alt="Image 4" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
            </div>
            <div @click="open = true; selectedImage = '{{ asset('img/g5.jpg') }}'" class="cursor-pointer">
                <img src="{{ asset('img/g5.jpg') }}" alt="Image 5" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
            </div>
            <div @click="open = true; selectedImage = '{{ asset('img/g6.jpg') }}'" class="cursor-pointer">
                <img src="{{ asset('img/g6.jpg') }}" alt="Image 6" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
            </div>
            <div @click="open = true; selectedImage = '{{ asset('img/g7.jpg') }}'" class="cursor-pointer">
                <img src="{{ asset('img/g7.jpg') }}" alt="Image 7" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
            </div>
            <div @click="open = true; selectedImage = '{{ asset('img/g8.jpg') }}'" class="cursor-pointer">
                <img src="{{ asset('img/g8.jpg') }}" alt="Image 8" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
            </div>
            <!-- Button -->
            <!-- <div class="flex-col justify-center items-center">
            <a href="/galeri" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-orange-400 transition duration-300">Lihat Selengkapnya</a>
            </div> -->
        </div>
    </div>

    <!-- Modal Preview Gambar -->
    <template x-if="open">
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75">
            <div class="relative bg-white p-4 rounded-lg max-w-3xl mx-auto">
                <img :src="selectedImage" alt="Preview Gambar" class="max-w-full max-h-96 rounded-lg mb-4">
                <!-- Tombol Kembali -->
                <button @click="open = false" class="px-4 py-2 bg-green-500 text-white rounded-md shadow hover:bg-green-700 transition duration-300">Kembali</button>
            </div>
        </div>
    </template>
</div>

<!-- Section 6: Berita  -->
<div class="w-screen bg-gray-100 py-8">
    <!-- Container to Center the Content -->
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Heading -->
        <div class="bg-green-500 text-white py-3 px-4 rounded-t-lg w-full md:w-1/3 mx-auto">
            <h2 class="font-bold text-xl text-center">Berita</h2>
        </div>
        <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Kotak Berita 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden ml-4"> <!-- Menambahkan margin kiri -->
            <img src="/img/berita1.jpeg" alt="Berita 1" class="w-full h-40 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Nathabumi Edukasi Sekolah SAI Cibinong Pilah Sampah</h2>
                <p class="text-gray-700 mb-4">Kegiatan yang mengangkat tema Kelola Sampah Sekitar Kita (Kelas Kita) ini diadakan dengan melibatkan 
                    karyawan sebagai sukarelawan (volunteer).</p>
                <a href="https://www.kompas.com/tag/sekolah-alam-indonesia-sai-cibinong" class="text-green-500 hover:text-green-700 font-semibold">Lihat Selengkapnya</a>
            </div>
        </div>

        <!-- Kotak Berita 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden ml-4"> <!-- Menambahkan margin kiri -->
            <img src="/img/berita2.jpg" alt="Berita 1" class="w-full h-40 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Sekolah Tanpa Dinding</h2>
                <p class="text-gray-700 mb-4"> Sekolah Alam Cibinong yang berdiri sejak tahun 2014 sebagai salah satu cabang dari Sekolah Alam Indonesia di wilayah Bogor.
                Sekolah Alam Cibinong membebaskan anak-anak untuk bereksplorasi, bereksperimen, dan berekspresi tanpa dibatasi sekat-sekat dinding yang mengekang rasa ingin tahu mereka.</p>
                <a href="/detail-1" class="text-green-500 hover:text-green-700 font-semibold">Lihat Selengkapnya</a>
            </div>
        </div>

        <!-- Kotak Berita 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden ml-4"> <!-- Menambahkan margin kiri -->
            <img src="/img/berita3.jpg" alt="Berita 1" class="w-full h-40 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">"Mapag Panganten" Sambut Hari Pertama di Sekolah Alam Indonesia Cibinong</h2>
                <p class="text-gray-700 mb-4">"Mapag Panganten" bisa diartikan sebagai menyambut atau menjemput pengantin yang biasa dilakukan oleh masyarakat di sebagian besar wilayah Jawa Barat.</p>
                <a href="/detail-1" class="text-green-500 hover:text-green-700 font-semibold">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</div>


    <!-- Section 7: Kontak kami -->
    <div class="w-screen bg-gray-100 py-8">
        <!-- Container to Center the Content -->
        <div class="container mx-auto px-4 md:px-8">

                <!-- Lokasi / Google Maps -->
                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Lokasi kami</h3>
                    <div id="map" class="w-full h-64 rounded-lg overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d3964.4189335555434!2d106.8383871749925!3d-6.468496543523189!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-6.4683334!2d106.84115709999999!4m5!1s0x2e69c1e75e84e107%3A0x43efafdd2d28a357!2salamat%20maps%20sekolah%20alam%20indonesia%20cibinong!3m2!1d-6.4686597!2d106.8407671!5e0!3m2!1sen!2sid!4v1726195009109!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Icon Section -->
                <h3 class="text-lg font-semibold">Hubungi kami di:</h3>
                <div class="flex justify-start space-x-4 mt-6">
                    <a href="mailto:official.saicibinong@gmail.com" class="block">
                        <img src="/img/gmail-icon.png" alt="Gmail Icon" class="w-6 h-6">
                    </a>
                    <a href="https://wa.me/082124874347" class="block">
                        <img src="/img/wa-icon.png" alt="WhatsApp Icon" class="w-6 h-6">
                    </a>
                    <a href="https://instagram.com/sai_cibinong" class="block">
                        <img src="/img/ig-icon.png" alt="Instagram Icon" class="w-6 h-6">
                    </a>
                    <a href="https://www.tiktok.com/sai.cibinong" class="block">
                        <img src="/img/tiktok-icon.png" alt="Tiktok Icon" class="w-6 h-6">
                    </a>
                    <a href="http://www.youtube.com/@SekolahAlamIndonesiaCibinong" class="block">
                        <img src="/img/yt-icon.png" alt="Youtube Icon" class="w-6 h-6">
                    </a>
                </div>
            </div>
        </div>

        
<!-- Footer -->
<footer class="bg-blue-400 text-white py-4">
    <div class="container mx-auto px-4 md:px-8 text-center">
        <p class="text-sm">&copy; 2024 SAI Cibinong. All Rights Reserved.</p>
    </div>
</footer>
        
    @vite('resources/js/app.js')
</body>
</html>

