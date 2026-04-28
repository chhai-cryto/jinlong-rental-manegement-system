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

    <!-- Button -->
    <div class="mb-6">
        <button onclick="document.getElementById('modal').classList.remove('hidden')"
            class="px-4 py-2 bg-blue-600 text-white rounded">
            + New Lease
        </button>
    </div>

    <!-- Success -->
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table -->
    <div class="bg-white shadow rounded-lg overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-50 text-left">
                <tr>
                    <th class="p-4">Tenant </th>
                    <th>Room</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Rent</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                @forelse($leases as $lease)

                    <tr class="border-t">

                        <td class="p-4">
                            {{ $lease->tenant_id }}
                        </td>

                        <td>
                            {{ $lease->room_id }}
                        </td>

                        <td>
                            {{ $lease->start_date }}
                        </td>

                        <td>
                            {{ $lease->end_date }}
                        </td>

                        <td>
                            ${{ $lease->rent_amount }}
                        </td>

                        <td>
                            {{ $lease->status }}
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="p-4 text-center text-gray-500">
                            No leases found
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>
</div>

<!-- Modal -->
<div id="modal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center">

    <div class="bg-white p-6 w-full max-w-xl rounded-lg relative">

        <button onclick="document.getElementById('modal').classList.add('hidden')"
            class="absolute top-2 right-2 text-xl">
            ✕
        </button>

        <h2 class="text-xl font-bold mb-4">Create Lease</h2>

        <form action="{{ route('leases.store') }}" method="POST" class="space-y-4">

            @csrf

            <!-- Tenant ID (manual input) -->
            <input
                type="text"
                name="tenant_id"
                placeholder="Enter Tenant ID"
                class="w-full border p-2 rounded">

            <!-- Room ID (manual input) -->
            <input
                type="text"
                name="room_id"
                placeholder="Enter Room ID"
                class="w-full border p-2 rounded">

            <!-- Start -->
            <input type="date" name="start_date" class="w-full border p-2 rounded">

            <!-- End -->
            <input type="date" name="end_date" class="w-full border p-2 rounded">

            <!-- Rent -->
            <input type="number" name="rent_amount" placeholder="Rent" class="w-full border p-2 rounded">

            <!-- Status -->
            <select name="status" class="w-full border p-2 rounded">

                <option value="Active">Active</option>
                <option value="Pending">Pending</option>
                <option value="Expired">Expired</option>

            </select>

            <button class="w-full bg-blue-600 text-white py-2 rounded">
                Save
            </button>

        </form>

    </div>

</div>

</body>
</html>