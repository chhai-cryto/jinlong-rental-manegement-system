<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lease Management</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <x-sidebar />
    <x-hearder />

    <div class="ml-64 p-6">

        <div class="flex justify-between items-center mb-6">
            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
                + New Lease
            </a>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-xl shadow overflow-hidden">

            <table class="w-full text-left">

                <thead class="bg-gray-50  text-sm uppercase">
                    <tr>
                        <th class="p-4">Tenant</th>
                        <th>Room</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Rent</th>
                        <th>Status</th>
                        <th class="text-right pr-16">Action</th>
                    </tr>
                </thead>

                <tbody class="text-gray-700">

                    <!-- Example Row -->
                    <tr class="border-t hover:bg-gray-50 transition">
                        <td class="p-4 font-medium">Lee Minho</td>
                        <td>#102</td>
                        <td>04 Jun 2025</td>
                        <td>04 Jun 2026</td>
                        <td>$300</td>

                        <!-- Status -->
                        <td>
                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                Active
                            </span>
                        </td>

                        <!-- Actions -->
                        <td class="text-right pr-4 space-x-3">
                            <button class="text-blue-600 hover:underline">Edit</button>
                            <button class="text-red-600 hover:underline">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-t hover:bg-gray-50 transition">
                        <td class="p-4 font-medium">Kim Jisoo</td>
                        <td>#105</td>
                        <td>10 Feb 2026</td>
                        <td>10 Feb 2027</td>
                        <td>$450</td>

                        <td>
                            <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                                Pending
                            </span>
                        </td>

                        <td class="text-right pr-4 space-x-3">
                            <button class="text-blue-600 hover:underline">Edit</button>
                            <button class="text-red-600 hover:underline">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-t hover:bg-gray-50 transition">
                        <td class="p-4 font-medium">IU</td>
                        <td>#09</td>
                        <td>03 Jan 2025</td>
                        <td>03 Jan 2026</td>
                        <td>$280</td>

                        <td>
                            <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">
                                Expired
                            </span>
                        </td>

                        <td class="text-right pr-4 space-x-3">
                            <button class="text-blue-600 hover:underline">Edit</button>
                            <button class="text-red-600 hover:underline">Delete</button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>

</body>
</html>