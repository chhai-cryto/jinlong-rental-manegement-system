        <!DOCTYPE html>
        <html lang="en">
        <head>
            @vite('resources/css/app.css')
            <title>Login</title>
        </head>
        <body class="bg-gradient-to-r from-blue-400 to-cyan-400 h-screen flex items-center justify-center">

        <div class="bg-white p-8 rounded-2xl shadow-xl w-80">
            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

            <form action="{{ route('dashboard') }}">
                <input 
                    type="email" 
                    placeholder="Email"
                    class="w-full mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                >

                <input 
                    type="password" 
                    placeholder="Password"
                    class="w-full mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                >

                <button 
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
                    Login
                </button>
            </form>
        </div>

        </body>
        </html>