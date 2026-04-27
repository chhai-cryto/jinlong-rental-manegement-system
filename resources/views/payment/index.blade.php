    <x-sidebar/>
    <x-hearder/>
    <x-cards/>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payments</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Payments</h1>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-xl shadow hover:bg-blue-600">
            + Add Payment
        </button>
    </div>

    <!-- Payment Form -->
    <div class="bg-white p-6 rounded-2xl shadow mb-6">
        <h2 class="text-lg font-semibold mb-4">New Payment</h2>

        <div class="grid grid-cols-2 gap-4">
            <input type="text" placeholder="Tenant Name"
                class="p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">

            <input type="text" placeholder="Property Name"
                class="p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">

            <input type="number" placeholder="Amount"
                class="p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">

            <input type="date"
                class="p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">

            <select class="p-3 border rounded-xl col-span-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option>Payment Method</option>
                <option>Cash</option>
                <option>Bank Transfer</option>
                <option>ABA</option>
            </select>
        </div>

        <button class="mt-4 w-full bg-green-500 text-white p-3 rounded-xl hover:bg-green-600">
            Save Payment
        </button>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr class="text-left text-sm text-gray-600">
                    <th class="p-4">Tenant</th>
                    <th class="p-4">Property</th>
                    <th class="p-4">Amount</th>
                    <th class="p-4">Date</th>
                    <th class="p-4">Status</th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-t hover:bg-gray-50">
                    <td class="p-4">John Doe</td>
                    <td class="p-4">Room A101</td>
                    <td class="p-4">$300</td>
                    <td class="p-4">2026-04-01</td>
                    <td class="p-4">
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">
                            Paid
                        </span>
                    </td>
                </tr>

                <tr class="border-t hover:bg-gray-50">
                    <td class="p-4">Sok Chan</td>
                    <td class="p-4">Room B202</td>
                    <td class="p-4">$250</td>
                    <td class="p-4">2026-04-03</td>
                    <td class="p-4">
                        <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">
                            Pending
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>


