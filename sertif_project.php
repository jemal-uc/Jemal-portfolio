<?php include "includes/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects & Certificates - Jemal Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        navy: {
                            50: '#F8FAFC', 100: '#F1F5F9', 200: '#E2E8F0', 300: '#CBD5E1',
                            400: '#94A3B8', 500: '#64748B', 600: '#475569', 700: '#334155',
                            800: '#1E293B', 900: '#0F172A', 950: '#020617',
                        },
                        accent: {
                            light: '#3B82F6',
                            DEFAULT: '#1E3A8A',
                            dark: '#172554',
                        }
                    },
                    fontFamily: { sans: ['Inter', 'sans-serif'], },
                    animation: {
                        'gradient-x': 'gradient-x 15s ease infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        'gradient-x': {
                            '0%, 100%': { 'background-size': '200% 200%', 'background-position': 'left center' },
                            '50%': { 'background-size': '200% 200%', 'background-position': 'right center' },
                        },
                        'float': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .glass-morphism {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .dark .glass-morphism {
            background: rgba(15, 23, 42, 0.6);
        }
        .text-gradient {
            background: linear-gradient(to right, #3B82F6, #1E3A8A, #6366F1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #1E3A8A;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-navy-50 dark:bg-navy-950 transition-colors duration-500 custom-scrollbar overflow-x-hidden">

    <header class="fixed top-0 w-full z-50 transition-all duration-300 glass-morphism" id="main-nav">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2 group">
                <div class="w-10 h-10 bg-accent rounded-xl flex items-center justify-center text-white font-bold text-xl group-hover:rotate-12 transition-transform shadow-lg shadow-accent/20">J</div>
                <span class="text-xl font-extrabold tracking-tighter text-navy-900 dark:text-white">JEMAL.</span>
            </div>
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="text-sm font-medium text-navy-600 dark:text-navy-300 hover:text-accent dark:hover:text-accent transition-colors">Home</a>
                <a href="index.php#about" class="text-sm font-medium text-navy-600 dark:text-navy-300 hover:text-accent dark:hover:text-accent transition-colors">About</a>
                <a href="sertif_project.php#sertifikat" class="text-sm font-medium text-navy-600 dark:text-navy-300 hover:text-accent dark:hover:text-accent transition-colors">Skills</a>
                <a href="sertif_project.php#projek" class="text-sm font-medium text-navy-600 dark:text-navy-300 hover:text-accent dark:hover:text-accent transition-colors">Projects</a>
                <button id="theme-toggle" class="p-2 rounded-lg bg-navy-100 dark:bg-navy-800 text-navy-600 dark:text-navy-300 hover:ring-2 ring-accent/50 transition-all">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path></svg>
                </button>
            </div>
            
            <button id="mobile-menu-btn" class="md:hidden p-2 text-navy-600 dark:text-navy-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </nav>
    </header>

    <main class="pt-32 pb-20">
        <div class="container mx-auto px-6">
            
            <div class="mb-24">
                <div id="projek" class="pt-10"></div>
                <div class="max-w-2xl mb-12">
                    <h2 class="text-sm font-bold text-accent uppercase tracking-widest mb-4">Portfolio</h2>
                    <h3 class="text-4xl md:text-6xl font-black text-navy-900 dark:text-white tracking-tighter">
                        PROJECT <span class="text-navy-400">LIST.</span>
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    $query_projek = mysqli_query($conn, "SELECT * FROM proyek WHERE kategori='projek' ORDER BY id DESC");
                    if(mysqli_num_rows($query_projek) > 0) {
                        while($row = mysqli_fetch_assoc($query_projek)) {
                    ?>
                    <div class="group relative overflow-hidden rounded-3xl bg-white dark:bg-navy-900 border border-navy-100 dark:border-navy-800 shadow-xl transition-all duration-500 hover:-translate-y-2">
                        <div class="aspect-video overflow-hidden">
                            <img src="uploads/<?php echo $row['gambar']; ?>" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-8">
                            <span class="px-3 py-1 bg-accent/10 text-accent text-[10px] font-black uppercase rounded-lg mb-4 inline-block">Development</span>
                            <h4 class="text-2xl font-bold text-navy-900 dark:text-white mb-3"><?php echo $row['judul']; ?></h4>
                            <p class="text-navy-600 dark:text-navy-400 text-sm leading-relaxed mb-4"><?php echo $row['deskripsi']; ?></p>
                            <div class="pt-4 border-t border-navy-50 dark:border-navy-800 text-xs text-navy-400 font-medium">
                                Uploaded: <?php echo date('d M Y', strtotime($row['tanggal_upload'])); ?>
                            </div>
                        </div>
                    </div>
                    <?php } } else { echo "<p class='col-span-full text-navy-400 italic'>Belum ada projek yang diunggah.</p>"; } ?>
                </div>
            </div>

                <div id="sertifikat" class="mb-24">
                    <span class="absolute -mt-20" id="sertifikat"></span>
            <div>
                <div class="max-w-2xl mb-12">
                    <h2 class="text-sm font-bold text-accent uppercase tracking-widest mb-4">Achievements</h2>
                    <h3 class="text-4xl md:text-6xl font-black text-navy-900 dark:text-white tracking-tighter">
                        CERTIFICATES <span class="text-navy-400">&</span> AWARDS.
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    $query_sertif = mysqli_query($conn, "SELECT * FROM proyek WHERE kategori='sertifikat' ORDER BY id DESC");
                    if(mysqli_num_rows($query_sertif) > 0) {
                        while($row = mysqli_fetch_assoc($query_sertif)) {
                    ?>
                    <div class="group relative overflow-hidden rounded-3xl bg-white dark:bg-navy-900 border border-navy-100 dark:border-navy-800 shadow-xl transition-all duration-500 hover:-translate-y-2">
                        <div class="aspect-video overflow-hidden">
                            <img src="uploads/<?php echo $row['gambar']; ?>" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-8">
                            <span class="px-3 py-1 bg-yellow-500/10 text-yellow-600 text-[10px] font-black uppercase rounded-lg mb-4 inline-block">Certification</span>
                            <h4 class="text-2xl font-bold text-navy-900 dark:text-white mb-3"><?php echo $row['judul']; ?></h4>
                            <p class="text-navy-600 dark:text-navy-400 text-sm leading-relaxed mb-4"><?php echo $row['deskripsi']; ?></p>
                            <div class="pt-4 border-t border-navy-50 dark:border-navy-800 text-xs text-navy-400 font-medium">
                                Issued: <?php echo date('d M Y', strtotime($row['tanggal_upload'])); ?>
                            </div>
                        </div>
                    </div>
                    <?php } } else { echo "<p class='col-span-full text-navy-400 italic'>Belum ada sertifikat yang diunggah.</p>"; } ?>
                </div>
            </div>

        </div>
    </main>

    <footer id="contact" class="pt-32 pb-12 bg-white dark:bg-navy-950">
        <div class="container mx-auto px-6 text-center lg:text-left">
            <div class="grid lg:grid-cols-2 gap-20 items-start mb-24">
                <div>
                    <h2 class="text-6xl md:text-8xl font-black text-navy-900 dark:text-white tracking-tighter leading-[0.9] mb-12">
                        LET'S MAKE <br> SOMETHING <br> <span class="text-gradient">GREAT.</span>
                    </h2>
                    <div class="space-y-6">
                        <a href="mailto:bertowrkflr@gmail.com" class="block text-2xl font-bold text-navy-900 dark:text-white hover:text-accent transition-colors underline decoration-accent/30 underline-offset-8">bertowrkflr@gmail.com</a>
                        <div class="flex items-center justify-center lg:justify-start space-x-6">
                            <a href="#" class="text-navy-500 hover:text-accent transition-colors">LinkedIn</a>
                            <a href="#" class="text-navy-500 hover:text-accent transition-colors">GitHub</a>
                            <a href="#" class="text-navy-500 hover:text-accent transition-colors">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-12 border-t border-navy-100 dark:border-navy-900 flex flex-col md:flex-row justify-between items-center gap-6 text-sm text-navy-500">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-navy-900 dark:bg-white rounded-lg flex items-center justify-center text-white dark:text-navy-950 font-bold">J</div>
                    <span class="font-black tracking-tighter text-navy-900 dark:text-white uppercase">Jemal.</span>
                </div>
                <p>&copy; 2026 Gilberto Novena Jemali. All rights reserved.</p>
                <span class="font-bold uppercase tracking-widest text-xs">Salatiga, Indonesia</span>
            </div>
        </div>
    </footer>

    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-white dark:bg-navy-950 hidden p-6 flex flex-col justify-center items-center text-center space-y-8">
        <button id="close-menu" class="absolute top-8 right-8 p-2 text-navy-900 dark:text-white">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <a href="index.php" class="text-4xl font-black text-navy-900 dark:text-white tracking-tighter">Home</a>
        <a href="sertif_project.php" class="text-4xl font-black text-accent tracking-tighter">Projects</a>
    </div>

    <script>
        // Navbar scroll effect
        const nav = document.getElementById('main-nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('py-2', 'shadow-lg');
                nav.classList.remove('py-4');
            } else {
                nav.classList.add('py-4');
                nav.classList.remove('py-2', 'shadow-lg');
            }
        });

        // Theme Toggle
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            themeToggleDarkIcon.classList.remove('hidden');
        }

        themeToggleBtn.addEventListener('click', function() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        });

        // Mobile Menu
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenu = document.getElementById('close-menu');
        mobileBtn.addEventListener('click', () => mobileMenu.classList.remove('hidden'));
        closeMenu.addEventListener('click', () => mobileMenu.classList.add('hidden'));
    </script>
</body>
</html>