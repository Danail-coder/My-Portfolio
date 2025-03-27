<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    
        <!-- Navbar -->
        <nav class="flex justify-between items-center px-10 py-5 bg-gray-800">
        <h1 class="text-2xl font-bold">Projects</h1>
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
            <img src="{{ asset('icons/project.jpg') }}" alt="Daniel Junior Foli" class="w-full h-full object-cover">
        </div>

        <h2 class="text-3xl mt-6">My Projects</h2>
    </div>


    <section class="p-10">
        <h2 class="text-3xl font-semibold text-green-400 mb-6">Projects</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Project 1 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('icons/todolist.png') }}" alt="Project 1" class="w-full h-48 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">To-Do List App (PHP & MySQL)</h3>
                    <p class="text-gray-400 mb-4">A simple web-based to-do list application where users can add, 
                        edit, mark as complete, and delete tasks. Each task should be stored in a database, 
                        allowing users to keep track of their daily tasks.
                    </p>
                    <a href="http://localhost/GitHub/To-do-List/" class="text-teal-500">View Project</a>
                </div>

                <!-- Project 2 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('icons/portfolio.jpg') }}" alt="Project 2" class="w-full h-48 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">Portfolio Website (Laravel & Tailwind CSS)</h3>
                    <p class="text-gray-400 mb-4">A personal portfolio website built with Laravel and styled using Tailwind CSS via CDN. 
                        It should showcase your skills, projects, contact information, and links to your social media profiles. 
                        The design will follow a modern dark theme.
                    </p>
                    <a href="{{ url('/') }}" class="text-teal-500">View Project</a>
                </div>

                <!-- Project 3 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('icons/football.png') }}" alt="Project 3" class="w-full h-48 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">Football Tournament Management System (PHP & MySQL)</h3>
                    <p class="text-gray-400 mb-4">A web application where teams can be created, 
                        scheduled for matches (knockout and round-robin formats), and results recorded. 
                        The system should automatically update rankings based on results.
                    </p>
                    <a href="https://www.fifa.com/en/tournaments" class="text-teal-500">View Project</a>
                </div>

                <!-- Project 4 -->
                 <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('icons/store.png') }}" alt="Project 4" class="w-full h-48 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">Online Store (Laravel & MySQL)</h3>
                    <p class="text-gray-400 mb-4">An e-commerce website built with Laravel and styled using Tailwind CSS via CDN. 
                        It should allow users to browse products, add items to cart, checkout, and make payments using PayPal. 
                        The design will follow a modern, minimalistic theme.
                    </p>
                    <a href="https://freewebstore.com/" class="text-teal-500">View Project</a>
                </div>

                <!-- Project 5 -->
                 <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('icons/chat.jpg') }}" alt="Project 5" class="w-full h-48 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">Chat Application (React & Firebase)</h3>
                    <p class="text-gray-400 mb-4">A real-time chat application built with React and Firebase. 
                        Users can create accounts, join rooms, send messages, and receive notifications when new messages are received.
                    </p>
                    <a href="https://chattusa.com/" class="text-teal-500">View Project</a>
                </div>

                    <!-- Project 6 -->
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('icons/blog.png') }}" alt="Project 6" class="w-full h-48 object-cover mb-4 rounded-lg">
                        <h3 class="text-xl font-bold mb-2">Blog Website (Django & SQLite)</h3>
                        <p class="text-gray-400 mb-4">A blog website built with Django and SQLite. 
                            Users can create accounts, write posts, comment on posts, and view posts by category. 
                            The design will follow a clean, minimalistic theme.
                        </p>
                        <a href="https://www.blogger.com/" class="text-teal-500">View Project</a>
                    </div>

                    <!-- Project 7 -->
                     <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('icons/game.png') }}" alt="Project 7" class="w-full h-48 object-cover mb-4 rounded-lg">
                        <h3 class="text-xl font-bold mb-2">Online Game (JavaScript & Phaser)</h3>
                        <p class="text-gray-400 mb-4">An open-world game built with JavaScript and Phaser. 
                            Users can explore the game world, collect items, and complete objectives. 
                            The design will follow a modern, minimalistic theme.
                        </p>
                        <a href="https://www.crazygames.com/" class="text-teal-500">View Project</a>
                    </div>

                    <!-- Project 8 -->
                     <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('icons/calculator.png') }}" alt="Project 8" class="w-full h-48 object-cover mb-4 rounded-lg">
                        <h3 class="text-xl font-bold mb-2">Simple Calculator (JavaScript)</h3>
                        <p class="text-gray-400 mb-4">A simple calculator built with JavaScript. 
                            Users can perform basic arithmetic operations (+, -, *, /) on two numbers.
                        </p>
                        <a href="http://localhost/GitHub/Calculator-Project/calculator.html" class="text-teal-500">View Project</a>
                    </div>

                    <!-- Project 9 -->
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('icons/weather.png') }}" alt="Project 9" class="w-full h-48 object-cover mb-4 rounded-lg">
                        <h3 class="text-xl font-bold mb-2">Weather App (JavaScript & OpenWeatherMap API)</h3>
                        <p class="text-gray-400 mb-4">A weather app built with JavaScript that retrieves current weather data using the OpenWeatherMap API. 
                            Users can search for a city and view the current temperature, humidity, and weather description.
                        </p>
                        <a href="https://weather.com/" class="text-teal-500">View Project</a>
                    </div>
            </div>
        </div>
    </section>

</body>
</html>




