<!DOCTYPE html>
<html lang="es" x-data="{ mobileMenuOpen: false, activeService: 1 }" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kambio Kreativo | Transformación Digital Creativa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;500;600;700;800&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary1: '#1975BC',
                        primary2: '#279ED9',
                        primary3: '#000000',
                        detail1: '#0655dd',
                        detail2: '#F8FAFC',
                        accent: '#FF6B35',
                        white: 'FFFFFF',
                    },
                    fontFamily: {
                        exo: ['Exo 2', 'sans-serif'],
                        montserrat: ['Montserrat', 'sans-serif']
                    },
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #000000;
            color: #F8FAFC;
            overflow-x: hidden;
            position: relative;
        }
        
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, rgba(25, 117, 188, 0.05) 0%, rgba(0, 0, 0, 1) 70%);
            z-index: -1;
        }
        
        .glow {
            text-shadow: 0 0 10px rgba(39, 158, 217, 0.7), 0 0 20px rgba(39, 158, 217, 0.5);
        }
        .tech-head {
            position: relative;
            border: 1px solid rgba(39, 158, 217, 0.3);
            background: rgba(25, 94, 214, 0.77);
            backdrop-filter: blur(10px);
        }
        .tech-border {
            /**
            position: relative;
            border: 1px solid rgba(39, 158, 217, 0.3);
            background: rgba(10, 15, 25, 0.6);
            backdrop-filter: blur(10px);
            **/

            position: relative;
            border: 1px solid rgba(39, 158, 217, 0.3);
            background: rgba(25, 94, 214, 0.6);
            backdrop-filter: blur(10px);
        }
        
        .tech-border::before {
            content: "";
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: rgba(25, 94, 214, 0.6);
            z-index: -1;
            border-radius: inherit;
        }
        
        .neon-btn {
            background: linear-gradient(45deg, #0655dd, #1975BC);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(39, 158, 217, 0.5);
        }

        /*  
        .neon-btn {
            background: linear-gradient(45deg, #0655dd, #1975BC);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(39, 158, 217, 0.5);
        }   
        */
        
        .neon-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 25px rgba(39, 158, 217, 0.8);
        }
        
        .neon-btn::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 255, 255, 0.3), 
                transparent);
            transition: all 0.6s;
        }
        
        .neon-btn:hover::after {
            left: 100%;
        }
        
        .service-card {
            transition: all 0.4s ease;
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        
        .service-card:hover {
            transform: translateY(-10px) scale(1.02);
        }
        
        .service-card-content {
            transform: translateZ(20px);
        }
        
        .grid-pattern {
            background-image: 
                linear-gradient(rgba(39, 158, 217, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(39, 158, 217, 0.1) 1px, transparent 1px);
            background-size: 30px 30px;
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(39, 158, 217, 0.3);
            animation: float 15s infinite linear;
        }
        
        @keyframes float {
            0% { transform: translateY(0) translateX(0); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100vh) translateX(100px); opacity: 0; }
        }
        
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-delay-100 {
            animation-delay: 0.1s;
        }
        
        .animate-delay-200 {
            animation-delay: 0.2s;
        }
        
        .animate-delay-300 {
            animation-delay: 0.3s;
        }
        
        .pulse {
            animation: pulse 3s infinite;
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(39, 158, 217, 0.4); }
            70% { box-shadow: 0 0 0 20px rgba(39, 158, 217, 0); }
            100% { box-shadow: 0 0 0 0 rgba(39, 158, 217, 0); }
        }
    </style>
