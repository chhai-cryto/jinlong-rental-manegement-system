<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Custom stack effect for the card bottom */
        .card-stack {
            box-shadow: 
                0 10px 25px -5px rgba(0, 0, 0, 0.1), 
                0 4px 0px 0px #e5e7eb, 
                0 8px 0px 0px #f3f4f6;
        }
    </style>
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen font-sans">

    <div class="relative w-full max-w-sm">
        
        <div class="absolute -top-12 left-1/2 transform -translate-x-1/2 z-10">
            <div class="bg-[#4A90E2] w-24 h-24 rounded-full flex items-center justify-center border-8 border-gray-200">
                <i class="fas fa-user text-white text-4xl"></i>
            </div>
        </div>

        <div class="bg-white pt-16 pb-10 px-10 rounded-lg card-stack">
            
            <h2 class="text-xl font-medium text-center text-gray-500 mb-8 mt-2">
                User Log in
            </h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4 relative">
                    <input type="text" name="email" placeholder="User ID" required
                        class="w-full bg-gray-100 px-4 py-3 border-none rounded focus:ring-2 focus:ring-blue-400 placeholder-gray-400 text-gray-600">
                    <i class="fas fa-user absolute right-4 top-4 text-gray-400 text-sm"></i>
                </div>

                <div class="mb-8 relative">
                    <input type="password" name="password" placeholder="••••••••" required
                        class="w-full bg-gray-100 px-4 py-3 border-none rounded focus:ring-2 focus:ring-blue-400 placeholder-gray-400 text-gray-600">
                    <i class="fas fa-key absolute right-4 top-4 text-gray-400 text-sm"></i>
                </div>

                <button type="submit"
                    class="w-full bg-[#3B78C2] text-white py-3 rounded text-lg font-semibold hover:bg-blue-700 transition duration-200 uppercase tracking-wide">
                    LOGIN
                </button>

                <div class="text-center mt-6">
                    <a href="#" class="text-sm text-gray-500 hover:text-blue-500 transition">
                        Forgot <span class="text-[#3B78C2] font-semibold">Password?</span>
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>