<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWallet - Solusi Manajemen Keuangan Modern</title>
    <link rel="icon" type="image/png" href="{{ asset('images/wallet.png') }}">
    @vite('resources/css/app.css')
    <!-- Tambahkan Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-50 font-['Inter'] text-gray-800">

    <!-- Navbar dengan warna lebih gelap -->
    <header class="fixed w-full z-50 bg-slate-900/95 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/wallet.png') }}" alt="MyWallet Icon" class="w-8 h-8">
                        <div class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-indigo-500 text-transparent bg-clip-text">MyWallet</div>
                    </div>
                </div>
                <nav class="hidden md:flex space-x-8 text-slate-300">
                    <a href="#home" class="hover:text-blue-400 transition-colors">Beranda</a>
                    <a href="#features" class="hover:text-blue-400 transition-colors">Fitur</a>
                    <a href="#about" class="hover:text-blue-400 transition-colors">Tentang Kami</a>
                    <a href="#contact" class="hover:text-blue-400 transition-colors">Kontak</a>
                </nav>
                <div class="flex space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-6 py-2 text-slate-300 hover:text-blue-400 transition-colors">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="px-6 py-2 text-slate-300 hover:text-blue-400 transition-colors">Masuk</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-6 py-2 bg-blue-700 text-white rounded-full hover:bg-blue-800 transition-colors">Daftar</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section dengan warna lebih soft -->
    <section id="home" class="pt-32 pb-20 bg-gradient-to-b from-slate-900 to-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-left">
                    <h1 class="text-5xl font-bold leading-tight mb-6 text-white">
                        <span class="bg-gradient-to-r from-blue-400 to-indigo-500 text-transparent bg-clip-text">Transformasi</span> Keuangan Digital Anda
                    </h1>
                    <p class="text-xl text-slate-300 mb-8">Platform manajemen keuangan yang menggabungkan teknologi modern dengan kemudahan penggunaan untuk kesuksesan finansial Anda.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="px-8 py-3 bg-blue-700 text-white rounded-full hover:bg-blue-800 transition-colors">Mulai Gratis</a>
                        <a href="#" class="px-8 py-3 border border-slate-600 text-slate-300 rounded-full hover:border-blue-400 hover:text-blue-400 transition-colors">Pelajari Lebih Lanjut</a>
                    </div>
                    <div class="mt-8 flex items-center space-x-4">
                        <div class="flex -space-x-2">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-10 h-10 rounded-full border-2 border-slate-800">
                            <img src="https://randomuser.me/api/portraits/women/2.jpg" class="w-10 h-10 rounded-full border-2 border-slate-800">
                            <img src="https://randomuser.me/api/portraits/men/3.jpg" class="w-10 h-10 rounded-full border-2 border-slate-800">
                        </div>
                        <p class="text-slate-300">
                            <span class="font-semibold">1000+</span> pengguna aktif
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg blur opacity-20"></div>
                    <img src="{{ asset('images/bg.jpg') }}" alt="MyWallet Preview" class="relative rounded-lg shadow-2xl border border-slate-700 w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section Lengkap -->
    <section id="features" class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 text-white">Fitur Unggulan</h2>
                <p class="text-slate-300 max-w-2xl mx-auto">Nikmati berbagai fitur canggih yang dirancang untuk memudahkan pengelolaan keuangan Anda</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group p-8 bg-slate-800 rounded-2xl hover:bg-slate-700 transition-all duration-300 border border-slate-700">
                    <div class="w-14 h-14 bg-blue-900/50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-800 transition-colors">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Analisis Real-Time</h3>
                    <p class="text-slate-300">Pantau dan analisis keuangan Anda secara real-time dengan visualisasi data yang informatif dan mudah dipahami.</p>
                </div>

                <!-- Feature 2 -->
                <div class="group p-8 bg-slate-800 rounded-2xl hover:bg-slate-700 transition-all duration-300 border border-slate-700">
                    <div class="w-14 h-14 bg-blue-900/50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-800 transition-colors">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Manajemen Anggaran</h3>
                    <p class="text-slate-300">Atur dan kelola anggaran Anda dengan mudah. Tetapkan target dan pantau pengeluaran secara efektif.</p>
                </div>

                <!-- Feature 3 -->
                <div class="group p-8 bg-slate-800 rounded-2xl hover:bg-slate-700 transition-all duration-300 border border-slate-700">
                    <div class="w-14 h-14 bg-blue-900/50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-800 transition-colors">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-white">Laporan Otomatis</h3>
                    <p class="text-slate-300">Dapatkan laporan keuangan otomatis yang detail dan dapat disesuaikan dengan kebutuhan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 text-white">Pilihan Paket</h2>
                <p class="text-slate-300 max-w-2xl mx-auto">Pilih paket yang sesuai dengan kebutuhan finansial Anda</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="bg-slate-900 rounded-2xl p-8 border border-slate-700">
                    <h3 class="text-xl font-semibold text-white mb-4">Basic</h3>
                    <div class="text-4xl font-bold text-white mb-6">
                        Gratis
                        <span class="text-lg text-slate-400 font-normal">/bulan</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-slate-300">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Analisis dasar
                        </li>
                        <li class="flex items-center text-slate-300">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            1 akun pengguna
                        </li>
                        <li class="flex items-center text-slate-300">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Laporan bulanan
                        </li>
                    </ul>
                    <a href="#" class="block text-center py-3 px-6 rounded-full bg-blue-700 text-white hover:bg-blue-800 transition-colors">Mulai Sekarang</a>
                </div>

                <!-- Pro Plan -->
                <div class="bg-slate-900 rounded-2xl p-8 border border-blue-500 transform scale-105">
                    <div class="absolute top-0 right-0 bg-blue-500 text-white px-3 py-1 rounded-tr-2xl rounded-bl-2xl text-sm">Popular</div>
                    <h3 class="text-xl font-semibold text-white mb-4">Pro</h3>
                    <div class="text-4xl font-bold text-white mb-6">
                        Rp 99K
                        <span class="text-lg text-slate-400 font-normal">/bulan</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-slate-300">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Semua fitur Basic
                        </li>
                        <li class="flex items-center text-slate-300">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            5 akun pengguna
                        </li>
                        <li class="flex items-center text-slate-300">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Analisis lanjutan
                        </li>
                    </ul>
                    <a href="#" class="block text-center py-3 px-6 rounded-full bg-blue-500 text-white hover:bg-blue-600 transition-colors">Pilih Pro</a>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-slate-900 rounded-2xl p-8 border border-slate-700">
                    <h3 class="text-xl font-semibold text-white mb-4">Enterprise</h3>
                    <div class="text-4xl font-bold text-white mb-6">
                        Custom
                        <span class="text-lg text-slate-400 font-normal">/tahun</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-slate-300">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Semua fitur Pro
                        </li>
                        <li class="flex items-center text-slate-300">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Akun tidak terbatas
                        </li>
                        <li class="flex items-center text-slate-300">
                            <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            API akses
                        </li>
                    </ul>
                    <a href="#" class="block text-center py-3 px-6 rounded-full bg-slate-700 text-white hover:bg-slate-600 transition-colors">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonials" class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 text-white">Apa Kata Mereka</h2>
                <p class="text-slate-300 max-w-2xl mx-auto">Dengarkan pengalaman dari pengguna FinCrest</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="text-white font-semibold">Budi Santoso</h4>
                            <p class="text-slate-400">Pengusaha UMKM</p>
                        </div>
                    </div>
                    <p class="text-slate-300">"FinCrest membantu saya melacak arus kas bisnis dengan lebih efisien. Sangat memudahkan dalam membuat keputusan finansial."</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="text-white font-semibold">Siti Rahma</h4>
                            <p class="text-slate-400">Freelancer</p>
                        </div>
                    </div>
                    <p class="text-slate-300">"Platform yang sangat intuitif dan mudah digunakan. Saya bisa mengatur keuangan pribadi dan bisnis dalam satu tempat."</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-slate-800 p-8 rounded-2xl border border-slate-700">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="text-white font-semibold">Andi Wijaya</h4>
                            <p class="text-slate-400">CEO Startup</p>
                        </div>
                    </div>
                    <p class="text-slate-300">"Fitur analisis dan laporan otomatis sangat membantu tim kami dalam mengambil keputusan strategis."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold mb-4 text-white">Hubungi Kami</h2>
                    <p class="text-slate-300 mb-8">Ada pertanyaan? Tim kami siap membantu Anda</p>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-blue-400 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span class="text-slate-300">+62 821-2345-6789</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-blue-400 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-slate-300">support@fincrest.id</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-blue-400 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-slate-300">Jakarta, Indonesia</span>
                        </div>
                    </div>
                </div>
                <div>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-slate-300 mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg bg-slate-900 border border-slate-700 text-white focus:outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-slate-300 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg bg-slate-900 border border-slate-700 text-white focus:outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-slate-300 mb-2">Pesan</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-lg bg-slate-900 border border-slate-700 text-white focus:outline-none focus:border-blue-500"></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 px-6 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto text-center px-6">
            <h2 class="text-4xl font-semibold text-gray-800 mb-6">Tentang Kami</h2>
            <p class="text-lg text-gray-600 mb-8">FinCrest adalah platform yang membantu individu dan bisnis merencanakan, mengelola, dan mengoptimalkan keuangan mereka secara efisien dan elegan.</p>
            <a href="#contact" class="bg-gold-600 hover:bg-gold-700 py-3 px-8 text-white text-xl rounded-lg transition">Hubungi Kami</a>
        </div>
    </section>

    <!-- Footer dengan warna lebih gelap -->
    <footer class="bg-slate-950 text-white py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <img src="{{ asset('images/wallet.png') }}" alt="MyWallet Icon" class="w-8 h-8">
                        <div class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-indigo-500 text-transparent bg-clip-text">MyWallet</div>
                    </div>
                    <p class="text-slate-400">Solusi manajemen keuangan modern untuk masa depan yang lebih baik.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Produk</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Fitur</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Harga</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Tutorial</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Karir</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-slate-400 hover:text-blue-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-blue-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-blue-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-12 pt-8 text-center text-slate-400">
                <p>&copy; 2025 MyWallet. Semua Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

</body>
</html>
