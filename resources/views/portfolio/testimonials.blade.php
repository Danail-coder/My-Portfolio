<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
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

    <div class="flex flex-col items-center">
        <!-- Profile Image -->
        <div class="w-40 h-40 rounded-full border-4 border-green-400 overflow-hidden">
            <img src="{{ asset('icons/testimonials.jpg') }}" alt="Daniel Junior Foli" class="w-full h-full object-cover">
        </div>

        <h2 class="text-3xl mt-6">My Testimonials</h2>
    </div>

    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-center">Testimonials</h1>
        <p class="text-center text-gray-400 mt-2">What people say about my work</p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
            <div class="bg-gray-800 p-6 rounded-lg">
                <p class="text-gray-300">"Daniel is an amazing web designer. His work exceeded my expectations!"</p>
                <h3 class="text-green-400 mt-2">- Sarah Mitchell, Software Engineer at DevCorp</h3>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg">
                <p class="text-gray-300">"Very professional and creative. I highly recommend him!"</p>
                <h3 class="text-green-400 mt-2">- James Anderson, CEO of TechPro Solutions</h3>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg">
                <p class="text-gray-300">"Delivered a fantastic website on time. Great experience working with him!"</p>
                <h3 class="text-green-400 mt-2">- Mike Johnson</h3>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg">
                <p class="text-gray-300">"Daniel has been a great asset to our team. His skills and experience are unparalleled!"</p>
                <h3 class="text-green-400 mt-2">- Emily Davis</h3>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg">
                <p class="text-gray-300">""I've collaborated with Daniel on several projects, and his passion for web development is inspiring. A great team player!"</p>
                <h3 class="text-green-400 mt-2">- Michael Owusu, Web Developer"</h3>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg">
                <p class="text-gray-300">"Daniel is a dedicated and hardworking student. His ability to learn quickly and apply his knowledge is impressive."</p>
                <h3 class="text-green-400 mt-2">- Prof. Richard Mensah, Lecturer at Ho Technical University</h3>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg">
                <p class="text-gray-300">"Daniel’s graphic design and frontend development skills brought my project to life. He’s truly a talented developer!"</p>
                <h3 class="text-green-400 mt-2">- Emily Carter, Freelance Designer</h3>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg">
                <p class="text-gray-300">"Daniel has a knack for creating engaging and visually appealing websites. His attention to detail and attention to user experience make his work stand out."</p>
                <h3 class="text-green-400 mt-2">- Sarah Thompson, UX/UI Designer</h3>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg">
                <p class="text-gray-300">"Daniel is a skilled web developer who has a great sense of humor. His enthusiasm and creativity make him an excellent addition to any team."</p>
                <h3 class="text-green-400 mt-2">- Sarah Wilson, Senior Frontend Developer</h3>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="/" class="text-blue-400 hover:underline">Back to Home</a>
        </div>
    </div>
</body>
</html>