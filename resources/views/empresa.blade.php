<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AVA Montajes - Nuestra Empresa</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
        .hero-bg {
            background-image: url('https://www.avamontajes.cl/upload/paginas/archivos/23-07-2024-03-07-37_banner-home.webp');
            background-size: cover;
            background-position: center;
        }
        .card-bg {
            background-color: rgba(255, 255, 255, 0.9);
        }
    </style>
</head>
<body class="antialiased bg-gray-100 text-gray-800">
    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div>
                <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-800">
                    <img src="https://www.avamontajes.cl/assets_nuevos/img/logo.png" alt="AVA Montajes Logo" class="h-10">
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ route('empresa') }}" class="text-gray-600 hover:text-blue-700 font-semibold">Nuestra Empresa</a>
                <a href="#proyectos" class="text-gray-600 hover:text-blue-700">Proyectos</a>
                <a href="#trabaja-con-nosotros" class="text-gray-600 hover:text-blue-700">Trabaja con Nosotros</a>
                <a href="#contacto" class="text-gray-600 hover:text-blue-700">Contacto</a>
            </div>
            <div class="md:hidden">
                <button class="text-gray-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-bg text-white py-20">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl font-bold mb-4">Trabajo, Experiencia y Compromiso</h1>
                <p class="text-lg">Más de 30 años construyendo futuro y siendo socios estratégicos en grandes proyectos.</p>
            </div>
        </section>

        <section id="quienes-somos" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-8">Quiénes Somos</h2>
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 px-4">
                        <p class="text-lg mb-4">
                            Con más de 30 años de experiencia, nuestra trayectoria nos avala como los principales socios estratégicos en la ejecución de proyectos EPC, Greenfield y Brownfield.
                        </p>
                        <p class="text-lg">
                            En AVA Montajes, valoramos el talento y el compromiso. Buscamos profesionales que compartan nuestra pasión por la excelencia y la seguridad en cada desafío.
                        </p>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mt-8 md:mt-0">
                        <img src="https://www.avamontajes.cl/upload/paginas/archivos/02-08-2024-09-38-31_somos.webp" alt="Equipo de AVA Montajes" class="rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <section id="trabaja-con-nosotros" class="py-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-8">Únete a Nuestro Equipo</h2>
                <div class="max-w-4xl mx-auto card-bg p-8 rounded-lg shadow-lg">
                    <p class="text-lg text-center mb-6">
                        Si eres un profesional con experiencia en minería, construcción o ingeniería, y buscas un ambiente de trabajo desafiante y colaborativo, te invitamos a ser parte de nuestra familia.
                    </p>
                    <div class="text-center">
                        <a href="#" class="bg-blue-700 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-800 transition duration-300">Ver Ofertas Laborales</a>
                    </div>
                    <div class="mt-8 text-center">
                        <h3 class="text-xl font-semibold mb-4">¿Por qué trabajar en AVA?</h3>
                        <ul class="list-disc list-inside text-left max-w-md mx-auto">
                            <li class="mb-2">Estabilidad y proyección profesional.</li>
                            <li class="mb-2">Participación en proyectos de gran envergadura.</li>
                            <li class="mb-2">Cultura de seguridad y excelencia.</li>
                            <li class="mb-2">Desarrollo continuo y capacitación.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="proyectos" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-8">Nuestros Proyectos</h2>
                <p class="text-lg text-center max-w-3xl mx-auto mb-10">Otorgamos servicios integrales de Ingeniería, Construcción y Gestión de Compras, demostrando excelencia en cada etapa del proceso.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Servicios de Construcción</h3>
                        <p>Soluciones constructivas para los desafíos más complejos de la industria.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Prefabricados de Hormigón</h3>
                        <p>Innovación y eficiencia en la producción de elementos prefabricados.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-2">Minería Subterránea</h3>
                        <p>Experiencia probada en la ejecución de proyectos en minería subterránea.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="contacto" class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">Casa Central</h3>
                    <p>Autopista Concepción - Talcahuano 8696, Hualpén, Región del Bio Bio, Chile.</p>
                    <p>Correo: avamontajes@ava.cl</p>
                    <p>Fono: +56 41 2106950</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Oficina Nodo Norte</h3>
                    <p>Camino Chiu-Chiu Sitio 6, Manzana 3, Calama.</p>
                    <p>Correo: +56552895930</p>
                    <p>Fono: +56 55 2895930</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Síguenos</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">LinkedIn</a>
                        <a href="#" class="text-gray-400 hover:text-white">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8 pt-8 border-t border-gray-700">
                <p>&copy; {{ date('Y') }} AVA Montajes. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

</body>
</html>
