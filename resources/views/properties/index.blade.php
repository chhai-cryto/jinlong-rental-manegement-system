<x-sidebar/>
<x-hearder/>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Properties</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="ml-64">

    <!-- Sidebar -->
    <div class="p-10 bg-slate-50 min-h-screen">
    <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
        <div class="flex gap-4">
            <button class="px-6 py-2 border-2 border-[#41b1d1] text-[#41b1d1] font-semibold rounded-md hover:bg-[#41b1d1] hover:text-white transition-all bg-white">
                Create new Property
            </button>
            <button class="px-6 py-2 border-2 border-[#41b1d1] text-[#41b1d1] font-semibold rounded-md hover:bg-[#41b1d1] hover:text-white transition-all bg-white">
                Bulk upload
            </button>
        </div>

        <div class="relative w-full max-w-xs">
            <input 
                type="text" 
                placeholder="Search" 
                class="w-full pl-4 pr-10 py-2.5 bg-[#eceef1] border-none rounded-lg focus:ring-2 focus:ring-[#41b1d1] outline-none text-gray-600 placeholder-gray-400"
            >
            <svg class="absolute right-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-gray-400 text-sm font-medium border-b border-gray-100">
                        <th class="px-6 py-5">Sr No</th>
                        <th class="px-6 py-5 cursor-pointer hover:text-gray-600">Address <span class="text-[10px]">↕</span></th>
                        <th class="px-6 py-5 cursor-pointer hover:text-gray-600">City <span class="text-[10px]">↕</span></th>
                        <th class="px-6 py-5 cursor-pointer hover:text-gray-600">Latitude <span class="text-[10px]">↕</span></th>
                        <th class="px-6 py-5 cursor-pointer hover:text-gray-600">Longitude <span class="text-[10px]">↕</span></th>
                        <th class="px-6 py-5 cursor-pointer hover:text-gray-600">Zip_code <span class="text-[10px]">↕</span></th>
                        <th class="px-6 py-5 cursor-pointer hover:text-gray-600">state <span class="text-[10px]">↕</span></th>
                        <th class="px-6 py-5 cursor-pointer hover:text-gray-600">Featured <span class="text-[10px]">↕</span></th>
                        <th class="px-6 py-5 cursor-pointer hover:text-gray-600">Image <span class="text-[10px]">↕</span></th>
                        <th class="px-6 py-5 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-[#555555] text-sm divide-y divide-gray-50">
                    {{-- Replace this @foreach with your data loop --}}
                    @foreach(range(1, 6) as $index)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">{{ $index }}</td>
                        <td class="px-6 py-4">4Rutherford Pl</td>
                        <td class="px-6 py-4 font-semibold">New York</td>
                        <td class="px-6 py-4">40.732253</td>
                        <td class="px-6 py-4">-73.98741</td>
                        <td class="px-6 py-4">10003</td>
                        <td class="px-6 py-4 uppercase font-semibold">NY</td>
                        <td class="px-6 py-4 italic text-gray-400">undefined</td>
                        <td class="px-6 py-4">
                            <div class="w-20 h-12 bg-gray-200 rounded overflow-hidden shadow-sm">
                                <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=400"
     class="w-full h-full object-cover"
     alt="Property">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex justify-center items-center gap-4 text-gray-400">
                                <button class="hover:text-[#41b1d1]">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
                                </button>
                                <button class="hover:text-[#41b1d1]">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" /></svg>
                                </button>
                                <button class="hover:text-red-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="h-20 bg-white"></div>
        </div>
    </div>
</div>
</div>

</body>
</html>