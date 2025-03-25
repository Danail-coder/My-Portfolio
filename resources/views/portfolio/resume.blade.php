<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    
        <!-- Navbar -->
        <nav class="flex justify-between items-center px-10 py-5 bg-gray-800">
        <h1 class="text-2xl font-bold">Resume</h1>
        <ul class="flex space-x-6">
            <li><a href="{{ url('/') }}" class="hover:text-green-400">Home</a></li>
            <li><a href="{{ url('/projects') }}" class="hover:text-green-400">Projects</a></li>
            <li><a href="{{ url('/resume') }}" class="hover:text-green-400">Resume</a></li>
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
            <img src="{{ asset('icons/resume.jpg') }}" alt="Daniel Junior Foli" class="w-full h-full object-cover">
        </div>

        <h2 class="text-3xl mt-6">My Resume</h2>
    </div>

    <section class="p-10">
        <h2 class="text-3xl font-semibold text-green-400 mb-6">Resume</h2>

        <!-- Education Section -->
        <div class="mb-8">
            <h3 class="text-2xl font-semibold">Education</h3>
            <div class="mt-3 bg-gray-800 p-4 rounded-lg">
                <p class="text-lg font-bold">Ho Technical University</p>
                <p class="text-gray-400">Computer Science Student (Current)</p>
                <p class="text-gray-400">Graduated from High School in September 2021</p>
                <p class="text-gray-400">Projects: Web Development, Data Analysis</p>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="mb-8">
            <h3 class="text-2xl font-semibold">Skills</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-3">
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <p>Graphic Design</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <p>Frontend Development</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <p>Backend Development</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <p>Software Engineering</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <p>Project Management</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <p>Database Management</p>
                </div>
            </div>
        </div>

        <!-- Experience Section -->
        <div>
            <h3 class="text-2xl font-semibold">Experience</h3>
            <div class="mt-3 bg-gray-800 p-4 rounded-lg">
                <p class="text-lg font-bold">Intern at Touch Stack Technologies</p>
                <p class="text-gray-400">Working on a football competition website</p>
                <p class="text-gray-400">Start Date: October 2021 - Present</p>
                <p class="text-gray-400">Projects: Frontend Development, Backend Development</p>
                <p class="text-gray-400">Responsibilities: Designing and implementing new features, bug fixing, and maintaining the website</p>
            </div>
        </div>

        <!-- Projects Section -->
        <div>
            <h3 class="text-2xl font-semibold">Projects</h3>
            <div class="mt-3 bg-gray-800 p-4 rounded-lg">
                <p class="text-lg font-bold">Football Competition Website</p>
                <p class="text-gray-400">A responsive and interactive website for managing football matches, teams, and players</p>
                <p class="text-gray-400">Technologies: Laravel, Tailwind CSS, JavaScript, and MySQL</p>
            </div>
        </div>

        <!-- Hobbies Section -->
        <div>
            <h3 class="text-2xl font-semibold">Hobbies</h3>
            <div class="mt-3 bg-gray-800 p-4 rounded-lg">
                <p class="text-lg font-bold">Sports and Fitness</p>
                <p class="text-gray-400">I enjoy playing soccer, swimming, and cycling. I also enjoy cooking and trying new recipes.</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div>
            <h3 class="text-2xl font-semibold">Contact</h3>
            <div class="mt-3 bg-gray-800 p-4 rounded-lg">
                <p class="text-lg font-bold">Email: danieljuniorfoli@gmail.com</p>
                <p class="text-gray-400">Phone: (+233) 53-539-6532</p>
                <p class="text-gray-400">Address: 123 Main St, Sakumono, Tema, GQ-372-7373 </p>
            </div>
        </div>

    </section>

</body>
</html>