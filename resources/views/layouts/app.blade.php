<!DOCTYPE html>
<html lang="es" x-data="{ mobileMenuOpen: false, testimonialIndex: 0 }" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kambio Kreativo | Diseño, Publicidad y Desarrollo de Software</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#279ED9',
                        primaryDark: '#1975BC',
                        dark: '#231F20',
                        light: '#F8FAFC',
                        accent: '#FF6B35'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        body: ['Open Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Open+Sans:wght@300;400;600&display=swap');
    </style>
    
    @stack('styles')
</head>
<body class="bg-light text-dark">
    @yield('content') 
    
    @stack('scripts')
</body>
</html>
