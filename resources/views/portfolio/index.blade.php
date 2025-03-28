<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
  <!-- Your image directly placed -->

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-10 py-5 bg-gray-800">
        <h1 class="text-2xl font-bold">Portfolio</h1>
        <ul class="flex space-x-6">
            <li><a href="{{ url('/') }}" class="hover:text-green-400">Home</a></li>
            <li><a href="{{ url('/projects') }}" class="hover:text-green-400">Projects</a></li>
            <li><a href="{{ url('/resume') }}" class="hover:text-green-400">Resume</a></li>
            <li><a href="{{ route('testimonials') }}" class="hover:text-green-400">Testimonials</a></li>
        </ul>
        <form action="{{ route('search') }}" method="GET" class="flex items-center bg-gray-700 rounded-lg px-3">
            <input type="text" name="query" placeholder="Search..." class="bg-transparent text-white p-2 outline-none w-32 md:w-48">
            <button type="submit" class="text-white px-3">
                🔍
            </button>
        </form>
    </nav>

    <!-- Hero Section -->
<section class="text-center py-20">
    <div class="flex flex-col items-center  mt-10">
        <!-- Profile Image -->
        <div class="w-40 h-40 rounded-full border-4 border-green-400 overflow-hidden">
            <img src="{{ asset('icons/profile.jpg') }}" alt="Daniel Junior Foli" class="w-full h-full object-cover">
        </div>

        <h2 class="text-3xl mt-6">Hello, I'm</h2>
        <h1 class="text-4xl text-green-400 font-bold">Daniel Junior Foli</h1>
        <p class="mt-4 text-yellow-400">A Passionate Multidisciplinary Developer. 
            I'm a self-taught developer with a passion for creating visually appealing designs and building modern web applications
        </p>
        <button class="mt-6 bg-green-500 px-6 py-3 rounded text-black font-semibold">Let's Talk</button>
    </div>

    <!-- Social Links -->
    <div class="flex justify-center mt-6 space-x-4">
    <!-- YouTube -->
    <a href="https://youtube.com/@danailjuniore" target="_blank">
        <img src="{{ asset('icons/youtube.png') }}" alt="YouTube" class="w-6 h-6">
    </a>

    <!-- Email -->
    <a href="mailto:danieljuniorfoli@gmail.com">
        <img src="{{ asset('icons/email.png') }}" alt="Email" class="w-6 h-6">
    </a>

    <!-- Phone -->
    <a href="tel:0535396532">
        <img src="{{ asset('icons/contact.jpeg') }}" alt="Phone" class="w-6 h-6">
    </a>
    </div>
</section>
    </section>

    <!-- Services Section -->
<section class="p-10">
    <h2 class="text-3xl font-semibold text-green-400 mb-6">What I Do</h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 relative z-10 mt-10">
        
        <!-- Graphic Design -->
        <div class="bg-gray-800 p-6 rounded-lg text-center">
            <img src="{{ asset('icons/graphic-design.png') }}" alt="Graphic Design" class="mx-auto w-16 h-16 mb-3">
            <h3 class="text-xl font-bold">Graphic Design</h3>
            <p class="text-gray-400 mt-2">Creating visually appealing designs and branding.</p>
        </div>

        <!-- Frontend Development -->
        <div class="bg-gray-800 p-6 rounded-lg text-center">
            <img src="{{ asset('icons/frontend.png') }}" alt="Frontend Development" class="mx-auto w-16 h-16 mb-3">
            <h3 class="text-xl font-bold">Frontend Development</h3>
            <p class="text-gray-400 mt-2">Building modern and responsive web interfaces.</p>
        </div>

        <!-- Backend Development -->
        <div class="bg-gray-800 p-6 rounded-lg text-center">
            <img src="{{ asset('icons/backend.jpg') }}" alt="Backend Development" class="mx-auto w-16 h-16 mb-3">
            <h3 class="text-xl font-bold">Backend Development</h3>
            <p class="text-gray-400 mt-2">Developing server-side applications and databases.</p>
        </div>

        

    </div>
</section>


    <!-- Footer -->
    <footer class="text-center py-6 bg-gray-800 mt-10">
        <p>&copy; 2025 Daniel Junior Foli. All rights reserved.</p>
    </footer>

</body>
</html>