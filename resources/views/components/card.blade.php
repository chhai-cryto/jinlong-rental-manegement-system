<section class="ml-64 flex-1 p-6 bg-gray-50 min-h-screen">

    <div class="mb-8">
        <!-- <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1> -->
        <p class="text-gray-500 mt-1">Overview of your rental management system</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Card -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border hover:-translate-y-1 hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Properties</p>
                    <h2 class="text-3xl font-bold text-gray-900 mt-1">25</h2>
                </div>
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-blue-100 text-blue-600 text-2xl">
                    <i class="fa-solid fa-hotel"></i>
                </div>
            </div>
            <div class="mt-4 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
                <div class="h-full w-2/3 bg-blue-500"></div>
            </div>
        </div>

        <!-- Rooms -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border hover:-translate-y-1 hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Rooms</p>
                    <h2 class="text-3xl font-bold text-gray-900 mt-1">120</h2>
                </div>
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-green-100 text-green-600 text-2xl">
                    <i class="fa-solid fa-bed"></i>
                </div>
            </div>
            <div class="mt-4 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
                <div class="h-full w-3/4 bg-green-500"></div>
            </div>
        </div>

        <!-- Tenants -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border hover:-translate-y-1 hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Tenants</p>
                    <h2 class="text-3xl font-bold text-gray-900 mt-1">98</h2>
                </div>
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-purple-100 text-purple-600 text-2xl">
                    <i class="fa-solid fa-users"></i>
                </div>
            </div>
            <div class="mt-4 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
                <div class="h-full w-1/2 bg-purple-500"></div>
            </div>
        </div>

        <!-- Maintenance -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border hover:-translate-y-1 hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Maintenance</p>
                    <h2 class="text-3xl font-bold text-gray-900 mt-1">12</h2>
                </div>
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-yellow-100 text-yellow-600 text-2xl">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </div>
            </div>
            <div class="mt-4 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
                <div class="h-full w-1/3 bg-yellow-500"></div>
            </div>
        </div>

    </div>

    <!-- Bottom Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">

        <!-- Revenue Card -->
        <div class="lg:col-span-2 bg-white rounded-2xl p-6 border shadow-sm">
    <div class="flex justify-between items-center mb-4">
        <div>
            <h3 class="text-lg font-semibold text-gray-800">Monthly Revenue</h3>
            <p class="text-gray-500 text-sm">Income overview this year</p>
        </div>
        <span class="text-sm text-blue-600 font-medium">2026</span>
    </div>

    <!-- Chart -->
        <div class="h-56 flex items-end justify-between gap-2">
            
                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-20 bg-blue-500 rounded-lg transition-all duration-300 group-hover:bg-blue-600 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Jan</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-32 bg-blue-400 rounded-lg transition-all duration-300 group-hover:bg-blue-500 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Feb</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-24 bg-blue-300 rounded-lg transition-all duration-300 group-hover:bg-blue-400 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Mar</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-40 bg-blue-500 rounded-lg transition-all duration-300 group-hover:bg-blue-600 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Apr</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-28 bg-blue-400 rounded-lg transition-all duration-300 group-hover:bg-blue-500 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">May</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-36 bg-blue-300 rounded-lg transition-all duration-300 group-hover:bg-blue-400 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Jun</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-20 bg-blue-500 rounded-lg transition-all duration-300 group-hover:bg-blue-600 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Jul</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-32 bg-blue-400 rounded-lg transition-all duration-300 group-hover:bg-blue-500 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Aug</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-24 bg-blue-300 rounded-lg transition-all duration-300 group-hover:bg-blue-400 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Sep</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-40 bg-blue-500 rounded-lg transition-all duration-300 group-hover:bg-blue-600 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Oct</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-28 bg-blue-400 rounded-lg transition-all duration-300 group-hover:bg-blue-500 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Nov</span>
                </div>

                <div class="flex flex-col items-center gap-2 group">
                    <div class="w-6 h-36 bg-blue-300 rounded-lg transition-all duration-300 group-hover:bg-blue-400 group-hover:scale-110"></div>
                    <span class="text-xs text-gray-500">Dec</span>
                </div>
            
            </div>
        </div>

        <!-- Payment Summary -->
        <div class="bg-white rounded-2xl p-6 border shadow-sm">
            <h3 class="text-lg font-semibold text-gray-800">Payments</h3>

            <div class="mt-6 space-y-4">
                <div class="flex justify-between">
                    <span class="text-gray-500">Total</span>
                    <span class="font-bold">$5,000</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Paid</span>
                    <span class="text-green-600 font-bold">$4,200</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Pending</span>
                    <span class="text-red-500 font-bold">$800</span>
                </div>
            </div>

            <button class="mt-6 w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition">
                View Details
            </button>
        </div>

    </div>

</section>