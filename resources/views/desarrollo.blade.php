<!DOCTYPE html>
<html lang="es" x-data="{ mobileMenuOpen: false }" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo de Software | Kambio Kreativo</title>
    <link rel="icon" type="image/png" href="{{ asset('img/Recurso1.png') }}">
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
        
        .glow {
            text-shadow: 0 0 10px rgba(39, 158, 217, 0.7), 0 0 20px rgba(39, 158, 217, 0.5);
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
                            <img src="img/Recurso1.png" alt="Kambio Kreativo Logo" class="logo-image w-full h-full object-contain"> 
                        </a>

                    </div>
                    <span class="text-2xl font-exo font-bold bg-gradient-to-r from-white to-detail1 bg-clip-text bg-clip-text">KAMBIO  <span class="text-2xl font-exo font-light bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">KREATIVO</span> </span> 
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="font-medium hover:text-primary2 transition-colors group">
                        Inicio
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>
                    <a href="{{ route('diseno') }}" class="font-medium hover:text-primary2 transition-colors group">
                        Diseño Grafico
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
                    <a href="#soluciones" class="font-medium hover:text-primary2 transition-colors group">
                        Soluciones
                        <div class="h-0.5 bg-gradient-to-r from-primary2 to-detail1 scale-x-0 group-hover:scale-x-100 transition-transform"></div>
                    </a>
                    <a href="#automatizacion" class="font-medium hover:text-primary2 transition-colors group">
                        Automatización
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
                        <a href="{{ route('diseno') }}" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Diseño</a>
                        <a href="{{ route('marketing') }}" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Marketing</a>
                        <a href="#soluciones" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Soluciones</a>
                        <a href="#automatizacion" class="font-medium hover:text-primary2 transition-colors py-2 border-b border-primary2/20" @click="mobileMenuOpen = false">Automatización</a>
                <a href="#contacto" class="neon-btn text-white px-6 py-3 rounded-full font-medium text-center flex items-center justify-center">
                    <i class="fas fa-paper-plane mr-2"></i> Contactar
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section para Desarrollo de Software -->
    <section class="pt-32 pb-24 relative overflow-hidden">
        <div class="absolute inset-0 grid-pattern"></div>
        <div class="absolute top-0 left-0 w-1/2 h-full bg-gradient-to-r from-primary1/10 to-transparent z-0"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-2xl fade-in">
                <h1 class="text-4xl md:text-6xl font-exo font-bold mb-6">
                    <span class="block">Desarrollo de Software</span>
                    <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Hecho a tu Medida</span>
                </h1>
                <p class="text-xl text-detail2/80 mb-10 animate-delay-100 fade-in">
                    Más que programar, creamos soluciones tecnológicas que se adaptan al 100% a tu negocio, optimizando procesos y potenciando tu crecimiento.
                </p>
                <div class="flex flex-wrap gap-4 animate-delay-200 fade-in">
                    <a href="#contacto" class="neon-btn text-white font-bold py-4 px-8 rounded-lg text-center flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2 text-xl"></i> Solicitar solución
                    </a>
                    <a href="#beneficios" class="bg-transparent hover:bg-primary1/20 border-2 border-primary2 text-white font-bold py-4 px-8 rounded-lg text-center transition-colors">
                        Ver beneficios
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Elementos decorativos -->
        <div class="absolute bottom-10 right-10 w-72 h-72 rounded-full bg-primary2/10 blur-3xl animate-pulse -z-1"></div>
        <div class="absolute top-20 left-1/3 w-48 h-48 rounded-full bg-detail1/10 blur-3xl animate-pulse -z-1"></div>
    </section>

    <!-- Beneficios con enfoque en Desarrollo y Automatización -->
    <section id="beneficios" class="py-20 bg-black text-white">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-exo font-bold mb-6">
          Impulsa tu negocio con <span class="text-primary2">Software Inteligente</span>
        </h2>
        <p class="text-lg text-detail2/80 mb-12">Desarrollos a medida y automatización que hacen la diferencia</p>
    
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
          <!-- Modularidad -->
          <div class="group bg-gradient-to-br from-white/5 to-white/10 p-6 rounded-xl transform transition duration-300 hover:-translate-y-2 hover:shadow-lg hover:shadow-primary2/30" data-aos="fade-up">
            <div class="w-14 h-14 mx-auto bg-primary1 rounded-full flex items-center justify-center text-white text-2xl mb-4 group-hover:scale-110 transition-transform">
              <i class="fas fa-code"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Desarrollo a Medida</h3>
            <p class="text-sm text-detail2/80">Arquitectura modular pensada para tus flujos únicos.</p>
          </div>
      
          <!-- Automatización -->
          <div class="group bg-gradient-to-br from-white/5 to-white/10 p-6 rounded-xl transform transition duration-300 hover:-translate-y-2 hover:shadow-lg hover:shadow-detail1/30" data-aos="fade-up" data-aos-delay="100">
            <div class="w-14 h-14 mx-auto bg-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-4 group-hover:scale-110 transition-transform">
              <i class="fas fa-robot"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Automatización Inteligente</h3>
            <p class="text-sm text-detail2/80">Elimina tareas repetitivas y optimiza recursos con flujos automáticos.</p>
          </div>
      
          <!-- Integración Total -->
          <div class="group bg-gradient-to-br from-white/5 to-white/10 p-6 rounded-xl transform transition duration-300 hover:-translate-y-2 hover:shadow-lg hover:shadow-primary2/30" data-aos="fade-up" data-aos-delay="200">
            <div class="w-14 h-14 mx-auto bg-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-4 group-hover:scale-110 transition-transform">
              <i class="fas fa-project-diagram"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Integración Total</h3>
            <p class="text-sm text-detail2/80">Conecta tus sistemas para lograr procesos sin fricción.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Más que Programar: Soluciones a Medida -->
    <section id="soluciones" class="py-20 relative">
        <div class="absolute inset-0 grid-pattern"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <h2 class="text-3xl md:text-4xl font-exo font-bold mb-6">
                        <span class="block">Más que Programar:</span>
                        <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Soluciones a Medida</span>
                    </h2>
                    <p class="text-detail2/80 mb-8">Entendemos que el desarrollo de software no es solo escribir código, sino crear herramientas estratégicas que resuelvan problemas específicos de tu negocio.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-primary1 to-primary2 w-12 h-12 rounded-full flex items-center justify-center text-white text-xl mr-4 flex-shrink-0">
                                <i class="fas fa-search"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-exo font-bold mb-2">Análisis Profundo</h3>
                                <p class="text-detail2/80">Estudiamos tus procesos para identificar las verdaderas necesidades.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-primary1 to-detail1 w-12 h-12 rounded-full flex items-center justify-center text-white text-xl mr-4 flex-shrink-0">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-exo font-bold mb-2">Diseño Estratégico</h3>
                                <p class="text-detail2/80">Creamos arquitecturas que anticipan tus necesidades futuras.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-detail1 to-primary2 w-12 h-12 rounded-full flex items-center justify-center text-white text-xl mr-4 flex-shrink-0">
                                <i class="fas fa-puzzle-piece"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-exo font-bold mb-2">Integración Perfecta</h3>
                                <p class="text-detail2/80">Conectamos con tus sistemas existentes sin problemas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="fade-in animate-delay-100">
                    <div class="code-bg border border-primary2/30 rounded-2xl p-8">
                        <div class="flex mb-6">
                            <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        </div>
                        <pre class="text-sm overflow-x-auto">
<span class="text-purple-400">class</span> <span class="text-yellow-300">SolucionPersonalizada</span> {
  <span class="text-purple-400">constructor</span>(negocio) {
    <span class="text-blue-400">this</span>.negocio = negocio;
    <span class="text-blue-400">this</span>.procesosOptimizados = <span class="text-green-400">true</span>;
    <span class="text-blue-400">this</span>.crecimiento = <span class="text-green-400">true</span>;
  }

  <span class="text-yellow-300">optimizarProcesos</span>() {
    <span class="text-gray-500">// Reducción de hasta 40% en tiempos de operación</span>
    <span class="text-purple-400">return</span> <span class="text-green-400">'Procesos optimizados con tecnología adaptada'</span>;
  }

  <span class="text-yellow-300">impulsarCrecimiento</span>() {
    <span class="text-gray-500">// Hasta 200% de aumento en productividad</span>
    <span class="text-purple-400">return</span> <span class="text-green-400">'Herramientas para escalar tu negocio'</span>;
  }

  <span class="text-yellow-300">adaptarSolucion</span>() {
    <span class="text-purple-400">return</span> <span class="text-green-400">`Solución 100% compatible con ${this.negocio}`</span>;
  }
}

<span class="text-gray-500">// Creamos tu solución personalizada</span>
<span class="text-purple-400">const</span> <span class="text-blue-400">miSoftware</span> = <span class="text-purple-400">new</span> <span class="text-yellow-300">SolucionPersonalizada</span>(<span class="text-green-400">'TU_NEGOCIO'</span>);
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Automatización Inteligente con IA -->
    <section id="automatizacion" class="py-20 relative">
      <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-30"></div>
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        
          <!-- Lado Visual: Código IA -->
          <div class="fade-in animate-delay-100">
            <div class="code-bg border border-primary2/30 rounded-2xl p-8">
              <div class="flex mb-6">
                <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
              </div>
              <pre class="text-sm overflow-x-auto">
    <span class="text-purple-400">import</span> <span class="text-yellow-300">AIEngine</span> <span class="text-purple-400">from</span> <span class="text-green-400">'@soluciones/automatizacion'</span>;
            
    <span class="text-purple-400">const</span> <span class="text-blue-400">flujo</span> = <span class="text-yellow-300">AIEngine</span>.create({
      proceso: <span class="text-green-400">'Gestión de clientes'</span>,
      modelo: <span class="text-green-400">'machineLearning'</span>,
      prediccion: <span class="text-blue-400">true</span>,
      decisionEngine: <span class="text-blue-400">true</span>
    });
    
    <span class="text-blue-400">flujo</span>.iniciar();
              </pre>
            </div>
          </div>
      
          <!-- Lado de Contenido -->
          <div class="fade-in">
            <h2 class="text-3xl md:text-4xl font-exo font-bold mb-6">
              Automatización con <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Inteligencia Artificial</span>
            </h2>
            <p class="text-detail2/80 mb-8">Implementamos automatizaciones inteligentes que no solo ejecutan, sino también aprenden y optimizan tus procesos en tiempo real.</p>
        
            <div class="space-y-6">
              <div class="flex items-start">
                <div class="bg-gradient-to-r from-primary1 to-primary2 w-12 h-12 rounded-full flex items-center justify-center text-white text-xl mr-4 flex-shrink-0">
                  <i class="fas fa-brain"></i>
                </div>
                <div>
                  <h3 class="text-xl font-exo font-bold mb-2">Procesos Autónomos</h3>
                  <p class="text-detail2/80">IA que analiza datos, toma decisiones y automatiza tareas críticas.</p>
                </div>
              </div>
          
              <div class="flex items-start">
                <div class="bg-gradient-to-r from-primary1 to-detail1 w-12 h-12 rounded-full flex items-center justify-center text-white text-xl mr-4 flex-shrink-0">
                  <i class="fas fa-network-wired"></i>
                </div>
                <div>
                  <h3 class="text-xl font-exo font-bold mb-2">Aprendizaje Continuo</h3>
                  <p class="text-detail2/80">Modelos que se ajustan y mejoran con cada ciclo de datos.</p>
                </div>
              </div>
            </div>
        
            <div class="mt-8">
              <a href="#contacto" class="inline-block neon-btn text-white px-8 py-3 rounded-full font-medium">
                Empezar con IA
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Cómo ayuda a crecer tu negocio -->
    <section class="py-20 relative">
        <div class="absolute inset-0 grid-pattern"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Impulsa el <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Crecimiento</span> de tu Negocio</h2>
                <p class="text-lg text-detail2/80">El software personalizado como motor de expansión y competitividad</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="tech-border p-8 rounded-2xl fade-in">
                    <div class="text-5xl font-bold text-primary2 mb-4">+40%</div>
                    <h3 class="text-xl font-exo font-bold mb-3">Aumento de Productividad</h3>
                    <p class="text-detail2/80">Flujos de trabajo optimizados que permiten a tu equipo hacer más en menos tiempo.</p>
                </div>
                
                <div class="tech-border p-8 rounded-2xl fade-in animate-delay-100">
                    <div class="text-5xl font-bold text-primary2 mb-4">-60%</div>
                    <h3 class="text-xl font-exo font-bold mb-3">Reducción de Costos</h3>
                    <p class="text-detail2/80">Minimiza errores, elimina tareas redundantes y optimiza recursos.</p>
                </div>
                
                <div class="tech-border p-8 rounded-2xl fade-in animate-delay-200">
                    <div class="text-5xl font-bold text-primary2 mb-4">+30%</div>
                    <h3 class="text-xl font-exo font-bold mb-3">Mejora en Experiencia Cliente</h3>
                    <p class="text-detail2/80">Procesos más rápidos y personalizados que elevan la satisfacción de tus clientes.</p>
                </div>
            </div>
            
            <div class="mt-12 text-center fade-in">
                <div class="tech-border inline-block p-6 rounded-2xl">
                    <p class="text-xl font-exo font-bold">Empresas con software personalizado crecen <span class="text-primary2">2.5 veces más rápido</span> que la competencia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Proceso de Desarrollo -->
    <section id="proceso" class="py-20 relative">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-primary3 to-black opacity-30"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-exo font-bold mb-4">Nuestro <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Proceso</span></h2>
                <p class="text-lg text-detail2/80">Cómo creamos soluciones que se adaptan perfectamente a tu negocio</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Paso 1 -->
                <div class="tech-border p-6 rounded-2xl text-center group">
                    <div class="w-20 h-20 bg-gradient-to-r from-primary1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <span class="font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Descubrimiento</h3>
                    <p class="text-detail2/80">Comprendemos tus desafíos y objetivos en profundidad.</p>
                </div>
                
                <!-- Paso 2 -->
                <div class="tech-border p-6 rounded-2xl text-center group">
                    <div class="w-20 h-20 bg-gradient-to-r from-primary1 to-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <span class="font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Diseño Estratégico</h3>
                    <p class="text-detail2/80">Creamos una arquitectura de solución personalizada.</p>
                </div>
                
                <!-- Paso 3 -->
                <div class="tech-border p-6 rounded-2xl text-center group">
                    <div class="w-20 h-20 bg-gradient-to-r from-detail1 to-primary2 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <span class="font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Desarrollo Ágil</h3>
                    <p class="text-detail2/80">Construimos iterativamente con tu retroalimentación.</p>
                </div>
                
                <!-- Paso 4 -->
                <div class="tech-border p-6 rounded-2xl text-center group">
                    <div class="w-20 h-20 bg-gradient-to-r from-primary2 to-detail1 rounded-full flex items-center justify-center text-white text-2xl mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <span class="font-bold">4</span>
                    </div>
                    <h3 class="text-xl font-exo font-bold mb-3">Implementación</h3>
                    <p class="text-detail2/80">Lanzamiento y capacitación para tu equipo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section id="contacto" class="py-20 relative">
        <div class="absolute inset-0 bg-gradient-to-r from-primary1/10 to-primary2/10"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <h2 class="text-3xl md:text-4xl font-exo font-bold mb-6">Transforma tu Negocio con <span class="bg-gradient-to-r from-primary2 to-detail1 text-transparent bg-clip-text">Software Personalizado</span></h2>
                    <p class="text-detail2/80 mb-8">Completa el formulario y un experto se pondrá en contacto para analizar cómo podemos crear la solución perfecta para tu empresa.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-primary2 to-detail1 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Email</h3>
                                <p class="text-detail2/80">tecnologia@kambiokreativo.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-primary2 to-detail1 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Teléfono</h3>
                                <p class="text-detail2/80">+57 318 401 3924</p>
                            </div>
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
                                <option value="">Selecciona una opción</option>
                                <option value="automatizacion" {{ old('servicio') == 'automatizacion' ? 'selected' : '' }}>Automatización de procesos</option>
                                <option value="sistema" {{ old('servicio') == 'sistema' ? 'selected' : '' }}>Sistema de gestión empresarial</option>
                                <option value="ecommerce" {{ old('servicio') == 'ecommerce' ? 'selected' : '' }}>Plataforma E-commerce</option>
                                <option value="app" {{ old('servicio') == 'app' ? 'selected' : '' }}>Aplicación móvil</option>
                                <option value="web" {{ old('servicio') == 'web' ? 'selected' : '' }}>Desarrollo web</option>
                                <option value="otro" {{ old('servicio') == 'otro' ? 'selected' : '' }}>Otro</option>
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
            <div class="footer-grid">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-primary1 to-primary2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl mr-2">
                            <img src="img/Recurso1.png" alt="Kambio Kreativo Logo" class="logo-image w-full h-full object-contain"> 
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
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-exo font-bold mb-4">Contacto</h3>
                    <ul class="space-y-3">
                        <!-- Footer -->
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
                            <span class="text-detail2/80">info@kambiokreativo.com</span>
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
        <a href="https://wa.me/573184013924" class="fixed bottom-6 right-6 w-14 h-14 bg-green-500 rounded-full flex items-center justify-center text-white text-2xl z-50 hover:bg-green-600 transition-colors shadow-lg" aria-label="Chatea con nosotros por WhatsApp">
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