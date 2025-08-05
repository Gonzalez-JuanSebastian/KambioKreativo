<!DOCTYPE html>
<html lang="es" x-data="{ mobileMenuOpen: false, activeService: 1 }" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalGrowth | Agencia de Marketing Digital</title>
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
        
        .marketing-icon {
            background: linear-gradient(45deg, #0655dd, #1975BC);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            margin-bottom: 20px;
            font-size: 30px;
            transition: all 0.3s ease;
        }
        
        .marketing-icon:hover {
            transform: rotate(10deg) scale(1.1);
        }
        
        .testimonial-card {
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(39, 158, 217, 0.2);
        }
        
        .embudo-section {
            background: linear-gradient(to bottom, #0a1128, #001b44);
        }
        
        .cta-section {
            background: linear-gradient(to right, #0655dd, #1975BC);
        }
        
        .marketing-graphic {
            position: relative;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .graphic-element {
            position: absolute;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            transition: all 0.5s ease;
        }
        
        .graphic-element:hover {
            transform: scale(1.1) rotate(5deg);
            z-index: 10;
        }
        
        .analytics-chart {
            background: rgba(25, 94, 214, 0.3);
            border-radius: 10px;
            padding: 20px;
            height: 200px;
            position: relative;
            overflow: hidden;
        }
        
        .chart-bar {
            position: absolute;
            bottom: 0;
            width: 30px;
            background: linear-gradient(to top, #279ED9, #0655dd);
            border-radius: 5px 5px 0 0;
            transition: height 1s ease;
        }
        
        @keyframes growBar {
            from { height: 0; }
            to { height: var(--bar-height); }
        }
        
        .chart-bar {
            animation: growBar 1.5s ease-out forwards;
        }
        
        .funnel-graphic {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }
        
        .funnel-stage {
            display: flex;
            align-items: center;
            width: 100%;
            margin: 10px 0;
            padding: 15px;
            background: rgba(25, 94, 214, 0.3);
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .funnel-stage:hover {
            transform: translateX(10px);
            background: rgba(25, 94, 214, 0.5);
        }
        
        .funnel-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #0655dd, #1975BC);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .graphic-line {
            height: 30px;
            width: 2px;
            background: rgba(39, 158, 217, 0.5);
            margin: 0 auto;
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
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <span class="text-2xl font-exo font-bold bg-gradient-to-r from-white to-detail1 bg-clip-text">DIGITAL<span class="text-2xl font-exo font-light bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">GROWTH</span></span>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#inicio" class="font-medium hover:text-primary2 transition-colors group">
                        Inicio
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>
                    <a href="#servicios" class="font-medium hover:text-primary2 transition-colors group">
                        Servicios
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>
                    <a href="#estrategia" class="font-medium hover:text-primary2 transition-colors group">
                        Estrategia
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>
                    <a href="#resultados" class="font-medium hover:text-primary2 transition-colors group">
                        Resultados
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
                <a href="#estrategia" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Estrategia</a>
                <a href="#resultados" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Resultados</a>
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
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2 max-w-xl fade-in">
                    <h1 class="text-4xl md:text-6xl font-exo font-bold mb-6 glow">
                        Acelera tu crecimiento con estrategias de <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Marketing Digital</span>
                    </h1>
                    <p class="text-xl text-detail2/80 mb-10 animate-delay-100 fade-in">
                        Transformamos visitantes en clientes con embudos de venta inteligentes y campañas personalizadas que generan resultados tangibles.
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
                
                <div class="lg:w-1/2 flex justify-center mt-12 lg:mt-0">
                    <div class="marketing-graphic relative w-full max-w-lg">
                        <!-- Elementos gráficos de marketing -->
                        <div class="graphic-element bg-gradient-to-br from-primary1 to-primary2 w-32 h-32" style="top: 20%; left: 10%;">
                            <div>SEO<br>Optimizado</div>
                        </div>
                        <div class="graphic-element bg-gradient-to-br from-detail1 to-primary2 w-28 h-28" style="top: 40%; right: 15%;">
                            <div>Publicidad<br>Digital</div>
                        </div>
                        <div class="graphic-element bg-gradient-to-br from-primary2 to-detail1 w-36 h-36" style="bottom: 20%; left: 30%;">
                            <div>Conversiones<br>+150%</div>
                        </div>
                        <div class="graphic-element bg-gradient-to-br from-primary1 to-detail1 w-24 h-24" style="top: 30%; left: 45%;">
                            <div>Social<br>Media</div>
                        </div>
                        
                        <!-- Líneas conectando elementos -->
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 400 300">
                            <line x1="80" y1="80" x2="120" y2="100" stroke="#279ED9" stroke-width="2" stroke-dasharray="5,5" />
                            <line x1="300" y1="130" x2="240" y2="150" stroke="#279ED9" stroke-width="2" stroke-dasharray="5,5" />
                            <line x1="180" y1="220" x2="140" y2="160" stroke="#279ED9" stroke-width="2" stroke-dasharray="5,5" />
                            <line x1="220" y1="110" x2="180" y2="220" stroke="#279ED9" stroke-width="2" stroke-dasharray="5,5" />
                        </svg>
                    </div>
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
            <div class="grid grid-cols-1 md:grid-cs-3 gap-8 text-center">
                <div class="tech-head p-6 rounded-xl fade-in">
                    <div class="text-5xl font-bold text-white mb-2">+150%</div>
                    <div class="text-lg text-detail2/80">ROI promedio en campañas</div>
                </div>
                <div class="tech-head p-6 rounded-xl fade-in">
                    <div class="text-5xl font-bold text-white mb-2">+300</div>
                    <div class="text-lg text-detail2/80">Clientes satisfechos</div>
                </div>
                <div class="tech-head p-6 rounded-xl fade-in">
                    <div class="text-5xl font-bold text-white mb-2">+95%</div>
                    <div class="text-lg text-detail2/80">Retención de clientes</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios de Marketing con Gráficos -->
    <section id="servicios" class="py-20 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-20"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Nuestros <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Servicios</span></h2>
                <p class="text-lg text-detail2/80">Soluciones integrales para impulsar tu presencia digital</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <div class="service-card tech-border p-8 rounded-2xl">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="w-full md:w-1/3 flex justify-center">
                            <div class="marketing-icon">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        <div class="w-full md:w-2/3">
                            <h3 class="text-2xl font-exo font-bold mb-4">SEO & Posicionamiento</h3>
                            <p class="text-detail2/80 mb-6">Optimizamos tu sitio web para que aparezcas en los primeros resultados de búsqueda y atraigas tráfico cualificado.</p>
                            <div class="analytics-chart mb-6">
                                <!-- Gráfico de crecimiento orgánico -->
                                <div class="chart-bar" style="left: 20px; --bar-height: 70%;"></div>
                                <div class="chart-bar" style="left: 60px; --bar-height: 40%;"></div>
                                <div class="chart-bar" style="left: 100px; --bar-height: 60%;"></div>
                                <div class="chart-bar" style="left: 140px; --bar-height: 85%;"></div>
                                <div class="chart-bar" style="left: 180px; --bar-height: 95%;"></div>
                                <div class="absolute bottom-0 left-0 right-0 text-center text-xs text-detail2/80">
                                    Evolución tráfico orgánico
                                </div>
                            </div>
                            <a href="#contacto" class="inline-block neon-btn text-white px-6 py-3 rounded-full">
                                Solicitar servicio
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="service-card tech-border p-8 rounded-2xl">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="w-full md:w-1/3 flex justify-center">
                            <div class="marketing-icon">
                                <i class="fas fa-ad"></i>
                            </div>
                        </div>
                        <div class="w-full md:w-2/3">
                            <h3 class="text-2xl font-exo font-bold mb-4">Publicidad Digital</h3>
                            <p class="text-detail2/80 mb-6">Creamos campañas efectivas en Google Ads, Facebook Ads y otras plataformas para generar leads y ventas.</p>
                            <div class="analytics-chart mb-6">
                                <!-- Gráfico de conversiones -->
                                <div class="chart-bar" style="left: 30px; --bar-height: 40%; background: linear-gradient(to top, #FF6B35, #ff8c5a);"></div>
                                <div class="chart-bar" style="left: 80px; --bar-height: 65%; background: linear-gradient(to top, #FF6B35, #ff8c5a);"></div>
                                <div class="chart-bar" style="left: 130px; --bar-height: 85%; background: linear-gradient(to top, #FF6B35, #ff8c5a);"></div>
                                <div class="chart-bar" style="left: 180px; --bar-height: 95%; background: linear-gradient(to top, #FF6B35, #ff8c5a);"></div>
                                <div class="absolute bottom-0 left-0 right-0 text-center text-xs text-detail2/80">
                                    Aumento en conversiones
                                </div>
                            </div>
                            <a href="#contacto" class="inline-block neon-btn text-white px-6 py-3 rounded-full">
                                Solicitar servicio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="service-card tech-border p-8 rounded-2xl">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="w-full md:w-1/3 flex justify-center">
                            <div class="marketing-icon">
                                <i class="fas fa-hashtag"></i>
                            </div>
                        </div>
                        <div class="w-full md:w-2/3">
                            <h3 class="text-2xl font-exo font-bold mb-4">Social Media</h3>
                            <p class="text-detail2/80 mb-6">Gestionamos tu presencia en redes sociales para construir comunidad y aumentar el engagement con tu marca.</p>
                            <div class="grid grid-cols-3 gap-4 mb-6">
                                <div class="text-center p-3 bg-primary3/30 rounded-lg">
                                    <div class="text-2xl font-bold text-primary2">+250%</div>
                                    <div class="text-sm text-detail2/80">Engagement</div>
                                </div>
                                <div class="text-center p-3 bg-primary3/30 rounded-lg">
                                    <div class="text-2xl font-bold text-primary2">3.5M</div>
                                    <div class="text-sm text-detail2/80">Impresiones</div>
                                </div>
                                <div class="text-center p-3 bg-primary3/30 rounded-lg">
                                    <div class="text-2xl font-bold text-primary2">+120%</div>
                                    <div class="text-sm text-detail2/80">Seguidores</div>
                                </div>
                            </div>
                            <a href="#contacto" class="inline-block neon-btn text-white px-6 py-3 rounded-full">
                                Solicitar servicio
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="service-card tech-border p-8 rounded-2xl">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="w-full md:w-1/3 flex justify-center">
                            <div class="marketing-icon">
                                <i class="fas fa-funnel-dollar"></i>
                            </div>
                        </div>
                        <div class="w-full md:w-2/3">
                            <h3 class="text-2xl font-exo font-bold mb-4">Embudos de Conversión</h3>
                            <p class="text-detail2/80 mb-6">Diseñamos embudos de venta personalizados que guían a tus clientes desde el descubrimiento hasta la compra.</p>
                            <div class="flex items-center justify-between mb-6">
                                <div class="text-center">
                                    <div class="w-10 h-10 bg-primary2 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="text-sm">Atención</div>
                                </div>
                                <div class="text-primary2 text-xl">→</div>
                                <div class="text-center">
                                    <div class="w-10 h-10 bg-primary2 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="text-sm">Interés</div>
                                </div>
                                <div class="text-primary2 text-xl">→</div>
                                <div class="text-center">
                                    <div class="w-10 h-10 bg-primary2 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <div class="text-sm">Decisión</div>
                                </div>
                                <div class="text-primary2 text-xl">→</div>
                                <div class="text-center">
                                    <div class="w-10 h-10 bg-primary2 rounded-full flex items-center justify-center mx-auto mb-2">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text-sm">Acción</div>
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

    <!-- Embudo de Ventas Visual -->
    <section id="estrategia" class="embudo-section py-20 relative">
        <div class="absolute inset-0 grid-pattern"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Embudo de Ventas <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Inteligente</span></h2>
                <p class="text-lg text-detail2/80">Convertimos visitantes en clientes leales con un proceso estructurado</p>
            </div>
            
            <div class="funnel-graphic">
                <!-- Fase 1: Atención -->
                <div class="funnel-stage">
                    <div class="funnel-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-exo font-bold">Atención</h3>
                        <p class="text-detail2/80">Captamos la atención de tu público objetivo con contenido relevante y anuncios estratégicos.</p>
                    </div>
                    <div class="ml-auto text-2xl text-primary2">10,000</div>
                </div>
                
                <div class="graphic-line"></div>
                
                <!-- Fase 2: Interés -->
                <div class="funnel-stage">
                    <div class="funnel-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-exo font-bold">Interés</h3>
                        <p class="text-detail2/80">Generamos interés con soluciones específicas a sus problemas y necesidades.</p>
                    </div>
                    <div class="ml-auto text-2xl text-primary2">2,500</div>
                </div>
                
                <div class="graphic-line"></div>
                
                <!-- Fase 3: Decisión -->
                <div class="funnel-stage">
                    <div class="funnel-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-exo font-bold">Decisión</h3>
                        <p class="text-detail2/80">Facilitamos la decisión de compra con testimonios, ofertas y demostraciones.</p>
                    </div>
                    <div class="ml-auto text-2xl text-primary2">500</div>
                </div>
                
                <div class="graphic-line"></div>
                
                <!-- Fase 4: Acción -->
                <div class="funnel-stage">
                    <div class="funnel-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-exo font-bold">Acción</h3>
                        <p class="text-detail2/80">Convertimos en ventas con procesos de compra optimizados y seguimiento personalizado.</p>
                    </div>
                    <div class="ml-auto text-2xl text-primary2">250</div>
                </div>
            </div>
            
            <div class="mt-12 text-center fade-in">
                <a href="#contacto" class="inline-block neon-btn text-white px-8 py-3 rounded-full font-medium">
                    Implementar mi embudo
                </a>
            </div>
        </div>
    </section>

    <!-- Resultados con Gráficos -->
    <section id="resultados" class="py-20 relative">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Resultados <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Tangibles</span></h2>
                <p class="text-lg text-detail2/80">Lo que hemos logrado para nuestros clientes</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="testimonial-card tech-border p-8 rounded-2xl fade-in">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Cliente" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-bold">Carlos Mendoza</h3>
                            <p class="text-primary2">CEO, TechSolutions</p>
                        </div>
                    </div>
                    <p class="text-detail2/80 italic mb-4">"En solo 3 meses duplicamos nuestras ventas online gracias a su estrategia de embudos. ¡Increíble!"</p>
                    
                    <!-- Mini gráfico de crecimiento -->
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-primary2 rounded-full mr-2"></div>
                            <span class="text-sm">Antes</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-detail1 rounded-full mr-2"></div>
                            <span class="text-sm">Después</span>
                        </div>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2 mt-2 overflow-hidden">
                        <div class="bg-primary2 h-2" style="width:40%;"></div>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2 mt-1 overflow-hidden">
                        <div class="bg-detail1 h-2" style="width:85%;"></div>
                    </div>
                </div>
                
                <div class="testimonial-card tech-border p-8 rounded-2xl fade-in animate-delay-100">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Cliente" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-bold">Laura Jiménez</h3>
                            <p class="text-primary2">Directora, EcoModa</p>
                        </div>
                    </div>
                    <p class="text-detail2/80 italic mb-4">"Su enfoque en marketing de contenidos aumentó nuestro tráfico orgánico en un 180% en 6 meses."</p>
                    
                    <!-- Mini gráfico de crecimiento -->
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-primary2 rounded-full mr-2"></div>
                            <span class="text-sm">Antes</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-detail1 rounded-full mr-2"></div>
                            <span class="text-sm">Después</span>
                        </div>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2 mt-2 overflow-hidden">
                        <div class="bg-primary2 h-2" style="width:30%;"></div>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2 mt-1 overflow-hidden">
                        <div class="bg-detail1 h-2" style="width:90%;"></div>
                    </div>
                </div>
                
                <div class="testimonial-card tech-border p-8 rounded-2xl fade-in animate-delay-200">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/62.jpg" alt="Cliente" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-bold">Miguel Torres</h3>
                            <p class="text-primary2">Fundador, HealthPlus</p>
                        </div>
                    </div>
                    <p class="text-detail2/80 italic mb-4">"Redujimos nuestro costo por lead en un 65% con sus campañas de publicidad digital. ¡Recomendados!"</p>
                    
                    <!-- Mini gráfico de reducción de costos -->
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-primary2 rounded-full mr-2"></div>
                            <span class="text-sm">Antes</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-detail1 rounded-full mr-2"></div>
                            <span class="text-sm">Después</span>
                        </div>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2 mt-2 overflow-hidden">
                        <div class="bg-primary2 h-2" style="width:90%;"></div>
                    </div>
                    <div class="w-full bg-gray-800 rounded-full h-2 mt-1 overflow-hidden">
                        <div class="bg-detail1 h-2" style="width:35%;"></div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="tech-head p-6 rounded-xl fade-in">
                    <div class="text-3xl font-bold text-white mb-2">+250%</div>
                    <div class="text-sm text-detail2/80">Crecimiento en ventas</div>
                </div>
                <div class="tech-head p-6 rounded-xl fade-in animate-delay-100">
                    <div class="text-3xl font-bold text-white mb-2">-45%</div>
                    <div class="text-sm text-detail2/80">Costo por adquisición</div>
                </div>
                <div class="tech-head p-6 rounded-xl fade-in animate-delay-200">
                    <div class="text-3xl font-bold text-white mb-2">+300%</div>
                    <div class="text-sm text-detail2/80">Tráfico cualificado</div>
                </div>
                <div class="tech-head p-6 rounded-xl fade-in animate-delay-300">
                    <div class="text-3xl font-bold text-white mb-2">4.9/5</div>
                    <div class="text-sm text-detail2/80">Satisfacción clientes</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-16 relative">
        <div class="absolute inset-0 opacity-90"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <h2 class="text-3xl md:text-4xl font-exo font-bold mb-6 text-white">¿Listo para transformar tu negocio?</h2>
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">Obtén una estrategia de marketing digital personalizada que genere resultados reales.</p>
            <a href="#contacto" class="inline-block bg-white text-primary1 font-bold py-4 px-8 rounded-lg hover:bg-gray-100 transition-colors">
                <i class="fas fa-calendar-check mr-2"></i> Agenda una consulta gratuita
            </a>
        </div>
    </section>

    <!-- Formulario de Contacto -->
    <section id="contacto" class="py-20 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-30"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <h2 class="text-3xl md:text-4xl font-exo font-bold mb-6">Transformemos tu <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">negocio digital</span></h2>
                    <p class="text-detail2/80 mb-8">Completa el formulario y nos pondremos en contacto contigo en menos de 24 horas.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-primary2 to-detail1 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Email</h3>
                                <p class="text-detail2/80">contacto@digitalgrowth.com</p>
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
                                <p class="text-detail2/80">Carrera 45 #99-20, Bogotá, Colombia</p>
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
                                <i class="fab fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="tech-border p-8 rounded-2xl fade-in animate-delay-100">
                    <h3 class="text-2xl font-exo font-bold mb-6 text-center">Solicita tu estrategia personalizada</h3>
                    <form>
                        <div class="mb-6">
                            <label for="nombre" class="block text-detail2 mb-2">Nombre completo</label>
                            <input type="text" id="nombre" class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white" required>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="email" class="block text-detail2 mb-2">Correo electrónico</label>
                                <input type="email" id="email" class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white" required>
                            </div>
                            <div>
                                <label for="empresa" class="block text-detail2 mb-2">Empresa</label>
                                <input type="text" id="empresa" class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="servicio" class="block text-detail2 mb-2">Servicio de interés</label>
                            <select id="servicio" class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white" required>
                                <option value="">Selecciona un servicio</option>
                                <option value="seo">SEO & Posicionamiento</option>
                                <option value="ads">Publicidad Digital</option>
                                <option value="social">Social Media</option>
                                <option value="embudo">Embudo de Ventas</option>
                                <option value="todo">Todos los servicios</option>
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <label for="presupuesto" class="block text-detail2 mb-2">Presupuesto mensual</label>
                            <select id="presupuesto" class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white" required>
                                <option value="">Selecciona un rango</option>
                                <option value="500-1000">$500 - $1,000 USD</option>
                                <option value="1000-3000">$1,000 - $3,000 USD</option>
                                <option value="3000-5000">$3,000 - $5,000 USD</option>
                                <option value="5000+">Más de $5,000 USD</option>
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <label for="mensaje" class="block text-detail2 mb-2">Describe tus objetivos</label>
                            <textarea id="mensaje" rows="4" class="w-full px-4 py-3 bg-primary3/30 border border-primary2/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary2 text-white" required></textarea>
                        </div>
                        
                        <button type="submit" class="w-full neon-btn text-white font-bold py-4 rounded-lg">
                            Solicitar estrategia
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary3/80 backdrop-blur-sm border-t border-primary2/20 py-12">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Marca + misión + redes -->
          <div>
            <div class="flex items-center mb-4">
              <div class="bg-gradient-to-r from-primary1 to-primary2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl mr-2">
                <i class="fas fa-chart-line"></i>
              </div>
              <span class="text-xl font-exo font-bold bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">
                DIGITAL<span class="font-light">GROWTH</span>
              </span>
            </div>
            <p class="text-detail2/80 mb-4">Transformamos visitantes en clientes con estrategias de marketing digital efectivas.</p>
            <div class="flex space-x-4">
              <a href="#" aria-label="Facebook" class="text-detail2/80 hover:text-primary2 transition-colors">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
              </a>
              <a href="#" aria-label="Instagram" class="text-detail2/80 hover:text-primary2 transition-colors">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#" aria-label="LinkedIn" class="text-detail2/80 hover:text-primary2 transition-colors">
                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
              </a>
              <a href="#" aria-label="TikTok" class="text-detail2/80 hover:text-primary2 transition-colors">
                <i class="fab fa-tiktok" aria-hidden="true"></i>
              </a>
            </div>
          </div>

          <!-- Servicios -->
          <div>
            <h3 class="text-lg font-exo font-bold mb-4">Servicios</h3>
            <ul class="space-y-2">
              <li><a href="#servicios" class="text-detail2/80 hover:text-primary2 transition-colors">SEO & Posicionamiento</a></li>
              <li><a href="#servicios" class="text-detail2/80 hover:text-primary2 transition-colors">Publicidad Digital</a></li>
              <li><a href="#servicios" class="text-detail2/80 hover:text-primary2 transition-colors">Social Media</a></li>
              <li><a href="#estrategia" class="text-detail2/80 hover:text-primary2 transition-colors">Embudos de Ventas</a></li>
              <li><a href="#estrategia" class="text-detail2/80 hover:text-primary2 transition-colors">Automatización</a></li>
            </ul>
          </div>

          <!-- Enlaces rápidos -->
          <div>
            <h3 class="text-lg font-exo font-bold mb-4">Enlaces rápidos</h3>
            <ul class="space-y-2">
              <li><a href="#inicio" class="text-detail2/80 hover:text-primary2 transition-colors">Inicio</a></li>
              <li><a href="#servicios" class="text-detail2/80 hover:text-primary2 transition-colors">Servicios</a></li>
              <li><a href="#estrategia" class="text-detail2/80 hover:text-primary2 transition-colors">Estrategia</a></li>
              <li><a href="#resultados" class="text-detail2/80 hover:text-primary2 transition-colors">Resultados</a></li>
              <li><a href="#contacto" class="text-detail2/80 hover:text-primary2 transition-colors">Contacto</a></li>
            </ul>
          </div>

          <!-- Contacto -->
          <div>
            <h3 class="text-lg font-exo font-bold mb-4">Contacto</h3>
            <ul class="space-y-2 text-detail2/80">
              <li>
                <span class="block">Email: <a href="mailto:info@digitalgrowth.com" class="hover:text-primary2 transition-colors">info@digitalgrowth.com</a></span>
              </li>
              <li>
                <span class="block">Teléfono: <a href="tel:+573001234567" class="hover:text-primary2 transition-colors">+57 300 123 4567</a></span>
              </li>
              <li>
                <span class="block">Ubicación: Bogotá, Colombia</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="border-t border-primary2/20 mt-12 pt-8 text-center text-detail2/60">
          <p>&copy; <span id="current-year"></span> DigitalGrowth. Todos los derechos reservados.</p>
        </div>
      </div>
    </footer>

    <!-- WhatsApp Flotante -->
    <a href="https://wa.me/573001234567" class="fixed bottom-6 right-6 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center text-white text-2xl z-50 hover:bg-green-600 transition-colors" aria-label="Chatea con nosotros por WhatsApp">
      <i class="fab fa-whatsapp"></i>
    </a>
    
    <script>
        // Actualiza el año automáticamente
        document.getElementById('current-year').textContent = new Date().getFullYear();

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