<?php include "includes/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jemal and Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        navy: {
                            50: '#F8FAFC',
                            100: '#F1F5F9',
                            200: '#E2E8F0',
                            300: '#CBD5E1',
                            400: '#94A3B8',
                            500: '#64748B',
                            600: '#475569',
                            700: '#334155',
                            800: '#1E293B',
                            900: '#0F172A',
                            950: '#020617',
                        },
                        accent: {
                            light: '#3B82F6',
                            DEFAULT: '#1E3A8A',
                            dark: '#172554',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'gradient-x': 'gradient-x 15s ease infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
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
                <a href="#home" class="text-sm font-medium text-navy-600 dark:text-navy-300 hover:text-accent dark:hover:text-accent transition-colors">Home</a>
                <a href="#about" class="text-sm font-medium text-navy-600 dark:text-navy-300 hover:text-accent dark:hover:text-accent transition-colors">About</a>
                <a href="#skills" class="text-sm font-medium text-navy-600 dark:text-navy-300 hover:text-accent dark:hover:text-accent transition-colors">Skills</a>
                <a href="#projects" class="text-sm font-medium text-navy-600 dark:text-navy-300 hover:text-accent dark:hover:text-accent transition-colors">Projects</a>
                <button id="theme-toggle" class="p-2 rounded-lg bg-navy-100 dark:bg-navy-800 text-navy-600 dark:text-navy-300 hover:ring-2 ring-accent/50 transition-all">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path></svg>
                </button>
                <a href="#contact" class="px-6 py-2.5 bg-accent hover:bg-accent-dark text-white text-sm font-bold rounded-full transition-all shadow-lg shadow-accent/20 hover:shadow-accent/40 hover:-translate-y-0.5">Let's Talk</a>
            </div>
            
            <button id="mobile-menu-btn" class="md:hidden p-2 text-navy-600 dark:text-navy-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </nav>
    </header>

    <section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-accent/20 rounded-full blur-[120px] animate-pulse-slow"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-indigo-500/10 rounded-full blur-[120px] animate-float"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-accent/10 border border-accent/20 text-accent text-xs font-bold uppercase tracking-wider">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-accent"></span>
                    </span>
                    <span>Available for projects</span>
                </div>
                
                <h1 class="text-6xl md:text-8xl font-black text-navy-900 dark:text-white leading-[0.9] tracking-tighter">
                    CREATIVE <br>
                    <span class="text-gradient">DEVELOPER.</span>
                </h1>
                
                <p class="text-lg text-navy-600 dark:text-navy-400 max-w-lg leading-relaxed font-medium">
                    Membangun pengalaman digital yang memadukan fungsionalitas murni dengan estetika visual yang modern.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <a href="#projects" class="px-8 py-4 bg-accent hover:bg-accent-dark text-white font-bold rounded-2xl transition-all shadow-xl shadow-accent/20 hover:shadow-accent/40 flex items-center space-x-3">
                        <span>View Work</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
            
            <div class="relative hidden md:block">
                <div class="relative z-10 w-full aspect-square bg-navy-200 dark:bg-navy-800 rounded-[40px] overflow-hidden group shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-tr from-accent to-indigo-600 opacity-20 group-hover:opacity-40 transition-opacity"></div>
                    <img src="img/person.png" alt="Profile" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-32 relative">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-sm font-bold text-accent uppercase tracking-widest mb-4">Latest Work</h2>
                    <h3 class="text-4xl md:text-6xl font-black text-navy-900 dark:text-white tracking-tighter">
                        PROJEK <span class="text-navy-400">&</span> KARYA.
                    </h3>
                </div>
                <a href="sertif_project.php" class="inline-flex items-center space-x-2 text-navy-600 dark:text-navy-400 font-bold hover:text-accent dark:hover:text-accent transition-colors pb-2">
                    <span>View All Projects</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                // Mengambil 6 projek terbaru dari database
                $query_projek = mysqli_query($conn, "SELECT * FROM proyek WHERE kategori='projek' ORDER BY id DESC LIMIT 6");
                
                if(mysqli_num_rows($query_projek) > 0) {
                    while($row = mysqli_fetch_assoc($query_projek)) {
                ?>
                <div class="group relative overflow-hidden rounded-3xl bg-white dark:bg-navy-900 border border-navy-100 dark:border-navy-800 shadow-xl transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="aspect-video overflow-hidden">
                        <img src="uploads/<?php echo $row['gambar']; ?>" alt="<?php echo $row['judul']; ?>" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-accent/10 text-accent text-[10px] font-black uppercase rounded-lg">Web Project</span>
                            <span class="text-navy-400 text-xs"><?php echo date('Y', strtotime($row['tanggal_upload'])); ?></span>
                        </div>
                        <h4 class="text-2xl font-bold text-navy-900 dark:text-white mb-3 group-hover:text-accent transition-colors"><?php echo $row['judul']; ?></h4>
                        <p class="text-navy-600 dark:text-navy-400 text-sm leading-relaxed mb-6">
                            <?php echo substr($row['deskripsi'], 0, 100) . '...'; ?>
                        </p>
                        <div class="flex items-center space-x-4 pt-4 border-t border-navy-50 dark:border-navy-800">
                            <a href="#" class="text-sm font-bold text-navy-900 dark:text-white flex items-center space-x-1 hover:text-accent">
                                <span>Case Study</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    // Tampilan jika belum ada projek di database
                ?>
                <div class="col-span-full py-20 text-center rounded-3xl border-2 border-dashed border-navy-200 dark:border-navy-800">
                    <div class="w-16 h-16 bg-navy-100 dark:bg-navy-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-navy-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-navy-900 dark:text-white mb-2">Belum ada projek</h4>
                    <p class="text-navy-600 dark:text-navy-400">Silahkan login ke dashboard untuk menambahkan karya pertama kamu.</p>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="skills" class="py-32 bg-navy-900 dark:bg-black relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_30%,#1E3A8A_0%,transparent_50%)]"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div>
                    <h2 class="text-sm font-bold text-accent uppercase tracking-widest mb-4">Expertise</h2>
                    <h3 class="text-4xl md:text-6xl font-black text-white tracking-tighter mb-8 leading-tight">
                        SKILLS <span class="text-navy-600">&</span> <br>
                        TECHNOLOGY.
                    </h3>
                    <p class="text-navy-400 text-lg mb-12 max-w-lg">
                        Selalu mengikuti perkembangan teknologi terbaru untuk memberikan solusi digital yang efisien dan skalabel.
                    </p>
                    <div class="grid grid-cols-2 gap-8">
                        <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-accent/50 transition-colors">
                            <div class="text-3xl font-black text-white mb-2">90%</div>
                            <div class="text-navy-400 text-sm font-bold uppercase tracking-wider">Frontend Dev</div>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-accent/50 transition-colors">
                            <div class="text-3xl font-black text-white mb-2">85%</div>
                            <div class="text-navy-400 text-sm font-bold uppercase tracking-wider">Backend Dev</div>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <div class="p-8 rounded-3xl bg-gradient-to-br from-accent to-indigo-800 shadow-xl shadow-accent/20 animate-float">
                            <img src="https://www.php.net/images/logos/new-php-logo.svg" class="w-16 h-16 mb-4 brightness-0 invert" alt="PHP">
                            <h5 class="text-white font-bold text-xl mb-2">PHP & SQL</h5>
                            <p class="text-white/70 text-xs leading-relaxed">Robust server-side logic and database management.</p>
                        </div>
                        <div class="p-8 rounded-3xl bg-navy-800 border border-white/5 shadow-xl">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg" class="w-12 h-12 mb-4" alt="Tailwind">
                            <h5 class="text-white font-bold text-xl mb-2">Tailwind CSS</h5>
                            <p class="text-navy-400 text-xs leading-relaxed">Modern utility-first styling for beautiful UIs.</p>
                        </div>
                    </div>
                    <div class="space-y-6 pt-12">
                        <div class="p-8 rounded-3xl bg-navy-800 border border-white/5 shadow-xl">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" class="w-12 h-12 mb-4 rounded-lg" alt="JS">
                            <h5 class="text-white font-bold text-xl mb-2">JavaScript</h5>
                            <p class="text-navy-400 text-xs leading-relaxed">Interactive and dynamic user experiences.</p>
                        </div>
                        <div class="p-8 rounded-3xl bg-indigo-600/20 border border-indigo-500/30 shadow-xl">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Vercel_logo_black.svg" class="w-12 h-12 mb-4 brightness-0 invert" alt="NextJS">
                            <h5 class="text-white font-bold text-xl mb-2">Next.js</h5>
                            <p class="text-navy-400 text-xs leading-relaxed">High-performance fullstack applications.</p>
                        </div>
                         <a href="sertif_project.php#sertifikat" class="inline-flex items-center space-x-2 text-navy-600 dark:text-navy-400 font-bold hover:text-accent dark:hover:text-accent transition-colors pb-2">
                            <span>View All certifications</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="pt-32 pb-12 bg-white dark:bg-navy-950">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20 items-start mb-24">
                <div>
                    <h2 class="text-6xl md:text-8xl font-black text-navy-900 dark:text-white tracking-tighter leading-[0.9] mb-12">
                        LET'S MAKE <br>
                        SOMETHING <br>
                        <span class="text-gradient">GREAT.</span>
                    </h2>
                    <div class="space-y-6">
                        <a href="mailto:bertowrkflr@gmail.com" class="block text-2xl font-bold text-navy-900 dark:text-white hover:text-accent transition-colors underline decoration-accent/30 underline-offset-8">bertowrkflr@gmail.com</a>
                        <div class="flex items-center space-x-6">
                            <a href="#" class="text-navy-500 hover:text-accent transition-colors">LinkedIn</a>
                            <a href="#" class="text-navy-500 hover:text-accent transition-colors">GitHub</a>
                            <a href="#" class="text-navy-500 hover:text-accent transition-colors">Instagram</a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-navy-50 dark:bg-navy-900 p-10 rounded-[40px] shadow-sm border border-navy-100 dark:border-navy-800">
                    <form class="space-y-8">
                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="text-xs font-black uppercase text-navy-400 ml-1">Your Name</label>
                                <input type="text" placeholder="John Doe" class="w-full bg-transparent border-b-2 border-navy-200 dark:border-navy-800 py-3 px-1 focus:border-accent outline-none transition-colors text-navy-900 dark:text-white">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-black uppercase text-navy-400 ml-1">Email Address</label>
                                <input type="email" placeholder="john@example.com" class="w-full bg-transparent border-b-2 border-navy-200 dark:border-navy-800 py-3 px-1 focus:border-accent outline-none transition-colors text-navy-900 dark:text-white">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase text-navy-400 ml-1">Your Message</label>
                            <textarea rows="4" placeholder="Hello Jemal, I have a project..." class="w-full bg-transparent border-b-2 border-navy-200 dark:border-navy-800 py-3 px-1 focus:border-accent outline-none transition-colors text-navy-900 dark:text-white resize-none"></textarea>
                        </div>
                        <button class="w-full py-5 bg-accent hover:bg-accent-dark text-white font-black rounded-2xl transition-all shadow-xl shadow-accent/20 flex items-center justify-center space-x-3 group">
                            <span>Send Message</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="pt-12 border-t border-navy-100 dark:border-navy-900 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-navy-900 dark:bg-white rounded-lg flex items-center justify-center text-white dark:text-navy-950 font-bold text-sm">J</div>
                    <span class="font-black tracking-tighter text-navy-900 dark:text-white">JEMAL.</span>
                </div>
                <p class="text-sm text-navy-500">&copy; 2026 Gilberto Novena Jemali. All rights reserved.</p>
                <div class="flex items-center space-x-4 text-xs font-bold text-navy-400 uppercase tracking-widest">
                    <span>Salatiga, Indonesia</span>
                </div>
            </div>
        </div>
    </footer>

    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-white dark:bg-navy-950 hidden p-6 flex flex-col justify-center items-center text-center space-y-8">
        <button id="close-menu" class="absolute top-8 right-8 p-2 text-navy-900 dark:text-white">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <a href="#home" class="mobile-link text-4xl font-black text-navy-900 dark:text-white hover:text-accent transition-colors tracking-tighter">Home</a>
        <a href="#about" class="mobile-link text-4xl font-black text-navy-900 dark:text-white hover:text-accent transition-colors tracking-tighter">About</a>
        <a href="#skills" class="mobile-link text-4xl font-black text-navy-900 dark:text-white hover:text-accent transition-colors tracking-tighter">Skills</a>
        <a href="#projects" class="mobile-link text-4xl font-black text-navy-900 dark:text-white hover:text-accent transition-colors tracking-tighter">Projects</a>
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

        // Theme Toggle Logic
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

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });

        // Mobile Menu Logic
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenu = document.getElementById('close-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        mobileBtn.addEventListener('click', () => mobileMenu.classList.remove('hidden'));
        closeMenu.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        mobileLinks.forEach(link => link.addEventListener('click', () => mobileMenu.classList.add('hidden')));
    </script>
</body>
</html>