
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Sekolah Alam Cibinong</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/jpg" sizes="16x16" href="{{ asset('logoatas.jpeg') }}">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/alpinejs" defer></script>

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
                        <li><a href="profile" class="block px-4 py-2 hover:bg-green-700">Sejarah</a></li>
                        <li><a href="profile" class="block px-4 py-2 hover:bg-green-700">Visi Misi</a></li>
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
                </ul>
            </div>
        </div>
    </nav>
    
        <div class="w-screen bg-gray-100 py-8" x-data="{ open: false, selectedImage: '' }">
    <!-- Container to Center the Content -->
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Heading -->
        <div class="bg-green-500 text-white py-3 px-4 rounded-t-lg w-full md:w-1/3 mx-auto">
            <h2 class="font-bold text-xl text-center">Galeri SAI Cibinong</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-4">
            <!-- Gambar 1 -->
            <div @click="open = true; selectedImage = '{{ asset('img/g1.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/g1.jpg') }}" alt="Image 1" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 2 -->
            <div @click="open = true; selectedImage = '{{ asset('img/g2.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/g2.jpg') }}" alt="Image 1" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 3 -->
            <div @click="open = true; selectedImage = '{{ asset('img/g3.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/g3.jpg') }}" alt="Image 1" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 4 -->
            <div @click="open = true; selectedImage = '{{ asset('img/g4.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/g4.jpg') }}" alt="Image 1" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 5 -->
            <div @click="open = true; selectedImage = '{{ asset('img/g5.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/g5.jpg') }}" alt="Image 1" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 6 -->
            <div @click="open = true; selectedImage = '{{ asset('img/g6.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/g6.jpg') }}" alt="Image 1" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 7 -->
            <div @click="open = true; selectedImage = '{{ asset('img/g7.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/g7.jpg') }}" alt="Image 1" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 8 -->
            <div @click="open = true; selectedImage = '{{ asset('img/g8.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/g8.jpg') }}" alt="Image 1" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 9 -->
            <div @click="open = true; selectedImage = '{{ asset('img/kg1.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/kg1.jpg') }}" alt="Image 9" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 10 -->
            <div @click="open = true; selectedImage = '{{ asset('img/kg2.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/kg2.jpg') }}" alt="Image 10" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 11 -->
            <div @click="open = true; selectedImage = '{{ asset('img/kg3.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/kg3.jpg') }}" alt="Image 11" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>
            <!-- Gambar 12 -->
            <div @click="open = true; selectedImage = '{{ asset('img/kg4.jpg') }}'" class="cursor-pointer">
                <figure class="cursor-pointer">
                    <img src="{{ asset('img/kg4.jpg') }}" alt="Image 12" class="w-full h-64 object-cover rounded-lg shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300 ease-in-out">
                </figure>
            </div>

        </div>
    </div>

    <!-- Modal for image preview -->
    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50" @click.away="open = false" x-cloak>
        <div class="relative max-w-3xl w-full mx-auto">
            <!-- Close button -->
            <button @click="open = false" class="absolute top-0 right-0 m-4 text-white bg-red-500 hover:bg-red-600 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <!-- Selected Image -->
            <img :src="selectedImage" alt="Preview Image" class="rounded-lg max-h-screen mx-auto">
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-blue-400 text-white py-4">
    <div class="container mx-auto px-4 md:px-8 text-center">
        <p class="text-sm">&copy; 2024 Your Company. All Rights Reserved.</p>
    </div>
</footer>

    @vite('resources/js/app.js')
</body>
</html>