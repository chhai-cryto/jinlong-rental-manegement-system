
<x-sidebar/>
<x-hearder/>
<x-cards/>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jinlong-rental-manegement-system</title>
</head>
<body>
    <x-sidebar />
    <x-hearder />
    
    <div class=" ml-64 p-4">
        
        <button class="mb-4 px-4 py-2 bg-blue-600 text-white rounded">
            + Create Tenants
        </button>
        <!-- Table -->
        <div class="bg-white rounded shadow overflow-hidden">

            <table class="w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3">Name</th>
                        <th>Start Date</th>
                        <th>Number</th>
                        <th>Room</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-3 flex items-center gap-2">
                            Lee Minho
                        </td>
                        <td>04/06/2025</td>
                        <td>234567789</td>
                        <td>#102</td>
                        <td>leeminho@emailprovider.com</td>
                        <td>
                            <button class="text-blue-600 mr-6">Edit</button>
                            <button class="text-red-600">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-t">
                        <td class="p-3 flex items-center gap-2">
                            Kim Jisoo
                        </td>
                        <td>10/02/2026</td>
                        <td>0963456789</td>
                        <td>#105</td>
                        <td>kimjisoo@emailprovider.com</td>
                        <td>
                            <button class="text-blue-600 mr-6">Edit</button>
                            <button class="text-red-600">Delete</button>
                        </td>
                    </tr>

                      <tr class="border-t">
                        <td class="p-3 flex items-center gap-2">
                            IU
                        </td>
                        <td>03/01/2025</td>
                        <td>012345679</td>
                        <td>#09</td>
                        <td>iu@emailprovider.com</td>
                        <td>
                            <button class="text-blue-600 mr-6">Edit</button>
                            <button class="text-red-600">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-t">
                        <td class="p-3 flex items-center gap-2">
                            Park Seo Joon
                        </td>
                        <td>05/15/2024</td>
                        <td>09256789</td>
                        <td>#07</td>
                        <td>parkseojoon@emailprovider.com</td>
                        <td>
                            <button class="text-blue-600 mr-6">Edit</button>
                            <button class="text-red-600">Delete</button>
                        </td>
                    </tr>

                    </tr>

                      <tr class="border-t">
                        <td class="p-3 flex items-center gap-2">
                            Pao Pao
                        </td>
                        <td>03/07/2025</td>
                        <td>08845678</td>
                        <td>#12</td>
                        <td>paopao@emailprovider.com</td>
                        <td>
                            <button class="text-blue-600 mr-6">Edit</button>
                            <button class="text-red-600">Delete</button>
                        </td>
                    </tr>

                    </tr>

                      <tr class="border-t">
                        <td class="p-3 flex items-center gap-2">
                            IU
                        </td>
                        <td>03/01/2025</td>
                        <td>012345679</td>
                        <td>#09</td>
                        <td>iu@emailprovider.com</td>
                        <td>
                            <button class="text-blue-600 mr-6">Edit</button>
                            <button class="text-red-600">Delete</button>
                        </td>
                    </tr>

                    <tr class="border-t">
                        <td class="p-3 flex items-center gap-2">
                            Park Seo Joon
                        </td>
                        <td>05/15/2024</td>
                        <td>09256789</td>
                        <td>#07</td>
                        <td>parkseojoon@emailprovider.com</td>
                        <td>
                            <button class="text-blue-600 mr-6">Edit</button>
                            <button class="text-red-600">Delete</button>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>

    </div>


</body>
</html>

