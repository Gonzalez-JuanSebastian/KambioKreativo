<!DOCTYPE html>
<html lang="es" x-data="{ mobileMenuOpen: false }" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño Gráfico | Kambio Kreativo</title>
    <link rel="icon" type="image/png" href="{{ asset('img/Recurso 1.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
                        accent: '#FF6B35'
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

        .hero-section {
            background: linear-gradient(135deg, rgba(0,0,0,0.9) 0%, rgba(25,117,188,0.3) 100%), 
                        url('/img/hero.png') no-repeat center center;
            background-size: cover;
            height: 800px;
            transition: background-image 0.5s ease-in-out, height 0.3s ease-in-out;
        }

        /* Improved text visibility in hero section */
        .hero-heading {
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.8);
        }
        
        .hero-subheading {
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
        }
        
        .glow {
            text-shadow: 0 0 10px rgba(39, 158, 217, 0.7), 0 0 20px rgba(39, 158, 217, 0.5);
        }
        
        .tech-border {
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
        
        .neon-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 25px rgba(39, 158, 217, 0.8);
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
        
        .icon-box {
            transition: all 0.3s ease;
        }
        
        .icon-box:hover {
            transform: translateY(-5px) rotate(5deg);
        }
        
        .needs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .need-card {
            transition: transform 0.3s ease;
        }
        
        .need-card:hover {
            transform: scale(1.03);
        }

        .footer-grid {
            display: flex;
            gap: 1.5rem;
            justify-content: space-between;
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
                        <a href="{{ route('home') }}">
                            <img src="img/Recurso 1.png" alt="Kambio Kreativo Logo" class="logo-image w-full h-full object-contain"> 
                        </a>          
                    </div>

                    <span class="text-2xl font-exo font-bold bg-gradient-to-r from-white to-detail1 bg-clip-text">KAMBIO  <span class="text-2xl font-exo font-light bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">KREATIVO</span> </span> 
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="font-medium hover:text-primary2 transition-colors group">
                        Inicio
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>

                    <a href="{{ route('desarrollo') }}" class="font-medium hover:text-primary2 transition-colors group">
                        Desarrollo
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>

                    <a href="{{ route('marketing') }}" class="font-medium hover:text-primary2 transition-colors group">
                        Marketing
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>

                    <a href="#beneficios" class="font-medium hover:text-primary2 transition-colors group">
                        Beneficios
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>

                    <a href="#servicios" class="font-medium hover:text-primary2 transition-colors group">
                        Servicios
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
                <a href="/" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Inicio</a>
                <a href="#beneficios" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Beneficios</a>
                <a href="#servicios" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Servicios</a>
                <a href="#necesidades" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Necesidades</a>
                <a href="#contacto" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Contacto</a>
                <a href="#contacto" class="neon-btn text-white px-6 py-3 rounded-full font-medium text-center flex items-center justify-center">
                    <i class="fas fa-paper-plane mr-2"></i> Contactar
                </a>
            </div>
        </div>
    </header>

    <section class="hero-section pt-32 pb-24 relative overflow-hidden">
        <div class="absolute inset-0 grid-pattern"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black/70 z-0"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col justify-center h-full">
            <div class="max-w-2xl fade-in">
                <h1 class="text-4xl md:text-6xl font-exo font-bold mb-6 hero-heading">
                    <span class="block">Diseño Gráfico que</span>
                    <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Transforma Marcas</span>
                </h1>
                <p class="text-xl text-white mb-10 animate-delay-100 fade-in hero-subheading">
                    Creamos identidades visuales poderosas que comunican la esencia de tu negocio y conectan emocionalmente con tu audiencia.
                </p>
                <div class="flex flex-wrap gap-4 animate-delay-200 fade-in">
                    <a href="#contacto" class="neon-btn text-white font-bold py-4 px-8 rounded-lg text-center flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2 text-xl"></i> Solicitar diseño
                    </a>
                    <a href="#beneficios" class="bg-transparent hover:bg-primary1/20 border-2 border-primary2 text-white font-bold py-4 px-8 rounded-lg text-center transition-colors">
                        Ver beneficios
                    </a>
                </div>
            </div>
        </div>

        <!-- Elementos decorativos -->
        <div class="absolute bottom-20 right-20 w-96 h-96 rounded-full bg-primary2/10 blur-3xl animate-pulse -z-1"></div>
        <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-detail1/10 blur-3xl animate-pulse -z-1"></div>
    </section>

    <!-- Sección 1: Cómo te beneficia tener un diseño profesional -->
    <section id="beneficios" class="py-20 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-30"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Cómo te beneficia tener un <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">diseño profesional</span></h2>
                <p class="text-lg text-detail2/80">La inversión en diseño de calidad ofrece ventajas estratégicas para tu negocio</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Beneficio 1 -->
                <div class="tech-border p-8 rounded-2xl fade-in">
                    <div class="icon-box w-16 h-16 bg-gradient-to-r from-primary1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Visibilidad Mejorada</h3>
                    <p class="text-detail2/80">Un diseño profesional aumenta el reconocimiento de tu marca hasta en un 80%, ayudando a destacar entre la competencia.</p>
                </div>
                
                <!-- Beneficio 2 -->
                <div class="tech-border p-8 rounded-2xl fade-in animate-delay-100">
                    <div class="icon-box w-16 h-16 bg-gradient-to-r from-primary1 to-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Mayor Rentabilidad</h3>
                    <p class="text-detail2/80">El buen diseño puede aumentar tus ventas hasta un 50% y generar hasta 200% de retorno sobre la inversión.</p>
                </div>
                
                <!-- Beneficio 3 -->
                <div class="tech-border p-8 rounded-2xl fade-in animate-delay-200">
                    <div class="icon-box w-16 h-16 bg-gradient-to-r from-detail1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Confianza del Cliente</h3>
                    <p class="text-detail2/80">Un diseño profesional incrementa la percepción de calidad y confianza en tu marca hasta un 75%.</p>
                </div>
                
                <!-- Beneficio 4 -->
                <div class="tech-border p-8 rounded-2xl fade-in">
                    <div class="icon-box w-16 h-16 bg-gradient-to-r from-primary2 to-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Comunicación Eficaz</h3>
                    <p class="text-detail2/80">El diseño transmite mensajes complejos de forma instantánea, mejorando la comprensión de tus servicios o productos.</p>
                </div>
                
                <!-- Beneficio 5 -->
                <div class="tech-border p-8 rounded-2xl fade-in animate-delay-100">
                    <div class="icon-box w-16 h-16 bg-gradient-to-r from-primary1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Conexión Emocional</h3>
                    <p class="text-detail2/80">Un buen diseño genera vínculos emocionales con tu audiencia, aumentando la fidelidad a la marca en un 65%.</p>
                </div>
                
                <!-- Beneficio 6 -->
                <div class="tech-border p-8 rounded-2xl fade-in animate-delay-200">
                    <div class="icon-box w-16 h-16 bg-gradient-to-r from-primary1 to-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Competitividad</h3>
                    <p class="text-detail2/80">Empresas con buen diseño crecen 2x más rápido que la competencia y dominan sus mercados.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 2: Servicios que tenemos para usted -->
    <section id="servicios" class="py-20 relative">
        <div class="absolute inset-0 grid-pattern"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Servicios de diseño que tenemos <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">para usted</span></h2>
                <p class="text-lg text-detail2/80">Soluciones creativas adaptadas a tus necesidades específicas</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Servicio 1 -->
                <div class="service-card tech-border overflow-hidden rounded-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-gradient-to-r from-primary1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6">
                            <i class="fas fa-copyright"></i>
                        </div>
                        <h3 class="text-xl font-exo font-bold mb-4">Branding Corporativo</h3>
                        <p class="text-detail2/80 mb-6">Desarrollamos identidades de marca completas: logotipos, manuales de marca, papelería corporativa y más.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Diseño de Logotipo</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Manual de Identidad</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Papelería Corporativa</span>
                            </li>
                        </ul>
                        <a href="#contacto" class="inline-block neon-btn text-white px-6 py-3 rounded-full text-sm">
                            Solicitar servicio
                        </a>
                    </div>
                </div>
                
                <!-- Servicio 2 -->
                <div class="service-card tech-border overflow-hidden rounded-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-gradient-to-r from-primary1 to-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-6">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3 class="text-xl font-exo font-bold mb-4">Diseño Editorial</h3>
                        <p class="text-detail2/80 mb-6">Creamos publicaciones impresas y digitales con diseños impactantes y funcionales.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-detail1 mr-3">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Catálogos de Productos</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-detail1 mr-3">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Revistas Corporativas</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-detail1 mr-3">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Folletos y Brochures</span>
                            </li>
                        </ul>
                        <a href="#contacto" class="inline-block neon-btn text-white px-6 py-3 rounded-full text-sm">
                            Solicitar servicio
                        </a>
                    </div>
                </div>
                
                <!-- Servicio 3 -->
                <div class="service-card tech-border overflow-hidden rounded-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 bg-gradient-to-r from-detail1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <h3 class="text-xl font-exo font-bold mb-4">Diseño de Empaques</h3>
                        <p class="text-detail2/80 mb-6">Diseños de packaging que destacan en el punto de venta y comunican calidad.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Etiquetas de Producto</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Cajas y Envases</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check text-xs"></i>
                                </div>
                                <span>Presentaciones Comerciales</span>
                            </li>
                        </ul>
                        <a href="#contacto" class="inline-block neon-btn text-white px-6 py-3 rounded-full text-sm">
                            Solicitar servicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 3: Necesidades que te ayudamos a resolver -->
    <section id="necesidades" class="py-20 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-30"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Necesidades que te <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">ayudamos a resolver</span></h2>
                <p class="text-lg text-detail2/80">Identificamos y solucionamos tus desafíos de comunicación visual</p>
            </div>
            
            <div class="needs-grid">
                <!-- Necesidad 1 -->
                <div class="need-card tech-border p-8 rounded-2xl fade-in">
                    <div class="flex items-start mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary1 to-primary2 rounded-full flex items-center justify-center text-white text-xl mr-4 flex-shrink-0">
                            1
                        </div>
                        <h3 class="text-xl font-exo font-bold">Marca poco reconocible</h3>
                    </div>
                    <p class="text-detail2/80 mb-6">Creamos identidades visuales únicas que te diferencien de la competencia y aumenten tu reconocimiento en el mercado.</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-4">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <span>Solución: Desarrollo de branding estratégico</span>
                    </div>
                </div>
                
                <!-- Necesidad 2 -->
                <div class="need-card tech-border p-8 rounded-2xl fade-in animate-delay-100">
                    <div class="flex items-start mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary1 to-detail1 rounded-full flex items-center justify-center text-white text-xl mr-4 flex-shrink-0">
                            2
                        </div>
                        <h3 class="text-xl font-exo font-bold">Comunicación ineficaz</h3>
                    </div>
                    <p class="text-detail2/80 mb-6">Diseñamos materiales que transmiten tus mensajes de forma clara, atractiva y profesional a tu público objetivo.</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-4">
                            <i class="fas fa-comments"></i>
                        </div>
                        <span>Solución: Diseño de comunicación estratégica</span>
                    </div>
                </div>
                
                <!-- Necesidad 3 -->
                <div class="need-card tech-border p-8 rounded-2xl fade-in animate-delay-200">
                    <div class="flex items-start mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-detail1 to-primary2 rounded-full flex items-center justify-center text-white text-xl mr-4 flex-shrink-0">
                            3
                        </div>
                        <h3 class="text-xl font-exo font-bold">Falta de consistencia visual</h3>
                    </div>
                    <p class="text-detail2/80 mb-6">Desarrollamos sistemas de identidad coherentes que mantienen uniformidad en todos tus puntos de contacto.</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-4">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <span>Solución: Sistemas de identidad visual</span>
                    </div>
                </div>
                
                <!-- Necesidad 4 -->
                <div class="need-card tech-border p-8 rounded-2xl fade-in">
                    <div class="flex items-start mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary2 to-detail1 rounded-full flex items-center justify-center text-white text-xl mr-4 flex-shrink-0">
                            4
                        </div>
                        <h3 class="text-xl font-exo font-bold">Materiales poco profesionales</h3>
                    </div>
                    <p class="text-detail2/80 mb-6">Transformamos tus materiales existentes en piezas profesionales que reflejen la calidad de tu negocio.</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-4">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <span>Solución: Rediseño y optimización</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-16 text-center fade-in">
                <a href="#contacto" class="inline-block neon-btn text-white px-8 py-3 rounded-full font-medium">
                    Solucionar mis necesidades
                </a>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="py-20 relative">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Transforma tu marca con <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">diseño profesional</span></h2>
                <p class="text-lg text-detail2/80">Completa el formulario y nos pondremos en contacto contigo</p>
            </div>
            
            <div class="max-w-2xl mx-auto">
                <!-- Formulario de contacto -->
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
                                   class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white"
                                   required>
                        </div>
                    
                        <!-- Campos Email y Empresa -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="email" class="block text-detail2 mb-2">Correo electrónico</label>
                                <input type="email" id="email" name="email" 
                                       class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white"
                                       required>
                            </div>
                            <div>
                                <label for="empresa" class="block text-detail2 mb-2">Empresa</label>
                                <input type="text" id="empresa" name="empresa" 
                                       class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white">
                            </div>
                        </div>
                    
                        <!-- Campo Necesidad -->
                        <div class="mb-6">
                            <label for="necesidad" class="block text-detail2 mb-2">¿Qué servicio necesitas?</label>
                            <select id="necesidad" name="servicio" 
                                    class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white"
                                    required>
                                <option value="">Selecciona una opción</option>
                                <option value="branding">Branding Corporativo</option>
                                <option value="editorial">Diseño Editorial</option>
                                <option value="empaques">Diseño de Empaques</option>
                                <option value="web">Diseño Web</option>
                                <option value="social">Diseño para Redes Sociales</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    
                        <!-- Campo Teléfono -->
                        <div class="mb-6">
                            <label for="telefono" class="block text-detail2 mb-2">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono"
                                   class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white"
                                   placeholder="+57 300 123 4567">
                        </div>
                    
                        <!-- Campo Mensaje -->
                        <div class="mb-6">
                            <label for="mensaje" class="block text-detail2 mb-2">Describe tu proyecto</label>
                            <textarea id="mensaje" name="mensaje" rows="4"
                                      class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white"
                                      required></textarea>
                        </div>
                    
                        <button type="submit" class="w-full neon-btn text-white font-bold py-4 rounded-lg">
                            Solicitar asesoría en diseño
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary3/80 backdrop-blur-sm border-t border-primary2/20 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="footer-grid">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-primary1 to-primary2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl mr-2">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <span class="text-xl font-exo font-bold bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">KAMBIO <span class="font-light">KREATIVO</span></span>
                    </div>
                    <p class="text-detail2/80 mb-4">Transformamos ideas en experiencias visuales memorables.</p>
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
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-exo font-bold mb-4">Contacto</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-primary2 mt-1 mr-3"></i>
                            <span class="text-detail2/80">Cali, Colombia</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt text-primary2 mt-1 mr-3"></i>
                            <span class="text-detail2/80">+57 123 456 7890</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-primary2 mt-1 mr-3"></i>
                            <span class="text-detail2/80">contacto@kambiokreativo.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-primary2/20 mt-12 pt-8 text-center text-detail2/60">
                <p>&copy; 2025 Kambio Kreativo. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    
    <!-- WhatsApp -->
    <a href="https://wa.me/573184013924" class="btn-whatsapp" target="_blank" aria-label="Chatea con nosotros por WhatsApp">
      <i class="fab fa-whatsapp"></i>
    </a>

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
        });
    </script>
</body>
</html>