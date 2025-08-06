<!DOCTYPE html>
<html lang="es" x-data="{ mobileMenuOpen: false, activeService: 1 }" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kambio Kreativo</title>
    <link rel="icon" type="image/png" href="{{ asset('img/Recurso 1.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;500;600;700;800;900&family=Montserrat:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                        deepBlue: '#0a1128',
                        cosmicPurple: '#3d2b56',
                        darkblue: '#0a1128',
                        deepblue: '#001b44'
                    },
                    fontFamily: {
                        exo: ['Exo 2', 'sans-serif'],
                        montserrat: ['Montserrat', 'sans-serif'],
                        space: ['Space Grotesk', 'sans-serif']
                    },
                    backgroundImage: {
                        'fluid-gradient': 'radial-gradient(ellipse at 50% 50%, rgba(25, 117, 188, 0.15) 0%, rgba(0, 0, 0, 0) 70%)',
                        'noise-texture': "url(\"data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E\")"
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            --fluid-rotation: 0deg;
            --particle-count: 30;
        }
        
        body {
            background-color: #000000;
            color: #F8FAFC;
            overflow-x: hidden;
            position: relative;
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse at bottom, #0a1128 0%, #000000 70%);
            z-index: -2;
        }
        
        .noise-layer {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
            opacity: 0.03;
            z-index: -1;
            pointer-events: none;
        }
        
        .fluid-bg {
            position: fixed;
            width: 150%;
            height: 150%;
            top: -25%;
            left: -25%;
            background: radial-gradient(ellipse at center, 
                rgba(39, 158, 217, 0.2) 0%, 
                rgba(61, 43, 86, 0.15) 30%, 
                rgba(10, 17, 40, 0.1) 60%, 
                rgba(0, 0, 0, 0) 90%);
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
            transform: rotate(var(--fluid-rotation));
            animation: fluidRotate 45s infinite linear;
            z-index: -1;
            filter: blur(100px);
        }
        
        @keyframes fluidRotate {
            0% { --fluid-rotation: 0deg; }
            100% { --fluid-rotation: 360deg; }
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
            background: rgba(25, 94, 214, 0.3);
            backdrop-filter: blur(10px);
            overflow: hidden;
        }
        
        .tech-border::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(130deg, 
                rgba(39, 158, 217, 0.1) 0%, 
                rgba(61, 43, 86, 0.15) 50%, 
                rgba(10, 17, 40, 0.2) 100%);
            z-index: -1;
            border-radius: inherit;
        }
        
        .neon-btn {
            background: linear-gradient(45deg, #0655dd, #1975BC);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(39, 158, 217, 0.5);
            z-index: 1;
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
            pointer-events: none;
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
        
        .floating {
            animation: floating 8s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        .service-icon {
            background: linear-gradient(45deg, #0655dd, #1975BC);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            font-size: 40px;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(6, 85, 221, 0.3);
        }
        
        .service-icon:hover {
            transform: rotate(10deg) scale(1.1);
        }
        
        .fluid-shape {
            position: fixed;
            border-radius: 50% 30% 70% 40% / 50% 40% 60% 50%;
            background: linear-gradient(135deg, rgba(39, 158, 217, 0.2), rgba(61, 43, 86, 0.25));
            filter: blur(50px);
            z-index: -1;
        }
        
        .text-gradient {
            background: linear-gradient(45deg, #279ED9, #FF6B35);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }
        
        .creative-border {
            position: relative;
            border: 1px solid rgba(39, 158, 217, 0.3);
            border-radius: 24px;
            overflow: hidden;
            background: rgba(25, 94, 214, 0.15);
            backdrop-filter: blur(10px);
        }
        
        .creative-border::before {
            content: "";
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, 
                rgba(39, 158, 217, 0.3), 
                rgba(255, 107, 53, 0.2), 
                rgba(39, 158, 217, 0.3));
            z-index: -1;
            border-radius: inherit;
        }
        
        .holographic-effect {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, 
                rgba(39, 158, 217, 0.1), 
                rgba(255, 107, 53, 0.05), 
                rgba(39, 158, 217, 0.1));
            opacity: 0.3;
            z-index: -1;
        }
        
        .process-line {
            position: absolute;
            height: 3px;
            background: linear-gradient(to right, #1975BC, #279ED9, #FF6B35);
            z-index: -1;
            transition: all 0.5s ease;
        }
        
        .tech-dot {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: linear-gradient(45deg, #0655dd, #1975BC);
            position: absolute;
            top: -10px;
            transition: all 0.3s ease;
        }
        
        .tech-dot:hover {
            transform: scale(1.5);
            box-shadow: 0 0 15px rgba(39, 158, 217, 0.8);
        }
        
        .input-field {
            background: rgba(15, 25, 50, 0.4);
            border: 1px solid rgba(39, 158, 217, 0.3);
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .input-field:focus {
            border-color: #279ED9;
            box-shadow: 0 0 10px rgba(39, 158, 217, 0.5);
            background: rgba(25, 94, 214, 0.2);
        }
        
        .creative-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .grid-item {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        
        .grid-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.3);
        }
        
        .fluid-mask {
            -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M38.8,-51.6C50.1,-40.5,59.3,-28.7,63.6,-15.1C67.8,-1.5,67.1,13.8,61.5,27.1C55.9,40.3,45.5,51.5,33.5,58.7C21.5,65.9,7.9,69.1,-6.1,68.4C-20.1,67.7,-34.3,63.1,-46.8,55C-59.3,46.9,-70.1,35.2,-73.1,21.6C-76.1,8,-71.3,-7.6,-64.1,-21.3C-56.9,-35.1,-47.4,-47,-36.1,-58.1C-24.8,-69.3,-11.7,-79.7,1.9,-82.4C15.5,-85.1,27.5,-80.1,38.8,-51.6Z" transform="translate(100 100)"/></svg>');
            mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path d="M38.8,-51.6C50.1,-40.5,59.3,-28.7,63.6,-15.1C67.8,-1.5,67.1,13.8,61.5,27.1C55.9,40.3,45.5,51.5,33.5,58.7C21.5,65.9,7.9,69.1,-6.1,68.4C-20.1,67.7,-34.3,63.1,-46.8,55C-59.3,46.9,-70.1,35.2,-73.1,21.6C-76.1,8,-71.3,-7.6,-64.1,-21.3C-56.9,-35.1,-47.4,-47,-36.1,-58.1C-24.8,-69.3,-11.7,-79.7,1.9,-82.4C15.5,-85.1,27.5,-80.1,38.8,-51.6Z" transform="translate(100 100)"/></svg>');
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
            -webkit-mask-position: center;
            mask-position: center;
            -webkit-mask-size: contain;
            mask-size: contain;
        }
        
        /* New styles for contact section */
        .contact-form-bg {
            background: linear-gradient(135deg, rgba(10, 17, 40, 0.8) 0%, rgba(0, 27, 68, 0.9) 100%);
        }
        
        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }
        
        .contact-info-icon {
            background: linear-gradient(45deg, #279ED9, #0655dd);
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }
        
        .contact-info-text h3 {
            font-size: 1.125rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
            color: #fff;
        }
        
        .contact-info-text p {
            color: #94a3b8;
            font-size: 1rem;
        }
        
        .social-icon {
            transition: all 0.3s ease;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(39, 158, 217, 0.1);
        }
        
        .social-icon:hover {
            transform: translateY(-5px);
            background: #279ED9;
        }
        
        /* Nuevos estilos para el espacio del logo */
        .hero-logo-space {
            position: relative;
            width: 600px;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-logo-background {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }
        
        .hero-logo-large {
            font-size: 18rem;
            font-weight: 900;
            color: rgba(25, 117, 188, 0.07);
            font-family: 'Exo 2', sans-serif;
            transform: rotate(-15deg);
        }
        
        .hero-content-container {
            position: relative;
            z-index: 20;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-central-logo {
            position: relative;
            z-index: 25;
            width: 300px;
            height: 300px;
        }
        
        .hero-floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 15;
        }
        
        .floating-icon-xl {
            width: 140px;
            height: 140px;
            font-size: 50px;
            border-radius: 24px;
            background: linear-gradient(45deg, #0655dd, #1975BC);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 15px 35px rgba(6, 85, 221, 0.4);
        }
        
        /* Footer optimizado */
        .compact-footer {
            padding-top: 3rem; /* 48px */
            padding-bottom: 3rem; /* 48px */
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem; /* 24px */
        }
        
        .footer-border-top {
            border-top-width: 1px;
            border-top-color: rgba(39, 158, 217, 0.2);
        }
        
        .footer-copyright {
            padding-top: 1.5rem; /* 24px */
            padding-bottom: 0;
        }
        
        /* Corrección para espacio excesivo */
        .content-wrapper {
            flex: 1 0 auto;
        }
        
        .footer-wrapper {
            flex-shrink: 0;
        }
    </style>
</head>
<body class="font-montserrat flex flex-col min-h-screen">
    <!-- Capas de fondo avanzadas -->
    <div class="noise-layer"></div>
    <div class="fluid-bg"></div>
    
    <!-- Partículas de fondo -->
    <div class="fixed inset-0 z-0 overflow-hidden">
        <div class="particle w-2 h-2 top-1/4 left-1/5" style="animation-duration: 20s;"></div>
        <div class="particle w-3 h-3 top-1/3 left-3/4" style="animation-duration: 25s; animation-delay: -5s;"></div>
        <div class="particle w-1 h-1 top-2/3 left-1/3" style="animation-duration: 15s; animation-delay: -10s;"></div>
        <div class="particle w-4 h-4 top-3/4 left-2/5" style="animation-duration: 30s; animation-delay: -15s;"></div>
        <div class="particle w-2 h-2 top-1/5 left-4/5" style="animation-duration: 18s; animation-delay: -7s;"></div>
    </div>
    
    <!-- Formas fluidas decorativas (ahora con posición fija) -->
    <div class="fluid-shape w-[500px] h-[500px] top-[-150px] right-[-200px]"></div>
    <div class="fluid-shape w-[700px] h-[700px] bottom-[-350px] left-[-300px]"></div>
    
    <div class="content-wrapper">
        <!-- Header -->
        <header class="fixed w-full z-50 bg-black/80 backdrop-blur-sm py-4 border-b border-primary2/30">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="bg-gradient-to-r from-primary1 to-primary2 w-12 h-12 rounded-full flex items-center justify-center text-white text-xl mr-3 pulse">
                            <img src="img/Recurso 1.png" alt="Kambio Kreativo Logo" class="logo-image w-full h-full object-contain">            

                        </div>
                        <span class="text-2xl font-exo font-bold bg-gradient-to-r from-white to-detail1 bg-clip-text">KAMBIO  <span class="text-2xl font-exo font-light bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">KREATIVO</span></span> 
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex space-x-8">
                        <a href="{{ route('diseño') }}"  class="font-medium hover:text-primary2 transition-colors group relative py-2">
                            Diseño
                            <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary2 to-detail1 group-hover:w-full transition-all duration-300"></div>
                        </a>
                        <a href="{{ route('desarrollo') }}"  class="font-medium hover:text-primary2 transition-colors group relative py-2">
                            Desarrollo
                            <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary2 to-detail1 group-hover:w-full transition-all duration-300"></div>
                        </a>
                        <a href="{{ route('marketing') }}"  class="font-medium hover:text-primary2 transition-colors group relative py-2">
                            Marketing
                            <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary2 to-detail1 group-hover:w-full transition-all duration-300"></div>
                        </a>
                        <a href="#servicios" class="font-medium hover:text-primary2 transition-colors group relative py-2">
                            Servicios
                            <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary2 to-detail1 group-hover:w-full transition-all duration-300"></div>
                        </a>
                        <a href="#resultados" class="font-medium hover:text-primary2 transition-colors group relative py-2">
                            Resultados
                            <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary2 to-detail1 group-hover:w-full transition-all duration-300"></div>
                        </a>
                        <a href="#contacto" class="font-medium hover:text-primary2 transition-colors group relative py-2">
                            Contacto
                            <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-primary2 to-detail1 group-hover:w-full transition-all duration-300"></div>
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
                    <a href="#proceso" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Proceso</a>
                    <a href="#resultados" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Resultados</a>
                    <a href="#contacto" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Contacto</a>
                    <a href="#contacto" class="neon-btn text-white px-6 py-3 rounded-full font-medium text-center flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2"></i> Contactar
                    </a>
                </div>
            </div>
        </header>

        <!-- Hero Section - Rediseñado con más espacio para iconos flotantes -->
        <section id="inicio" class="pt-32 pb-24 min-h-screen flex items-center relative overflow-hidden">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="lg:w-1/2 max-w-2xl fade-in">
                        <h1 class="text-4xl md:text-6xl font-exo font-bold mb-6">
                            <span class="block">Transformamos ideas en</span>
                            <span class="text-gradient">experiencias digitales</span>
                        </h1>
                        <p class="text-xl text-detail2/80 mb-10 animate-delay-100 fade-in">
                            En Kambio Kreativo integramos diseño, marketing y desarrollo para crear soluciones únicas que impulsan tu negocio en el mundo digital.
                        </p>
                        <div class="flex flex-wrap gap-4 animate-delay-200 fade-in">
                            <a href="#contacto" class="neon-btn text-white font-bold py-4 px-8 rounded-lg flex items-center justify-center">
                                <i class="fas fa-paper-plane mr-2 text-xl"></i> Contactar ahora
                            </a>
                            <a href="#servicios" class="bg-transparent hover:bg-primary1/20 border-2 border-primary2 text-white font-bold py-4 px-8 rounded-lg transition-colors flex items-center justify-center">
                                <i class="fas fa-compass mr-2"></i> Explorar servicios
                            </a>
                        </div>
                    </div>
                    
                    <!-- Contenedor para logo e iconos flotantes -->
                    <div class="lg:w-1/2 flex justify-center mt-12 lg:mt-0">
                        <div class="hero-logo-space">
                            <!-- Fondo con logo grande -->
                            <div class="hero-logo-background">
                                <div class="hero-logo-large">KK</div>
                            </div>
                            
                            <!-- Contenedor para elementos flotantes -->
                            <div class="hero-floating-icons">
                                <div class="absolute top-0 left-0 floating" style="animation-delay: 0s;">
                                    <div class="floating-icon-xl">
                                        <i class="fas fa-palette"></i>
                                    </div>
                                </div>
                                <div class="absolute top-0 right-0 floating" style="animation-delay: 1s;">
                                    <div class="floating-icon-xl">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 left-0 floating" style="animation-delay: 2s;">
                                    <div class="floating-icon-xl">
                                        <i class="fas fa-code"></i>
                                    </div>
                                </div>
                                <div class="absolute bottom-0 right-0 floating" style="animation-delay: 3s;">
                                    <div class="floating-icon-xl">
                                        <i class="fas fa-rocket"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Contenedor para el logo central -->
                            <div class="hero-content-container">
                                    <div class="hero-central-logo">
                                        <div class="w-full h-full flex items-center justify-center p-4">
                                            <img src="img/Recurso 1.png" alt="Kambio Kreativo Logo" class="logo-image w-full h-full object-contain">            
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Elementos decorativos -->
            <div class="absolute bottom-20 right-20 w-96 h-96 rounded-full bg-primary2/10 blur-3xl animate-pulse -z-1"></div>
            <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-detail1/10 blur-3xl animate-pulse -z-1"></div>
        </section>

        <!-- Stats Section -->
        <section class="py-16 relative">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="creative-grid">
                    <div class="tech-border p-8 rounded-2xl fade-in grid-item">
                        <div class="text-5xl font-exo font-bold mb-2 text-gradient">10+</div>
                        <div class="text-lg text-detail2/80">Años de Experiencia</div>
                    </div>
                    <div class="tech-border p-8 rounded-2xl fade-in animate-delay-100 grid-item">
                        <div class="text-5xl font-exo font-bold mb-2 text-gradient">200+</div>
                        <div class="text-lg text-detail2/80">Clientes Satisfechos</div>
                    </div>
                    <div class="tech-border p-8 rounded-2xl fade-in animate-delay-200 grid-item">
                        <div class="text-5xl font-exo font-bold mb-2 text-gradient">500+</div>
                        <div class="text-lg text-detail2/80">Proyectos Completados</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicios -->
        <section id="servicios" class="py-20 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-10"></div>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                    <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Nuestros <span class="text-gradient">Servicios</span></h2>
                    <p class="text-lg text-detail2/80">Soluciones integradas para potenciar tu presencia digital</p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Diseño Gráfico -->
                    <div class="service-card tech-border p-8 rounded-2xl fade-in relative overflow-hidden" style="transform: rotate(-2deg);">
                        <div class="holographic-effect"></div>
                        <div class="service-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3 class="text-2xl font-exo font-bold mb-4 text-center">Diseño Gráfico</h3>
                        <p class="text-detail2/80 mb-6 text-center">Identidades visuales impactantes que comunican la esencia de tu marca.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Branding Corporativo</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Diseño Editorial</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Material POP/POS</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="{{ route('diseño') }}" class="inline-block neon-btn text-white px-6 py-3 rounded-full">
                                Explorar más
                            </a>
                        </div>
                    </div>
                    
                    <!-- Marketing Digital -->
                    <div class="service-card tech-border p-8 rounded-2xl fade-in animate-delay-100 relative overflow-hidden" style="transform: rotate(1deg); margin-top: 40px;">
                        <div class="holographic-effect"></div>
                        <div class="service-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3 class="text-2xl font-exo font-bold mb-4 text-center">Marketing Digital</h3>
                        <p class="text-detail2/80 mb-6 text-center">Estrategias 360° para posicionar tu marca y conectar con tu audiencia.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-detail1 mr-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Campañas Digitales</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-detail1 mr-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Social Media</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-detail1 mr-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Analítica de Datos</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="{{ route('marketing') }}" class="inline-block neon-btn text-white px-6 py-3 rounded-full">
                                Explorar más
                            </a>
                        </div>
                    </div>
                    
                    <!-- Desarrollo de Software -->
                    <div class="service-card tech-border p-8 rounded-2xl fade-in animate-delay-200 relative overflow-hidden" style="transform: rotate(3deg); margin-top: 20px;">
                        <div class="holographic-effect"></div>
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-2xl font-exo font-bold mb-4 text-center">Desarrollo de Software</h3>
                        <p class="text-detail2/80 mb-6 text-center">Soluciones tecnológicas a medida para optimizar tus procesos operativos.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Aplicaciones Web</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Sistemas Empresariales</span>
                            </li>
                            <li class="flex items-center">
                                <div class="w-6 h-6 bg-primary1/20 rounded-full flex items-center justify-center text-primary2 mr-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>Inteligencia Artificial</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="{{ route('desarrollo') }}" class="inline-block neon-btn text-white px-6 py-3 rounded-full">
                                Explorar más
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Resultados -->
        <section id="resultados" class="py-20 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-20"></div>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                    <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Resultados <span class="text-gradient">Tangibles</span></h2>
                    <p class="text-lg text-detail2/80">Lo que hemos logrado para nuestros clientes</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="tech-border p-8 rounded-2xl fade-in relative overflow-hidden">
                        <div class="holographic-effect"></div>
                        <div class="text-5xl font-bold text-gradient mb-4">+40%</div>
                        <h3 class="text-xl font-exo font-bold mb-3">Aumento de Productividad</h3>
                        <p class="text-detail2/80">Flujos de trabajo optimizados que permiten a tu equipo hacer más en menos tiempo.</p>
                        <div class="absolute bottom-0 right-0 w-24 h-24 bg-primary2/10 rounded-tl-full"></div>
                    </div>
                    
                    <div class="tech-border p-8 rounded-2xl fade-in animate-delay-100 relative overflow-hidden">
                        <div class="holographic-effect"></div>
                        <div class="text-5xl font-bold text-gradient mb-4">-60%</div>
                        <h3 class="text-xl font-exo font-bold mb-3">Reducción de Costos</h3>
                        <p class="text-detail2/80">Minimiza errores, elimina tareas redundantes y optimiza recursos.</p>
                        <div class="absolute top-0 right-0 w-24 h-24 bg-accent/10 rounded-bl-full"></div>
                    </div>
                    
                    <div class="tech-border p-8 rounded-2xl fade-in animate-delay-200 relative overflow-hidden">
                        <div class="holographic-effect"></div>
                        <div class="text-5xl font-bold text-gradient mb-4">+30%</div>
                        <h3 class="text-xl font-exo font-bold mb-3">Mejora en Experiencia Cliente</h3>
                        <p class="text-detail2/80">Procesos más rápidos y personalizados que elevan la satisfacción de tus clientes.</p>
                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-detail1/10 rounded-tr-full"></div>
                    </div>
                </div>
                
                <div class="mt-12 text-center fade-in">
                    <div class="tech-border inline-block p-6 rounded-2xl relative overflow-hidden">
                        <div class="holographic-effect"></div>
                        <p class="text-xl font-exo font-bold">Empresas con nuestras soluciones crecen <span class="text-gradient">2.5 veces más rápido</span> que la competencia</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Proceso de Trabajo -->
        <section id="proceso" class="py-20 relative">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                    <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Nuestro <span class="text-gradient">Proceso</span></h2>
                    <p class="text-lg text-detail2/80">Cómo transformamos tus ideas en soluciones efectivas</p>
                </div>
                
                <div class="relative py-12">
                    <div class="process-line w-full top-1/2 transform -translate-y-1/2"></div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10">
                        <!-- Paso 1 -->
                        <div class="tech-border p-6 rounded-2xl text-center group relative">
                            <div class="tech-dot left-1/4 group-hover:bg-gradient-to-r from-accent to-primary2"></div>
                            <div class="w-16 h-16 bg-gradient-to-r from-primary1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3 class="text-xl font-exo font-bold mb-3">Ideación</h3>
                            <p class="text-detail2/80">Creamos conceptos innovadores que definen la esencia de tu proyecto.</p>
                        </div>
                        
                        <!-- Paso 2 -->
                        <div class="tech-border p-6 rounded-2xl text-center group relative mt-20">
                            <div class="tech-dot left-1/2 group-hover:bg-gradient-to-r from-primary2 to-detail1"></div>
                            <div class="w-16 h-16 bg-gradient-to-r from-primary1 to-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <h3 class="text-xl font-exo font-bold mb-3">Diseño</h3>
                            <p class="text-detail2/80">Desarrollamos soluciones visuales que comunican efectivamente tu mensaje.</p>
                        </div>
                        
                        <!-- Paso 3 -->
                        <div class="tech-border p-6 rounded-2xl text-center group relative">
                            <div class="tech-dot left-3/4 group-hover:bg-gradient-to-r from-detail1 to-accent"></div>
                            <div class="w-16 h-16 bg-gradient-to-r from-detail1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3 class="text-xl font-exo font-bold mb-3">Desarrollo</h3>
                            <p class="text-detail2/80">Construimos soluciones tecnológicas robustas y escalables.</p>
                        </div>
                        
                        <!-- Paso 4 -->
                        <div class="tech-border p-6 rounded-2xl text-center group relative mt-20">
                            <div class="tech-dot left-full group-hover:bg-gradient-to-r from-accent to-primary1"></div>
                            <div class="w-16 h-16 bg-gradient-to-r from-primary2 to-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h3 class="text-xl font-exo font-bold mb-3">Implementación</h3>
                            <p class="text-detail2/80">Lanzamos tu proyecto con estrategias efectivas para maximizar su impacto.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12 text-center fade-in">
                    <a href="#contacto" class="inline-block neon-btn text-white px-8 py-3 rounded-full font-medium">
                        Comencemos tu proyecto
                    </a>
                </div>
            </div>
        </section>

        <!-- Contacto - Optimizado -->
        <section id="contacto" class="py-16 relative z-30">
            <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-10"></div>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-40">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="fade-in">
                        <h2 class="text-3xl md:text-4xl font-exo font-bold mb-6">Conversemos sobre tu <span class="text-gradient">proyecto</span></h2>
                        <p class="text-detail2/80 mb-8">Completa el formulario y nos pondremos en contacto contigo en menos de 24 horas.</p>
                        
                        <div class="space-y-6">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Email</h3>
                                    <p>contacto@kambiokreativo.com</p>
                                </div>
                            </div>
                            
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-phone-alt text-xl"></i>
                                </div>
                                <a href="https://wa.me/573184013924">
                                    <div class="contact-info-text">
                                    <h3>Teléfono</h3>
                                    <p>+57 318 401 3924</p>
                                </div>
                                </a>

                            </div>
                            
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Ubicación</h3>
                                    <p>Cali, Colombia</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-10">
                            <h3 class="font-bold text-lg text-white mb-4">Conecta con nosotros</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div id="contacto-form" class="tech-border p-8 rounded-2xl fade-in animate-delay-100 relative overflow-hidden contact-form-bg">
                        <h3 class="text-2xl font-exo font-bold mb-6 text-center">Iniciemos tu proyecto</h3>
                    
                        @if(session('success'))
                            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                                <strong class="font-bold">¡Éxito!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('contacto.store') }}#contacto-form">
                            @csrf
                        
                            <div class="mb-6">
                                <label for="nombre" class="block text-detail2 mb-2">Nombre completo</label>
                                <input type="text" id="nombre" name="nombre" class="w-full input-field px-4 py-3 text-white" required>
                            </div>
                        
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="email" class="block text-detail2 mb-2">Correo electrónico</label>
                                    <input type="email" id="email" name="email" class="w-full input-field px-4 py-3 text-white" required>
                                </div>
                                <div>
                                    <label for="empresa" class="block text-detail2 mb-2">Empresa</label>
                                    <input type="text" id="empresa" name="empresa" class="w-full input-field px-4 py-3 text-white">
                                </div>
                            </div>
                        
                            <div class="mb-6">
                                <label for="servicio" class="block text-detail2 mb-2">¿Qué servicio necesitas?</label>
                                <select id="servicio" name="servicio" class="w-full input-field px-4 py-3 text-white" required>
                                    <option value="">Selecciona un servicio</option>
                                    <option value="diseno">Diseño Gráfico</option>
                                    <option value="marketing">Marketing Digital</option>
                                    <option value="software">Desarrollo de Software</option>
                                    <option value="multiple">Solución Integral</option>
                                </select>
                            </div>
                        
                            <div class="mb-6">
                                <label for="mensaje" class="block text-detail2 mb-2">Describe tu proyecto</label>
                                <textarea id="mensaje" name="mensaje" rows="4" class="w-full input-field px-4 py-3 text-white" required></textarea>
                            </div>
                        
                            <button type="submit" class="w-full neon-btn text-white font-bold py-4 rounded-lg">
                                Enviar solicitud
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>
    
    <!-- Footer optimizado sin espacio excesivo -->
    <div class="footer-wrapper">
        <footer class="compact-footer bg-gradient-to-b from-darkblue to-deepblue footer-border-top">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="footer-grid">
                    <!-- Marca + misión + redes -->
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-r from-primary1 to-primary2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl mr-2">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <span class="text-xl font-exo font-bold bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">
                                KAMBIO <span class="font-light text-white">KREATIVO</span>
                            </span>
                        </div>
                        <p class="text-detail2/80 mb-4">Transformamos ideas en experiencias digitales memorables que impulsan negocios.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Servicios -->
                    <div>
                        <h3 class="text-lg font-exo font-bold mb-4 text-white">Servicios</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-detail2/80 hover:text-white transition-colors">Diseño Gráfico</a></li>
                            <li><a href="#" class="text-detail2/80 hover:text-white transition-colors">Branding Corporativo</a></li>
                            <li><a href="#" class="text-detail2/80 hover:text-white transition-colors">Marketing Digital</a></li>
                            <li><a href="#" class="text-detail2/80 hover:text-white transition-colors">Desarrollo Web</a></li>
                            <li><a href="#" class="text-detail2/80 hover:text-white transition-colors">Aplicaciones Móviles</a></li>
                        </ul>
                    </div>

                    <!-- Enlaces rápidos -->
                    <div>
                        <h3 class="text-lg font-exo font-bold mb-4 text-white">Explorar</h3>
                        <ul class="space-y-2">
                            <li><a href="#inicio" class="text-detail2/80 hover:text-white transition-colors">Inicio</a></li>
                            <li><a href="#servicios" class="text-detail2/80 hover:text-white transition-colors">Servicios</a></li>
                            <li><a href="#proceso" class="text-detail2/80 hover:text-white transition-colors">Proceso</a></li>
                            <li><a href="#resultados" class="text-detail2/80 hover:text-white transition-colors">Resultados</a></li>
                            <li><a href="#contacto" class="text-detail2/80 hover:text-white transition-colors">Contacto</a></li>
                        </ul>
                    </div>

                    <!-- Contacto -->
                    <div>
                        <h3 class="text-lg font-exo font-bold mb-4 text-white">Contacto</h3>
                        <ul class="space-y-2 text-detail2/80">
                            <li>
                                <span class="block">Email: <a href="mailto:info@kambiokreativo.com" class="hover:text-white transition-colors">info@kambiokreativo.com</a></span>
                            </li>
                            <li>
                                <span class="block">Teléfono: <a href="tel:+573184013924" class="hover:text-white transition-colors">+57 318 401 3924</a></span>
                            </li>
                            <li>
                                <span class="block">Cali, Colombia</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer-copyright text-center text-detail2/60">
                    <p>&copy; <span id="current-year"></span> Kambio Kreativo. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- WhatsApp -->
    <a href="https://wa.me/573184013924" class="fixed bottom-6 right-6 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center text-white text-2xl z-50 hover:bg-green-600 transition-colors shadow-lg" aria-label="Chatea con nosotros por WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    
    <script>
        // Animaciones para las partículas
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.fixed.inset-0.z-0');
            
            // Crear más partículas
            for (let i = 0; i < 20; i++) {
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
                
                // Color aleatorio
                const colors = ['rgba(39, 158, 217, 0.3)', 'rgba(255, 107, 53, 0.3)', 'rgba(101, 73, 255, 0.3)'];
                particle.style.background = colors[Math.floor(Math.random() * colors.length)];
                
                container.appendChild(particle);
            }
            
            // Actualizar año actual
            document.getElementById('current-year').textContent = new Date().getFullYear();
            
            // Animación para los puntos de proceso
            const processDots = document.querySelectorAll('.tech-dot');
            processDots.forEach(dot => {
                dot.addEventListener('mouseenter', () => {
                    const line = document.querySelector('.process-line');
                    line.style.height = '6px';
                });
                
                dot.addEventListener('mouseleave', () => {
                    const line = document.querySelector('.process-line');
                    line.style.height = '3px';
                });
            });
        });
    </script>
</body>
</html>