</head>
<body class="font-montserrat">
    <!-- Partículas de fondo -->
    <div class="fixed inset-0 z-0 overflow-hidden">
        <div class="particle w-2 h-2 top-1/4 left-1/5" style="animation-duration: 20s;"></div>
        <div class="particle w-3 h-3 top-1/3 left-3/4" style="animation-duration: 25s; animation-delay: -5s;"></div>
        <div class="particle w-1 h-1 top-2/3 left-1/3" style="animation-duration: 15s; animation-delay: -10s;"></div>
        <div class="particle w-4 h-4 top-3/4 left-2/5" style="animation-duration: 30s; animation-delay: -15s;"></div>
        <div class="particle w-2 h-2 top-1/5 left-4/5" style="animation-duration: 18s; animation-delay: -7s;"></div>
    </div>
    
    <!-- Header -->
    <header class="fixed w-full z-50 bg-black/80 backdrop-blur-sm py-4 border-b border-primary2/30">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="bg-gradient-to-r from-primary1 to-primary2 w-12 h-12 rounded-full flex items-center justify-center text-white text-xl mr-3 pulse">
                        <i class="fas fa-sync-alt"></i>
                    </div>

                        <span class="text-2xl font-exo font-bold bg-gradient-to-r from-white to-detail1 bg-clip-text bg-clip-text">KAMBIO  <span class="text-2xl font-exo font-light bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">KREATIVO</span> </span> 
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#inicio" class="font-medium hover:text-primary2 transition-colors group">
                        Inicio
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>
                    <a href="{{ route('diseño') }}" class="font-medium hover:text-primary2 transition-colors group">
                        Diseño Grafico
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>
                    <a href="{{ route('desarrollo') }}" class="font-medium hover:text-primary2 transition-colors group">
                        Desarrollo
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>
                    <a href="#nosotros" class="font-medium hover:text-primary2 transition-colors group">
                        Nosotros
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>
                    <a href="#contacto" class="font-medium hover:text-primary2 transition-colors group">
                        Contacto
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>
                </nav>
                
                <div class="hidden md:block">
                    <a href="#contacto" class="neon-btn text-white px-6 py-3 rounded-full font-medium">
                        <i class="fas fa-paper-plane mr-2"></i> Contactar
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-primary2">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div x-show="mobileMenuOpen" class="md:hidden bg-black/95 backdrop-blur-lg absolute top-full w-full" x-transition>
            <div class="container mx-auto px-4 py-6 flex flex-col space-y-4">
                <a href="#inicio" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Inicio</a>
                <a href="#servicios" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Servicios</a>
                <a href="#portafolio" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Portafolio</a>
                <a href="#nosotros" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Nosotros</a>
                <a href="#contacto" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Contacto</a>
                <a href="#contacto" class="neon-btn text-white px-6 py-3 rounded-full font-medium text-center flex items-center justify-center">
                    <i class="fas fa-paper-plane mr-2"></i> Contactar
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="pt-32 pb-24 relative overflow-hidden">
        <div class="absolute inset-0 grid-pattern"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-3xl fade-in">
                <h1 class="text-4xl md:text-6xl font-exo font-bold mb-6 glow">
                    Transformamos ideas en experiencias digitales
                </h1>
                <p class="text-xl text-detail2/80 mb-10 animate-delay-100 fade-in">
                    En Kambio Kreativo integramos diseño, publicidad y desarrollo de software para crear soluciones únicas que impulsan tu negocio en el mundo digital.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 animate-delay-200 fade-in">
                    <a href="#contacto" class="neon-btn text-white font-bold py-4 px-8 rounded-lg text-center flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2 text-xl"></i> Contactar ahora
                    </a>
                    <a href="#servicios" class="bg-transparent hover:bg-primary1/20 border-2 border-primary2 text-white font-bold py-4 px-8 rounded-lg text-center transition-colors">
                        Nuestros servicios
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Elementos flotantes -->
        <div class="absolute top-20 right-10 w-64 h-64 rounded-full bg-primary1/10 blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-48 h-48 rounded-full bg-detail1/10 blur-3xl animate-pulse"></div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 relative">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="tech-head p-6 rounded-xl fade-in">
                    <div class="text-5xl font-bold text-white mb-2 ">10+</div>
                    <div class="text-lg text-detail2/80 from-white">Años de Experiencia</div>
                </div>
                <div class="tech-head p-6 rounded-xl fade-in">
                    <div class="text-5xl font-bold text-white mb-2">200+</div>
                    <div class="text-lg text-detail2/80">Clientes Satisfechos</div>
                </div>
                <div class="tech-head p-6 rounded-xl fade-in">
                    <div class="text-5xl font-bold text-white mb-2">500+</div>
                    <div class="text-lg text-detail2/80">Proyectos Completados</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="py-20 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-20"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Nuestros <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Servicios</span></h2>
                <p class="text-lg text-detail2/80">Ofrecemos un ecosistema integrado de soluciones para tu marca</p>
            </div>
            
            <!-- Selector de servicios -->
            <div class="flex justify-center mb-12">
                <div class="bg-primary3/80 backdrop-blur-sm rounded-full p-1 flex border border-primary2/30">
                    <button 
                        @click="activeService = 1" 
                        :class="activeService === 1 ? 'bg-gradient-to-r from-primary1 to-primary2 text-white' : 'bg-transparent text-detail2/70 hover:text-white'" 
                        class="px-6 py-2 rounded-full font-medium transition-all"
                    >
                        Diseño
                    </button>
                    <button 
                        @click="activeService = 2" 
                        :class="activeService === 2 ? 'bg-gradient-to-r from-primary1 to-primary2 text-white' : 'bg-transparent text-detail2/70 hover:text-white'" 
                        class="px-6 py-2 rounded-full font-medium transition-all"
                    >
                        Marketing
                    </button>
                    <button 
                        @click="activeService = 3" 
                        :class="activeService === 3 ? 'bg-gradient-to-r from-primary1 to-primary2 text-white' : 'bg-transparent text-detail2/70 hover:text-white'" 
                        class="px-6 py-2 rounded-full font-medium transition-all"
                    >
                        Desarrollo
                    </button>
                </div>
            </div>
            
            <!-- Contenido de servicios -->
            <div class="grid grid-cols-1 gap-12">
                <!-- Diseño Gráfico -->
                <div x-show="activeService === 1" x-transition class="tech-border p-8 rounded-2xl">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-1/3 flex justify-center">
                            <div class="bg-gradient-to-r from-primary1 to-primary2 w-32 h-32 rounded-full flex items-center justify-center text-white text-5xl">
                                <i class="fas fa-palette"></i>
                            </div>
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-2xl font-exo font-bold mb-4">Diseño Gráfico</h3>
                            <p class="text-detail2/80 mb-6">Creamos identidades visuales impactantes que comunican la esencia de tu marca y conectan con tu audiencia a nivel emocional.</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Branding Corporativo</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Diseño Editorial</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Material POP/POS</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Diseño de Empaques</span>
                                </div>
                            </div>
                                <a href="{{ route('diseño') }}" class="inline-block neon-btn text-white px-6 py-3 rounded-full">
                                    Solicitar servicio
                                </a>

                        </div>
                    </div>
                </div>
                
                <!-- Publicidad & Marketing -->
                <div x-show="activeService === 2" x-transition class="tech-border p-8 rounded-2xl">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-1/3 flex justify-center">
                            <div class="bg-gradient-to-r from-primary1 to-detail1 w-32 h-32 rounded-full flex items-center justify-center text-white text-5xl">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-2xl font-exo font-bold mb-4">Publicidad & Marketing</h3>
                            <p class="text-detail2/80 mb-6">Desarrollamos estrategias 360° para posicionar tu marca en el mercado y crear conexiones significativas con tu audiencia.</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-detail1 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Campañas Digitales</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-detail1 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Social Media</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-detail1 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Marketing de Contenidos</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-detail1 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Analítica de Datos</span>
                                </div>
                            </div>
                            <a href="#contacto" class="inline-block neon-btn text-white px-6 py-3 rounded-full">
                                Solicitar servicio
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Desarrollo de Software -->
                <div x-show="activeService === 3" x-transition class="tech-border p-8 rounded-2xl">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-1/3 flex justify-center">
                            <div class="bg-gradient-to-r from-detail1 to-primary2 w-32 h-32 rounded-full flex items-center justify-center text-white text-5xl">
                                <i class="fas fa-code"></i>
                            </div>
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-2xl font-exo font-bold mb-4">Desarrollo de Software</h3>
                            <p class="text-detail2/80 mb-6">Construimos soluciones tecnológicas a medida para impulsar tu negocio y optimizar tus procesos operativos.</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Aplicaciones Web</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Sistemas Empresariales</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>E-commerce</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>Inteligencia Artificial</span>
                                </div>
                            </div>
                            <a href="#contacto" class="inline-block neon-btn text-white px-6 py-3 rounded-full">
                                Solicitar servicio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proceso de Trabajo -->
    <section id="proceso" class="py-20 relative">
        <div class="absolute inset-0 grid-pattern"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Nuestro <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Proceso</span></h2>
                <p class="text-lg text-detail2/80">Cómo transformamos tus ideas en soluciones efectivas</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Paso 1 -->
                <div class="tech-border p-6 rounded-2xl text-center group">
                    <div class="w-20 h-20 bg-gradient-to-r from-primary1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Ideación</h3>
                    <p class="text-detail2/80">Creamos conceptos innovadores que definen la esencia de tu proyecto.</p>
                    <div class="absolute right-0 top-1/2 transform translate-x-1/2 -translate-y-1/2 hidden md:block">
                        <i class="fas fa-arrow-right text-primary2 text-xl"></i>
                    </div>
                </div>
                
                <!-- Paso 2 -->
                <div class="tech-border p-6 rounded-2xl text-center group">
                    <div class="w-20 h-20 bg-gradient-to-r from-primary1 to-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Diseño</h3>
                    <p class="text-detail2/80">Desarrollamos soluciones visuales que comunican efectivamente tu mensaje.</p>
                    <div class="absolute right-0 top-1/2 transform translate-x-1/2 -translate-y-1/2 hidden md:block">
                        <i class="fas fa-arrow-right text-primary2 text-xl"></i>
                    </div>
                </div>
                
                <!-- Paso 3 -->
                <div class="tech-border p-6 rounded-2xl text-center group">
                    <div class="w-20 h-20 bg-gradient-to-r from-detail1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Desarrollo</h3>
                    <p class="text-detail2/80">Construimos soluciones tecnológicas robustas y escalables.</p>
                    <div class="absolute right-0 top-1/2 transform translate-x-1/2 -translate-y-1/2 hidden md:block">
                        <i class="fas fa-arrow-right text-primary2 text-xl"></i>
                    </div>
                </div>
                
                <!-- Paso 4 -->
                <div class="tech-border p-6 rounded-2xl text-center group">
                    <div class="w-20 h-20 bg-gradient-to-r from-primary2 to-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Implementación</h3>
                    <p class="text-detail2/80">Lanzamos tu proyecto con estrategias efectivas para maximizar su impacto.</p>
                </div>
            </div>
            
            <div class="mt-12 text-center fade-in">
                <a href="#contacto" class="inline-block neon-btn text-white px-8 py-3 rounded-full font-medium">
                    Comencemos tu proyecto
                </a>
            </div>
        </div>
    </section>


    <!-- Contacto -->
    <section id="contacto" class="py-20 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-30"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <h2 class="text-3xl md:text-4xl font-exo font-bold mb-6">Transformemos tu <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">idea</span> en realidad</h2>
                    <p class="text-detail2/80 mb-8">Completa el formulario y nos pondremos en contacto contigo en menos de 24 horas.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-primary2 to-detail1 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Email</h3>
                                <p class="text-detail2/80">contacto@kambiokreativo.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-primary2 to-detail1 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Teléfono</h3>
                                <p class="text-detail2/80">+57 123 456 7890</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-primary2 to-detail1 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Ubicación</h3>
                                <p class="text-detail2/80">Calle 123 #45-67, Bogotá, Colombia</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-10">
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-primary1/20 rounded-full flex items-center justify-center text-detail2 hover:text-white hover:bg-primary2 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary1/20 rounded-full flex items-center justify-center text-detail2 hover:text-white hover:bg-gradient-to-r from-yellow-400 to-pink-500 transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary1/20 rounded-full flex items-center justify-center text-detail2 hover:text-white hover:bg-blue-600 transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary1/20 rounded-full flex items-center justify-center text-detail2 hover:text-white hover:bg-blue-800 transition-colors">
                                <i class="fab fa-behance"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div id="contacto-form" class="tech-border p-8 rounded-2xl fade-in animate-delay-100">
                    @if(session('success'))
                        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                            <strong class="font-bold">¡Éxito!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('contacto.store') }}#contacto-form">
                        @csrf
                    
                        <!-- Campo Nombre -->
                        <div class="mb-6">
                            <label for="nombre" class="block text-detail2 mb-2">Nombre completo</label>
                            <input type="text" id="nombre" name="nombre" 
                                   value="{{ old('nombre') }}"
                                   class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white"
                                   required>
                            @error('nombre')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    
                        <!-- Campos Email y Empresa -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="email" class="block text-detail2 mb-2">Correo electrónico</label>
                                <input type="email" id="email" name="email" 
                                       value="{{ old('email') }}"
                                       class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white"
                                       required>
                                @error('email')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="empresa" class="block text-detail2 mb-2">Empresa</label>
                                <input type="text" id="empresa" name="empresa" 
                                       value="{{ old('empresa') }}"
                                       class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white">
                            </div>
                        </div>
                    
                        <!-- Campo Necesidad -->
                        <div class="mb-6">
                            <label for="necesidad" class="block text-detail2 mb-2">¿Qué necesidad deseas resolver?</label>
                            <select id="necesidad" name="servicio" 
                                    class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white"
                                    required>
                                                        <div class="mb-6">
                            <label for="necesidad" class="block text-detail2 mb-2">¿Qué necesidad deseas resolver?</label>
                            <select id="servicio" name="servicio"
                                class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white">
                                <option value="">Selecciona un servicio</option>
                                <option value="diseno">Diseño Gráfico</option>
                                <option value="marketing">Marketing Digital</option>
                                <option value="software">Desarrollo de Software</option>
                                <option value="multiple">Varios Servicios</option>
                            </select>
                        </div>
                            </select>
                            @error('servicio')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    
                        <!-- Campo Teléfono -->
                        <div class="mb-6">
                            <label for="telefono" class="block text-detail2 mb-2">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono"
                                   value="{{ old('telefono') }}"
                                   class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white"
                                   placeholder="+57 300 123 4567">
                        </div>
                    
                        <!-- Campo Mensaje -->
                        <div class="mb-6">
                            <label for="mensaje" class="block text-detail2 mb-2">Describe tu proyecto</label>
                            <textarea id="mensaje" name="mensaje" rows="4"
                                      class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white"
                                      required>{{ old('mensaje') }}</textarea>
                            @error('mensaje')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    
                        <button type="submit" class="w-full neon-btn text-white font-bold py-4 rounded-lg">
                            Solicitar solución personalizada
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary3/80 backdrop-blur-sm border-t border-primary2/20 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-primary1 to-primary2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl mr-2">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <span class="text-xl font-exo font-bold bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">KAMBIO <span class="font-light">KREATIVO</span></span>
                    </div>
                    <p class="text-detail2/80 mb-4">Transformamos ideas en experiencias digitales memorables.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-detail2/80 hover:text-primary2 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-detail2/80 hover:text-primary2 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-detail2/80 hover:text-primary2 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-detail2/80 hover:text-primary2 transition-colors">
                            <i class="fab fa-behance"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-exo font-bold mb-4">Servicios</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-detail2/80 hover:text-primary2 transition-colors">Diseño Gráfico</a></li>
                        <li><a href="#" class="text-detail2/80 hover:text-primary2 transition-colors">Branding Corporativo</a></li>
                        <li><a href="#" class="text-detail2/80 hover:text-primary2 transition-colors">Marketing Digital</a></li>
                        <li><a href="#" class="text-detail2/80 hover:text-primary2 transition-colors">Desarrollo Web</a></li>
                        <li><a href="#" class="text-detail2/80 hover:text-primary2 transition-colors">Aplicaciones Móviles</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-exo font-bold mb-4">Enlaces Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="#inicio" class="text-detail2/80 hover:text-primary2 transition-colors">Inicio</a></li>
                        <li><a href="#servicios" class="text-detail2/80 hover:text-primary2 transition-colors">Servicios</a></li>
                        <li><a href="#portafolio" class="text-detail2/80 hover:text-primary2 transition-colors">Portafolio</a></li>
                        <li><a href="#nosotros" class="text-detail2/80 hover:text-primary2 transition-colors">Nosotros</a></li>
                        <li><a href="#contacto" class="text-detail2/80 hover:text-primary2 transition-colors">Contacto</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-exo font-bold mb-4">Newsletter</h3>
                    <p class="text-detail2/80 mb-4">Suscríbete para recibir nuestras últimas novedades.</p>
                    <form class="flex">
                        <input type="email" placeholder="Tu correo" class="px-4 py-2 bg-primary3/50 border border-primary2/30 rounded-l-lg focus:outline-none text-white w-full">
                        <button class="bg-gradient-to-r from-primary2 to-detail1 text-white px-4 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-primary2/20 mt-12 pt-8 text-center text-detail2/60">
                <p>&copy; 2025 Kambio Kreativo. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    
    <script>
        // Animaciones para las partículas
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.fixed.inset-0');
            
            // Crear más partículas
            for (let i = 0; i < 15; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Tamaño aleatorio entre 1px y 5px
                const size = Math.random() * 4 + 1;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Posición aleatoria
                particle.style.top = `${Math.random() * 100}%`;
                particle.style.left = `${Math.random() * 100}%`;
                
                // Duración de animación aleatoria
                const duration = Math.random() * 20 + 10;
                particle.style.animationDuration = `${duration}s`;
                
                // Retraso aleatorio
                const delay = Math.random() * -20;
                particle.style.animationDelay = `${delay}s`;
                
                container.appendChild(particle);
            }
            
            // Efecto de escritura para el título
            const title = document.querySelector('.hero-bg h1');
            if (title) {
                const text = title.textContent;
                title.textContent = '';
                
                let i = 0;
                const typeWriter = setInterval(() => {
                    if (i < text.length) {
                        title.textContent += text.charAt(i);
                        i++;
                    } else {
                        clearInterval(typeWriter);
                    }
                }, 50);
            }
        });

        // formato de telefon 
        function formatPhoneNumber(input) {
            // Eliminar todo excepto números
            let numbers = input.value.replace(/\D/g, '');

            // Formato: +57 300 123 4567
            if (numbers.length > 2) {
                numbers = '+57 ' + numbers.substring(2);
            }

            // Agrupar en bloques de 3
            if (numbers.length > 7) {
                numbers = numbers.substring(0, 7) + ' ' + numbers.substring(7, 10) + 
                         (numbers.length > 10 ? ' ' + numbers.substring(10, 13) : '');
            }

            input.value = numbers;
        }   
    </script>


    // validacion formulario 
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Manejar el desplazamiento después del envío
        if (window.location.hash === '#contacto-form') {
            const formSection = document.getElementById('contacto-form');
            if (formSection) {
                formSection.scrollIntoView({ behavior: 'smooth' });
            }
        }
    
        // Validación básica frontend
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                let valid = true;
                
                // Validar campos requeridos
                const requiredFields = form.querySelectorAll('[required]');
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        valid = false;
                        field.classList.add('border-red-500');
                    } else {
                        field.classList.remove('border-red-500');
                    }
                });
            
                // Validar email
                const emailField = form.querySelector('#email');
                if (emailField && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailField.value)) {
                    valid = false;
                    emailField.classList.add('border-red-500');
                }
            
                if (!valid) {
                    e.preventDefault();
                    document.getElementById('contacto-form').scrollIntoView({ behavior: 'smooth' });
                }
            });
        }
    });
    </script>
    
    
</body>
</html>