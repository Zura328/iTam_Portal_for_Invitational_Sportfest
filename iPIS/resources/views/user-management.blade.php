<!DOCTYPE html>
<html>
    <head>
        <title>User Management</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-xl font-bold text-gray-700">Users</h1>
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Add user</button>
            </div>
            
            <div class="mb-4 flex justify-between items-center">
                <div>
                    <label for="entries" class="mr-2">Show</label>
                    <select id="entries" class="border border-gray-300 rounded p-2">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="ml-2">entries</span>
                </div>
                <div>
                    <input type="text" class="border border-gray-300 rounded p-2" placeholder="Search">
                </div>
            </div>
            <table class="w-full border-collapse bg-white text-left">
                <thead>
                    <tr>
                        <th class="border-b py-2 px-4">PHOTO</th>
                        <th class="border-b py-2 px-4">NAME</th>
                        <th class="border-b py-2 px-4">EMAIL</th>
                        <th class="border-b py-2 px-4">ROLE</th>
                        <th class="border-b py-2 px-4">CREATION DATE</th>
                        <th class="border-b py-2 px-4">VERIFIED DATE</th>
                        <th class="border-b py-2 px-4">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b py-2 px-4"><img src="https://via.placeholder.com/40" alt="Admin" class="rounded-full"></td>
                        <td class="border-b py-2 px-4">Admin</td>
                        <td class="border-b py-2 px-4"><a href="mailto:admin@argon.com" class="text-blue-500">admin@argon.com</a></td>
                        <td class="border-b py-2 px-4">Admin</td>
                        <td class="border-b py-2 px-4">09/08/2021 05:24</td>
                    </tr>
                    <tr>
                        <td class="border-b py-2 px-4"><img src="https://via.placeholder.com/40" alt="Creator" class="rounded-full"></td>
                        <td class="border-b py-2 px-4">Creator</td>
                        <td class="border-b py-2 px-4"><a href="mailto:creator@argon.com" class="text-blue-500">creator@argon.com</a></td>
                        <td class="border-b py-2 px-4">Creator</td>
                        <td class="border-b py-2 px-4">09/08/2021 05:24</td>
                    </tr>
                    <tr>
                        <td class="border-b py-2 px-4"><img src="https://via.placeholder.com/40" alt="Member" class="rounded-full"></td>
                        <td class="border-b py-2 px-4">Member</td>
                        <td class="border-b py-2 px-4"><a href="mailto:member@argon.com" class="text-blue-500">member@argon.com</a></td>
                        <td class="border-b py-2 px-4">Member</td>
                        <td class="border-b py-2 px-4">09/08/2021 05:24</td>
                    </tr>
                    <tr>
                        <td class="border-b py-2 px-4"><img src="https://via.placeholder.com/40" alt="Pedro" class="rounded-full"></td>
                        <td class="border-b py-2 px-4">Pedro</td>
                        <td class="border-b py-2 px-4"><a href="mailto:pdro.saraiva@gmail.com" class="text-blue-500">pdro.saraiva@gmail.com</a></td>
                        <td class="border-b py-2 px-4">Admin</td>
                        <td class="border-b py-2 px-4">11/08/2021 18:50</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-4 flex justify-between items-center">
                <p class="text-gray-600">Showing 1 to 4 of 4 entries</p>
                <div class="flex items-center">
                    <button class="border border-gray-300 p-2 rounded-l">Previous</button>
                    <button class="border-t border-b border-gray-300 p-2">1</button>
                    <button class="border border-gray-300 p-2 rounded-r">Next</button>
                </div>
            </div>
        </div>
    </div>
</body>
    </head>
</html>