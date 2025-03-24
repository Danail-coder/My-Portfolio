<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Junior Foli - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-10 py-5 bg-gray-800">
        <h1 class="text-2xl font-bold">Portfolio</h1>
        <ul class="flex space-x-6">
            <li><a href="#" class="hover:text-green-400">Home</a></li>
            <li><a href="#" class="hover:text-green-400">Projects</a></li>
            <li><a href="#" class="hover:text-green-400">Resume</a></li>
        </ul>
        <button class="bg-green-500 px-4 py-2 rounded">Search</button>
    </nav>

    <!-- Hero Section -->
<section class="text-center py-20">
    <div class="flex flex-col items-center">
        <!-- Profile Image -->
        <div class="w-40 h-40 rounded-full border-4 border-green-400 overflow-hidden">
            <img src="{{ asset('images/profile.jpg') }}" alt="Daniel Junior Foli" class="w-full h-full object-cover">
        </div>

        <h2 class="text-3xl mt-6">Hello, I'm</h2>
        <h1 class="text-4xl text-green-400 font-bold">Daniel Junior Foli</h1>
        <p class="mt-4">A Web Developer passionate about building interactive applications.</p>
        <button class="mt-6 bg-green-500 px-6 py-3 rounded text-black font-semibold">Let's Talk</button>
    </div>

    <!-- Social Links -->
    <div class="flex justify-center mt-6 space-x-4">
        <a href="https://youtube.com/@danailjuniore" class="text-green-400">YouTube</a>
        <span class="text-gray-400">|</span>
        <a href="mailto:danieljuniorfoli@gmail.com" class="text-green-400">Email</a>
        <span class="text-gray-400">|</span>
        <a href="tel:0535396532" class="text-green-400">Contact</a>
    </div>
</section>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-10">
        <h2 class="text-3xl text-green-400 font-bold text-center">What I Do</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-800 p-6 rounded text-center">
                <h3 class="text-xl font-bold">Graphic Design</h3>
                <p class="text-gray-400 mt-2">Creating visually appealing designs for brands and individuals.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded text-center">
                <h3 class="text-xl font-bold">Frontend Development</h3>
                <p class="text-gray-400 mt-2">Building modern, interactive, and responsive web interfaces.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded text-center">
                <h3 class="text-xl font-bold">Backend Development</h3>
                <p class="text-gray-400 mt-2">Developing secure and efficient server-side applications.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 bg-gray-800">
        <p>&copy; 2025 Daniel Junior Foli. All rights reserved.</p>
    </footer>

</body>
</html>