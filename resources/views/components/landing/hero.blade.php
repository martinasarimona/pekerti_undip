<main class="relative min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl floating-animation"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl floating-animation" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-128 h-128 bg-navy-600/5 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 text-center max-w-5xl mx-auto">
        <div class="slide-in-up">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-6 leading-tight">
                Pelatihan
                <span class="block bg-gradient-to-r from-blue-400 via-blue-300 to-cyan-300 bg-clip-text text-transparent">
                    PEKERTI
                </span>
            </h1>
        </div>

        <div class="slide-in-up" style="animation-delay: 0.3s;">
            <p class="text-xl md:text-2xl lg:text-3xl text-blue-100 font-light mb-4 leading-relaxed">
                Peningkatan Keterampilan Dasar Teknik Instruksional
            </p>
            <p class="text-lg md:text-xl text-blue-200 font-medium mb-12">
                Direktorat Sumber Daya Manusia – Universitas Diponegoro
            </p>
        </div>

        <div class="slide-in-up space-y-6" style="animation-delay: 0.6s;">
            <div class="mb-8">
                <a href="{{ route('register') }}" class="group relative inline-flex items-center justify-center px-12 py-6 text-xl font-bold text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl shadow-2xl hover:from-blue-600 hover:to-blue-700 transform hover:scale-105 transition-all duration-300 pulse-glow">
                    <i class="fas fa-user-plus mr-4 text-2xl"></i>
                    <span>Daftar Sekarang</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-500 rounded-2xl opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                </a>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="{{ route('login') }}" class="glass-effect px-8 py-4 text-white font-semibold rounded-xl hover:bg-white/20 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-sign-in-alt mr-3"></i>
                    Login Peserta
                </a>

                <a href="#" class="glass-effect px-8 py-4 text-white font-semibold rounded-xl hover:bg-white/20 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-user-shield mr-3"></i>
                    Login Admin
                </a>
            </div>
        </div>

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
