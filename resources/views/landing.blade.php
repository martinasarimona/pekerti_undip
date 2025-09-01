<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan PEKERTI - Universitas Diponegoro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
@verbatim





        body {
            font-family: 'Inter', sans-serif;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #3b82f6 100%);
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
            50% { box-shadow: 0 0 40px rgba(59, 130, 246, 0.6); }
        }
        
        .slide-in-up {
            animation: slideInUp 1s ease-out;
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in {
            animation: fadeIn 1.5s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .undip-logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 32px rgba(59, 130, 246, 0.3);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .progress-bar {
            transition: width 0.3s ease;
        }

        .modal {
            backdrop-filter: blur(10px);
        }
    

@endverbatim
</style>
</head>
<body class="min-h-screen hero-gradient">
    <!-- Notification System -->
    <div id="notification" class="fixed top-4 right-4 z-50 hidden">
        <div class="bg-white border-l-4 border-green-500 rounded-lg shadow-lg p-4 max-w-sm">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-500"></i>
                </div>
                <div class="ml-3">
                    <p id="notification-text" class="text-sm text-gray-700"></p>
                </div>
                <button onclick="hideNotification()" class="ml-auto text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center">
        <div class="bg-white/10 backdrop-blur-lg rounded-xl p-8 text-center">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-white mx-auto mb-4"></div>
            <p class="text-white">Memproses...</p>
        </div>
    </div>

    <!-- Landing Page -->
    <div id="landingPage">
        <!-- Header -->
        <header class="relative z-10 bg-navy-950/80 backdrop-blur-lg border-b border-navy-800/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between py-4">
                    <!-- Logo UNDIP -->
                    <div class="flex items-center space-x-4 fade-in">
                        <div class="undip-logo">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                                <path d="M12 7v10l-7-3.5V9l7-2z" fill="rgba(255,255,255,0.3)"/>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-white">UNDIP</h1>
                            <p class="text-xs text-blue-200">Universitas Diponegoro</p>
                        </div>
                    </div>
                    
                    <!-- Navigation -->
                    <nav class="hidden md:flex items-center space-x-6 fade-in">
                        <a href="#tentang" class="text-blue-200 hover:text-white transition-colors duration-300 text-sm font-medium">Tentang</a>
                        <a href="#program" class="text-blue-200 hover:text-white transition-colors duration-300 text-sm font-medium">Program</a>
                        <a href="#kontak" class="text-blue-200 hover:text-white transition-colors duration-300 text-sm font-medium">Kontak</a>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <main class="relative min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8">
            <!-- Background Decorations -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl floating-animation"></div>
                <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl floating-animation" style="animation-delay: -3s;"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-128 h-128 bg-navy-600/5 rounded-full blur-3xl"></div>
            </div>

            <div class="relative z-10 text-center max-w-5xl mx-auto">
                <!-- Main Title -->
                <div class="slide-in-up">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-6 leading-tight">
                        Pelatihan
                        <span class="block bg-gradient-to-r from-blue-400 via-blue-300 to-cyan-300 bg-clip-text text-transparent">
                            PEKERTI
                        </span>
                    </h1>
                </div>
                
                <!-- Subtitle -->
                <div class="slide-in-up" style="animation-delay: 0.3s;">
                    <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 font-light mb-4 leading-relaxed">
                        Peningkatan Keterampilan Dasar Teknik Instruksional
                    </p>
                    <p class="text-lg md:text-xl text-blue-200 font-medium mb-12">
                        Direktorat Sumber Daya Manusia – Universitas Diponegoro
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="slide-in-up space-y-6" style="animation-delay: 0.6s;">
                    <!-- Primary CTA -->
                    <div class="mb-8">
                        <button onclick="showCreateAccount()" class="group relative inline-flex items-center justify-center px-12 py-6 text-xl font-bold text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl shadow-2xl hover:from-blue-600 hover:to-blue-700 transform hover:scale-105 transition-all duration-300 pulse-glow">
                            <i class="fas fa-user-plus mr-4 text-2xl"></i>
                            <span>Daftar Sekarang</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-500 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                        </button>
                    </div>

                    <!-- Secondary Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                        <button onclick="showLoginPeserta()" class="glass-effect px-8 py-4 text-white font-semibold rounded-xl hover:bg-white/20 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <i class="fas fa-sign-in-alt mr-3"></i>
                            Login Peserta
                        </button>
                        
                        <button onclick="showLoginAdmin()" class="glass-effect px-8 py-4 text-white font-semibold rounded-xl hover:bg-white/20 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <i class="fas fa-user-shield mr-3"></i>
                            Login Admin
                        </button>
                    </div>
                </div>

                <!-- Features Preview -->
                <div class="slide-in-up mt-20 grid grid-cols-1 md:grid-cols-3 gap-8" style="animation-delay: 0.9s;">
                    <div class="glass-effect p-6 rounded-xl text-center hover:bg-white/20 transition-all duration-300">
                        <div class="bg-blue-500/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-graduation-cap text-2xl text-blue-300"></i>
                        </div>
                        <h3 class="text-white font-semibold mb-2">21 Modul Pembelajaran</h3>
                        <p class="text-blue-200 text-sm">Materi komprehensif untuk pengembangan kompetensi dosen</p>
                    </div>
                    
                    <div class="glass-effect p-6 rounded-xl text-center hover:bg-white/20 transition-all duration-300">
                        <div class="bg-green-500/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-certificate text-2xl text-green-300"></i>
                        </div>
                        <h3 class="text-white font-semibold mb-2">Sertifikat Resmi</h3>
                        <p class="text-blue-200 text-sm">Sertifikat yang diakui untuk pengembangan karir dosen</p>
                    </div>
                    
                    <div class="glass-effect p-6 rounded-xl text-center hover:bg-white/20 transition-all duration-300">
                        <div class="bg-purple-500/20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-2xl text-purple-300"></i>
                        </div>
                        <h3 class="text-white font-semibold mb-2">Pembelajaran Interaktif</h3>
                        <p class="text-blue-200 text-sm">Metode pembelajaran modern dengan pendekatan praktis</p>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="relative z-10 bg-navy-950/90 backdrop-blur-lg border-t border-navy-800/50 py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="flex items-center space-x-4 mb-4 md:mb-0">
                        <div class="undip-logo">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-200 text-sm font-medium">Direktorat Sumber Daya Manusia</p>
                            <p class="text-blue-300 text-xs">Universitas Diponegoro</p>
                        </div>
                    </div>
                    
                    <div class="text-center md:text-right">
                        <p class="text-blue-300 text-sm">
                            © 2025 Direktorat SDM Universitas Diponegoro
                        </p>
                        <p class="text-blue-400 text-xs mt-1">
                            Jl. Prof. Soedarto, SH, Tembalang, Semarang 50275
                        </p>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="mt-6 pt-6 border-t border-navy-800/50 flex justify-center space-x-6">
                    <a href="#" class="text-blue-300 hover:text-white transition-colors duration-300">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="#" class="text-blue-300 hover:text-white transition-colors duration-300">
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                    <a href="#" class="text-blue-300 hover:text-white transition-colors duration-300">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                    <a href="#" class="text-blue-300 hover:text-white transition-colors duration-300">
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                    <a href="#" class="text-blue-300 hover:text-white transition-colors duration-300">
                        <i class="fas fa-globe text-lg"></i>
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <!-- Create Account Page -->
    <div id="createAccount" class="hidden min-h-screen flex items-center justify-center p-4">
        <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl p-8 w-full max-w-md border border-white/20">
            <div class="flex items-center mb-6">
                <button onclick="showLandingPage()" class="text-white hover:text-blue-200 mr-4">
                    <i class="fas fa-arrow-left text-xl"></i>
                </button>
                <h2 class="text-2xl font-bold text-white">Create Account Peserta</h2>
            </div>
            
            <form id="createAccountForm" class="space-y-4">
                <div>
                    <label class="block text-blue-200 text-sm font-medium mb-2">NIK (16 digit)</label>
                    <input type="text" id="nik" maxlength="16" pattern="[0-9]{16}" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Masukkan NIK 16 digit" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                    <p class="text-blue-300 text-xs mt-1">Masukkan 16 digit angka NIK Anda</p>
                </div>
                
                <div>
                    <label class="block text-blue-200 text-sm font-medium mb-2">Username (unik)</label>
                    <input type="text" id="username" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Masukkan username unik" required>
                    <p class="text-blue-300 text-xs mt-1">Username harus unik dan belum digunakan</p>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-key mr-2"></i>
                    Generate Password & Continue
                </button>
            </form>
        </div>
    </div>

    <!-- Registration Form -->
    <div id="registrationForm" class="hidden min-h-screen p-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl border border-white/20">
                <div class="p-6 border-b border-white/20">
                    <div class="flex items-center justify-between">
                        <h2 class="text-2xl font-bold text-white">Form Pendaftaran Peserta</h2>
                        <button onclick="showLandingPage()" class="text-white hover:text-blue-200">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                </div>
                
                <div class="p-6">
                    <!-- Account Information Panel -->
                    <div class="mb-6 bg-blue-500/20 border border-blue-400/30 rounded-lg p-4">
                        <h3 class="text-blue-200 font-medium mb-3">
                            <i class="fas fa-info-circle mr-2"></i>
                            Informasi Akun Anda
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-blue-300 text-sm mb-1">Username</label>
                                <div class="bg-blue-600/20 px-3 py-2 rounded border border-blue-400/30">
                                    <span class="text-white font-mono" id="displayUsername">-</span>
                                </div>
                            </div>
                            <div>
                                <label class="block text-blue-300 text-sm mb-1">Password</label>
                                <div class="bg-blue-600/20 px-3 py-2 rounded border border-blue-400/30">
                                    <span class="text-white font-mono" id="displayPassword">-</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-blue-300 text-xs mt-2">
                            <i class="fas fa-exclamation-triangle mr-1"></i>
                            Harap catat username dan password Anda untuk login selanjutnya
                        </p>
                    </div>
                    
                    <form id="registrationFormData" class="space-y-4">
                        <!-- NIK & Username (Readonly) -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">NIK</label>
                                <input type="text" id="regNik" readonly class="w-full px-4 py-3 bg-gray-600/50 border border-white/30 rounded-lg text-gray-300 cursor-not-allowed">
                            </div>
                            
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Username</label>
                                <input type="text" id="regUsername" readonly class="w-full px-4 py-3 bg-gray-600/50 border border-white/30 rounded-lg text-gray-300 cursor-not-allowed">
                            </div>
                        </div>
                        
                        <!-- NIP -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">NIP</label>
                            <input type="text" id="nip" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Masukkan NIP" required>
                        </div>
                        
                        <!-- Nama Lengkap + Gelar -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">Nama Lengkap + Gelar</label>
                            <input type="text" id="fullName" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Dr. John Doe, M.Sc" required>
                        </div>
                        
                        <!-- Email & WhatsApp -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="email@undip.ac.id" required>
                            </div>
                            
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">WhatsApp</label>
                                <input type="tel" id="whatsapp" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="08123456789" required>
                            </div>
                        </div>
                        
                        <!-- Instansi -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">Instansi</label>
                            <input type="text" id="instansi" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Universitas Diponegoro" required>
                        </div>
                        
                        <!-- Fakultas & Jurusan -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Fakultas</label>
                                <input type="text" id="fakultas" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Fakultas Teknik" required>
                            </div>
                            
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Jurusan</label>
                                <input type="text" id="jurusan" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Teknik Informatika" required>
                            </div>
                        </div>
                        
                        <!-- Jabatan & Batch -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Jabatan</label>
                                <select id="jabatan" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                                    <option value="" class="bg-gray-800">Pilih Jabatan</option>
                                    <option value="Pengajar" class="bg-gray-800">Pengajar</option>
                                    <option value="Asisten Ahli" class="bg-gray-800">Asisten Ahli</option>
                                    <option value="Lektor" class="bg-gray-800">Lektor</option>
                                    <option value="Lektor Kepala" class="bg-gray-800">Lektor Kepala</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Batch</label>
                                <select id="batch" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                                    <option value="" class="bg-gray-800">Pilih Batch</option>
                                    <option value="Batch 1 - Januari 2025" class="bg-gray-800">Batch 1 - Januari 2025</option>
                                    <option value="Batch 2 - Maret 2025" class="bg-gray-800">Batch 2 - Maret 2025</option>
                                    <option value="Batch 3 - Mei 2025" class="bg-gray-800">Batch 3 - Mei 2025</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold py-4 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <i class="fas fa-save mr-2"></i>
                                Simpan & Masuk Dashboard Peserta
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Peserta -->
    <div id="loginPeserta" class="hidden min-h-screen flex items-center justify-center p-4">
        <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl p-8 w-full max-w-md border border-white/20">
            <div class="flex items-center mb-6">
                <button onclick="showLandingPage()" class="text-white hover:text-blue-200 mr-4">
                    <i class="fas fa-arrow-left text-xl"></i>
                </button>
                <h2 class="text-2xl font-bold text-white">Login Peserta</h2>
            </div>
            
            <form id="loginPesertaForm" class="space-y-4">
                <div>
                    <label class="block text-blue-200 text-sm font-medium mb-2">Username</label>
                    <input type="text" id="loginPesertaUsername" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Masukkan username" required>
                </div>
                
                <div>
                    <label class="block text-blue-200 text-sm font-medium mb-2">Password</label>
                    <div class="relative">
                        <input type="password" id="loginPesertaPassword" class="w-full px-4 py-3 pr-12 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Masukkan password" required>
                        <button type="button" onclick="togglePassword('loginPesertaPassword')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-blue-200 hover:text-white">
                            <i class="fas fa-eye" id="loginPesertaPassword-icon"></i>
                        </button>
                    </div>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Login
                </button>
            </form>
        </div>
    </div>

    <!-- Login Admin -->
    <div id="loginAdmin" class="hidden min-h-screen flex items-center justify-center p-4">
        <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl p-8 w-full max-w-md border border-white/20">
            <div class="flex items-center mb-6">
                <button onclick="showLandingPage()" class="text-white hover:text-blue-200 mr-4">
                    <i class="fas fa-arrow-left text-xl"></i>
                </button>
                <h2 class="text-2xl font-bold text-white">Login Admin</h2>
            </div>
            
            <form id="loginAdminForm" class="space-y-4">
                <div>
                    <label class="block text-blue-200 text-sm font-medium mb-2">Username</label>
                    <input type="text" id="loginAdminUsername" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="admin" required>
                </div>
                
                <div>
                    <label class="block text-blue-200 text-sm font-medium mb-2">Password</label>
                    <div class="relative">
                        <input type="password" id="loginAdminPassword" class="w-full px-4 py-3 pr-12 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Adm!nUndip2025" required>
                        <button type="button" onclick="togglePassword('loginAdminPassword')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-blue-200 hover:text-white">
                            <i class="fas fa-eye" id="loginAdminPassword-icon"></i>
                        </button>
                    </div>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-user-shield mr-2"></i>
                    Login Admin
                </button>
            </form>
        </div>
    </div>

    <!-- Upload Documents Page -->
    <div id="uploadDocuments" class="hidden min-h-screen">
        <div class="bg-white/10 backdrop-blur-lg border-b border-white/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <h1 class="text-xl font-bold text-white">Upload Dokumen Wajib</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-blue-200" id="uploadWelcomeUser">Selamat datang!</span>
                        <button onclick="logout()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Account Information -->
            <div class="mb-6 bg-blue-500/20 border border-blue-400/30 rounded-lg p-6">
                <h3 class="text-blue-200 font-medium mb-4">
                    <i class="fas fa-info-circle mr-2"></i>
                    Informasi Pembayaran Anda
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-blue-300 text-sm mb-1">Virtual Account</label>
                        <div class="bg-blue-600/20 px-3 py-2 rounded border border-blue-400/30">
                            <span class="text-white font-mono" id="uploadVANumber">-</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-blue-300 text-sm mb-1">Bank</label>
                        <div class="bg-blue-600/20 px-3 py-2 rounded border border-blue-400/30">
                            <span class="text-white font-mono" id="uploadVABank">-</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-blue-300 text-sm mb-1">Nominal</label>
                        <div class="bg-blue-600/20 px-3 py-2 rounded border border-blue-400/30">
                            <span class="text-white font-mono">Rp 2.500.000</span>
                        </div>
                    </div>
                </div>
                <p class="text-blue-300 text-sm mt-3">
                    <i class="fas fa-exclamation-triangle mr-1"></i>
                    Silakan transfer ke nomor Virtual Account di atas, kemudian upload bukti transfer dan foto resmi Anda
                </p>
            </div>
            
            <!-- Upload Section -->
            <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20">
                <h3 class="text-white font-medium mb-6">
                    <i class="fas fa-upload mr-2 text-purple-400"></i>
                    Upload Dokumen Wajib
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Transfer Proof Upload -->
                    <div>
                        <label class="block text-blue-200 text-sm font-medium mb-2">Bukti Transfer VA</label>
                        <div class="border-2 border-dashed border-blue-400/30 rounded-lg p-4 text-center hover:border-blue-400/50 transition-colors duration-200">
                            <input type="file" id="uploadTransferProof" accept="image/jpeg,image/jpg,image/png,.pdf" class="hidden" onchange="handleUploadFileUpload('uploadTransferProof')">
                            <div onclick="document.getElementById('uploadTransferProof').click()" class="cursor-pointer">
                                <i class="fas fa-cloud-upload-alt text-3xl text-blue-400 mb-2"></i>
                                <p class="text-blue-200 text-sm">Klik untuk upload bukti transfer</p>
                                <p class="text-blue-300 text-xs mt-1">Format: JPG, PNG, PDF (Max 5MB)</p>
                            </div>
                            <div id="uploadTransferProofStatus" class="mt-2 hidden">
                                <span class="text-green-400 text-sm">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    <span id="uploadTransferFileName">File berhasil diupload</span>
                                </span>
                                <div class="mt-2">
                                    <button onclick="downloadFile('transferProof')" class="text-blue-400 hover:text-blue-300 text-xs">
                                        <i class="fas fa-download mr-1"></i>
                                        Download Ulang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Official Photo Upload -->
                    <div>
                        <label class="block text-blue-200 text-sm font-medium mb-2">Foto Resmi Berwarna</label>
                        <div class="border-2 border-dashed border-blue-400/30 rounded-lg p-4 text-center hover:border-blue-400/50 transition-colors duration-200">
                            <input type="file" id="uploadOfficialPhoto" accept="image/*" class="hidden" onchange="handleUploadFileUpload('uploadOfficialPhoto')">
                            <div onclick="document.getElementById('uploadOfficialPhoto').click()" class="cursor-pointer">
                                <i class="fas fa-camera text-3xl text-blue-400 mb-2"></i>
                                <p class="text-blue-200 text-sm">Klik untuk upload foto resmi</p>
                                <p class="text-blue-300 text-xs mt-1">Format: JPG, PNG (Max 2MB)</p>
                                <p class="text-red-300 text-xs mt-1">Background merah, foto sedada untuk sertifikat</p>
                            </div>
                            <div id="uploadOfficialPhotoStatus" class="mt-2 hidden">
                                <span class="text-green-400 text-sm">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    <span id="uploadPhotoFileName">File berhasil diupload</span>
                                </span>
                                <div class="mt-2">
                                    <button onclick="downloadFile('officialPhoto')" class="text-blue-400 hover:text-blue-300 text-xs">
                                        <i class="fas fa-download mr-1"></i>
                                        Download Ulang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="mt-8 flex justify-between">
                    <button onclick="skipUpload()" class="bg-gray-600 hover:bg-gray-700 text-white px-6 py-3 rounded-lg transition-colors duration-200">
                        <i class="fas fa-forward mr-2"></i>
                        Lewati Sementara
                    </button>
                    <button id="continueBtn" onclick="continueToProfile()" class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg transition-colors duration-200" disabled>
                        <i class="fas fa-arrow-right mr-2"></i>
                        Lanjut ke Dashboard
                    </button>
                </div>
                
                <!-- Instructions -->
                <div class="mt-6 bg-navy-800/50 rounded-lg p-4">
                    <h4 class="text-white font-medium mb-3">
                        <i class="fas fa-info-circle mr-2 text-blue-400"></i>
                        Petunjuk Upload
                    </h4>
                    <ul class="text-blue-200 text-sm space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                            Bukti transfer harus jelas dan menunjukkan nominal Rp 2.500.000
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                            Foto resmi dengan background merah untuk keperluan sertifikat
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                            Pastikan file tidak corrupt dan dapat dibuka dengan baik
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                            Anda dapat mengupload ulang file jika diperlukan
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Peserta -->
    <div id="dashboardPeserta" class="hidden min-h-screen">
        <!-- Header -->
        <div class="bg-white/10 backdrop-blur-lg border-b border-white/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <i class="fas fa-graduation-cap text-2xl text-white mr-3"></i>
                        <h1 class="text-xl font-bold text-white">Dashboard Peserta</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-blue-200" id="welcomeUser">Selamat datang!</span>
                        <button onclick="logout()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Progress Overview -->
            <div class="mb-8">
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20">
                    <h3 class="text-xl font-bold text-white mb-4">Progress Pembelajaran</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-400" id="materiProgress">0/21</div>
                            <div class="text-sm text-blue-200">Materi Selesai</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-400" id="tugasProgress">0/5</div>
                            <div class="text-sm text-green-200">Tugas Selesai</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-purple-400" id="testProgress">0/2</div>
                            <div class="text-sm text-purple-200">Test Selesai</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-yellow-400" id="overallProgress">0%</div>
                            <div class="text-sm text-yellow-200">Progress Total</div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="bg-gray-700 rounded-full h-2">
                            <div id="progressBar" class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full progress-bar" style="width: 0%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Status Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Registration Status -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20">
                    <h3 class="text-white font-medium mb-4">
                        <i class="fas fa-user-check mr-2 text-blue-400"></i>
                        Status Pendaftaran
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-blue-200">Verifikasi Admin</span>
                            <span id="verificationStatus" class="px-2 py-1 rounded-full text-xs bg-yellow-500/20 text-yellow-200">Menunggu</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-200">Kelengkapan Data</span>
                            <span class="px-2 py-1 rounded-full text-xs bg-green-500/20 text-green-200">Lengkap</span>
                        </div>
                    </div>
                </div>
                
                <!-- Payment Status -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20">
                    <h3 class="text-white font-medium mb-4">
                        <i class="fas fa-credit-card mr-2 text-green-400"></i>
                        Status Pembayaran
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-blue-200">Virtual Account</span>
                            <span id="vaNumber" class="text-white font-mono text-sm">-</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-200">Status Bayar</span>
                            <span id="paymentStatusBadge" class="px-2 py-1 rounded-full text-xs bg-yellow-500/20 text-yellow-200">Menunggu</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-200">Nominal</span>
                            <span class="text-white">Rp 2.500.000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Upload Section -->
            <div class="mb-8 bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20">
                <h3 class="text-white font-medium mb-4">
                    <i class="fas fa-upload mr-2 text-purple-400"></i>
                    Upload Dokumen
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-blue-200 text-sm font-medium mb-2">Bukti Transfer VA</label>
                        <div class="border-2 border-dashed border-blue-400/30 rounded-lg p-4 text-center hover:border-blue-400/50 transition-colors duration-200">
                            <input type="file" id="transferProof" accept="image/jpeg,image/jpg,image/png,.pdf" class="hidden" onchange="handleFileUpload('transferProof')">
                            <div onclick="document.getElementById('transferProof').click()" class="cursor-pointer">
                                <i class="fas fa-cloud-upload-alt text-3xl text-blue-400 mb-2"></i>
                                <p class="text-blue-200 text-sm">Klik untuk upload bukti transfer</p>
                                <p class="text-blue-300 text-xs mt-1">Format: JPG, PNG, PDF (Max 5MB)</p>
                            </div>
                            <div id="transferProofStatus" class="mt-2 hidden">
                                <span class="text-green-400 text-sm">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    <span id="transferProofFileName">File berhasil diupload</span>
                                </span>
                                <div class="mt-2">
                                    <button onclick="downloadDashboardFile('transferProof')" class="text-blue-400 hover:text-blue-300 text-xs">
                                        <i class="fas fa-download mr-1"></i>
                                        Download Ulang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-blue-200 text-sm font-medium mb-2">Foto Resmi Berwarna</label>
                        <div class="border-2 border-dashed border-blue-400/30 rounded-lg p-4 text-center hover:border-blue-400/50 transition-colors duration-200">
                            <input type="file" id="officialPhoto" accept="image/*" class="hidden" onchange="handleFileUpload('officialPhoto')">
                            <div onclick="document.getElementById('officialPhoto').click()" class="cursor-pointer">
                                <i class="fas fa-camera text-3xl text-blue-400 mb-2"></i>
                                <p class="text-blue-200 text-sm">Klik untuk upload foto resmi</p>
                                <p class="text-blue-300 text-xs mt-1">Format: JPG, PNG (Max 2MB)</p>
                            </div>
                            <div id="officialPhotoStatus" class="mt-2 hidden">
                                <span class="text-green-400 text-sm">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    <span id="officialPhotoFileName">File berhasil diupload</span>
                                </span>
                                <div class="mt-2">
                                    <button onclick="downloadDashboardFile('officialPhoto')" class="text-blue-400 hover:text-blue-300 text-xs">
                                        <i class="fas fa-download mr-1"></i>
                                        Download Ulang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Cards -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 text-center cursor-pointer hover:bg-white/20 transition-colors duration-200" onclick="showPesertaSection('profil')">
                    <div class="text-cyan-400 mb-4">
                        <i class="fas fa-user text-3xl"></i>
                    </div>
                    <h3 class="text-white font-medium">Profil</h3>
                    <p class="text-cyan-200 text-sm mt-2">Edit profil</p>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 text-center cursor-pointer hover:bg-white/20 transition-colors duration-200" onclick="showPesertaSection('jadwal')">
                    <div class="text-blue-400 mb-4">
                        <i class="fas fa-calendar text-3xl"></i>
                    </div>
                    <h3 class="text-white font-medium">Jadwal</h3>
                    <p class="text-blue-200 text-sm mt-2">Lihat jadwal pelatihan</p>
                    <div id="jadwalLock" class="mt-2">
                        <i class="fas fa-lock text-yellow-400"></i>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 text-center cursor-pointer hover:bg-white/20 transition-colors duration-200" onclick="showPesertaSection('test')">
                    <div class="text-purple-400 mb-4">
                        <i class="fas fa-clipboard-check text-3xl"></i>
                    </div>
                    <h3 class="text-white font-medium">Test</h3>
                    <p class="text-purple-200 text-sm mt-2">Pre & Post Test</p>
                    <div id="testLock" class="mt-2">
                        <i class="fas fa-lock text-yellow-400"></i>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 text-center cursor-pointer hover:bg-white/20 transition-colors duration-200" onclick="showPesertaSection('materi')">
                    <div class="text-green-400 mb-4">
                        <i class="fas fa-book text-3xl"></i>
                    </div>
                    <h3 class="text-white font-medium">Materi</h3>
                    <p class="text-green-200 text-sm mt-2">21 Modul pembelajaran</p>
                    <div id="materiLock" class="mt-2">
                        <i class="fas fa-lock text-yellow-400"></i>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 text-center cursor-pointer hover:bg-white/20 transition-colors duration-200" onclick="showPesertaSection('tugas')">
                    <div class="text-orange-400 mb-4">
                        <i class="fas fa-tasks text-3xl"></i>
                    </div>
                    <h3 class="text-white font-medium">Tugas</h3>
                    <p class="text-orange-200 text-sm mt-2">5 Tugas wajib</p>
                    <div id="tugasLock" class="mt-2">
                        <i class="fas fa-lock text-yellow-400"></i>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 text-center cursor-pointer hover:bg-white/20 transition-colors duration-200" onclick="showPesertaSection('feedback')">
                    <div class="text-pink-400 mb-4">
                        <i class="fas fa-star text-3xl"></i>
                    </div>
                    <h3 class="text-white font-medium">Feedback</h3>
                    <p class="text-pink-200 text-sm mt-2">Evaluasi pelatihan</p>
                    <div id="feedbackLock" class="mt-2">
                        <i class="fas fa-lock text-yellow-400"></i>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 text-center cursor-pointer hover:bg-white/20 transition-colors duration-200" onclick="showPesertaSection('sertifikat')">
                    <div class="text-yellow-400 mb-4">
                        <i class="fas fa-certificate text-3xl"></i>
                    </div>
                    <h3 class="text-white font-medium">Sertifikat</h3>
                    <p class="text-yellow-200 text-sm mt-2">Download sertifikat</p>
                    <div id="sertifikatLock" class="mt-2">
                        <i class="fas fa-lock text-yellow-400"></i>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20 text-center cursor-pointer hover:bg-white/20 transition-colors duration-200" onclick="showPesertaSection('bantuan')">
                    <div class="text-indigo-400 mb-4">
                        <i class="fas fa-question-circle text-3xl"></i>
                    </div>
                    <h3 class="text-white font-medium">Bantuan</h3>
                    <p class="text-indigo-200 text-sm mt-2">FAQ & Support</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Peserta Sections -->
    <!-- Test Section -->
    <div id="pesertaTest" class="hidden min-h-screen">
        <div class="bg-white/10 backdrop-blur-lg border-b border-white/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <button onclick="showDashboardPeserta()" class="text-white hover:text-blue-200 mr-4">
                            <i class="fas fa-arrow-left text-xl"></i>
                        </button>
                        <h1 class="text-xl font-bold text-white">Test & Evaluasi</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-blue-200" id="testWelcomeUser">Selamat datang!</span>
                        <button onclick="logout()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-white mb-2">Pre-Test & Post-Test</h2>
                <p class="text-blue-200">Kerjakan test untuk mengukur kemampuan Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Pre-Test -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-white">Pre-Test</h3>
                        <div class="text-2xl text-purple-400">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                    </div>
                    <p class="text-blue-200 text-sm mb-4">Test untuk mengukur kemampuan awal sebelum mengikuti pelatihan</p>
                    
                    <div class="mb-4">
                        <div class="flex items-center space-x-2 text-sm">
                            <span class="text-blue-300">Status:</span>
                            <span id="preTestStatus" class="px-2 py-1 rounded-full text-xs bg-yellow-500/20 text-yellow-200">Belum Dikerjakan</span>
                        </div>
                    </div>
                    
                    <button id="preTestBtn" onclick="accessTest('preTest')" class="w-full bg-purple-500 hover:bg-purple-600 text-white py-3 px-4 rounded-lg transition-colors duration-200 font-medium">
                        <i class="fas fa-play mr-2"></i>
                        Mulai Pre-Test
                    </button>
                </div>

                <!-- Post-Test -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 border border-white/20">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-white">Post-Test</h3>
                        <div class="text-2xl text-green-400">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                    </div>
                    <p class="text-blue-200 text-sm mb-4">Test untuk mengukur kemampuan akhir setelah mengikuti pelatihan</p>
                    
                    <div class="mb-4">
                        <div class="flex items-center space-x-2 text-sm">
                            <span class="text-blue-300">Status:</span>
                            <span id="postTestStatus" class="px-2 py-1 rounded-full text-xs bg-yellow-500/20 text-yellow-200">Belum Dikerjakan</span>
                        </div>
                    </div>
                    
                    <button id="postTestBtn" onclick="accessTest('postTest')" class="w-full bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded-lg transition-colors duration-200 font-medium">
                        <i class="fas fa-play mr-2"></i>
                        Mulai Post-Test
                    </button>
                </div>
            </div>

            <!-- Test Instructions -->
            <div class="mt-8 bg-navy-800/50 rounded-xl p-6 border border-navy-600/50">
                <h3 class="text-white font-medium mb-4">
                    <i class="fas fa-info-circle mr-2 text-blue-400"></i>
                    Petunjuk Pengerjaan Test
                </h3>
                <ul class="text-blue-200 text-sm space-y-2">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                        Pre-Test harus dikerjakan sebelum mengakses materi pembelajaran
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                        Post-Test dapat dikerjakan setelah menyelesaikan semua materi
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                        Pastikan koneksi internet stabil saat mengerjakan test
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                        Test hanya dapat dikerjakan satu kali, pastikan Anda siap
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Tugas Section -->
    <div id="pesertaTugas" class="hidden min-h-screen">
        <div class="bg-white/10 backdrop-blur-lg border-b border-white/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <button onclick="showDashboardPeserta()" class="text-white hover:text-blue-200 mr-4">
                            <i class="fas fa-arrow-left text-xl"></i>
                        </button>
                        <h1 class="text-xl font-bold text-white">Tugas Wajib</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-blue-200" id="tugasWelcomeUser">Selamat datang!</span>
                        <button onclick="logout()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-white mb-2">5 Tugas Wajib PEKERTI</h2>
                <p class="text-blue-200">Kerjakan semua tugas untuk menyelesaikan program pelatihan</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="pesertaTugasGrid">
                <!-- Tugas items will be populated here -->
            </div>

            <!-- Submission Guidelines -->
            <div class="mt-8 bg-navy-800/50 rounded-xl p-6 border border-navy-600/50">
                <h3 class="text-white font-medium mb-4">
                    <i class="fas fa-upload mr-2 text-orange-400"></i>
                    Panduan Pengumpulan Tugas
                </h3>
                <ul class="text-blue-200 text-sm space-y-2">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                        Upload file tugas Anda ke Google Drive terlebih dahulu
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                        Pastikan file dapat diakses (set sharing ke "Anyone with the link")
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                        Copy link Google Drive dan paste di form pengumpulan tugas
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                        Beri nama file dengan format: NamaAnda_NamaTugas.pdf
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                        Perhatikan deadline pengumpulan setiap tugas
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-400 mr-2 mt-1 text-xs"></i>
                        Tugas yang terlambat akan mendapat pengurangan nilai
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Profile Section -->
    <div id="pesertaProfil" class="hidden min-h-screen">
        <div class="bg-white/10 backdrop-blur-lg border-b border-white/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <button onclick="showDashboardPeserta()" class="text-white hover:text-blue-200 mr-4">
                            <i class="fas fa-arrow-left text-xl"></i>
                        </button>
                        <h1 class="text-xl font-bold text-white">Edit Profil</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-blue-200" id="profilWelcomeUser">Selamat datang!</span>
                        <button onclick="logout()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl border border-white/20">
                <div class="p-6 border-b border-white/20">
                    <h2 class="text-2xl font-bold text-white">Edit Profil Peserta</h2>
                    <p class="text-blue-200 mt-2">Username dan Password tidak dapat diubah</p>
                </div>
                
                <div class="p-6">
                    <!-- Photo Preview Section -->
                    <div class="mb-6 bg-navy-800/50 rounded-lg p-4">
                        <h3 class="text-white font-medium mb-4">
                            <i class="fas fa-camera mr-2 text-blue-400"></i>
                            Foto Sertifikat
                        </h3>
                        <div id="currentPhotoPreview" class="mb-4">
                            <!-- Photo preview will be populated here -->
                        </div>
                        
                        <!-- Upload New Photo -->
                        <div class="border-2 border-dashed border-blue-400/30 rounded-lg p-4 text-center hover:border-blue-400/50 transition-colors duration-200">
                            <input type="file" id="editOfficialPhoto" accept="image/jpeg,image/jpg,image/png" class="hidden" onchange="handleProfilePhotoUpload()">
                            <div onclick="document.getElementById('editOfficialPhoto').click()" class="cursor-pointer">
                                <i class="fas fa-camera text-2xl text-blue-400 mb-2"></i>
                                <p class="text-blue-200 text-sm">Klik untuk upload foto baru</p>
                                <p class="text-blue-300 text-xs mt-1">Format: JPG, PNG (Max 2MB)</p>
                                <p class="text-red-300 text-xs mt-1">Background merah, foto sedada untuk sertifikat</p>
                            </div>
                            <div id="editPhotoStatus" class="mt-2 hidden">
                                <span class="text-green-400 text-sm">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    <span id="editPhotoFileName">File berhasil diupload</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <form id="editProfilForm" class="space-y-4">
                        <!-- Username & Password (Readonly) -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Username</label>
                                <input type="text" id="editUsername" readonly class="w-full px-4 py-3 bg-gray-600/50 border border-white/30 rounded-lg text-gray-300 cursor-not-allowed">
                            </div>
                            
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Password</label>
                                <div class="relative">
                                    <input type="password" id="editPassword" readonly class="w-full px-4 py-3 pr-12 bg-gray-600/50 border border-white/30 rounded-lg text-gray-300 cursor-not-allowed">
                                    <button type="button" onclick="togglePassword('editPassword')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-blue-300 hover:text-white">
                                        <i class="fas fa-eye" id="editPassword-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- NIP -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">NIP</label>
                            <input type="text" id="editNip" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                        </div>
                        
                        <!-- Nama Lengkap + Gelar -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">Nama Lengkap + Gelar</label>
                            <input type="text" id="editFullName" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                        </div>
                        
                        <!-- Email & WhatsApp -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Email</label>
                                <input type="email" id="editEmail" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">WhatsApp</label>
                                <input type="tel" id="editWhatsapp" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                            </div>
                        </div>
                        
                        <!-- Instansi -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">Instansi</label>
                            <input type="text" id="editInstansi" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                        </div>
                        
                        <!-- Fakultas & Jurusan -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Fakultas</label>
                                <input type="text" id="editFakultas" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                            </div>
                            
                            <div>
                                <label class="block text-blue-200 text-sm font-medium mb-2">Jurusan</label>
                                <input type="text" id="editJurusan" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                            </div>
                        </div>
                        
                        <!-- Jabatan -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">Jabatan</label>
                            <select id="editJabatan" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                                <option value="" class="bg-gray-800">Pilih Jabatan</option>
                                <option value="Pengajar" class="bg-gray-800">Pengajar</option>
                                <option value="Asisten Ahli" class="bg-gray-800">Asisten Ahli</option>
                                <option value="Lektor" class="bg-gray-800">Lektor</option>
                                <option value="Lektor Kepala" class="bg-gray-800">Lektor Kepala</option>
                            </select>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-4 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <i class="fas fa-save mr-2"></i>
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Feedback Section -->
    <div id="pesertaFeedback" class="hidden min-h-screen">
        <div class="bg-white/10 backdrop-blur-lg border-b border-white/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <button onclick="showDashboardPeserta()" class="text-white hover:text-blue-200 mr-4">
                            <i class="fas fa-arrow-left text-xl"></i>
                        </button>
                        <h1 class="text-xl font-bold text-white">Evaluasi Pelatihan</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-blue-200" id="feedbackWelcomeUser">Selamat datang!</span>
                        <button onclick="logout()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl border border-white/20">
                <div class="p-6 border-b border-white/20">
                    <h2 class="text-2xl font-bold text-white">Evaluasi Pelatihan PEKERTI</h2>
                    <p class="text-blue-200 mt-2">Berikan penilaian Anda terhadap pelatihan ini (Skala 1-5)</p>
                </div>
                
                <div class="p-6">
                    <form id="feedbackForm" class="space-y-6">
                        <!-- Kualitas Narasumber -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-3">1. Kualitas Narasumber</label>
                            <div class="flex space-x-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-300 text-sm">1</span>
                                    <span class="text-blue-300 text-xs">(Sangat Buruk)</span>
                                </div>
                                <div class="flex space-x-2">
                                    <input type="radio" name="narasumber" value="1" id="narasumber1" class="text-blue-500">
                                    <input type="radio" name="narasumber" value="2" id="narasumber2" class="text-blue-500">
                                    <input type="radio" name="narasumber" value="3" id="narasumber3" class="text-blue-500">
                                    <input type="radio" name="narasumber" value="4" id="narasumber4" class="text-blue-500">
                                    <input type="radio" name="narasumber" value="5" id="narasumber5" class="text-blue-500">
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-300 text-sm">5</span>
                                    <span class="text-blue-300 text-xs">(Sangat Baik)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Relevansi Materi -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-3">2. Relevansi Materi</label>
                            <div class="flex space-x-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-300 text-sm">1</span>
                                    <span class="text-blue-300 text-xs">(Tidak Relevan)</span>
                                </div>
                                <div class="flex space-x-2">
                                    <input type="radio" name="materi" value="1" id="materi1" class="text-blue-500">
                                    <input type="radio" name="materi" value="2" id="materi2" class="text-blue-500">
                                    <input type="radio" name="materi" value="3" id="materi3" class="text-blue-500">
                                    <input type="radio" name="materi" value="4" id="materi4" class="text-blue-500">
                                    <input type="radio" name="materi" value="5" id="materi5" class="text-blue-500">
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-300 text-sm">5</span>
                                    <span class="text-blue-300 text-xs">(Sangat Relevan)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Kelayakan Media/Sistem -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-3">3. Kelayakan Media/Sistem</label>
                            <div class="flex space-x-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-300 text-sm">1</span>
                                    <span class="text-blue-300 text-xs">(Tidak Layak)</span>
                                </div>
                                <div class="flex space-x-2">
                                    <input type="radio" name="media" value="1" id="media1" class="text-blue-500">
                                    <input type="radio" name="media" value="2" id="media2" class="text-blue-500">
                                    <input type="radio" name="media" value="3" id="media3" class="text-blue-500">
                                    <input type="radio" name="media" value="4" id="media4" class="text-blue-500">
                                    <input type="radio" name="media" value="5" id="media5" class="text-blue-500">
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-300 text-sm">5</span>
                                    <span class="text-blue-300 text-xs">(Sangat Layak)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Kejelasan Penilaian -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-3">4. Kejelasan Penilaian</label>
                            <div class="flex space-x-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-300 text-sm">1</span>
                                    <span class="text-blue-300 text-xs">(Tidak Jelas)</span>
                                </div>
                                <div class="flex space-x-2">
                                    <input type="radio" name="penilaian" value="1" id="penilaian1" class="text-blue-500">
                                    <input type="radio" name="penilaian" value="2" id="penilaian2" class="text-blue-500">
                                    <input type="radio" name="penilaian" value="3" id="penilaian3" class="text-blue-500">
                                    <input type="radio" name="penilaian" value="4" id="penilaian4" class="text-blue-500">
                                    <input type="radio" name="penilaian" value="5" id="penilaian5" class="text-blue-500">
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-300 text-sm">5</span>
                                    <span class="text-blue-300 text-xs">(Sangat Jelas)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Manfaat Pelatihan -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-3">5. Manfaat Pelatihan</label>
                            <div class="flex space-x-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-300 text-sm">1</span>
                                    <span class="text-blue-300 text-xs">(Tidak Bermanfaat)</span>
                                </div>
                                <div class="flex space-x-2">
                                    <input type="radio" name="manfaat" value="1" id="manfaat1" class="text-blue-500">
                                    <input type="radio" name="manfaat" value="2" id="manfaat2" class="text-blue-500">
                                    <input type="radio" name="manfaat" value="3" id="manfaat3" class="text-blue-500">
                                    <input type="radio" name="manfaat" value="4" id="manfaat4" class="text-blue-500">
                                    <input type="radio" name="manfaat" value="5" id="manfaat5" class="text-blue-500">
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-300 text-sm">5</span>
                                    <span class="text-blue-300 text-xs">(Sangat Bermanfaat)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Komentar Tambahan -->
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">Komentar Tambahan (Opsional)</label>
                            <textarea id="feedbackComment" rows="4" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Berikan saran atau komentar tambahan..."></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-pink-600 hover:from-pink-600 hover:to-pink-700 text-white font-semibold py-4 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <i class="fas fa-star mr-2"></i>
                                Kirim Evaluasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="pesertaMateri" class="hidden min-h-screen">
        <div class="bg-white/10 backdrop-blur-lg border-b border-white/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <button onclick="showDashboardPeserta()" class="text-white hover:text-blue-200 mr-4">
                            <i class="fas fa-arrow-left text-xl"></i>
                        </button>
                        <h1 class="text-xl font-bold text-white">Materi Pembelajaran</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-blue-200" id="materiWelcomeUser">Selamat datang!</span>
                        <button onclick="logout()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-white mb-2">21 Modul PEKERTI</h2>
                <p class="text-blue-200">Klik pada modul untuk mengakses materi pembelajaran</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="pesertaMateriGrid">
                <!-- Materi items will be populated here -->
            </div>
        </div>
    </div>

    <!-- Dashboard Admin -->
    <div id="dashboardAdmin" class="hidden min-h-screen">
        <!-- Header -->
        <div class="bg-white/10 backdrop-blur-lg border-b border-white/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <i class="fas fa-user-shield text-2xl text-white mr-3"></i>
                        <h1 class="text-xl font-bold text-white">Dashboard Admin</h1>
                    </div>
                    <button onclick="logout()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Logout
                    </button>
                </div>
            </div>
        </div>

        <div class="flex">
            <!-- Sidebar -->
            <div class="w-64 bg-navy-950/80 backdrop-blur-lg border-r border-navy-700/50 min-h-screen">
                <div class="p-4 border-b border-navy-700/50">
                    <div class="flex items-center">
                        <div class="bg-blue-500/20 rounded-lg p-2 mr-3">
                            <i class="fas fa-user-shield text-blue-400 text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold text-sm">Admin Panel</h3>
                            <p class="text-blue-300 text-xs">PEKERTI UNDIP</p>
                        </div>
                    </div>
                </div>
                
                <nav class="p-4">
                    <ul class="space-y-1">
                        <li>
                            <button onclick="showAdminSection('dashboard')" class="admin-menu-item w-full text-left px-4 py-3 text-white hover:bg-blue-600/20 rounded-lg transition-all duration-200 flex items-center bg-blue-600/30 border-l-4 border-blue-400">
                                <i class="fas fa-tachometer-alt mr-3 text-blue-400"></i>
                                <span class="font-medium">Dashboard</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="showAdminSection('peserta')" class="admin-menu-item w-full text-left px-4 py-3 text-blue-200 hover:text-white hover:bg-blue-600/20 rounded-lg transition-all duration-200 flex items-center">
                                <i class="fas fa-users mr-3"></i>
                                <span>Peserta</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="showAdminSection('batch')" class="admin-menu-item w-full text-left px-4 py-3 text-blue-200 hover:text-white hover:bg-blue-600/20 rounded-lg transition-all duration-200 flex items-center">
                                <i class="fas fa-layer-group mr-3"></i>
                                <span>Batch Management</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="showAdminSection('pembayaran')" class="admin-menu-item w-full text-left px-4 py-3 text-blue-200 hover:text-white hover:bg-blue-600/20 rounded-lg transition-all duration-200 flex items-center">
                                <i class="fas fa-credit-card mr-3"></i>
                                <span>Pembayaran</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="showAdminSection('virtualaccount')" class="admin-menu-item w-full text-left px-4 py-3 text-blue-200 hover:text-white hover:bg-blue-600/20 rounded-lg transition-all duration-200 flex items-center">
                                <i class="fas fa-university mr-3"></i>
                                <span>Virtual Account</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="showAdminSection('jadwal')" class="admin-menu-item w-full text-left px-4 py-3 text-blue-200 hover:text-white hover:bg-blue-600/20 rounded-lg transition-all duration-200 flex items-center">
                                <i class="fas fa-calendar mr-3"></i>
                                <span>Jadwal</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="showAdminSection('materi')" class="admin-menu-item w-full text-left px-4 py-3 text-blue-200 hover:text-white hover:bg-blue-600/20 rounded-lg transition-all duration-200 flex items-center">
                                <i class="fas fa-book mr-3"></i>
                                <span>Materi</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="showAdminSection('test')" class="admin-menu-item w-full text-left px-4 py-3 text-blue-200 hover:text-white hover:bg-blue-600/20 rounded-lg transition-all duration-200 flex items-center">
                                <i class="fas fa-clipboard-check mr-3"></i>
                                <span>Test & Tugas</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="showAdminSection('users')" class="admin-menu-item w-full text-left px-4 py-3 text-blue-200 hover:text-white hover:bg-blue-600/20 rounded-lg transition-all duration-200 flex items-center">
                                <i class="fas fa-user-cog mr-3"></i>
                                <span>Users</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="showAdminSection('sertifikat')" class="admin-menu-item w-full text-left px-4 py-3 text-blue-200 hover:text-white hover:bg-blue-600/20 rounded-lg transition-all duration-200 flex items-center">
                                <i class="fas fa-certificate mr-3"></i>
                                <span>Sertifikat</span>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="flex-1 p-6">
                <!-- Dashboard Overview -->
                <div id="adminDashboard" class="admin-section">
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-white mb-2">Dashboard Overview</h2>
                        <p class="text-blue-300">Ringkasan sistem PEKERTI UNDIP</p>
                    </div>
                    
                    <!-- Summary Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-blue-500/20 to-blue-600/20 backdrop-blur-lg rounded-xl p-6 border border-blue-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-blue-200 text-sm font-medium">Total Peserta</p>
                                    <p id="totalPeserta" class="text-3xl font-bold text-white mt-2">0</p>
                                </div>
                                <div class="bg-blue-500/30 rounded-full p-4">
                                    <i class="fas fa-users text-2xl text-blue-300"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-green-500/20 to-green-600/20 backdrop-blur-lg rounded-xl p-6 border border-green-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-green-200 text-sm font-medium">Terverifikasi</p>
                                    <p id="verifiedPeserta" class="text-3xl font-bold text-white mt-2">0</p>
                                </div>
                                <div class="bg-green-500/30 rounded-full p-4">
                                    <i class="fas fa-check-circle text-2xl text-green-300"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-purple-500/20 to-purple-600/20 backdrop-blur-lg rounded-xl p-6 border border-purple-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-purple-200 text-sm font-medium">Total Batch</p>
                                    <p id="totalBatch" class="text-3xl font-bold text-white mt-2">0</p>
                                </div>
                                <div class="bg-purple-500/30 rounded-full p-4">
                                    <i class="fas fa-layer-group text-2xl text-purple-300"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-yellow-500/20 to-yellow-600/20 backdrop-blur-lg rounded-xl p-6 border border-yellow-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-yellow-200 text-sm font-medium">Sertifikat</p>
                                    <p id="sertifikatTerbit" class="text-3xl font-bold text-white mt-2">0</p>
                                </div>
                                <div class="bg-yellow-500/30 rounded-full p-4">
                                    <i class="fas fa-certificate text-2xl text-yellow-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <h3 class="text-xl font-semibold text-white">Aktivitas Terbaru</h3>
                        </div>
                        <div class="p-6">
                            <div id="recentActivity" class="space-y-4">
                                <!-- Activity items will be populated here -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Peserta Management -->
                <div id="adminPeserta" class="admin-section hidden">
                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-white mb-2">Manajemen Peserta</h2>
                        <p class="text-blue-300">Kelola data peserta PEKERTI</p>
                    </div>
                    
                    <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-semibold text-white">Daftar Peserta</h3>
                                <button onclick="exportPeserta()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                                    <i class="fas fa-download mr-2"></i>
                                    Export Data
                                </button>
                            </div>
                            
                            <div class="relative">
                                <input type="text" id="pesertaSearch" placeholder="Cari peserta..." class="w-full max-w-md px-4 py-2 pl-10 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" oninput="searchPeserta()">
                                <i class="fas fa-search absolute left-3 top-3 text-blue-200"></i>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-navy-700/50">
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Username</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">NIP</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Nama Lengkap</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Instansi</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Fakultas</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Jurusan</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Jabatan</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Status</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">WA</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Email</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="pesertaTableBody">
                                        <!-- Data will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Other admin sections will be added here -->
                <div id="adminBatch" class="admin-section hidden">
                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-white mb-2">Batch Management</h2>
                        <p class="text-blue-300">Kelola batch pelatihan PEKERTI</p>
                    </div>
                    
                    <!-- Form Tambah Batch -->
                    <div class="mb-6 bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <h3 class="text-xl font-semibold text-white">Tambah Batch Baru</h3>
                        </div>
                        <div class="p-6">
                            <form id="addBatchForm" class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-blue-200 text-sm font-medium mb-2">Nama Batch</label>
                                        <input type="text" id="batchName" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Batch 1 - Januari 2025" required>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-blue-200 text-sm font-medium mb-2">Kuota Peserta</label>
                                        <input type="number" id="batchQuota" min="1" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="50" required>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-blue-200 text-sm font-medium mb-2">Batas Pendaftaran</label>
                                        <input type="datetime-local" id="batchRegDeadline" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-blue-200 text-sm font-medium mb-2">Tanggal Mulai</label>
                                        <input type="date" id="batchStartDate" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-blue-200 text-sm font-medium mb-2">Tanggal Selesai</label>
                                        <input type="date" id="batchEndDate" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Status</label>
                                    <select id="batchStatus" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                                        <option value="" class="bg-gray-800">Pilih Status</option>
                                        <option value="Buka" class="bg-gray-800">Buka</option>
                                        <option value="Tutup" class="bg-gray-800">Tutup</option>
                                        <option value="Berlangsung" class="bg-gray-800">Berlangsung</option>
                                        <option value="Selesai" class="bg-gray-800">Selesai</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg transition-colors duration-200">
                                    <i class="fas fa-plus mr-2"></i>
                                    Tambah Batch
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Tabel Daftar Batch -->
                    <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <h3 class="text-xl font-semibold text-white">Daftar Batch</h3>
                        </div>
                        
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-navy-700/50">
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Nama Batch</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Kuota</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Terdaftar</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Batas Daftar</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Mulai</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Selesai</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Status</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="batchTableBody">
                                        <!-- Data will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="adminPembayaran" class="admin-section hidden">
                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-white mb-2">Verifikasi Pembayaran</h2>
                        <p class="text-blue-300">Kelola dan verifikasi pembayaran peserta</p>
                    </div>
                    
                    <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-semibold text-white">Status Pembayaran Peserta</h3>
                                <div class="flex space-x-3">
                                    <select id="paymentStatusFilter" class="px-4 py-2 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" onchange="filterByPaymentStatus()">
                                        <option value="" class="bg-gray-800">Semua Status</option>
                                        <option value="pending" class="bg-gray-800">Menunggu</option>
                                        <option value="verified" class="bg-gray-800">Terverifikasi</option>
                                        <option value="rejected" class="bg-gray-800">Ditolak</option>
                                    </select>
                                    <button onclick="exportPaymentData()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                                        <i class="fas fa-download mr-2"></i>
                                        Export
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-navy-700/50">
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Peserta</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Virtual Account</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Nominal</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Status</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Tanggal Bayar</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Bukti</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="paymentTableBody">
                                        <!-- Data will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="adminMateri" class="admin-section hidden">
                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-white mb-2">Manajemen Materi</h2>
                        <p class="text-blue-300">Kelola 21 modul pembelajaran PEKERTI</p>
                    </div>
                    
                    <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-semibold text-white">Daftar Materi</h3>
                                <button onclick="addMateri()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                                    <i class="fas fa-plus mr-2"></i>
                                    Tambah Materi
                                </button>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="adminMateriGrid">
                                <!-- Materi cards will be populated here -->
                            </div>
                        </div>
                    </div>
                </div>

                <div id="adminTest" class="admin-section hidden">
                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-white mb-2">Test & Tugas</h2>
                        <p class="text-blue-300">Kelola Pre-Test, Post-Test, dan 5 Tugas Wajib</p>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Test Section -->
                        <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                            <div class="p-6 border-b border-navy-700/50">
                                <h3 class="text-xl font-semibold text-white mb-2">Test Management</h3>
                                <p class="text-blue-300 text-sm">Pre-Test & Post-Test</p>
                            </div>
                            <div class="p-6">
                                <div class="space-y-4" id="testManagement">
                                    <!-- Test items will be populated here -->
                                </div>
                            </div>
                        </div>
                        
                        <!-- Assignment Section -->
                        <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                            <div class="p-6 border-b border-navy-700/50">
                                <h3 class="text-xl font-semibold text-white mb-2">Tugas Management</h3>
                                <p class="text-blue-300 text-sm">5 Tugas Wajib</p>
                            </div>
                            <div class="p-6">
                                <div class="space-y-3" id="tugasList">
                                    <!-- Tugas items will be populated here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Submission Tracking -->
                    <div class="mt-6 bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <h3 class="text-xl font-semibold text-white">Rekap Pengumpulan</h3>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-navy-700/50">
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Peserta</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Pre-Test</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Post-Test</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">RPS</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Kontrak</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Video</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Soal</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Penilaian</th>
                                        </tr>
                                    </thead>
                                    <tbody id="submissionTable">
                                        <!-- Submission data will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Statistics -->
                    <div class="mt-6 bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <h3 class="text-xl font-semibold text-white">Statistik Pengerjaan</h3>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-400" id="preTestStats">0</div>
                                    <div class="text-sm text-blue-200">Pre-Test Selesai</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-green-400" id="postTestStats">0</div>
                                    <div class="text-sm text-green-200">Post-Test Selesai</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-purple-400" id="tugasStats">0</div>
                                    <div class="text-sm text-purple-200">Total Tugas Dikumpul</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-yellow-400" id="avgScore">85</div>
                                    <div class="text-sm text-yellow-200">Rata-rata Nilai</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="adminUsers" class="admin-section hidden">
                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-white mb-2">Manajemen Users</h2>
                        <p class="text-blue-300">Kelola akun admin dan peserta</p>
                    </div>
                    
                    <!-- User Statistics -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                        <div class="bg-gradient-to-br from-red-500/20 to-red-600/20 backdrop-blur-lg rounded-xl p-6 border border-red-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-red-200 text-sm font-medium">Total Admin</p>
                                    <p id="totalAdmins" class="text-3xl font-bold text-white mt-2">1</p>
                                </div>
                                <div class="bg-red-500/30 rounded-full p-4">
                                    <i class="fas fa-user-shield text-2xl text-red-300"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-blue-500/20 to-blue-600/20 backdrop-blur-lg rounded-xl p-6 border border-blue-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-blue-200 text-sm font-medium">Total Peserta</p>
                                    <p id="totalUsers" class="text-3xl font-bold text-white mt-2">0</p>
                                </div>
                                <div class="bg-blue-500/30 rounded-full p-4">
                                    <i class="fas fa-users text-2xl text-blue-300"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-green-500/20 to-green-600/20 backdrop-blur-lg rounded-xl p-6 border border-green-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-green-200 text-sm font-medium">Peserta Aktif</p>
                                    <p id="activeUsers" class="text-3xl font-bold text-white mt-2">0</p>
                                </div>
                                <div class="bg-green-500/30 rounded-full p-4">
                                    <i class="fas fa-user-check text-2xl text-green-300"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-purple-500/20 to-purple-600/20 backdrop-blur-lg rounded-xl p-6 border border-purple-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-purple-200 text-sm font-medium">Login Hari Ini</p>
                                    <p id="todayLogins" class="text-3xl font-bold text-white mt-2">0</p>
                                </div>
                                <div class="bg-purple-500/30 rounded-full p-4">
                                    <i class="fas fa-sign-in-alt text-2xl text-purple-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- All Users Table -->
                    <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-semibold text-white">Daftar Semua Users</h3>
                                <div class="flex space-x-3">
                                    <select id="userRoleFilter" class="px-4 py-2 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" onchange="filterUsersByRole()">
                                        <option value="" class="bg-gray-800">Semua Role</option>
                                        <option value="Super Admin" class="bg-gray-800">Super Admin</option>
                                        <option value="Peserta" class="bg-gray-800">Peserta</option>
                                    </select>
                                    <button onclick="addAdmin()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                                        <i class="fas fa-user-shield mr-2"></i>
                                        Tambah Admin
                                    </button>
                                    <button onclick="exportUsersData()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                                        <i class="fas fa-download mr-2"></i>
                                        Export
                                    </button>
                                </div>
                            </div>
                            
                            <div class="relative mb-4">
                                <input type="text" id="userSearch" placeholder="Cari username, nama, atau NIK..." class="w-full max-w-md px-4 py-2 pl-10 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" oninput="searchUsers()">
                                <i class="fas fa-search absolute left-3 top-3 text-blue-200"></i>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-navy-700/50">
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Username</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Password</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Nama Lengkap</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">NIK</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">NIP</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Email</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">WhatsApp</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Role</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Status</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Batch</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Tgl Daftar</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="allUsersTableBody">
                                        <!-- All users data will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- User Activity Log -->
                    <div class="mt-6 bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <h3 class="text-xl font-semibold text-white">Log Aktivitas User</h3>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-navy-700/50">
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">User</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Role</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Aktivitas</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Waktu</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">IP Address</th>
                                        </tr>
                                    </thead>
                                    <tbody id="userActivityLog">
                                        <!-- Activity log will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="adminVirtualaccount" class="admin-section hidden">
                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-white mb-2">Manajemen Virtual Account</h2>
                        <p class="text-blue-300">Kelola nomor Virtual Account untuk pembayaran peserta</p>
                    </div>
                    
                    <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-semibold text-white">Daftar Virtual Account</h3>
                                <div class="flex space-x-3">
                                    <button onclick="showBulkInputVA()" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                                        <i class="fas fa-upload mr-2"></i>
                                        Bulk Input VA
                                    </button>
                                    <button onclick="addSingleVA()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                                        <i class="fas fa-plus mr-2"></i>
                                        Tambah VA
                                    </button>
                                    <button onclick="exportVA()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                                        <i class="fas fa-download mr-2"></i>
                                        Export Data
                                    </button>
                                </div>
                            </div>
                            
                            <div class="flex space-x-4 mb-4">
                                <div class="relative flex-1">
                                    <input type="text" id="vaSearch" placeholder="Cari nomor VA, bank, atau peserta..." class="w-full px-4 py-2 pl-10 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" oninput="searchVA()">
                                    <i class="fas fa-search absolute left-3 top-3 text-blue-200"></i>
                                </div>
                                <select id="bankFilter" class="px-4 py-2 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" onchange="filterVAByBank()">
                                    <option value="" class="bg-gray-800">Semua Bank</option>
                                    <option value="BCA" class="bg-gray-800">BCA</option>
                                    <option value="BNI" class="bg-gray-800">BNI</option>
                                    <option value="BRI" class="bg-gray-800">BRI</option>
                                    <option value="Mandiri" class="bg-gray-800">Mandiri</option>
                                    <option value="BSI" class="bg-gray-800">BSI</option>
                                </select>
                                <select id="statusFilter" class="px-4 py-2 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" onchange="filterVAByStatus()">
                                    <option value="" class="bg-gray-800">Semua Status</option>
                                    <option value="available" class="bg-gray-800">Tersedia</option>
                                    <option value="assigned" class="bg-gray-800">Terpakai</option>
                                    <option value="inactive" class="bg-gray-800">Nonaktif</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-navy-700/50">
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Nomor VA</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Bank</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Atas Nama</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Nominal</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Status</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Peserta</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Tanggal Dibuat</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="vaTableBody">
                                        <!-- Data will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="adminJadwal" class="admin-section hidden">
                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-white mb-2">Manajemen Jadwal</h2>
                        <p class="text-blue-300">Kelola jadwal pelatihan PEKERTI</p>
                    </div>
                    
                    <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <h3 class="text-xl font-semibold text-white">Upload Jadwal Pelatihan</h3>
                        </div>
                        
                        <div class="p-6">
                            <form id="jadwalForm" class="space-y-4">
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Link Google Drive Jadwal</label>
                                    <input type="url" id="jadwalGDriveLink" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="https://drive.google.com/file/d/..." required>
                                </div>
                                
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Deskripsi Jadwal</label>
                                    <textarea id="jadwalDescription" rows="3" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Jadwal pelatihan PEKERTI batch..."></textarea>
                                </div>
                                
                                <div class="flex items-center space-x-3">
                                    <input type="checkbox" id="jadwalActive" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="jadwalActive" class="text-blue-200 text-sm">Aktifkan jadwal untuk peserta terverifikasi</label>
                                </div>
                                
                                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg transition-colors duration-200">
                                    <i class="fas fa-save mr-2"></i>
                                    Simpan Jadwal
                                </button>
                            </form>
                            
                            <div class="mt-6 pt-6 border-t border-navy-700/50">
                                <h4 class="text-lg font-semibold text-white mb-4">Jadwal Saat Ini</h4>
                                <div id="currentJadwal" class="bg-navy-800/50 rounded-lg p-4">
                                    <p class="text-blue-200 text-center">Belum ada jadwal yang diupload</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="adminSertifikat" class="admin-section hidden">
                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-white mb-2">Manajemen Sertifikat</h2>
                        <p class="text-blue-300">Kelola penerbitan sertifikat peserta</p>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                        <!-- Certificate Stats -->
                        <div class="bg-gradient-to-br from-green-500/20 to-green-600/20 backdrop-blur-lg rounded-xl p-6 border border-green-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-green-200 text-sm font-medium">Sertifikat Terbit</p>
                                    <p id="certificatesIssued" class="text-3xl font-bold text-white mt-2">0</p>
                                </div>
                                <div class="bg-green-500/30 rounded-full p-4">
                                    <i class="fas fa-certificate text-2xl text-green-300"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-yellow-500/20 to-yellow-600/20 backdrop-blur-lg rounded-xl p-6 border border-yellow-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-yellow-200 text-sm font-medium">Menunggu Verifikasi</p>
                                    <p id="certificatesPending" class="text-3xl font-bold text-white mt-2">0</p>
                                </div>
                                <div class="bg-yellow-500/30 rounded-full p-4">
                                    <i class="fas fa-clock text-2xl text-yellow-300"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-blue-500/20 to-blue-600/20 backdrop-blur-lg rounded-xl p-6 border border-blue-400/30">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-blue-200 text-sm font-medium">Total Peserta</p>
                                    <p id="totalParticipants" class="text-3xl font-bold text-white mt-2">0</p>
                                </div>
                                <div class="bg-blue-500/30 rounded-full p-4">
                                    <i class="fas fa-users text-2xl text-blue-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-navy-900/50 backdrop-blur-lg rounded-xl border border-navy-700/50">
                        <div class="p-6 border-b border-navy-700/50">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-semibold text-white">Status Sertifikat Peserta</h3>
                                <div class="flex space-x-3">
                                    <select id="certificateStatusFilter" class="px-4 py-2 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" onchange="filterByCertificateStatus()">
                                        <option value="" class="bg-gray-800">Semua Status</option>
                                        <option value="eligible" class="bg-gray-800">Memenuhi Syarat</option>
                                        <option value="issued" class="bg-gray-800">Sudah Terbit</option>
                                        <option value="not_eligible" class="bg-gray-800">Belum Memenuhi</option>
                                    </select>
                                    <button onclick="bulkIssueCertificates()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                                        <i class="fas fa-certificate mr-2"></i>
                                        Terbitkan Massal
                                    </button>
                                    <button onclick="exportCertificateData()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors duration-200">
                                        <i class="fas fa-download mr-2"></i>
                                        Export
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-navy-700/50">
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Peserta</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Batch</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Progress</th>
            
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Status Sertifikat</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Tanggal Terbit</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Feedback</th>
                                            <th class="text-left py-3 px-4 text-blue-200 font-medium">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="certificateTableBody">
                                        <!-- Data will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bulk Input VA Modal -->
    <div id="bulkInputVAModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-navy-900/90 backdrop-blur-lg rounded-xl shadow-2xl w-full max-w-2xl border border-navy-700/50">
            <div class="p-6 border-b border-navy-700/50">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-bold text-white">Bulk Input Virtual Account</h3>
                    <button onclick="closeBulkInputVA()" class="text-white hover:text-blue-200">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
            </div>
            
            <div class="p-6">
                <div class="mb-4">
                    <p class="text-blue-200 text-sm mb-2">Format: NomorVA,Bank,AtasNama,Nominal (satu per baris)</p>
                    <p class="text-blue-300 text-xs">Contoh: 1234567890123456,BCA,UNDIP PEKERTI,2500000</p>
                </div>
                
                <form id="bulkInputVAForm">
                    <div class="mb-4">
                        <label class="block text-blue-200 text-sm font-medium mb-2">Data Virtual Account</label>
                        <textarea id="bulkVAData" rows="10" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="1234567890123456,BCA,UNDIP PEKERTI,2500000&#10;1234567890123457,BNI,UNDIP PEKERTI,2500000&#10;1234567890123458,BRI,UNDIP PEKERTI,2500000" required></textarea>
                    </div>
                    
                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeBulkInputVA()" class="px-6 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors duration-200">
                            Batal
                        </button>
                        <button type="submit" class="px-6 py-2 bg-purple-500 hover:bg-purple-600 text-white rounded-lg transition-colors duration-200">
                            <i class="fas fa-upload mr-2"></i>
                            Import Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Single VA Modal -->
    <div id="addVAModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-navy-900/90 backdrop-blur-lg rounded-xl shadow-2xl w-full max-w-md border border-navy-700/50">
            <div class="p-6 border-b border-navy-700/50">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-bold text-white">Tambah Virtual Account</h3>
                    <button onclick="closeAddVA()" class="text-white hover:text-blue-200">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
            </div>
            
            <div class="p-6">
                <form id="addVAForm">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">Nomor Virtual Account</label>
                            <input type="text" id="singleVANumber" maxlength="16" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="1234567890123456" required>
                        </div>
                        
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">Bank</label>
                            <select id="singleVABank" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                                <option value="" class="bg-gray-800">Pilih Bank</option>
                                <option value="BCA" class="bg-gray-800">BCA</option>
                                <option value="BNI" class="bg-gray-800">BNI</option>
                                <option value="BRI" class="bg-gray-800">BRI</option>
                                <option value="Mandiri" class="bg-gray-800">Mandiri</option>
                                <option value="BSI" class="bg-gray-800">BSI</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">Atas Nama</label>
                            <input type="text" id="singleVAName" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="UNDIP PEKERTI" required>
                        </div>
                        
                        <div>
                            <label class="block text-blue-200 text-sm font-medium mb-2">Nominal</label>
                            <input type="number" id="singleVAAmount" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="2500000" required>
                        </div>
                    </div>
                    
                    <div class="flex justify-end space-x-3 mt-6">
                        <button type="button" onclick="closeAddVA()" class="px-6 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors duration-200">
                            Batal
                        </button>
                        <button type="submit" class="px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-colors duration-200">
                            <i class="fas fa-plus mr-2"></i>
                            Tambah VA
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Global variables
        let currentUser = null;
        let registeredUsers = [];
        let batchList = [];
        
        let materiList = [
            { id: 1, name: 'Peningkatan Pendidikan melalui Program PEKERTI', description: 'Pengenalan program PEKERTI dan tujuannya', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 2, name: 'Pendidikan Sebagai Sistem', description: 'Memahami pendidikan sebagai sistem yang terintegrasi', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 3, name: 'Etika dan Moral Pembelajaran', description: 'Prinsip etika dan moral dalam proses pembelajaran', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 4, name: 'Pengembangan Pribadi Dosen & Soft Skill', description: 'Pengembangan kepribadian dan keterampilan lunak dosen', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 5, name: 'Dasar Komunikasi & Keterampilan Mengajar', description: 'Komunikasi efektif dan teknik mengajar dasar', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 6, name: 'Teori Belajar & Motivasi', description: 'Teori pembelajaran dan motivasi belajar mahasiswa', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 7, name: 'Pembelajaran Masa Kini', description: 'Metode pembelajaran kontemporer dan modern', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 8, name: 'Model (Bentuk) Pembelajaran', description: 'Berbagai model dan bentuk pembelajaran', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 9, name: 'Model-Model Pembelajaran Inovatif', description: 'Inovasi dalam model pembelajaran', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 10, name: 'Konsep Dasar & Tata Cara Penyusunan Kurikulum', description: 'Dasar-dasar penyusunan kurikulum', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 11, name: 'Taksonomi Tujuan Pembelajaran', description: 'Klasifikasi tujuan pembelajaran', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 12, name: 'Analisis & Kompetensi Pembelajaran', description: 'Analisis kompetensi dalam pembelajaran', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 13, name: 'Penentuan Capaian Pembelajaran', description: 'Menetapkan capaian pembelajaran yang efektif', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 14, name: 'Penyusunan Rencana Pembelajaran Semester', description: 'Menyusun RPS yang komprehensif', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 15, name: 'Media & Sumber Belajar', description: 'Pemilihan dan penggunaan media pembelajaran', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 16, name: 'Prinsip Dasar Evaluasi', description: 'Dasar-dasar evaluasi pembelajaran', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 17, name: 'Metode Pemberian Tugas', description: 'Teknik pemberian tugas yang efektif', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 18, name: 'Penyusunan Kisi Soal', description: 'Menyusun kisi-kisi soal evaluasi', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 19, name: 'Kontrak Perkuliahan', description: 'Penyusunan kontrak perkuliahan', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 20, name: 'Team Teaching', description: 'Konsep dan implementasi team teaching', active: false, gdrive: '', accessed: 0, completed: [] },
            { id: 21, name: 'Micro Teaching', description: 'Praktik micro teaching untuk dosen', active: false, gdrive: '', accessed: 0, completed: [] }
        ];

        let recentActivities = [];
        let virtualAccounts = [];
        let jadwalData = { link: '', description: '', active: false };
        let tugasData = [
            { id: 1, name: 'RPS (Rencana Pembelajaran Semester)', description: 'Menyusun RPS sesuai kurikulum yang berlaku', deadline: '2025-02-28', active: false, submissions: [] },
            { id: 2, name: 'Kontrak Kuliah', description: 'Membuat kontrak perkuliahan dengan mahasiswa', deadline: '2025-03-15', active: false, submissions: [] },
            { id: 3, name: 'Video Microteaching', description: 'Rekaman video praktik mengajar 15 menit', deadline: '2025-04-01', active: false, submissions: [] },
            { id: 4, name: 'Butir Soal', description: 'Menyusun kisi-kisi dan butir soal evaluasi', deadline: '2025-04-15', active: false, submissions: [] },
            { id: 5, name: 'Penilaian Hasil Belajar', description: 'Sistem penilaian dan rubrik penilaian', deadline: '2025-04-30', active: false, submissions: [] }
        ];
        let testData = {
            preTest: { link: '', active: false, description: 'Pre-test untuk mengukur kemampuan awal' },
            postTest: { link: '', active: false, description: 'Post-test untuk mengukur kemampuan akhir' }
        };

        // Initialize system
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize sample data
            addSampleData();
            addSampleVAData();
            
            // Initialize with empty batch list
            batchList = [];
            
            updateDashboardStats();
            populateRecentActivity();
        });

        function addSampleData() {
            // Initialize with empty data
            registeredUsers = [];
            recentActivities = [];
        }

        function addSampleVAData() {
            // Initialize with empty virtual accounts
            virtualAccounts = [];
        }

        // Utility functions
        function showNotification(message, type = 'success') {
            const notification = document.getElementById('notification');
            const notificationText = document.getElementById('notification-text');
            const notificationDiv = notification.querySelector('div');
            
            notificationText.textContent = message;
            
            if (type === 'success') {
                notificationDiv.className = 'bg-white border-l-4 border-green-500 rounded-lg shadow-lg p-4 max-w-sm';
                notificationDiv.querySelector('i').className = 'fas fa-check-circle text-green-500';
            } else if (type === 'error') {
                notificationDiv.className = 'bg-white border-l-4 border-red-500 rounded-lg shadow-lg p-4 max-w-sm';
                notificationDiv.querySelector('i').className = 'fas fa-exclamation-circle text-red-500';
            } else if (type === 'warning') {
                notificationDiv.className = 'bg-white border-l-4 border-yellow-500 rounded-lg shadow-lg p-4 max-w-sm';
                notificationDiv.querySelector('i').className = 'fas fa-exclamation-triangle text-yellow-500';
            }
            
            notification.classList.remove('hidden');
            setTimeout(() => {
                notification.classList.add('hidden');
            }, 4000);
        }

        function hideNotification() {
            document.getElementById('notification').classList.add('hidden');
        }

        function showLoading() {
            document.getElementById('loadingOverlay').classList.remove('hidden');
        }

        function hideLoading() {
            document.getElementById('loadingOverlay').classList.add('hidden');
        }

        function hideAllPages() {
            const pages = ['landingPage', 'createAccount', 'registrationForm', 'loginPeserta', 'loginAdmin', 'dashboardPeserta', 'dashboardAdmin', 'pesertaMateri', 'pesertaTest', 'pesertaTugas', 'pesertaProfil', 'pesertaFeedback', 'uploadDocuments'];
            pages.forEach(page => {
                const element = document.getElementById(page);
                if (element) element.classList.add('hidden');
            });
        }

        function showUploadDocuments() {
            hideAllPages();
            document.getElementById('uploadDocuments').classList.remove('hidden');
            
            // Update welcome message and VA info
            if (currentUser) {
                document.getElementById('uploadWelcomeUser').textContent = `Selamat datang, ${currentUser.fullName || currentUser.username}!`;
                document.getElementById('uploadVANumber').textContent = currentUser.assignedVA || '-';
                document.getElementById('uploadVABank').textContent = currentUser.assignedVABank || 'BCA';
                
                // Check if files already uploaded
                if (currentUser.transferProofUploaded) {
                    document.getElementById('uploadTransferProofStatus').classList.remove('hidden');
                    document.getElementById('uploadTransferFileName').textContent = currentUser.paymentProof || 'File sudah diupload';
                }
                
                if (currentUser.officialPhotoUploaded) {
                    document.getElementById('uploadOfficialPhotoStatus').classList.remove('hidden');
                    document.getElementById('uploadPhotoFileName').textContent = currentUser.officialPhoto || 'File sudah diupload';
                }
                
                updateContinueButton();
            }
        }

        function skipUpload() {
            if (confirm('Anda yakin ingin melewati upload dokumen? Anda dapat mengupload nanti di dashboard.')) {
                showDashboardPeserta();
            }
        }

        function continueToProfile() {
            showDashboardPeserta();
        }

        function updateContinueButton() {
            const continueBtn = document.getElementById('continueBtn');
            if (continueBtn) {
                const hasTransfer = currentUser && currentUser.transferProofUploaded;
                const hasPhoto = currentUser && currentUser.officialPhotoUploaded;
                
                if (hasTransfer && hasPhoto) {
                    continueBtn.disabled = false;
                    continueBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                    continueBtn.innerHTML = '<i class="fas fa-check mr-2"></i>Lanjut ke Dashboard';
                } else {
                    continueBtn.disabled = true;
                    continueBtn.classList.add('opacity-50', 'cursor-not-allowed');
                    continueBtn.innerHTML = '<i class="fas fa-clock mr-2"></i>Upload Dokumen Dulu';
                }
            }
        }

        // Navigation functions
        function showLandingPage() {
            hideAllPages();
            document.getElementById('landingPage').classList.remove('hidden');
        }

        function showCreateAccount() {
            hideAllPages();
            document.getElementById('createAccount').classList.remove('hidden');
        }

        function showLoginPeserta() {
            hideAllPages();
            document.getElementById('loginPeserta').classList.remove('hidden');
        }

        function showLoginAdmin() {
            hideAllPages();
            document.getElementById('loginAdmin').classList.remove('hidden');
        }

        function showRegistrationForm() {
            hideAllPages();
            document.getElementById('registrationForm').classList.remove('hidden');
            
            // Populate readonly fields and account info
            document.getElementById('regNik').value = currentUser.nik;
            document.getElementById('regUsername').value = currentUser.username;
            document.getElementById('displayUsername').textContent = currentUser.username;
            document.getElementById('displayPassword').textContent = currentUser.password;
            
            // Update batch dropdown
            updateBatchDropdown();
        }

        function showDashboardPeserta() {
            hideAllPages();
            document.getElementById('dashboardPeserta').classList.remove('hidden');
            
            // Update welcome message
            if (currentUser && currentUser.fullName) {
                document.getElementById('welcomeUser').textContent = `Selamat datang, ${currentUser.fullName}!`;
            }
            
            updatePesertaProgress();
            updatePesertaStatus();
            updateMenuLocks();
        }

        function showDashboardAdmin() {
            hideAllPages();
            document.getElementById('dashboardAdmin').classList.remove('hidden');
            updateDashboardStats();
            populatePesertaTable();
            populateRecentActivity();
        }

        function showPesertaSection(section) {
            // Check verification status for locked sections
            const lockedSections = ['jadwal', 'materi', 'test', 'tugas', 'sertifikat', 'feedback'];
            if (lockedSections.includes(section) && (!currentUser || !currentUser.verified)) {
                showNotification('Anda harus terverifikasi admin untuk mengakses fitur ini', 'warning');
                return;
            }
            
            if (section === 'materi') {
                hideAllPages();
                document.getElementById('pesertaMateri').classList.remove('hidden');
                
                if (currentUser && currentUser.fullName) {
                    document.getElementById('materiWelcomeUser').textContent = `Selamat datang, ${currentUser.fullName}!`;
                }
                
                populatePesertaMateriGrid();
            } else if (section === 'test') {
                hideAllPages();
                document.getElementById('pesertaTest').classList.remove('hidden');
                
                if (currentUser && currentUser.fullName) {
                    document.getElementById('testWelcomeUser').textContent = `Selamat datang, ${currentUser.fullName}!`;
                }
                
                updateTestStatus();
            } else if (section === 'tugas') {
                hideAllPages();
                document.getElementById('pesertaTugas').classList.remove('hidden');
                
                if (currentUser && currentUser.fullName) {
                    document.getElementById('tugasWelcomeUser').textContent = `Selamat datang, ${currentUser.fullName}!`;
                }
                
                populatePesertaTugasGrid();
            } else if (section === 'jadwal') {
                if (jadwalData.active && jadwalData.link) {
                    window.open(jadwalData.link, '_blank');
                    showNotification('Membuka jadwal pelatihan');
                } else {
                    showNotification('Jadwal belum tersedia atau belum diaktifkan', 'warning');
                }
            } else if (section === 'profil') {
                hideAllPages();
                document.getElementById('pesertaProfil').classList.remove('hidden');
                
                if (currentUser && currentUser.fullName) {
                    document.getElementById('profilWelcomeUser').textContent = `Selamat datang, ${currentUser.fullName}!`;
                }
                
                populateProfilForm();
            } else if (section === 'feedback') {
                // Check if user has completed all requirements
                if (!canAccessFeedback()) {
                    showNotification('Anda harus menyelesaikan semua materi, test, dan tugas untuk mengisi feedback', 'warning');
                    return;
                }
                
                hideAllPages();
                document.getElementById('pesertaFeedback').classList.remove('hidden');
                
                if (currentUser && currentUser.fullName) {
                    document.getElementById('feedbackWelcomeUser').textContent = `Selamat datang, ${currentUser.fullName}!`;
                }
                
                populateFeedbackForm();
            } else if (section === 'sertifikat') {
                // Check if user has completed all requirements
                const materiCompleted = currentUser.materiCompleted ? currentUser.materiCompleted.length : 0;
                const tugasCompleted = currentUser.tugasCompleted ? currentUser.tugasCompleted.length : 0;
                const testCompleted = currentUser.testCompleted ? currentUser.testCompleted.length : 0;
                const hasCompletedAll = materiCompleted === 21 && tugasCompleted === 5 && testCompleted === 2;
                
                if (!hasCompletedAll) {
                    showNotification('Anda harus menyelesaikan semua materi, test, dan tugas terlebih dahulu', 'warning');
                    return;
                }
                
                // Check if feedback is submitted
                const hasFeedback = currentUser.feedback && Object.keys(currentUser.feedback).length > 0;
                if (!hasFeedback) {
                    showNotification('Anda harus mengisi feedback evaluasi terlebih dahulu sebelum mengunduh sertifikat', 'warning');
                    return;
                }
                
                // Check if certificate is issued
                if (!canDownloadCertificate()) {
                    showNotification('Sertifikat dapat diunduh setelah menyelesaikan semua materi, test, tugas, dan feedback', 'warning');
                    return;
                }
                
                if (currentUser.certificateIssued) {
                    // Simulate certificate download
                    showNotification('Sertifikat berhasil diunduh!');
                } else {
                    showNotification('Sertifikat belum diterbitkan oleh admin', 'warning');
                }
            } else {
                showNotification(`Fitur ${section.charAt(0).toUpperCase() + section.slice(1)} akan segera tersedia`);
            }
        }

        function logout() {
            currentUser = null;
            showNotification('Logout berhasil');
            showLandingPage();
        }

        // Form handlers
        document.getElementById('createAccountForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const nik = document.getElementById('nik').value;
            const username = document.getElementById('username').value;
            
            // Validate NIK
            if (nik.length !== 16) {
                showNotification('NIK harus 16 digit', 'error');
                return;
            }
            
            // Check if username already exists
            if (registeredUsers.find(user => user.username === username)) {
                showNotification('Username sudah digunakan', 'error');
                return;
            }
            
            // Generate password using formula: username + last 5 digits of NIK
            const password = generatePassword(username, nik);
            
            // Create temporary user
            currentUser = {
                nik: nik,
                username: username,
                password: password
            };
            
            showNotification(`Password Anda: ${password}. Silakan catat dan lanjutkan pendaftaran.`);
            
            setTimeout(() => {
                showRegistrationForm();
            }, 2000);
        });

        document.getElementById('registrationFormData').addEventListener('submit', function(e) {
            e.preventDefault();
            
            showLoading();
            
            // Get form data
            const formData = {
                nik: currentUser.nik,
                username: currentUser.username,
                password: currentUser.password,
                fullName: document.getElementById('fullName').value,
                nip: document.getElementById('nip').value,
                email: document.getElementById('email').value,
                whatsapp: document.getElementById('whatsapp').value,
                instansi: document.getElementById('instansi').value,
                fakultas: document.getElementById('fakultas').value,
                jurusan: document.getElementById('jurusan').value,
                jabatan: document.getElementById('jabatan').value,
                batch: document.getElementById('batch').value,
                verified: false,
                paymentStatus: 'pending',
                paymentAmount: 2500000,
                assignedVA: 'VA' + Math.random().toString().substr(2, 8),
                certificateIssued: false,
                materiCompleted: [],
                tugasCompleted: [],
                testCompleted: [],
                registrationDate: new Date().toISOString()
            };
            
            // Assign available VA
            const availableVA = virtualAccounts.find(va => va.status === 'available');
            if (availableVA) {
                availableVA.status = 'assigned';
                availableVA.assignedTo = formData.username;
                availableVA.assignedDate = new Date().toISOString();
                formData.assignedVA = availableVA.number;
                formData.assignedVABank = availableVA.bank;
            } else {
                // Generate random VA if no available VA
                formData.assignedVA = 'VA' + Math.random().toString().substr(2, 8);
                formData.assignedVABank = 'BCA';
            }
            
            // Add to registered users
            registeredUsers.push(formData);
            currentUser = formData;
            
            // Update batch count
            const selectedBatch = batchList.find(batch => batch.name === formData.batch);
            if (selectedBatch) {
                selectedBatch.registered++;
            }
            
            // Add activity
            addActivity('registration', `${formData.fullName} mendaftar ke ${formData.batch}`, 'fas fa-user-plus', 'text-blue-400');
            
            setTimeout(() => {
                hideLoading();
                showNotification('Pendaftaran berhasil! Silakan upload bukti transfer dan foto resmi.');
                showUploadDocuments();
            }, 2000);
        });

        document.getElementById('loginPesertaForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('loginPesertaUsername').value;
            const password = document.getElementById('loginPesertaPassword').value;
            
            const user = registeredUsers.find(u => u.username === username && u.password === password);
            
            if (user) {
                currentUser = user;
                showNotification(`Selamat datang kembali, ${user.fullName || user.username}!`);
                showDashboardPeserta();
            } else {
                showNotification('Username atau password salah', 'error');
            }
        });

        document.getElementById('loginAdminForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('loginAdminUsername').value;
            const password = document.getElementById('loginAdminPassword').value;
            
            if (username === 'admin' && password === 'Adm!nUndip2025') {
                currentUser = { username: 'admin', role: 'admin' };
                showNotification('Login admin berhasil');
                showDashboardAdmin();
            } else {
                showNotification('Username atau password admin salah', 'error');
            }
        });

        // Helper functions
        function generatePassword(username, nik) {
            // Password formula: username + last 5 digits of NIK
            const last5Digits = nik.slice(-5);
            return username + last5Digits;
        }

        function updateBatchDropdown() {
            const batchSelect = document.getElementById('batch');
            if (!batchSelect) return;
            
            // Clear existing options except the first one
            batchSelect.innerHTML = '<option value="" class="bg-gray-800">Pilih Batch</option>';
            
            // Add batches that are open for registration
            batchList.forEach(batch => {
                if (batch.status === 'Buka' && batch.registered < batch.quota) {
                    const option = document.createElement('option');
                    option.value = batch.name;
                    option.textContent = `${batch.name} (${batch.registered}/${batch.quota})`;
                    option.className = 'bg-gray-800';
                    batchSelect.appendChild(option);
                }
            });
        }

        function updatePesertaStatus() {
            if (!currentUser) return;
            
            // Update verification status
            const verificationStatus = document.getElementById('verificationStatus');
            if (verificationStatus) {
                if (currentUser.verified) {
                    verificationStatus.textContent = 'Terverifikasi';
                    verificationStatus.className = 'px-2 py-1 rounded-full text-xs bg-green-500/20 text-green-200';
                } else {
                    verificationStatus.textContent = 'Menunggu';
                    verificationStatus.className = 'px-2 py-1 rounded-full text-xs bg-yellow-500/20 text-yellow-200';
                }
            }
            
            // Update payment status
            const paymentStatusBadge = document.getElementById('paymentStatusBadge');
            if (paymentStatusBadge) {
                const statusText = {
                    'pending': 'Menunggu',
                    'verified': 'Terverifikasi',
                    'rejected': 'Ditolak'
                };
                
                const statusClass = {
                    'pending': 'px-2 py-1 rounded-full text-xs bg-yellow-500/20 text-yellow-200',
                    'verified': 'px-2 py-1 rounded-full text-xs bg-green-500/20 text-green-200',
                    'rejected': 'px-2 py-1 rounded-full text-xs bg-red-500/20 text-red-200'
                };
                
                paymentStatusBadge.textContent = statusText[currentUser.paymentStatus] || 'Menunggu';
                paymentStatusBadge.className = statusClass[currentUser.paymentStatus] || statusClass['pending'];
            }
            
            // Update VA number and bank
            const vaNumber = document.getElementById('vaNumber');
            if (vaNumber) {
                const vaText = currentUser.assignedVA ? `${currentUser.assignedVA} (${currentUser.assignedVABank || 'BCA'})` : '-';
                vaNumber.textContent = vaText;
            }
            
            // Update uploaded files status
            if (currentUser.transferProofUploaded) {
                const transferStatus = document.getElementById('transferProofStatus');
                const transferFileName = document.getElementById('transferProofFileName');
                if (transferStatus && transferFileName) {
                    transferStatus.classList.remove('hidden');
                    transferFileName.textContent = currentUser.paymentProof || 'File sudah diupload';
                }
            }
            
            if (currentUser.officialPhotoUploaded) {
                const photoStatus = document.getElementById('officialPhotoStatus');
                const photoFileName = document.getElementById('officialPhotoFileName');
                if (photoStatus && photoFileName) {
                    photoStatus.classList.remove('hidden');
                    photoFileName.textContent = currentUser.officialPhoto || 'File sudah diupload';
                }
            }
        }

        function updateMenuLocks() {
            if (!currentUser) return;
            
            const lockElements = ['jadwalLock', 'materiLock', 'testLock', 'tugasLock', 'sertifikatLock', 'feedbackLock'];
            
            lockElements.forEach(lockId => {
                const lockElement = document.getElementById(lockId);
                if (lockElement) {
                    if (currentUser.verified) {
                        lockElement.innerHTML = '<i class="fas fa-unlock text-green-400"></i>';
                    } else {
                        lockElement.innerHTML = '<i class="fas fa-lock text-yellow-400"></i>';
                    }
                }
            });
        }

        function handleFileUpload(fileType) {
            const fileInput = document.getElementById(fileType);
            const statusElement = document.getElementById(fileType + 'Status');
            
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const maxSize = fileType === 'transferProof' ? 5 * 1024 * 1024 : 2 * 1024 * 1024; // 5MB for transfer proof, 2MB for photo
                
                if (file.size > maxSize) {
                    showNotification(`File terlalu besar. Maksimal ${fileType === 'transferProof' ? '5MB' : '2MB'}`, 'error');
                    fileInput.value = '';
                    return;
                }
                
                // Simulate upload
                showLoading();
                setTimeout(() => {
                    hideLoading();
                    statusElement.classList.remove('hidden');
                    
                    // Update status text with filename
                    const fileNameSpan = statusElement.querySelector('#' + fileType + 'FileName');
                    if (fileNameSpan) {
                        fileNameSpan.textContent = file.name;
                    }
                    
                    // Update user data
                    if (fileType === 'transferProof') {
                        currentUser.transferProofUploaded = true;
                        currentUser.paymentProof = file.name;
                    } else if (fileType === 'officialPhoto') {
                        currentUser.officialPhotoUploaded = true;
                        currentUser.officialPhoto = file.name;
                    }
                    
                    // Update in registered users array
                    const userIndex = registeredUsers.findIndex(u => u.username === currentUser.username);
                    if (userIndex !== -1) {
                        registeredUsers[userIndex] = currentUser;
                    }
                    
                    showNotification(`${file.name} berhasil diupload`);
                }, 1500);
            }
        }

        function handleUploadFileUpload(fileType) {
            const fileInput = document.getElementById(fileType);
            const statusElement = document.getElementById(fileType + 'Status');
            const fileNameElement = document.getElementById(fileType === 'uploadTransferProof' ? 'uploadTransferFileName' : 'uploadPhotoFileName');
            
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const maxSize = fileType === 'uploadTransferProof' ? 5 * 1024 * 1024 : 2 * 1024 * 1024; // 5MB for transfer proof, 2MB for photo
                
                if (file.size > maxSize) {
                    showNotification(`File terlalu besar. Maksimal ${fileType === 'uploadTransferProof' ? '5MB' : '2MB'}`, 'error');
                    fileInput.value = '';
                    return;
                }
                
                // Validate image type for photo
                if (fileType === 'uploadOfficialPhoto' && !file.type.startsWith('image/')) {
                    showNotification('File harus berupa gambar', 'error');
                    fileInput.value = '';
                    return;
                }
                
                // Simulate upload
                showLoading();
                setTimeout(() => {
                    hideLoading();
                    statusElement.classList.remove('hidden');
                    fileNameElement.textContent = file.name;
                    
                    // Update user data
                    if (fileType === 'uploadTransferProof') {
                        currentUser.transferProofUploaded = true;
                        currentUser.paymentProof = file.name;
                        currentUser.paymentDate = new Date().toISOString();
                    } else if (fileType === 'uploadOfficialPhoto') {
                        currentUser.officialPhotoUploaded = true;
                        currentUser.officialPhoto = file.name;
                    }
                    
                    // Update in registered users array
                    const userIndex = registeredUsers.findIndex(u => u.username === currentUser.username);
                    if (userIndex !== -1) {
                        registeredUsers[userIndex] = currentUser;
                    }
                    
                    showNotification(`${file.name} berhasil diupload`);
                    updateContinueButton();
                }, 1500);
            }
        }

        function downloadFile(fileType) {
            if (!currentUser) return;
            
            let fileName = '';
            if (fileType === 'transferProof' && currentUser.paymentProof) {
                fileName = currentUser.paymentProof;
            } else if (fileType === 'officialPhoto' && currentUser.officialPhoto) {
                fileName = currentUser.officialPhoto;
            }
            
            if (fileName) {
                // Simulate file download
                showNotification(`Mengunduh ${fileName}...`);
                // In real implementation, this would trigger actual file download
            } else {
                showNotification('File tidak ditemukan', 'error');
            }
        }

        function downloadDashboardFile(fileType) {
            if (!currentUser) return;
            
            let fileName = '';
            if (fileType === 'transferProof' && currentUser.paymentProof) {
                fileName = currentUser.paymentProof;
            } else if (fileType === 'officialPhoto' && currentUser.officialPhoto) {
                fileName = currentUser.officialPhoto;
            }
            
            if (fileName) {
                // Simulate file download
                showNotification(`Mengunduh ${fileName}...`);
                // In real implementation, this would trigger actual file download
            } else {
                showNotification('File tidak ditemukan', 'error');
            }
        }

        function handleProfilePhotoUpload() {
            const fileInput = document.getElementById('editOfficialPhoto');
            const statusElement = document.getElementById('editPhotoStatus');
            const fileNameElement = document.getElementById('editPhotoFileName');
            
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const maxSize = 2 * 1024 * 1024; // 2MB
                
                if (file.size > maxSize) {
                    showNotification('File terlalu besar. Maksimal 2MB', 'error');
                    fileInput.value = '';
                    return;
                }
                
                // Validate image type
                if (!file.type.startsWith('image/')) {
                    showNotification('File harus berupa gambar', 'error');
                    fileInput.value = '';
                    return;
                }
                
                // Simulate upload
                showLoading();
                setTimeout(() => {
                    hideLoading();
                    statusElement.classList.remove('hidden');
                    fileNameElement.textContent = file.name;
                    
                    // Update user data
                    if (currentUser) {
                        currentUser.officialPhotoUploaded = true;
                        currentUser.officialPhoto = file.name;
                        
                        // Update in registered users array
                        const userIndex = registeredUsers.findIndex(u => u.username === currentUser.username);
                        if (userIndex !== -1) {
                            registeredUsers[userIndex] = currentUser;
                        }
                        
                        // Update photo preview
                        populateProfilForm();
                    }
                    
                    showNotification(`${file.name} berhasil diupload`);
                }, 1500);
            }
        }

        function populateProfilForm() {
            if (!currentUser) return;
            
            document.getElementById('editUsername').value = currentUser.username || '';
            document.getElementById('editPassword').value = currentUser.password || '';
            document.getElementById('editNip').value = currentUser.nip || '';
            document.getElementById('editFullName').value = currentUser.fullName || '';
            document.getElementById('editEmail').value = currentUser.email || '';
            document.getElementById('editWhatsapp').value = currentUser.whatsapp || '';
            document.getElementById('editInstansi').value = currentUser.instansi || '';
            document.getElementById('editFakultas').value = currentUser.fakultas || '';
            document.getElementById('editJurusan').value = currentUser.jurusan || '';
            document.getElementById('editJabatan').value = currentUser.jabatan || '';
            
            // Display current photo if exists
            const photoPreview = document.getElementById('currentPhotoPreview');
            if (currentUser.officialPhoto) {
                photoPreview.innerHTML = `
                    <div class="text-center">
                        <div class="w-32 h-40 mx-auto bg-red-500 rounded-lg flex items-end justify-center overflow-hidden mb-2 relative" style="background: linear-gradient(to bottom, #dc2626 0%, #b91c1c 100%);">
                            <div class="w-full h-32 bg-blue-100 rounded-t-lg flex items-center justify-center relative">
                                <div class="w-20 h-20 bg-blue-300 rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-2xl text-blue-600"></i>
                                </div>
                                <div class="absolute top-1 right-1 bg-green-500 rounded-full w-4 h-4 flex items-center justify-center">
                                    <i class="fas fa-check text-white text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-green-200 text-sm">
                            <i class="fas fa-check-circle mr-1"></i>
                            Foto Sudah Diupload
                        </p>
                        <p class="text-blue-300 text-xs">${currentUser.officialPhoto}</p>
                    </div>
                `;
            } else {
                photoPreview.innerHTML = `
                    <div class="text-center">
                        <div class="w-32 h-40 mx-auto bg-red-500 rounded-lg flex items-end justify-center overflow-hidden mb-2" style="background: linear-gradient(to bottom, #dc2626 0%, #b91c1c 100%);">
                            <div class="w-full h-32 bg-gray-300 rounded-t-lg flex items-center justify-center">
                                <i class="fas fa-user text-4xl text-gray-500"></i>
                            </div>
                        </div>
                        <p class="text-blue-200 text-sm">Belum ada foto</p>
                        <p class="text-blue-300 text-xs">Upload foto untuk sertifikat</p>
                    </div>
                `;
            }
        }

        function populateFeedbackForm() {
            if (!currentUser || !currentUser.feedback) return;
            
            // Populate existing feedback if any
            const feedback = currentUser.feedback;
            if (feedback.narasumber) document.querySelector(`input[name="narasumber"][value="${feedback.narasumber}"]`).checked = true;
            if (feedback.materi) document.querySelector(`input[name="materi"][value="${feedback.materi}"]`).checked = true;
            if (feedback.media) document.querySelector(`input[name="media"][value="${feedback.media}"]`).checked = true;
            if (feedback.penilaian) document.querySelector(`input[name="penilaian"][value="${feedback.penilaian}"]`).checked = true;
            if (feedback.manfaat) document.querySelector(`input[name="manfaat"][value="${feedback.manfaat}"]`).checked = true;
            if (feedback.comment) document.getElementById('feedbackComment').value = feedback.comment;
        }

        function canAccessFeedback() {
            if (!currentUser || !currentUser.verified) return false;
            
            const materiCompleted = currentUser.materiCompleted ? currentUser.materiCompleted.length : 0;
            const tugasCompleted = currentUser.tugasCompleted ? currentUser.tugasCompleted.length : 0;
            const testCompleted = currentUser.testCompleted ? currentUser.testCompleted.length : 0;
            
            return materiCompleted === 21 && tugasCompleted === 5 && testCompleted === 2;
        }

        function canDownloadCertificate() {
            if (!currentUser || !currentUser.verified) return false;
            
            // Must complete all materials, tests, and assignments
            const materiCompleted = currentUser.materiCompleted ? currentUser.materiCompleted.length : 0;
            const tugasCompleted = currentUser.tugasCompleted ? currentUser.tugasCompleted.length : 0;
            const testCompleted = currentUser.testCompleted ? currentUser.testCompleted.length : 0;
            
            const hasCompletedAll = materiCompleted === 21 && tugasCompleted === 5 && testCompleted === 2;
            
            // Must have submitted feedback
            const hasFeedback = currentUser.feedback && Object.keys(currentUser.feedback).length > 0;
            
            return hasCompletedAll && hasFeedback;
        }

        function addActivity(type, message, icon, color) {
            recentActivities.unshift({
                type: type,
                message: message,
                time: 'Baru saja',
                icon: icon,
                color: color
            });
            
            // Keep only last 10 activities
            if (recentActivities.length > 10) {
                recentActivities = recentActivities.slice(0, 10);
            }
            
            populateRecentActivity();
        }

        function updatePesertaProgress() {
            if (!currentUser) return;
            
            const materiCompleted = currentUser.materiCompleted ? currentUser.materiCompleted.length : 0;
            const tugasCompleted = currentUser.tugasCompleted ? currentUser.tugasCompleted.length : 0;
            const testCompleted = currentUser.testCompleted ? currentUser.testCompleted.length : 0;
            
            const totalItems = 21 + 5 + 2; // 21 materi + 5 tugas + 2 test
            const completedItems = materiCompleted + tugasCompleted + testCompleted;
            const overallProgress = Math.round((completedItems / totalItems) * 100);
            
            document.getElementById('materiProgress').textContent = `${materiCompleted}/21`;
            document.getElementById('tugasProgress').textContent = `${tugasCompleted}/5`;
            document.getElementById('testProgress').textContent = `${testCompleted}/2`;
            document.getElementById('overallProgress').textContent = `${overallProgress}%`;
            document.getElementById('progressBar').style.width = `${overallProgress}%`;
        }

        function populatePesertaMateriGrid() {
            const grid = document.getElementById('pesertaMateriGrid');
            let html = '';
            
            materiList.forEach(materi => {
                const isCompleted = currentUser && currentUser.materiCompleted && currentUser.materiCompleted.includes(materi.id);
                const isAccessible = materi.active && materi.gdrive && materi.gdrive.trim() !== '';
                const isVerified = currentUser && currentUser.verified;
                const completedClass = isCompleted ? 'border-green-400 bg-green-500/10' : 'border-navy-600/50';
                const accessibleClass = isAccessible && isVerified ? 'cursor-pointer hover:border-blue-400' : 'opacity-50 cursor-not-allowed';
                
                let statusText = '';
                let statusIcon = '';
                let statusColor = '';
                
                if (!materi.active) {
                    statusText = 'Terkunci';
                    statusIcon = 'lock';
                    statusColor = 'text-gray-400';
                } else if (!isVerified) {
                    statusText = 'Perlu Verifikasi';
                    statusIcon = 'user-check';
                    statusColor = 'text-yellow-400';
                } else if (!materi.gdrive || materi.gdrive.trim() === '') {
                    statusText = 'Link Belum Tersedia';
                    statusIcon = 'link';
                    statusColor = 'text-orange-400';
                } else {
                    statusText = 'Tersedia';
                    statusIcon = 'unlock';
                    statusColor = 'text-green-200';
                }
                
                html += `
                    <div class="bg-navy-800/50 backdrop-blur-lg rounded-xl p-6 border ${completedClass} ${accessibleClass} transition-all duration-300" ${isAccessible && isVerified ? `onclick="accessMateri(${materi.id})"` : ''}>
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex-1">
                                <h4 class="text-white font-medium text-lg mb-2">${materi.name}</h4>
                                <p class="text-blue-200 text-sm mb-3">${materi.description}</p>
                                <div class="flex items-center space-x-4 text-xs">
                                    <span class="${statusColor}">
                                        <i class="fas fa-${statusIcon} mr-1"></i>
                                        ${statusText}
                                    </span>
                                    ${isCompleted ? '<span class="text-green-200"><i class="fas fa-check-circle mr-1"></i>Selesai</span>' : ''}
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-2xl ${isCompleted ? 'text-green-400' : isAccessible && isVerified ? 'text-blue-400' : 'text-gray-500'}">
                                    <i class="fas fa-${isCompleted ? 'check-circle' : isAccessible && isVerified ? 'play-circle' : 'lock'}"></i>
                                </div>
                            </div>
                        </div>
                        ${isAccessible && isVerified ? `
                            <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition-colors duration-200 text-sm font-medium">
                                <i class="fas fa-${isCompleted ? 'eye' : 'play'} mr-2"></i>
                                ${isCompleted ? 'Lihat Ulang' : 'Mulai Belajar'}
                            </button>
                        ` : `
                            <button class="w-full bg-gray-600 text-gray-400 py-2 px-4 rounded-lg cursor-not-allowed text-sm font-medium" disabled>
                                <i class="fas fa-lock mr-2"></i>
                                ${!isVerified ? 'Perlu Verifikasi' : !materi.active ? 'Belum Tersedia' : 'Link Belum Ada'}
                            </button>
                        `}
                    </div>
                `;
            });
            
            grid.innerHTML = html;
        }

        function accessMateri(materiId) {
            const materi = materiList.find(m => m.id === materiId);
            if (!materi || !materi.active) {
                showNotification('Materi belum tersedia', 'warning');
                return;
            }
            
            // Check if user is verified
            if (!currentUser || !currentUser.verified) {
                showNotification('Anda harus terverifikasi untuk mengakses materi', 'warning');
                return;
            }
            
            // Check if material has Google Drive link
            if (!materi.gdrive || materi.gdrive.trim() === '') {
                showNotification('Link materi belum tersedia', 'warning');
                return;
            }
            
            // Mark as accessed
            materi.accessed++;
            
            // Mark as completed for current user
            if (currentUser && (!currentUser.materiCompleted || !currentUser.materiCompleted.includes(materiId))) {
                if (!currentUser.materiCompleted) currentUser.materiCompleted = [];
                currentUser.materiCompleted.push(materiId);
                
                // Update in registered users array
                const userIndex = registeredUsers.findIndex(u => u.username === currentUser.username);
                if (userIndex !== -1) {
                    registeredUsers[userIndex] = currentUser;
                }
                
                showNotification(`Selamat! Anda telah menyelesaikan "${materi.name}"`);
                addActivity('completion', `${currentUser.fullName} menyelesaikan ${materi.name}`, 'fas fa-check-circle', 'text-purple-400');
            }
            
            // Open material in new tab
            window.open(materi.gdrive, '_blank');
            showNotification(`Membuka materi: ${materi.name}`);
            
            // Refresh the grid and progress
            populatePesertaMateriGrid();
            updatePesertaProgress();
        }

        // Admin functions
        function showAdminSection(section) {
            // Hide all admin sections
            const sections = ['adminDashboard', 'adminPeserta', 'adminBatch', 'adminPembayaran', 'adminVirtualaccount', 'adminJadwal', 'adminMateri', 'adminTest', 'adminUsers', 'adminSertifikat'];
            sections.forEach(s => {
                const element = document.getElementById(s);
                if (element) element.classList.add('hidden');
            });
            
            // Remove active class from all menu items
            document.querySelectorAll('.admin-menu-item').forEach(item => {
                item.classList.remove('bg-blue-600/30', 'border-l-4', 'border-blue-400', 'text-white');
                item.classList.add('text-blue-200');
                const icon = item.querySelector('i');
                if (icon) icon.classList.remove('text-blue-400');
            });
            
            // Show selected section
            const targetSection = document.getElementById(`admin${section.charAt(0).toUpperCase() + section.slice(1)}`);
            if (targetSection) targetSection.classList.remove('hidden');
            
            // Add active class to clicked menu item
            const activeItem = event.target.closest('.admin-menu-item');
            if (activeItem) {
                activeItem.classList.add('bg-blue-600/30', 'border-l-4', 'border-blue-400', 'text-white');
                activeItem.classList.remove('text-blue-200');
                const icon = activeItem.querySelector('i');
                if (icon) icon.classList.add('text-blue-400');
            }

            // Load section-specific data
            if (section === 'dashboard') {
                updateDashboardStats();
                populateRecentActivity();
            } else if (section === 'peserta') {
                populatePesertaTable();
            } else if (section === 'virtualaccount') {
                populateVATable();
            } else if (section === 'batch') {
                populateBatchTable();
            } else if (section === 'pembayaran') {
                populatePaymentTable();
            } else if (section === 'jadwal') {
                populateJadwalData();
            } else if (section === 'materi') {
                populateAdminMateriGrid();
            } else if (section === 'test') {
                populateTestData();
                populateTugasList();
                populateSubmissionTable();
            } else if (section === 'users') {
                populateAdminUsersList();
                populateUserActivityLog();
                updateUserStats();
            } else if (section === 'sertifikat') {
                populateCertificateTable();
                updateCertificateStats();
            }
        }

        // Password visibility toggle function
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(inputId + '-icon');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.className = 'fas fa-eye-slash';
            } else {
                input.type = 'password';
                icon.className = 'fas fa-eye';
            }
        }

        function updateDashboardStats() {
            document.getElementById('totalPeserta').textContent = registeredUsers.length;
            document.getElementById('verifiedPeserta').textContent = registeredUsers.filter(u => u.verified).length;
            document.getElementById('totalBatch').textContent = batchList.length;
            document.getElementById('sertifikatTerbit').textContent = registeredUsers.filter(u => u.certificateIssued).length;
        }

        function populateRecentActivity() {
            const container = document.getElementById('recentActivity');
            if (!container) return;
            
            if (recentActivities.length === 0) {
                container.innerHTML = '<p class="text-blue-200 text-center py-4">Belum ada aktivitas terbaru</p>';
                return;
            }
            
            let html = '';
            recentActivities.forEach(activity => {
                html += `
                    <div class="flex items-center space-x-4 p-3 bg-navy-800/30 rounded-lg">
                        <div class="${activity.color}">
                            <i class="${activity.icon} text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-white text-sm">${activity.message}</p>
                            <p class="text-blue-300 text-xs">${activity.time}</p>
                        </div>
                    </div>
                `;
            });
            
            container.innerHTML = html;
        }

        function populatePesertaTable() {
            const tbody = document.getElementById('pesertaTableBody');
            if (!tbody) return;
            
            if (registeredUsers.length === 0) {
                tbody.innerHTML = `
                    <tr class="border-b border-navy-700/30">
                        <td colspan="11" class="py-8 px-4 text-center text-blue-200">Belum ada peserta yang terdaftar</td>
                    </tr>
                `;
                return;
            }

            let html = '';
            registeredUsers.forEach(user => {
                const status = user.verified ? 'Terverifikasi' : 'Menunggu Verifikasi';
                const statusClass = user.verified ? 'bg-green-500/20 text-green-200' : 'bg-yellow-500/20 text-yellow-200';
                
                html += `
                    <tr class="border-b border-navy-700/30 hover:bg-navy-800/30">
                        <td class="py-3 px-4 text-white">${user.username}</td>
                        <td class="py-3 px-4 text-white">${user.nip || '-'}</td>
                        <td class="py-3 px-4 text-white">${user.fullName || '-'}</td>
                        <td class="py-3 px-4 text-white">${user.instansi || '-'}</td>
                        <td class="py-3 px-4 text-white">${user.fakultas || '-'}</td>
                        <td class="py-3 px-4 text-white">${user.jurusan || '-'}</td>
                        <td class="py-3 px-4 text-white">${user.jabatan || '-'}</td>
                        <td class="py-3 px-4">
                            <span class="${statusClass} px-2 py-1 rounded-full text-xs">${status}</span>
                        </td>
                        <td class="py-3 px-4">
                            ${user.whatsapp ? `<a href="https://wa.me/${user.whatsapp}" target="_blank" class="text-green-400 hover:text-green-300">${user.whatsapp}</a>` : '-'}
                        </td>
                        <td class="py-3 px-4">
                            ${user.email ? `<a href="mailto:${user.email}" class="text-blue-400 hover:text-blue-300">${user.email}</a>` : '-'}
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex space-x-1">
                                <button onclick="editPeserta('${user.username}')" class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded text-xs transition-colors duration-200" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="verifyPeserta('${user.username}')" class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded text-xs transition-colors duration-200" title="Verifikasi">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button onclick="deletePeserta('${user.username}')" class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded text-xs transition-colors duration-200" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });
            tbody.innerHTML = html;
        }

        function editPeserta(username) {
            const user = registeredUsers.find(u => u.username === username);
            if (!user) {
                showNotification('Peserta tidak ditemukan', 'error');
                return;
            }
            
            const newName = prompt('Edit Nama Lengkap:', user.fullName || '');
            if (newName && newName !== user.fullName) {
                user.fullName = newName;
                populatePesertaTable();
                showNotification(`Data ${user.username} berhasil diupdate`);
                addActivity('edit', `Data peserta ${user.username} diupdate`, 'fas fa-edit', 'text-blue-400');
            }
        }

        function verifyPeserta(username) {
            const user = registeredUsers.find(u => u.username === username);
            if (!user) {
                showNotification('Peserta tidak ditemukan', 'error');
                return;
            }
            
            if (user.verified) {
                showNotification('Peserta sudah terverifikasi', 'warning');
                return;
            }
            
            if (confirm(`Verifikasi peserta ${user.fullName || user.username}?`)) {
                user.verified = true;
                populatePesertaTable();
                updateDashboardStats();
                showNotification(`Peserta ${user.fullName || user.username} berhasil diverifikasi`);
                addActivity('verification', `Peserta ${user.fullName || user.username} diverifikasi`, 'fas fa-user-check', 'text-green-400');
            }
        }

        function deletePeserta(username) {
            const user = registeredUsers.find(u => u.username === username);
            if (!user) {
                showNotification('Peserta tidak ditemukan', 'error');
                return;
            }
            
            if (confirm(`Hapus peserta ${user.fullName || user.username}? Tindakan ini tidak dapat dibatalkan.`)) {
                const index = registeredUsers.findIndex(u => u.username === username);
                if (index !== -1) {
                    // Update batch count
                    const batch = batchList.find(b => b.name === user.batch);
                    if (batch && batch.registered > 0) {
                        batch.registered--;
                    }
                    
                    registeredUsers.splice(index, 1);
                    populatePesertaTable();
                    updateDashboardStats();
                    showNotification(`Peserta ${user.fullName || user.username} berhasil dihapus`);
                    addActivity('delete', `Peserta ${user.fullName || user.username} dihapus`, 'fas fa-user-minus', 'text-red-400');
                }
            }
        }

        function searchPeserta() {
            const searchTerm = document.getElementById('pesertaSearch').value.toLowerCase();
            const tbody = document.getElementById('pesertaTableBody');
            const rows = tbody.querySelectorAll('tr');
            
            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                let found = false;
                cells.forEach(cell => {
                    if (cell.textContent.toLowerCase().includes(searchTerm)) {
                        found = true;
                    }
                });
                row.style.display = found ? '' : 'none';
            });
        }

        function exportPeserta() {
            const csvContent = "data:text/csv;charset=utf-8," 
                + "Username,NIP,Nama Lengkap,Instansi,Fakultas,Jurusan,Jabatan,Status,WhatsApp,Email,Batch\n"
                + registeredUsers.map(user => 
                    `"${user.username}","${user.nip || ''}","${user.fullName || ''}","${user.instansi || ''}","${user.fakultas || ''}","${user.jurusan || ''}","${user.jabatan || ''}","${user.verified ? 'Terverifikasi' : 'Menunggu'}","${user.whatsapp || ''}","${user.email || ''}","${user.batch || ''}"`
                ).join("\n");
            
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", `peserta_data_${new Date().toISOString().split('T')[0]}.csv`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            showNotification('Data peserta berhasil diexport');
        }

        // Virtual Account Functions
        function populateVATable() {
            const tbody = document.getElementById('vaTableBody');
            if (!tbody) return;
            
            if (virtualAccounts.length === 0) {
                tbody.innerHTML = `
                    <tr class="border-b border-navy-700/30">
                        <td colspan="8" class="py-8 px-4 text-center text-blue-200">Belum ada Virtual Account yang terdaftar</td>
                    </tr>
                `;
                return;
            }

            let html = '';
            virtualAccounts.forEach(va => {
                const statusText = {
                    'available': 'Tersedia',
                    'assigned': 'Terpakai',
                    'inactive': 'Nonaktif'
                };
                
                const statusClass = {
                    'available': 'bg-green-500/20 text-green-200',
                    'assigned': 'bg-blue-500/20 text-blue-200',
                    'inactive': 'bg-red-500/20 text-red-200'
                };
                
                const assignedUser = va.assignedTo ? registeredUsers.find(u => u.username === va.assignedTo) : null;
                const pesertaName = assignedUser ? assignedUser.fullName || assignedUser.username : '-';
                
                const createdDate = new Date(va.createdDate).toLocaleDateString('id-ID');
                
                html += `
                    <tr class="border-b border-navy-700/30 hover:bg-navy-800/30">
                        <td class="py-3 px-4 text-white font-mono">${va.number}</td>
                        <td class="py-3 px-4 text-white">${va.bank}</td>
                        <td class="py-3 px-4 text-white">${va.accountName}</td>
                        <td class="py-3 px-4 text-white">Rp ${va.amount.toLocaleString('id-ID')}</td>
                        <td class="py-3 px-4">
                            <span class="${statusClass[va.status]} px-2 py-1 rounded-full text-xs">${statusText[va.status]}</span>
                        </td>
                        <td class="py-3 px-4 text-white">${pesertaName}</td>
                        <td class="py-3 px-4 text-white">${createdDate}</td>
                        <td class="py-3 px-4">
                            <div class="flex space-x-1">
                                ${va.status === 'assigned' ? `
                                    <button onclick="releaseVA(${va.id})" class="bg-orange-500 hover:bg-orange-600 text-white px-2 py-1 rounded text-xs transition-colors duration-200" title="Release">
                                        <i class="fas fa-unlock"></i>
                                    </button>
                                ` : ''}
                                ${va.status !== 'inactive' ? `
                                    <button onclick="deactivateVA(${va.id})" class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded text-xs transition-colors duration-200" title="Nonaktifkan">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                ` : `
                                    <button onclick="activateVA(${va.id})" class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded text-xs transition-colors duration-200" title="Aktifkan">
                                        <i class="fas fa-check"></i>
                                    </button>
                                `}
                                <button onclick="editVA(${va.id})" class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded text-xs transition-colors duration-200" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deleteVA(${va.id})" class="bg-gray-500 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs transition-colors duration-200" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });
            tbody.innerHTML = html;
        }

        function showBulkInputVA() {
            document.getElementById('bulkInputVAModal').classList.remove('hidden');
        }

        function closeBulkInputVA() {
            document.getElementById('bulkInputVAModal').classList.add('hidden');
            document.getElementById('bulkVAData').value = '';
        }

        function addSingleVA() {
            document.getElementById('addVAModal').classList.remove('hidden');
        }

        function closeAddVA() {
            document.getElementById('addVAModal').classList.add('hidden');
            document.getElementById('addVAForm').reset();
        }

        function releaseVA(vaId) {
            const va = virtualAccounts.find(v => v.id === vaId);
            if (!va) {
                showNotification('Virtual Account tidak ditemukan', 'error');
                return;
            }
            
            if (va.status !== 'assigned') {
                showNotification('Virtual Account tidak sedang terpakai', 'warning');
                return;
            }
            
            if (confirm(`Release Virtual Account ${va.number} dari peserta?`)) {
                const assignedUser = va.assignedTo;
                va.status = 'available';
                va.assignedTo = null;
                va.assignedDate = null;
                
                // Update user's VA
                const user = registeredUsers.find(u => u.username === assignedUser);
                if (user) {
                    user.assignedVA = null;
                }
                
                populateVATable();
                showNotification(`Virtual Account ${va.number} berhasil di-release`);
                addActivity('va_release', `VA ${va.number} (${va.bank}) di-release`, 'fas fa-unlock', 'text-orange-400');
            }
        }

        function deactivateVA(vaId) {
            const va = virtualAccounts.find(v => v.id === vaId);
            if (!va) {
                showNotification('Virtual Account tidak ditemukan', 'error');
                return;
            }
            
            if (confirm(`Nonaktifkan Virtual Account ${va.number}?`)) {
                if (va.status === 'assigned') {
                    // Release first if assigned
                    const user = registeredUsers.find(u => u.username === va.assignedTo);
                    if (user) {
                        user.assignedVA = null;
                    }
                    va.assignedTo = null;
                    va.assignedDate = null;
                }
                
                va.status = 'inactive';
                populateVATable();
                showNotification(`Virtual Account ${va.number} berhasil dinonaktifkan`);
                addActivity('va_deactivate', `VA ${va.number} (${va.bank}) dinonaktifkan`, 'fas fa-ban', 'text-red-400');
            }
        }

        function activateVA(vaId) {
            const va = virtualAccounts.find(v => v.id === vaId);
            if (!va) {
                showNotification('Virtual Account tidak ditemukan', 'error');
                return;
            }
            
            if (confirm(`Aktifkan Virtual Account ${va.number}?`)) {
                va.status = 'available';
                populateVATable();
                showNotification(`Virtual Account ${va.number} berhasil diaktifkan`);
                addActivity('va_activate', `VA ${va.number} (${va.bank}) diaktifkan`, 'fas fa-check', 'text-green-400');
            }
        }

        function editVA(vaId) {
            const va = virtualAccounts.find(v => v.id === vaId);
            if (!va) {
                showNotification('Virtual Account tidak ditemukan', 'error');
                return;
            }
            
            const newName = prompt('Edit Atas Nama:', va.accountName);
            if (newName && newName !== va.accountName) {
                va.accountName = newName;
                populateVATable();
                showNotification(`Virtual Account ${va.number} berhasil diupdate`);
                addActivity('va_edit', `VA ${va.number} (${va.bank}) diupdate`, 'fas fa-edit', 'text-blue-400');
            }
        }

        function deleteVA(vaId) {
            const va = virtualAccounts.find(v => v.id === vaId);
            if (!va) {
                showNotification('Virtual Account tidak ditemukan', 'error');
                return;
            }
            
            if (confirm(`Hapus Virtual Account ${va.number}? Tindakan ini tidak dapat dibatalkan.`)) {
                if (va.status === 'assigned') {
                    // Release from user first
                    const user = registeredUsers.find(u => u.username === va.assignedTo);
                    if (user) {
                        user.assignedVA = null;
                    }
                }
                
                const index = virtualAccounts.findIndex(v => v.id === vaId);
                if (index !== -1) {
                    virtualAccounts.splice(index, 1);
                    populateVATable();
                    showNotification(`Virtual Account ${va.number} berhasil dihapus`);
                    addActivity('va_delete', `VA ${va.number} (${va.bank}) dihapus`, 'fas fa-trash', 'text-red-400');
                }
            }
        }

        function searchVA() {
            const searchTerm = document.getElementById('vaSearch').value.toLowerCase();
            const tbody = document.getElementById('vaTableBody');
            const rows = tbody.querySelectorAll('tr');
            
            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                let found = false;
                cells.forEach(cell => {
                    if (cell.textContent.toLowerCase().includes(searchTerm)) {
                        found = true;
                    }
                });
                row.style.display = found ? '' : 'none';
            });
        }

        function filterVAByBank() {
            const bankFilter = document.getElementById('bankFilter').value;
            const tbody = document.getElementById('vaTableBody');
            const rows = tbody.querySelectorAll('tr');
            
            rows.forEach(row => {
                if (bankFilter === '') {
                    row.style.display = '';
                } else {
                    const bankCell = row.cells[1]; // Bank column
                    if (bankCell && bankCell.textContent === bankFilter) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });
        }

        function filterVAByStatus() {
            const statusFilter = document.getElementById('statusFilter').value;
            const tbody = document.getElementById('vaTableBody');
            const rows = tbody.querySelectorAll('tr');
            
            const statusMap = {
                'available': 'Tersedia',
                'assigned': 'Terpakai',
                'inactive': 'Nonaktif'
            };
            
            rows.forEach(row => {
                if (statusFilter === '') {
                    row.style.display = '';
                } else {
                    const statusCell = row.cells[4]; // Status column
                    if (statusCell && statusCell.textContent.includes(statusMap[statusFilter])) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });
        }

        function exportVA() {
            const csvContent = "data:text/csv;charset=utf-8," 
                + "Nomor VA,Bank,Atas Nama,Nominal,Status,Peserta,Tanggal Dibuat\n"
                + virtualAccounts.map(va => {
                    const assignedUser = va.assignedTo ? registeredUsers.find(u => u.username === va.assignedTo) : null;
                    const pesertaName = assignedUser ? assignedUser.fullName || assignedUser.username : '';
                    const statusText = {
                        'available': 'Tersedia',
                        'assigned': 'Terpakai',
                        'inactive': 'Nonaktif'
                    };
                    const createdDate = new Date(va.createdDate).toLocaleDateString('id-ID');
                    
                    return `"${va.number}","${va.bank}","${va.accountName}","${va.amount}","${statusText[va.status]}","${pesertaName}","${createdDate}"`;
                }).join("\n");
            
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", `virtual_account_data_${new Date().toISOString().split('T')[0]}.csv`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            showNotification('Data Virtual Account berhasil diexport');
        }

        // New Admin Section Functions
        function populateBatchTable() {
            const tbody = document.getElementById('batchTableBody');
            if (!tbody) return;
            
            let html = '';
            batchList.forEach(batch => {
                const statusClass = {
                    'Buka': 'bg-green-500/20 text-green-200',
                    'Berlangsung': 'bg-blue-500/20 text-blue-200',
                    'Selesai': 'bg-gray-500/20 text-gray-200',
                    'Tutup': 'bg-red-500/20 text-red-200'
                };
                
                html += `
                    <tr class="border-b border-navy-700/30 hover:bg-navy-800/30">
                        <td class="py-3 px-4 text-white">${batch.name}</td>
                        <td class="py-3 px-4 text-white">${batch.quota}</td>
                        <td class="py-3 px-4 text-white">${batch.registered}</td>
                        <td class="py-3 px-4 text-white">${new Date(batch.registrationDeadline).toLocaleDateString('id-ID')}</td>
                        <td class="py-3 px-4 text-white">${new Date(batch.startDate).toLocaleDateString('id-ID')}</td>
                        <td class="py-3 px-4 text-white">${new Date(batch.endDate).toLocaleDateString('id-ID')}</td>
                        <td class="py-3 px-4">
                            <span class="${statusClass[batch.status]} px-2 py-1 rounded-full text-xs">${batch.status}</span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex space-x-1">
                                <button onclick="editBatch(${batch.id})" class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded text-xs" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="deleteBatch(${batch.id})" class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded text-xs" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });
            tbody.innerHTML = html;
        }

        function populatePaymentTable() {
            const tbody = document.getElementById('paymentTableBody');
            if (!tbody) return;
            
            let html = '';
            registeredUsers.forEach(user => {
                const statusText = {
                    'pending': 'Menunggu',
                    'verified': 'Terverifikasi',
                    'rejected': 'Ditolak'
                };
                
                const statusClass = {
                    'pending': 'bg-yellow-500/20 text-yellow-200',
                    'verified': 'bg-green-500/20 text-green-200',
                    'rejected': 'bg-red-500/20 text-red-200'
                };
                
                html += `
                    <tr class="border-b border-navy-700/30 hover:bg-navy-800/30">
                        <td class="py-3 px-4 text-white">${user.fullName || user.username}</td>
                        <td class="py-3 px-4 text-white font-mono">${user.assignedVA || '-'}</td>
                        <td class="py-3 px-4 text-white">Rp ${user.paymentAmount?.toLocaleString('id-ID') || '0'}</td>
                        <td class="py-3 px-4">
                            <span class="${statusClass[user.paymentStatus]} px-2 py-1 rounded-full text-xs">${statusText[user.paymentStatus]}</span>
                        </td>
                        <td class="py-3 px-4 text-white">${user.paymentDate ? new Date(user.paymentDate).toLocaleDateString('id-ID') : '-'}</td>
                        <td class="py-3 px-4">
                            ${user.paymentProof ? '<span class="text-green-400">Ada</span>' : '<span class="text-gray-400">Belum</span>'}
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex space-x-1">
                                ${user.paymentStatus === 'pending' ? `
                                    <button onclick="verifyPayment('${user.username}')" class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded text-xs" title="Verifikasi">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button onclick="rejectPayment('${user.username}')" class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded text-xs" title="Tolak">
                                        <i class="fas fa-times"></i>
                                    </button>
                                ` : ''}
                                <button onclick="viewPaymentProof('${user.username}')" class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded text-xs" title="Lihat Bukti">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });
            tbody.innerHTML = html;
        }

        function populateAdminMateriGrid() {
            const grid = document.getElementById('adminMateriGrid');
            if (!grid) return;
            
            let html = '';
            materiList.forEach(materi => {
                const statusClass = materi.active ? 'border-green-400 bg-green-500/10' : 'border-red-400 bg-red-500/10';
                const hasLink = materi.gdrive && materi.gdrive.trim() !== '';
                
                html += `
                    <div class="bg-navy-800/50 backdrop-blur-lg rounded-xl p-6 border ${statusClass}">
                        <div class="flex justify-between items-start mb-4">
                            <h4 class="text-white font-medium text-lg">${materi.name}</h4>
                            <span class="${materi.active ? 'text-green-400' : 'text-red-400'}">
                                <i class="fas fa-${materi.active ? 'check-circle' : 'times-circle'}"></i>
                            </span>
                        </div>
                        <p class="text-blue-200 text-sm mb-3">${materi.description}</p>
                        <div class="mb-3">
                            <p class="text-xs text-blue-300 mb-1">Link Google Drive:</p>
                            ${hasLink ? 
                                `<a href="${materi.gdrive}" target="_blank" class="text-blue-400 hover:text-blue-300 text-xs break-all">${materi.gdrive}</a>` :
                                `<span class="text-gray-400 text-xs">Belum ada link</span>`
                            }
                        </div>
                        <div class="flex justify-between items-center text-xs text-blue-300 mb-4">
                            <span>Diakses: ${materi.accessed} kali</span>
                            <span>Selesai: ${materi.completed.length} peserta</span>
                        </div>
                        <div class="flex space-x-2">
                            <button onclick="editMateri(${materi.id})" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-2 px-3 rounded text-sm">
                                <i class="fas fa-edit mr-1"></i>
                                Edit
                            </button>
                            <button onclick="toggleMateriStatus(${materi.id})" class="flex-1 bg-${materi.active ? 'red' : 'green'}-500 hover:bg-${materi.active ? 'red' : 'green'}-600 text-white py-2 px-3 rounded text-sm">
                                <i class="fas fa-${materi.active ? 'eye-slash' : 'eye'} mr-1"></i>
                                ${materi.active ? 'Nonaktif' : 'Aktifkan'}
                            </button>
                        </div>
                    </div>
                `;
            });
            grid.innerHTML = html;
        }

        function populateTestStats() {
            const preTestCount = registeredUsers.filter(u => u.testCompleted && u.testCompleted.includes('preTest')).length;
            const postTestCount = registeredUsers.filter(u => u.testCompleted && u.testCompleted.includes('postTest')).length;
            const totalTugas = registeredUsers.reduce((sum, u) => sum + (u.tugasCompleted ? u.tugasCompleted.length : 0), 0);
            
            document.getElementById('preTestStats').textContent = preTestCount;
            document.getElementById('postTestStats').textContent = postTestCount;
            document.getElementById('tugasStats').textContent = totalTugas;
            document.getElementById('avgScore').textContent = '85'; // Mock average score
        }

        function populateTugasList() {
            const container = document.getElementById('tugasList');
            if (!container) return;
            
            const tugasList = [
                { id: 1, name: 'Tugas 1: Analisis Kurikulum', deadline: '2025-02-15', submitted: 15 },
                { id: 2, name: 'Tugas 2: Rencana Pembelajaran', deadline: '2025-03-01', submitted: 12 },
                { id: 3, name: 'Tugas 3: Media Pembelajaran', deadline: '2025-03-15', submitted: 8 },
                { id: 4, name: 'Tugas 4: Evaluasi Pembelajaran', deadline: '2025-04-01', submitted: 5 },
                { id: 5, name: 'Tugas 5: Refleksi Pembelajaran', deadline: '2025-04-15', submitted: 2 }
            ];
            
            let html = '';
            tugasList.forEach(tugas => {
                html += `
                    <div class="bg-navy-800/50 rounded-lg p-3">
                        <div class="flex justify-between items-center">
                            <div>
                                <h5 class="text-white font-medium text-sm">${tugas.name}</h5>
                                <p class="text-blue-200 text-xs">Deadline: ${new Date(tugas.deadline).toLocaleDateString('id-ID')}</p>
                                <p class="text-green-300 text-xs">${tugas.submitted} dikumpulkan</p>
                            </div>
                            <button onclick="manageTugas(${tugas.id})" class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded text-xs">
                                Kelola
                            </button>
                        </div>
                    </div>
                `;
            });
            container.innerHTML = html;
        }

        function populateAdminUsersList() {
            const tbody = document.getElementById('allUsersTableBody');
            if (!tbody) return;
            
            // Combine admin and registered users
            const allUsers = [
                { 
                    username: 'admin', 
                    fullName: 'Administrator', 
                    nik: '-', 
                    nip: '-',
                    email: 'admin@undip.ac.id',
                    whatsapp: '-',
                    role: 'Super Admin', 
                    password: 'Adm!nUndip2025', 
                    active: true, 
                    batch: '-',
                    registrationDate: new Date('2025-01-01').toISOString()
                },
                ...registeredUsers.map(user => ({
                    username: user.username,
                    fullName: user.fullName || user.username,
                    nik: user.nik || '-',
                    nip: user.nip || '-',
                    email: user.email || '-',
                    whatsapp: user.whatsapp || '-',
                    role: 'Peserta',
                    password: user.password,
                    active: user.verified,
                    batch: user.batch || '-',
                    registrationDate: user.registrationDate
                }))
            ];
            
            let html = '';
            allUsers.forEach(user => {
                const statusClass = user.active ? 'bg-green-500/20 text-green-200' : 'bg-red-500/20 text-red-200';
                const statusText = user.active ? 'Aktif' : 'Nonaktif';
                const regDate = user.registrationDate ? new Date(user.registrationDate).toLocaleDateString('id-ID') : '-';
                
                html += `
                    <tr class="border-b border-navy-700/30 hover:bg-navy-800/30">
                        <td class="py-3 px-4 text-white font-mono">${user.username}</td>
                        <td class="py-3 px-4 text-white font-mono">${user.password}</td>
                        <td class="py-3 px-4 text-white">${user.fullName}</td>
                        <td class="py-3 px-4 text-white">${user.nik}</td>
                        <td class="py-3 px-4 text-white">${user.nip}</td>
                        <td class="py-3 px-4 text-white">${user.email}</td>
                        <td class="py-3 px-4 text-white">${user.whatsapp}</td>
                        <td class="py-3 px-4 text-white">${user.role}</td>
                        <td class="py-3 px-4">
                            <span class="${statusClass} px-2 py-1 rounded-full text-xs">${statusText}</span>
                        </td>
                        <td class="py-3 px-4 text-white">${user.batch}</td>
                        <td class="py-3 px-4 text-white">${regDate}</td>
                        <td class="py-3 px-4">
                            <div class="flex space-x-1">
                                <button onclick="resetPassword('${user.username}')" class="bg-orange-500 hover:bg-orange-600 text-white px-2 py-1 rounded text-xs" title="Reset Password">
                                    <i class="fas fa-key"></i>
                                </button>
                                <button onclick="editUser('${user.username}')" class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded text-xs" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                ${user.role !== 'Super Admin' ? `
                                    <button onclick="toggleUserStatus('${user.username}')" class="bg-${user.active ? 'red' : 'green'}-500 hover:bg-${user.active ? 'red' : 'green'}-600 text-white px-2 py-1 rounded text-xs" title="${user.active ? 'Deactivate' : 'Activate'}">
                                        <i class="fas fa-${user.active ? 'ban' : 'check'}"></i>
                                    </button>
                                    <button onclick="deleteUser('${user.username}')" class="bg-gray-500 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                ` : ''}
                            </div>
                        </td>
                    </tr>
                `;
            });
            
            if (allUsers.length === 0) {
                html = `
                    <tr class="border-b border-navy-700/30">
                        <td colspan="12" class="py-8 px-4 text-center text-blue-200">Belum ada users yang terdaftar</td>
                    </tr>
                `;
            }
            
            tbody.innerHTML = html;
        }

        function searchUsers() {
            const searchTerm = document.getElementById('userSearch').value.toLowerCase();
            const tbody = document.getElementById('allUsersTableBody');
            const rows = tbody.querySelectorAll('tr');
            
            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                let found = false;
                cells.forEach(cell => {
                    if (cell.textContent.toLowerCase().includes(searchTerm)) {
                        found = true;
                    }
                });
                row.style.display = found ? '' : 'none';
            });
        }

        function filterUsersByRole() {
            const roleFilter = document.getElementById('userRoleFilter').value;
            const tbody = document.getElementById('allUsersTableBody');
            const rows = tbody.querySelectorAll('tr');
            
            rows.forEach(row => {
                if (roleFilter === '') {
                    row.style.display = '';
                } else {
                    const roleCell = row.cells[7]; // Role column
                    if (roleCell && roleCell.textContent === roleFilter) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });
        }

        function exportUsersData() {
            const allUsers = [
                { 
                    username: 'admin', 
                    password: 'Adm!nUndip2025',
                    fullName: 'Administrator', 
                    nik: '-', 
                    nip: '-',
                    email: 'admin@undip.ac.id',
                    whatsapp: '-',
                    role: 'Super Admin', 
                    active: true, 
                    batch: '-',
                    registrationDate: '2025-01-01'
                },
                ...registeredUsers.map(user => ({
                    username: user.username,
                    password: user.password,
                    fullName: user.fullName || user.username,
                    nik: user.nik || '-',
                    nip: user.nip || '-',
                    email: user.email || '-',
                    whatsapp: user.whatsapp || '-',
                    role: 'Peserta',
                    active: user.verified,
                    batch: user.batch || '-',
                    registrationDate: user.registrationDate ? new Date(user.registrationDate).toLocaleDateString('id-ID') : '-'
                }))
            ];
            
            const csvContent = "data:text/csv;charset=utf-8," 
                + "Username,Password,Nama Lengkap,NIK,NIP,Email,WhatsApp,Role,Status,Batch,Tanggal Daftar\n"
                + allUsers.map(user => 
                    `"${user.username}","${user.password}","${user.fullName}","${user.nik}","${user.nip}","${user.email}","${user.whatsapp}","${user.role}","${user.active ? 'Aktif' : 'Nonaktif'}","${user.batch}","${user.registrationDate}"`
                ).join("\n");
            
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", `all_users_data_${new Date().toISOString().split('T')[0]}.csv`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            showNotification('Data semua users berhasil diexport');
        }

        function accessTest(testType) {
            if (!currentUser || !currentUser.verified) {
                showNotification('Anda harus terverifikasi untuk mengakses test', 'warning');
                return;
            }
            
            const test = testData[testType];
            if (!test || !test.active) {
                showNotification('Test belum tersedia atau belum diaktifkan', 'warning');
                return;
            }
            
            if (!test.link || test.link.trim() === '') {
                showNotification('Link test belum tersedia', 'warning');
                return;
            }
            
            // Check if already completed
            const isCompleted = currentUser.testCompleted && currentUser.testCompleted.includes(testType);
            if (isCompleted) {
                if (!confirm('Anda sudah pernah mengerjakan test ini. Yakin ingin mengerjakan ulang?')) {
                    return;
                }
            }
            
            // Open test in new tab
            window.open(test.link, '_blank');
            
            // Mark as completed
            if (!currentUser.testCompleted) currentUser.testCompleted = [];
            if (!currentUser.testCompleted.includes(testType)) {
                currentUser.testCompleted.push(testType);
                
                // Update in registered users array
                const userIndex = registeredUsers.findIndex(u => u.username === currentUser.username);
                if (userIndex !== -1) {
                    registeredUsers[userIndex] = currentUser;
                }
                
                showNotification(`${testType === 'preTest' ? 'Pre-Test' : 'Post-Test'} berhasil diakses`);
                addActivity('test_access', `${currentUser.fullName} mengakses ${testType === 'preTest' ? 'Pre-Test' : 'Post-Test'}`, 'fas fa-clipboard-check', 'text-purple-400');
                
                // Update test status
                updateTestStatus();
                updatePesertaProgress();
            }
        }

        function updateTestStatus() {
            if (!currentUser) return;
            
            const preTestCompleted = currentUser.testCompleted && currentUser.testCompleted.includes('preTest');
            const postTestCompleted = currentUser.testCompleted && currentUser.testCompleted.includes('postTest');
            
            // Update Pre-Test status
            const preTestStatus = document.getElementById('preTestStatus');
            const preTestBtn = document.getElementById('preTestBtn');
            if (preTestStatus && preTestBtn) {
                if (preTestCompleted) {
                    preTestStatus.textContent = 'Selesai';
                    preTestStatus.className = 'px-2 py-1 rounded-full text-xs bg-green-500/20 text-green-200';
                    preTestBtn.innerHTML = '<i class="fas fa-eye mr-2"></i>Lihat Ulang';
                } else {
                    preTestStatus.textContent = 'Belum Dikerjakan';
                    preTestStatus.className = 'px-2 py-1 rounded-full text-xs bg-yellow-500/20 text-yellow-200';
                    preTestBtn.innerHTML = '<i class="fas fa-play mr-2"></i>Mulai Pre-Test';
                }
            }
            
            // Update Post-Test status
            const postTestStatus = document.getElementById('postTestStatus');
            const postTestBtn = document.getElementById('postTestBtn');
            if (postTestStatus && postTestBtn) {
                if (postTestCompleted) {
                    postTestStatus.textContent = 'Selesai';
                    postTestStatus.className = 'px-2 py-1 rounded-full text-xs bg-green-500/20 text-green-200';
                    postTestBtn.innerHTML = '<i class="fas fa-eye mr-2"></i>Lihat Ulang';
                } else {
                    postTestStatus.textContent = 'Belum Dikerjakan';
                    postTestStatus.className = 'px-2 py-1 rounded-full text-xs bg-yellow-500/20 text-yellow-200';
                    postTestBtn.innerHTML = '<i class="fas fa-play mr-2"></i>Mulai Post-Test';
                }
            }
        }

        function populatePesertaTugasGrid() {
            const grid = document.getElementById('pesertaTugasGrid');
            if (!grid) return;
            
            let html = '';
            tugasData.forEach(tugas => {
                const isCompleted = currentUser && currentUser.tugasCompleted && currentUser.tugasCompleted.includes(tugas.id);
                const isAccessible = tugas.active;
                const isVerified = currentUser && currentUser.verified;
                const completedClass = isCompleted ? 'border-green-400 bg-green-500/10' : 'border-navy-600/50';
                const accessibleClass = isAccessible && isVerified ? 'cursor-pointer hover:border-orange-400' : 'opacity-50 cursor-not-allowed';
                
                let statusText = '';
                let statusIcon = '';
                let statusColor = '';
                
                if (!tugas.active) {
                    statusText = 'Terkunci';
                    statusIcon = 'lock';
                    statusColor = 'text-gray-400';
                } else if (!isVerified) {
                    statusText = 'Perlu Verifikasi';
                    statusIcon = 'user-check';
                    statusColor = 'text-yellow-400';
                } else {
                    statusText = 'Tersedia';
                    statusIcon = 'unlock';
                    statusColor = 'text-green-200';
                }
                
                const deadline = new Date(tugas.deadline);
                const isOverdue = deadline < new Date();
                const deadlineClass = isOverdue ? 'text-red-400' : 'text-blue-300';
                
                html += `
                    <div class="bg-navy-800/50 backdrop-blur-lg rounded-xl p-6 border ${completedClass} ${accessibleClass} transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex-1">
                                <h4 class="text-white font-medium text-lg mb-2">${tugas.name}</h4>
                                <p class="text-blue-200 text-sm mb-3">${tugas.description}</p>
                                <div class="flex items-center space-x-4 text-xs mb-2">
                                    <span class="${statusColor}">
                                        <i class="fas fa-${statusIcon} mr-1"></i>
                                        ${statusText}
                                    </span>
                                    ${isCompleted ? '<span class="text-green-200"><i class="fas fa-check-circle mr-1"></i>Selesai</span>' : ''}
                                </div>
                                <div class="text-xs ${deadlineClass}">
                                    <i class="fas fa-calendar mr-1"></i>
                                    Deadline: ${deadline.toLocaleDateString('id-ID')}
                                    ${isOverdue ? ' (Terlambat)' : ''}
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-2xl ${isCompleted ? 'text-green-400' : isAccessible && isVerified ? 'text-orange-400' : 'text-gray-500'}">
                                    <i class="fas fa-${isCompleted ? 'check-circle' : isAccessible && isVerified ? 'tasks' : 'lock'}"></i>
                                </div>
                            </div>
                        </div>
                        ${isAccessible && isVerified ? `
                            <button onclick="accessTugas(${tugas.id})" class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded-lg transition-colors duration-200 text-sm font-medium">
                                <i class="fas fa-${isCompleted ? 'eye' : 'upload'} mr-2"></i>
                                ${isCompleted ? 'Lihat Tugas' : 'Kerjakan Tugas'}
                            </button>
                        ` : `
                            <button class="w-full bg-gray-600 text-gray-400 py-2 px-4 rounded-lg cursor-not-allowed text-sm font-medium" disabled>
                                <i class="fas fa-lock mr-2"></i>
                                ${!isVerified ? 'Perlu Verifikasi' : 'Belum Tersedia'}
                            </button>
                        `}
                    </div>
                `;
            });
            
            grid.innerHTML = html;
        }

        function accessTugas(tugasId) {
            const tugas = tugasData.find(t => t.id === tugasId);
            if (!tugas || !tugas.active) {
                showNotification('Tugas belum tersedia', 'warning');
                return;
            }
            
            // Check if user is verified
            if (!currentUser || !currentUser.verified) {
                showNotification('Anda harus terverifikasi untuk mengakses tugas', 'warning');
                return;
            }
            
            // Check deadline
            const deadline = new Date(tugas.deadline);
            const now = new Date();
            if (now > deadline) {
                if (!confirm('Deadline tugas sudah terlewat. Tugas yang dikumpulkan terlambat akan mendapat pengurangan nilai. Lanjutkan?')) {
                    return;
                }
            }
            
            // Show file upload modal
            showTugasUploadModal(tugas);
        }

        function showTugasUploadModal(tugas) {
            const isCompleted = currentUser && currentUser.tugasCompleted && currentUser.tugasCompleted.includes(tugas.id);
            const existingLink = currentUser.tugasLinks && currentUser.tugasLinks[tugas.id] ? currentUser.tugasLinks[tugas.id] : '';
            
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4';
            modal.innerHTML = `
                <div class="bg-navy-900/90 backdrop-blur-lg rounded-xl shadow-2xl w-full max-w-md border border-navy-700/50">
                    <div class="p-6 border-b border-navy-700/50">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold text-white">${tugas.name}</h3>
                            <button onclick="this.closest('.fixed').remove()" class="text-white hover:text-blue-200">
                                <i class="fas fa-times text-xl"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="mb-4">
                            <p class="text-blue-200 text-sm mb-2">${tugas.description}</p>
                            <p class="text-blue-300 text-xs">Deadline: ${new Date(tugas.deadline).toLocaleDateString('id-ID')}</p>
                        </div>
                        
                        ${isCompleted ? `
                            <div class="mb-4 p-3 bg-green-500/20 border border-green-400/30 rounded-lg">
                                <p class="text-green-200 text-sm">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    Tugas sudah dikumpulkan sebelumnya
                                </p>
                                ${existingLink ? `<p class="text-blue-300 text-xs mt-1 break-all">Link: ${existingLink}</p>` : ''}
                            </div>
                        ` : ''}
                        
                        <div class="mb-4">
                            <label class="block text-blue-200 text-sm font-medium mb-2">Link Google Drive Tugas</label>
                            <input type="url" id="tugasGDriveLink" value="${existingLink}" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent" placeholder="https://drive.google.com/file/d/..." required>
                            <p class="text-blue-300 text-xs mt-1">Upload file tugas Anda ke Google Drive dan paste linknya di sini</p>
                        </div>
                        
                        <div class="flex justify-end space-x-3">
                            <button onclick="this.closest('.fixed').remove()" class="px-6 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors duration-200">
                                Batal
                            </button>
                            <button id="submitTugasBtn" onclick="submitTugasWithLink(${tugas.id})" class="px-6 py-2 bg-orange-500 hover:bg-orange-600 text-white rounded-lg transition-colors duration-200">
                                <i class="fas fa-save mr-2"></i>
                                ${isCompleted ? 'Update Link' : 'Simpan Tugas'}
                            </button>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
        }

        function submitTugasWithLink(tugasId) {
            const linkInput = document.getElementById('tugasGDriveLink');
            const link = linkInput.value.trim();
            
            if (!link) {
                showNotification('Link Google Drive harus diisi', 'error');
                return;
            }
            
            // Basic validation for Google Drive links
            if (!link.includes('drive.google.com') && !link.includes('docs.google.com')) {
                if (!confirm('Link yang dimasukkan bukan Google Drive URL. Yakin ingin melanjutkan?')) {
                    return;
                }
            }
            
            const tugas = tugasData.find(t => t.id === tugasId);
            
            showLoading();
            
            setTimeout(() => {
                // Initialize tugasLinks if not exists
                if (!currentUser.tugasLinks) currentUser.tugasLinks = {};
                
                // Save the link
                currentUser.tugasLinks[tugasId] = link;
                
                // Mark as completed
                if (!currentUser.tugasCompleted) currentUser.tugasCompleted = [];
                if (!currentUser.tugasCompleted.includes(tugasId)) {
                    currentUser.tugasCompleted.push(tugasId);
                }
                
                // Update in registered users array
                const userIndex = registeredUsers.findIndex(u => u.username === currentUser.username);
                if (userIndex !== -1) {
                    registeredUsers[userIndex] = currentUser;
                }
                
                hideLoading();
                
                // Close modal
                document.querySelector('.fixed').remove();
                
                showNotification(`Tugas "${tugas.name}" berhasil dikumpulkan!`);
                addActivity('tugas_submit', `${currentUser.fullName} mengumpulkan ${tugas.name}`, 'fas fa-tasks', 'text-orange-400');
                
                // Return to tugas page and refresh
                showPesertaSection('tugas');
            }, 1500);
        }

        function populateUserActivityLog() {
            const tbody = document.getElementById('userActivityLog');
            if (!tbody) return;
            
            const activities = [
                { user: 'admin', role: 'Admin', activity: 'Login ke sistem', time: new Date(), ip: '192.168.1.1' },
                { user: 'johndoe', role: 'Peserta', activity: 'Mengakses materi', time: new Date(Date.now() - 3600000), ip: '192.168.1.2' }
            ];
            
            let html = '';
            activities.forEach(activity => {
                html += `
                    <tr class="border-b border-navy-700/30">
                        <td class="py-3 px-4 text-white">${activity.user}</td>
                        <td class="py-3 px-4 text-white">${activity.role}</td>
                        <td class="py-3 px-4 text-white">${activity.activity}</td>
                        <td class="py-3 px-4 text-white">${activity.time.toLocaleString('id-ID')}</td>
                        <td class="py-3 px-4 text-white">${activity.ip}</td>
                    </tr>
                `;
            });
            tbody.innerHTML = html;
        }

        function updateUserStats() {
            document.getElementById('totalUsers').textContent = registeredUsers.length;
            document.getElementById('activeUsers').textContent = registeredUsers.filter(u => u.verified).length;
            document.getElementById('todayLogins').textContent = '5'; // Mock data
        }

        function populateCertificateTable() {
            const tbody = document.getElementById('certificateTableBody');
            if (!tbody) return;
            
            // Only show verified users
            const verifiedUsers = registeredUsers.filter(user => user.verified);
            
            let html = '';
            verifiedUsers.forEach(user => {
                const progress = calculateUserProgress(user);
                const finalScore = calculateFinalScore(user);
                const isEligible = progress >= 80 && finalScore >= 70;
                
                const statusText = user.certificateIssued ? 'Sudah Terbit' : (isEligible ? 'Memenuhi Syarat' : 'Belum Memenuhi');
                const statusClass = user.certificateIssued ? 'bg-green-500/20 text-green-200' : (isEligible ? 'bg-yellow-500/20 text-yellow-200' : 'bg-red-500/20 text-red-200');
                
                html += `
                    <tr class="border-b border-navy-700/30 hover:bg-navy-800/30">
                        <td class="py-3 px-4 text-white">${user.fullName || user.username}</td>
                        <td class="py-3 px-4 text-white">${user.batch}</td>
                        <td class="py-3 px-4 text-white">${progress}%</td>

                        <td class="py-3 px-4">
                            <span class="${statusClass} px-2 py-1 rounded-full text-xs">${statusText}</span>
                        </td>
                        <td class="py-3 px-4 text-white">${user.certificateDate ? new Date(user.certificateDate).toLocaleDateString('id-ID') : '-'}</td>
                        <td class="py-3 px-4 text-white text-sm">${user.certificateFeedback || '-'}</td>
                        <td class="py-3 px-4">
                            <div class="flex space-x-1">
                                ${!user.certificateIssued && isEligible ? `
                                    <button onclick="issueCertificateWithFeedback('${user.username}')" class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded text-xs" title="Terbitkan">
                                        <i class="fas fa-certificate"></i>
                                    </button>
                                ` : ''}
                                ${user.certificateIssued ? `
                                    <button onclick="downloadCertificate('${user.username}')" class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded text-xs" title="Download">
                                        <i class="fas fa-download"></i>
                                    </button>
                                ` : ''}
                                <button onclick="addCertificateFeedback('${user.username}')" class="bg-orange-500 hover:bg-orange-600 text-white px-2 py-1 rounded text-xs" title="Feedback">
                                    <i class="fas fa-comment"></i>
                                </button>
                                <button onclick="viewUserProgress('${user.username}')" class="bg-purple-500 hover:bg-purple-600 text-white px-2 py-1 rounded text-xs" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });
            
            if (verifiedUsers.length === 0) {
                html = `
                    <tr class="border-b border-navy-700/30">
                        <td colspan="8" class="py-8 px-4 text-center text-blue-200">Belum ada peserta terverifikasi</td>
                    </tr>
                `;
            }
            
            tbody.innerHTML = html;
        }

        function updateCertificateStats() {
            const issued = registeredUsers.filter(u => u.certificateIssued).length;
            const eligible = registeredUsers.filter(u => !u.certificateIssued && calculateUserProgress(u) >= 80 && calculateFinalScore(u) >= 70).length;
            
            document.getElementById('certificatesIssued').textContent = issued;
            document.getElementById('certificatesPending').textContent = eligible;
            document.getElementById('totalParticipants').textContent = registeredUsers.length;
        }

        function calculateUserProgress(user) {
            const materiCompleted = user.materiCompleted ? user.materiCompleted.length : 0;
            const tugasCompleted = user.tugasCompleted ? user.tugasCompleted.length : 0;
            const testCompleted = user.testCompleted ? user.testCompleted.length : 0;
            
            const totalItems = 21 + 5 + 2; // 21 materi + 5 tugas + 2 test
            const completedItems = materiCompleted + tugasCompleted + testCompleted;
            return Math.round((completedItems / totalItems) * 100);
        }

        function calculateFinalScore(user) {
            // Mock calculation - in real app this would be based on actual scores
            return Math.floor(Math.random() * 30) + 70; // Random score between 70-100
        }

        // New function implementations
        function populateJadwalData() {
            const currentJadwal = document.getElementById('currentJadwal');
            if (!currentJadwal) return;
            
            if (jadwalData.link && jadwalData.link.trim() !== '') {
                currentJadwal.innerHTML = `
                    <div class="flex justify-between items-start">
                        <div>
                            <h5 class="text-white font-medium mb-2">Jadwal Aktif</h5>
                            <p class="text-blue-200 text-sm mb-2">${jadwalData.description || 'Jadwal pelatihan PEKERTI'}</p>
                            <a href="${jadwalData.link}" target="_blank" class="text-blue-400 hover:text-blue-300 text-sm break-all">${jadwalData.link}</a>
                            <div class="mt-2">
                                <span class="${jadwalData.active ? 'bg-green-500/20 text-green-200' : 'bg-red-500/20 text-red-200'} px-2 py-1 rounded-full text-xs">
                                    ${jadwalData.active ? 'Aktif untuk peserta' : 'Nonaktif'}
                                </span>
                            </div>
                        </div>
                        <button onclick="deleteJadwal()" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                            <i class="fas fa-trash mr-1"></i>
                            Hapus
                        </button>
                    </div>
                `;
            } else {
                currentJadwal.innerHTML = '<p class="text-blue-200 text-center">Belum ada jadwal yang diupload</p>';
            }
        }

        function populateTestData() {
            const container = document.getElementById('testManagement');
            if (!container) return;
            
            let html = '';
            Object.keys(testData).forEach(testType => {
                const test = testData[testType];
                const testName = testType === 'preTest' ? 'Pre-Test' : 'Post-Test';
                
                html += `
                    <div class="bg-navy-800/50 rounded-lg p-4">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h4 class="text-white font-medium">${testName}</h4>
                                <p class="text-blue-200 text-sm">${test.description}</p>
                            </div>
                            <span class="${test.active ? 'text-green-400' : 'text-red-400'}">
                                <i class="fas fa-${test.active ? 'check-circle' : 'times-circle'}"></i>
                            </span>
                        </div>
                        <div class="mb-3">
                            <p class="text-xs text-blue-300 mb-1">Link Test:</p>
                            ${test.link && test.link.trim() !== '' ? 
                                `<a href="${test.link}" target="_blank" class="text-blue-400 hover:text-blue-300 text-xs break-all">${test.link}</a>` :
                                `<span class="text-gray-400 text-xs">Belum ada link</span>`
                            }
                        </div>
                        <div class="flex space-x-2">
                            <button onclick="editTest('${testType}')" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded text-sm">
                                <i class="fas fa-edit mr-1"></i>
                                Edit
                            </button>
                            <button onclick="toggleTestStatus('${testType}')" class="flex-1 bg-${test.active ? 'red' : 'green'}-500 hover:bg-${test.active ? 'red' : 'green'}-600 text-white py-1 px-3 rounded text-sm">
                                <i class="fas fa-${test.active ? 'eye-slash' : 'eye'} mr-1"></i>
                                ${test.active ? 'Nonaktif' : 'Aktifkan'}
                            </button>
                        </div>
                    </div>
                `;
            });
            container.innerHTML = html;
        }

        function populateTugasList() {
            const container = document.getElementById('tugasList');
            if (!container) return;
            
            let html = '';
            tugasData.forEach(tugas => {
                const submissionCount = tugas.submissions ? tugas.submissions.length : 0;
                
                html += `
                    <div class="bg-navy-800/50 rounded-lg p-3">
                        <div class="flex justify-between items-start mb-2">
                            <div class="flex-1">
                                <h5 class="text-white font-medium text-sm">${tugas.name}</h5>
                                <p class="text-blue-200 text-xs mb-1">${tugas.description}</p>
                                <p class="text-blue-300 text-xs">Deadline: ${new Date(tugas.deadline).toLocaleDateString('id-ID')}</p>
                            </div>
                            <span class="${tugas.active ? 'text-green-400' : 'text-red-400'}">
                                <i class="fas fa-${tugas.active ? 'check-circle' : 'times-circle'}"></i>
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-green-300 text-xs">${submissionCount} dikumpulkan</span>
                            <div class="flex space-x-1">
                                <button onclick="editTugas(${tugas.id})" class="bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded text-xs">
                                    Edit
                                </button>
                                <button onclick="toggleTugasStatus(${tugas.id})" class="bg-${tugas.active ? 'red' : 'green'}-500 hover:bg-${tugas.active ? 'red' : 'green'}-600 text-white px-2 py-1 rounded text-xs">
                                    ${tugas.active ? 'Nonaktif' : 'Aktifkan'}
                                </button>
                            </div>
                        </div>
                    </div>
                `;
            });
            container.innerHTML = html;
        }

        function populateSubmissionTable() {
            const tbody = document.getElementById('submissionTable');
            if (!tbody) return;
            
            let html = '';
            registeredUsers.forEach(user => {
                const preTestStatus = user.testCompleted && user.testCompleted.includes('preTest');
                const postTestStatus = user.testCompleted && user.testCompleted.includes('postTest');
                
                html += `
                    <tr class="border-b border-navy-700/30 hover:bg-navy-800/30">
                        <td class="py-3 px-4 text-white">${user.fullName || user.username}</td>
                        <td class="py-3 px-4">
                            <span class="${preTestStatus ? 'text-green-400' : 'text-red-400'}">
                                <i class="fas fa-${preTestStatus ? 'check' : 'times'}"></i>
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="${postTestStatus ? 'text-green-400' : 'text-red-400'}">
                                <i class="fas fa-${postTestStatus ? 'check' : 'times'}"></i>
                            </span>
                        </td>
                        ${tugasData.map(tugas => {
                            const submitted = user.tugasCompleted && user.tugasCompleted.includes(tugas.id);
                            return `
                                <td class="py-3 px-4">
                                    <span class="${submitted ? 'text-green-400' : 'text-red-400'}">
                                        <i class="fas fa-${submitted ? 'check' : 'times'}"></i>
                                    </span>
                                </td>
                            `;
                        }).join('')}
                    </tr>
                `;
            });
            tbody.innerHTML = html;
        }

        // Function implementations
        function editMateri(id) {
            const materi = materiList.find(m => m.id === id);
            if (!materi) {
                showNotification('Materi tidak ditemukan', 'error');
                return;
            }
            
            // Create modal for editing material
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4';
            modal.innerHTML = `
                <div class="bg-navy-900/90 backdrop-blur-lg rounded-xl shadow-2xl w-full max-w-md border border-navy-700/50">
                    <div class="p-6 border-b border-navy-700/50">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold text-white">Edit Materi</h3>
                            <button onclick="this.closest('.fixed').remove()" class="text-white hover:text-blue-200">
                                <i class="fas fa-times text-xl"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <form id="editMateriForm">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Nama Materi</label>
                                    <input type="text" value="${materi.name}" class="w-full px-4 py-3 bg-gray-600/50 border border-white/30 rounded-lg text-gray-300 cursor-not-allowed" readonly>
                                </div>
                                
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Link Google Drive</label>
                                    <input type="url" id="editMateriLink" value="${materi.gdrive || ''}" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="https://drive.google.com/file/d/...">
                                </div>
                                
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Status</label>
                                    <select id="editMateriStatus" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                        <option value="true" ${materi.active ? 'selected' : ''} class="bg-gray-800">Aktif</option>
                                        <option value="false" ${!materi.active ? 'selected' : ''} class="bg-gray-800">Nonaktif</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Deskripsi</label>
                                    <textarea id="editMateriDesc" rows="3" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">${materi.description}</textarea>
                                </div>
                            </div>
                            
                            <div class="flex justify-end space-x-3 mt-6">
                                <button type="button" onclick="this.closest('.fixed').remove()" class="px-6 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors duration-200">
                                    Batal
                                </button>
                                <button type="submit" class="px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-colors duration-200">
                                    <i class="fas fa-save mr-2"></i>
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
            
            // Handle form submission
            document.getElementById('editMateriForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const newLink = document.getElementById('editMateriLink').value.trim();
                const newStatus = document.getElementById('editMateriStatus').value === 'true';
                const newDesc = document.getElementById('editMateriDesc').value.trim();
                
                // Accept any Google Drive link format
                if (newLink && newLink.trim() !== '' && !newLink.includes('drive.google.com') && !newLink.includes('docs.google.com')) {
                    showNotification('Link harus berupa Google Drive URL yang valid', 'warning');
                    // Allow saving anyway - just show warning
                }
                
                showLoading();
                
                setTimeout(() => {
                    // Update material data
                    const oldStatus = materi.active;
                    materi.gdrive = newLink;
                    materi.active = newStatus;
                    materi.description = newDesc;
                    
                    hideLoading();
                    modal.remove();
                    populateAdminMateriGrid();
                    
                    let message = `Materi "${materi.name}" berhasil diupdate`;
                    if (oldStatus !== newStatus) {
                        message += ` dan ${newStatus ? 'diaktifkan' : 'dinonaktifkan'}`;
                    }
                    
                    showNotification(message);
                    addActivity('materi_edit', `Materi ${materi.name} diupdate`, 'fas fa-edit', 'text-blue-400');
                    
                    // Update peserta material grid if currently viewing
                    if (document.getElementById('pesertaMateri') && !document.getElementById('pesertaMateri').classList.contains('hidden')) {
                        populatePesertaMateriGrid();
                    }
                }, 1000);
            });
        }

        function toggleMateriStatus(id) {
            const materi = materiList.find(m => m.id === id);
            if (!materi) {
                showNotification('Materi tidak ditemukan', 'error');
                return;
            }
            
            if (confirm(`${materi.active ? 'Nonaktifkan' : 'Aktifkan'} materi "${materi.name}"?`)) {
                materi.active = !materi.active;
                populateAdminMateriGrid();
                showNotification(`Materi "${materi.name}" berhasil ${materi.active ? 'diaktifkan' : 'dinonaktifkan'}`);
                addActivity('materi_toggle', `Materi ${materi.name} ${materi.active ? 'diaktifkan' : 'dinonaktifkan'}`, 'fas fa-toggle-on', 'text-purple-400');
                
                // Update peserta material grid if currently viewing
                if (document.getElementById('pesertaMateri') && !document.getElementById('pesertaMateri').classList.contains('hidden')) {
                    populatePesertaMateriGrid();
                }
            }
        }

        function editTest(testType) {
            const test = testData[testType];
            if (!test) return;
            
            const testName = testType === 'preTest' ? 'Pre-Test' : 'Post-Test';
            
            // Create modal for editing test
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4';
            modal.innerHTML = `
                <div class="bg-navy-900/90 backdrop-blur-lg rounded-xl shadow-2xl w-full max-w-md border border-navy-700/50">
                    <div class="p-6 border-b border-navy-700/50">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold text-white">Edit ${testName}</h3>
                            <button onclick="this.closest('.fixed').remove()" class="text-white hover:text-blue-200">
                                <i class="fas fa-times text-xl"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <form id="editTestForm">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Link Google Drive/Form</label>
                                    <input type="url" id="editTestLink" value="${test.link || ''}" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="https://forms.google.com/... atau https://drive.google.com/...">
                                </div>
                                
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Deskripsi</label>
                                    <textarea id="editTestDesc" rows="3" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">${test.description}</textarea>
                                </div>
                                
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Status</label>
                                    <select id="editTestStatus" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                        <option value="true" ${test.active ? 'selected' : ''} class="bg-gray-800">Aktif</option>
                                        <option value="false" ${!test.active ? 'selected' : ''} class="bg-gray-800">Nonaktif</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="flex justify-end space-x-3 mt-6">
                                <button type="button" onclick="this.closest('.fixed').remove()" class="px-6 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors duration-200">
                                    Batal
                                </button>
                                <button type="submit" class="px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-colors duration-200">
                                    <i class="fas fa-save mr-2"></i>
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
            
            // Handle form submission
            document.getElementById('editTestForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const newLink = document.getElementById('editTestLink').value.trim();
                const newDesc = document.getElementById('editTestDesc').value.trim();
                const newStatus = document.getElementById('editTestStatus').value === 'true';
                
                showLoading();
                
                setTimeout(() => {
                    // Update test data
                    const oldStatus = test.active;
                    test.link = newLink;
                    test.description = newDesc;
                    test.active = newStatus;
                    
                    hideLoading();
                    modal.remove();
                    populateTestData();
                    
                    let message = `${testName} berhasil diupdate`;
                    if (oldStatus !== newStatus) {
                        message += ` dan ${newStatus ? 'diaktifkan' : 'dinonaktifkan'}`;
                    }
                    
                    showNotification(message);
                    addActivity('test_edit', `${testName} diupdate`, 'fas fa-edit', 'text-blue-400');
                }, 1000);
            });
        }

        function toggleTestStatus(testType) {
            const test = testData[testType];
            if (!test) return;
            
            test.active = !test.active;
            populateTestData();
            const testName = testType === 'preTest' ? 'Pre-Test' : 'Post-Test';
            showNotification(`${testName} berhasil ${test.active ? 'diaktifkan' : 'dinonaktifkan'}`);
            addActivity('test_toggle', `${testName} ${test.active ? 'diaktifkan' : 'dinonaktifkan'}`, 'fas fa-toggle-on', 'text-purple-400');
        }

        function editTugas(id) {
            const tugas = tugasData.find(t => t.id === id);
            if (!tugas) return;
            
            // Create modal for editing tugas
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4';
            modal.innerHTML = `
                <div class="bg-navy-900/90 backdrop-blur-lg rounded-xl shadow-2xl w-full max-w-md border border-navy-700/50">
                    <div class="p-6 border-b border-navy-700/50">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold text-white">Edit Tugas</h3>
                            <button onclick="this.closest('.fixed').remove()" class="text-white hover:text-blue-200">
                                <i class="fas fa-times text-xl"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <form id="editTugasForm">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Nama Tugas</label>
                                    <input type="text" value="${tugas.name}" class="w-full px-4 py-3 bg-gray-600/50 border border-white/30 rounded-lg text-gray-300 cursor-not-allowed" readonly>
                                </div>
                                
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Deskripsi</label>
                                    <textarea id="editTugasDesc" rows="3" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">${tugas.description}</textarea>
                                </div>
                                
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Deadline</label>
                                    <input type="date" id="editTugasDeadline" value="${tugas.deadline}" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
                                </div>
                                
                                <div>
                                    <label class="block text-blue-200 text-sm font-medium mb-2">Status</label>
                                    <select id="editTugasStatus" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                        <option value="true" ${tugas.active ? 'selected' : ''} class="bg-gray-800">Aktif</option>
                                        <option value="false" ${!tugas.active ? 'selected' : ''} class="bg-gray-800">Nonaktif</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="flex justify-end space-x-3 mt-6">
                                <button type="button" onclick="this.closest('.fixed').remove()" class="px-6 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition-colors duration-200">
                                    Batal
                                </button>
                                <button type="submit" class="px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-colors duration-200">
                                    <i class="fas fa-save mr-2"></i>
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
            
            // Handle form submission
            document.getElementById('editTugasForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const newDesc = document.getElementById('editTugasDesc').value.trim();
                const newDeadline = document.getElementById('editTugasDeadline').value;
                const newStatus = document.getElementById('editTugasStatus').value === 'true';
                
                if (!newDeadline) {
                    showNotification('Deadline harus diisi', 'error');
                    return;
                }
                
                showLoading();
                
                setTimeout(() => {
                    // Update tugas data
                    const oldStatus = tugas.active;
                    tugas.description = newDesc;
                    tugas.deadline = newDeadline;
                    tugas.active = newStatus;
                    
                    hideLoading();
                    modal.remove();
                    populateTugasList();
                    populateSubmissionTable();
                    
                    let message = `Tugas "${tugas.name}" berhasil diupdate`;
                    if (oldStatus !== newStatus) {
                        message += ` dan ${newStatus ? 'diaktifkan' : 'dinonaktifkan'}`;
                    }
                    
                    showNotification(message);
                    addActivity('tugas_edit', `Tugas ${tugas.name} diupdate`, 'fas fa-edit', 'text-blue-400');
                }, 1000);
            });
        }

        function toggleTugasStatus(id) {
            const tugas = tugasData.find(t => t.id === id);
            if (!tugas) return;
            
            tugas.active = !tugas.active;
            populateTugasList();
            showNotification(`Tugas "${tugas.name}" berhasil ${tugas.active ? 'diaktifkan' : 'dinonaktifkan'}`);
            addActivity('tugas_toggle', `Tugas ${tugas.name} ${tugas.active ? 'diaktifkan' : 'dinonaktifkan'}`, 'fas fa-toggle-on', 'text-purple-400');
        }

        function deleteJadwal() {
            if (confirm('Hapus jadwal saat ini?')) {
                jadwalData = { link: '', description: '', active: false };
                populateJadwalData();
                showNotification('Jadwal berhasil dihapus');
                addActivity('jadwal_delete', 'Jadwal dihapus', 'fas fa-trash', 'text-red-400');
            }
        }

        function verifyPayment(username) {
            const user = registeredUsers.find(u => u.username === username);
            if (!user) return;
            
            user.paymentStatus = 'verified';
            user.verified = true;
            populatePaymentTable();
            populatePesertaTable();
            updateDashboardStats();
            showNotification(`Pembayaran ${user.fullName || user.username} berhasil diverifikasi`);
            addActivity('payment_verify', `Pembayaran ${user.fullName || user.username} diverifikasi`, 'fas fa-check-circle', 'text-green-400');
        }

        function rejectPayment(username) {
            const user = registeredUsers.find(u => u.username === username);
            if (!user) return;
            
            const reason = prompt('Alasan penolakan:');
            if (reason !== null) {
                user.paymentStatus = 'rejected';
                user.rejectionReason = reason;
                populatePaymentTable();
                showNotification(`Pembayaran ${user.fullName || user.username} ditolak`);
                addActivity('payment_reject', `Pembayaran ${user.fullName || user.username} ditolak`, 'fas fa-times-circle', 'text-red-400');
            }
        }

        function issueCertificate(username) {
            const user = registeredUsers.find(u => u.username === username);
            if (!user) return;
            
            if (confirm(`Terbitkan sertifikat untuk ${user.fullName || user.username}?`)) {
                user.certificateIssued = true;
                user.certificateDate = new Date().toISOString();
                populateCertificateTable();
                updateCertificateStats();
                showNotification(`Sertifikat ${user.fullName || user.username} berhasil diterbitkan`);
                addActivity('certificate_issue', `Sertifikat ${user.fullName || user.username} diterbitkan`, 'fas fa-certificate', 'text-yellow-400');
            }
        }
        
        function issueCertificateWithFeedback(username) {
            const user = registeredUsers.find(u => u.username === username);
            if (!user) return;
            
            const feedback = prompt(`Masukkan feedback untuk ${user.fullName || user.username}:`, 'Selamat! Anda telah menyelesaikan program PEKERTI dengan baik.');
            if (feedback !== null) {
                user.certificateIssued = true;
                user.certificateDate = new Date().toISOString();
                user.certificateFeedback = feedback.trim();
                populateCertificateTable();
                updateCertificateStats();
                showNotification(`Sertifikat ${user.fullName || user.username} berhasil diterbitkan dengan feedback`);
                addActivity('certificate_issue', `Sertifikat ${user.fullName || user.username} diterbitkan dengan feedback`, 'fas fa-certificate', 'text-yellow-400');
            }
        }
        
        function addCertificateFeedback(username) {
            const user = registeredUsers.find(u => u.username === username);
            if (!user) return;
            
            const currentFeedback = user.certificateFeedback || '';
            const newFeedback = prompt(`Edit feedback untuk ${user.fullName || user.username}:`, currentFeedback);
            if (newFeedback !== null) {
                user.certificateFeedback = newFeedback.trim();
                populateCertificateTable();
                showNotification(`Feedback untuk ${user.fullName || user.username} berhasil ${currentFeedback ? 'diupdate' : 'ditambahkan'}`);
                addActivity('feedback_add', `Feedback untuk ${user.fullName || user.username} ${currentFeedback ? 'diupdate' : 'ditambahkan'}`, 'fas fa-comment', 'text-orange-400');
            }
        }
        
        function resetPassword(username) {
            if (username === 'admin') {
                const newPassword = prompt('Masukkan password baru untuk admin:', 'Adm!nUndip2025');
                if (newPassword && newPassword.trim() !== '') {
                    showNotification('Password admin berhasil direset');
                    addActivity('password_reset', 'Password admin direset', 'fas fa-key', 'text-orange-400');
                }
            } else {
                const user = registeredUsers.find(u => u.username === username);
                if (!user) return;
                
                const newPassword = generatePassword(user.username, user.nik);
                user.password = newPassword;
                populateAdminUsersList();
                showNotification(`Password ${user.fullName || user.username} direset menjadi: ${newPassword}`);
                addActivity('password_reset', `Password ${user.fullName || user.username} direset`, 'fas fa-key', 'text-orange-400');
            }
        }
        
        function editUser(username) {
            if (username === 'admin') {
                showNotification('Admin account tidak dapat diedit', 'warning');
                return;
            }
            
            const user = registeredUsers.find(u => u.username === username);
            if (!user) return;
            
            const newName = prompt('Edit Nama Lengkap:', user.fullName || '');
            if (newName && newName !== user.fullName) {
                user.fullName = newName;
                populateAdminUsersList();
                populatePesertaTable();
                populateCertificateTable();
                showNotification(`Data ${user.username} berhasil diupdate`);
                addActivity('user_edit', `Data user ${user.username} diupdate`, 'fas fa-edit', 'text-blue-400');
            }
        }
        
        function toggleUserStatus(username) {
            const user = registeredUsers.find(u => u.username === username);
            if (!user) return;
            
            user.verified = !user.verified;
            populateAdminUsersList();
            populatePesertaTable();
            populateCertificateTable();
            updateDashboardStats();
            showNotification(`User ${user.fullName || user.username} berhasil ${user.verified ? 'diaktifkan' : 'dinonaktifkan'}`);
            addActivity('user_toggle', `User ${user.fullName || user.username} ${user.verified ? 'diaktifkan' : 'dinonaktifkan'}`, 'fas fa-user-check', 'text-purple-400');
        }
        
        function deleteUser(username) {
            const user = registeredUsers.find(u => u.username === username);
            if (!user) return;
            
            if (confirm(`Hapus user ${user.fullName || user.username}? Tindakan ini tidak dapat dibatalkan.`)) {
                const index = registeredUsers.findIndex(u => u.username === username);
                if (index !== -1) {
                    // Update batch count
                    const batch = batchList.find(b => b.name === user.batch);
                    if (batch && batch.registered > 0) {
                        batch.registered--;
                    }
                    
                    registeredUsers.splice(index, 1);
                    populateAdminUsersList();
                    populatePesertaTable();
                    populateCertificateTable();
                    updateDashboardStats();
                    showNotification(`User ${user.fullName || user.username} berhasil dihapus`);
                    addActivity('user_delete', `User ${user.fullName || user.username} dihapus`, 'fas fa-user-minus', 'text-red-400');
                }
            }
        }

        // Batch Management Functions
        function editBatch(id) {
            const batch = batchList.find(b => b.id === id);
            if (!batch) {
                showNotification('Batch tidak ditemukan', 'error');
                return;
            }
            
            // Fill form with current data for editing
            document.getElementById('batchName').value = batch.name;
            document.getElementById('batchQuota').value = batch.quota;
            document.getElementById('batchRegDeadline').value = batch.registrationDeadline;
            document.getElementById('batchStartDate').value = batch.startDate;
            document.getElementById('batchEndDate').value = batch.endDate;
            document.getElementById('batchStatus').value = batch.status;
            
            // Change form to edit mode
            const form = document.getElementById('addBatchForm');
            const submitBtn = form.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<i class="fas fa-save mr-2"></i>Update Batch';
            submitBtn.onclick = function(e) {
                e.preventDefault();
                updateBatch(id);
            };
            
            showNotification('Form siap untuk edit batch');
        }
        
        function updateBatch(id) {
            const batch = batchList.find(b => b.id === id);
            if (!batch) {
                showNotification('Batch tidak ditemukan', 'error');
                return;
            }
            
            const name = document.getElementById('batchName').value.trim();
            const quota = parseInt(document.getElementById('batchQuota').value);
            const regDeadline = document.getElementById('batchRegDeadline').value;
            const startDate = document.getElementById('batchStartDate').value;
            const endDate = document.getElementById('batchEndDate').value;
            const status = document.getElementById('batchStatus').value;
            
            if (!name || !quota || !regDeadline || !startDate || !endDate || !status) {
                showNotification('Semua field harus diisi', 'error');
                return;
            }
            
            // Update batch data
            batch.name = name;
            batch.quota = quota;
            batch.registrationDeadline = regDeadline;
            batch.startDate = startDate;
            batch.endDate = endDate;
            batch.status = status;
            
            // Reset form
            document.getElementById('addBatchForm').reset();
            const submitBtn = document.getElementById('addBatchForm').querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<i class="fas fa-plus mr-2"></i>Tambah Batch';
            submitBtn.onclick = null;
            
            populateBatchTable();
            updateDashboardStats();
            showNotification(`Batch "${name}" berhasil diupdate`);
            addActivity('batch_edit', `Batch ${name} diupdate`, 'fas fa-edit', 'text-blue-400');
        }
        
        function deleteBatch(id) {
            const batch = batchList.find(b => b.id === id);
            if (!batch) {
                showNotification('Batch tidak ditemukan', 'error');
                return;
            }
            
            if (batch.registered > 0) {
                showNotification('Tidak dapat menghapus batch yang sudah memiliki peserta', 'error');
                return;
            }
            
            if (confirm(`Hapus batch "${batch.name}"? Tindakan ini tidak dapat dibatalkan.`)) {
                const index = batchList.findIndex(b => b.id === id);
                if (index !== -1) {
                    batchList.splice(index, 1);
                    populateBatchTable();
                    updateDashboardStats();
                    showNotification(`Batch "${batch.name}" berhasil dihapus`);
                    addActivity('batch_delete', `Batch ${batch.name} dihapus`, 'fas fa-trash', 'text-red-400');
                }
            }
        }
        function viewPaymentProof(username) { showNotification('Fitur lihat bukti bayar akan segera tersedia'); }
        function exportPaymentData() { showNotification('Data pembayaran berhasil diexport'); }
        function filterByPaymentStatus() { showNotification('Filter pembayaran diterapkan'); }
        function addAdmin() { showNotification('Fitur tambah admin akan segera tersedia'); }
        function downloadCertificate(username) { showNotification('Sertifikat berhasil didownload'); }
        function viewUserProgress(username) { 
            const user = registeredUsers.find(u => u.username === username);
            if (!user) return;
            
            const progress = calculateUserProgress(user);
            const materiCompleted = user.materiCompleted ? user.materiCompleted.length : 0;
            const tugasCompleted = user.tugasCompleted ? user.tugasCompleted.length : 0;
            const testCompleted = user.testCompleted ? user.testCompleted.length : 0;
            
            alert(`Progress Detail - ${user.fullName || user.username}\n\nMateri: ${materiCompleted}/21 (${Math.round((materiCompleted/21)*100)}%)\nTugas: ${tugasCompleted}/5 (${Math.round((tugasCompleted/5)*100)}%)\nTest: ${testCompleted}/2 (${Math.round((testCompleted/2)*100)}%)\n\nProgress Total: ${progress}%`);
        }
        function bulkIssueCertificates() { 
            const eligibleUsers = registeredUsers.filter(u => u.verified && !u.certificateIssued && calculateUserProgress(u) >= 80 && calculateFinalScore(u) >= 70);
            if (eligibleUsers.length === 0) {
                showNotification('Tidak ada peserta yang memenuhi syarat untuk sertifikat', 'warning');
                return;
            }
            
            if (confirm(`Terbitkan sertifikat untuk ${eligibleUsers.length} peserta yang memenuhi syarat?`)) {
                eligibleUsers.forEach(user => {
                    user.certificateIssued = true;
                    user.certificateDate = new Date().toISOString();
                    user.certificateFeedback = 'Selamat! Anda telah menyelesaikan program PEKERTI dengan baik.';
                });
                
                populateCertificateTable();
                updateCertificateStats();
                showNotification(`${eligibleUsers.length} sertifikat berhasil diterbitkan secara massal`);
                addActivity('certificate_bulk', `${eligibleUsers.length} sertifikat diterbitkan secara massal`, 'fas fa-certificate', 'text-yellow-400');
            }
        }
        function exportCertificateData() { showNotification('Data sertifikat berhasil diexport'); }
        function filterByCertificateStatus() { showNotification('Filter sertifikat diterapkan'); }

        // Form handlers
        document.getElementById('jadwalForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const link = document.getElementById('jadwalGDriveLink').value.trim();
            const description = document.getElementById('jadwalDescription').value.trim();
            const active = document.getElementById('jadwalActive').checked;
            
            if (!link) {
                showNotification('Link Google Drive harus diisi', 'error');
                return;
            }
            
            showLoading();
            
            setTimeout(() => {
                jadwalData = { link, description, active };
                populateJadwalData();
                
                // Reset form
                document.getElementById('jadwalForm').reset();
                
                hideLoading();
                showNotification('Jadwal berhasil disimpan');
                addActivity('jadwal_upload', 'Jadwal pelatihan diupload', 'fas fa-calendar-plus', 'text-blue-400');
            }, 1000);
        });

        // Add batch form handler
        document.getElementById('addBatchForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('batchName').value.trim();
            const quota = parseInt(document.getElementById('batchQuota').value);
            const regDeadline = document.getElementById('batchRegDeadline').value;
            const startDate = document.getElementById('batchStartDate').value;
            const endDate = document.getElementById('batchEndDate').value;
            const status = document.getElementById('batchStatus').value;
            
            if (!name || !quota || !regDeadline || !startDate || !endDate || !status) {
                showNotification('Semua field harus diisi', 'error');
                return;
            }
            
            showLoading();
            
            setTimeout(() => {
                const newBatch = {
                    id: Date.now(),
                    name: name,
                    quota: quota,
                    registered: 0,
                    registrationDeadline: regDeadline,
                    startDate: startDate,
                    endDate: endDate,
                    status: status,
                    createdDate: new Date().toISOString()
                };
                
                batchList.push(newBatch);
                
                // Reset form
                document.getElementById('addBatchForm').reset();
                
                // Update batch dropdown in registration form
                updateBatchDropdown();
                
                hideLoading();
                populateBatchTable();
                updateDashboardStats();
                showNotification(`Batch "${name}" berhasil ditambahkan`);
                addActivity('batch_add', `Batch ${name} ditambahkan`, 'fas fa-plus', 'text-blue-400');
            }, 1000);
        });

        // Profile edit form handler
        document.getElementById('editProfilForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!currentUser) return;
            
            showLoading();
            
            // Update user data
            currentUser.nip = document.getElementById('editNip').value.trim();
            currentUser.fullName = document.getElementById('editFullName').value.trim();
            currentUser.email = document.getElementById('editEmail').value.trim();
            currentUser.whatsapp = document.getElementById('editWhatsapp').value.trim();
            currentUser.instansi = document.getElementById('editInstansi').value.trim();
            currentUser.fakultas = document.getElementById('editFakultas').value.trim();
            currentUser.jurusan = document.getElementById('editJurusan').value.trim();
            currentUser.jabatan = document.getElementById('editJabatan').value;
            
            // Update in registered users array
            const userIndex = registeredUsers.findIndex(u => u.username === currentUser.username);
            if (userIndex !== -1) {
                registeredUsers[userIndex] = currentUser;
            }
            
            setTimeout(() => {
                hideLoading();
                showNotification('Profil berhasil diperbarui');
                addActivity('profile_edit', `${currentUser.fullName} memperbarui profil`, 'fas fa-user-edit', 'text-cyan-400');
                
                // Return to dashboard after successful edit
                showDashboardPeserta();
            }, 1000);
        });

        // Feedback form handler
        document.getElementById('feedbackForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!currentUser) return;
            
            // Get form data
            const narasumber = document.querySelector('input[name="narasumber"]:checked')?.value;
            const materi = document.querySelector('input[name="materi"]:checked')?.value;
            const media = document.querySelector('input[name="media"]:checked')?.value;
            const penilaian = document.querySelector('input[name="penilaian"]:checked')?.value;
            const manfaat = document.querySelector('input[name="manfaat"]:checked')?.value;
            const comment = document.getElementById('feedbackComment').value.trim();
            
            // Validate required fields
            if (!narasumber || !materi || !media || !penilaian || !manfaat) {
                showNotification('Semua aspek penilaian harus diisi', 'error');
                return;
            }
            
            showLoading();
            
            // Save feedback
            currentUser.feedback = {
                narasumber: parseInt(narasumber),
                materi: parseInt(materi),
                media: parseInt(media),
                penilaian: parseInt(penilaian),
                manfaat: parseInt(manfaat),
                comment: comment,
                submittedDate: new Date().toISOString()
            };
            
            // Update in registered users array
            const userIndex = registeredUsers.findIndex(u => u.username === currentUser.username);
            if (userIndex !== -1) {
                registeredUsers[userIndex] = currentUser;
            }
            
            setTimeout(() => {
                hideLoading();
                showNotification('Feedback berhasil dikirim. Terima kasih atas evaluasi Anda!');
                addActivity('feedback_submit', `${currentUser.fullName} mengirim feedback evaluasi`, 'fas fa-star', 'text-pink-400');
                
                // Return to dashboard
                showDashboardPeserta();
            }, 1500);
        });

        // Form handlers for VA
        document.getElementById('bulkInputVAForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const bulkData = document.getElementById('bulkVAData').value.trim();
            if (!bulkData) {
                showNotification('Data tidak boleh kosong', 'error');
                return;
            }
            
            showLoading();
            
            const lines = bulkData.split('\n');
            let successCount = 0;
            let errorCount = 0;
            
            lines.forEach((line, index) => {
                const data = line.trim().split(',');
                if (data.length !== 4) {
                    errorCount++;
                    return;
                }
                
                const [number, bank, accountName, amount] = data.map(item => item.trim());
                
                // Validate
                if (!number || !bank || !accountName || !amount) {
                    errorCount++;
                    return;
                }
                
                // Check if VA number already exists
                if (virtualAccounts.find(va => va.number === number)) {
                    errorCount++;
                    return;
                }
                
                // Add VA
                const newVA = {
                    id: Date.now() + index,
                    number: number,
                    bank: bank,
                    accountName: accountName,
                    amount: parseInt(amount),
                    status: 'available',
                    assignedTo: null,
                    assignedDate: null,
                    createdDate: new Date().toISOString()
                };
                
                virtualAccounts.push(newVA);
                successCount++;
            });
            
            setTimeout(() => {
                hideLoading();
                closeBulkInputVA();
                populateVATable();
                
                if (successCount > 0) {
                    showNotification(`${successCount} Virtual Account berhasil ditambahkan${errorCount > 0 ? `, ${errorCount} gagal` : ''}`);
                    addActivity('va_bulk_add', `${successCount} Virtual Account ditambahkan via bulk input`, 'fas fa-upload', 'text-purple-400');
                } else {
                    showNotification('Tidak ada Virtual Account yang berhasil ditambahkan', 'error');
                }
            }, 1000);
        });



        document.getElementById('addVAForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const number = document.getElementById('singleVANumber').value.trim();
            const bank = document.getElementById('singleVABank').value;
            const accountName = document.getElementById('singleVAName').value.trim();
            const amount = parseInt(document.getElementById('singleVAAmount').value);
            
            // Check if VA number already exists
            if (virtualAccounts.find(va => va.number === number)) {
                showNotification('Nomor Virtual Account sudah ada', 'error');
                return;
            }
            
            showLoading();
            
            const newVA = {
                id: Date.now(),
                number: number,
                bank: bank,
                accountName: accountName,
                amount: amount,
                status: 'available',
                assignedTo: null,
                assignedDate: null,
                createdDate: new Date().toISOString()
            };
            
            virtualAccounts.push(newVA);
            
            setTimeout(() => {
                hideLoading();
                closeAddVA();
                populateVATable();
                showNotification(`Virtual Account ${number} berhasil ditambahkan`);
                addActivity('va_add', `VA ${number} (${bank}) ditambahkan`, 'fas fa-plus', 'text-blue-400');
            }, 1000);
        });


    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9782004115823df4',t:'MTc1NjcwMDY5OC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
