<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
</head>

<body>

    <div class="text-center text-xl font-bold p-6 bg-[#14213d] text-white tracking-wider">USER MANAGEMENT DETAILS</div>

    <div class="max-w-screen-lg mx-auto mt-16 mb-5 px-5">
        <div class="mb-12">
            <a href="/register" class="w-fit bg-green-400 p-2.5 rounded shadow-md">Add user</a>
        </div>
        <div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-6 py-3">Name</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Phone</th>
                            <th class="px-6 py-3">Gender</th>
                            <th class="px-6 py-3">Location</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($user as $val) {
                        ?>

                            <tr>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"><?= $val->name; ?></td>
                                <td class="px-6 py-4"><?= $val->email; ?></td>
                                <td class="px-6 py-4"><?= $val->phone; ?></td>
                                <td class="px-6 py-4"><?= $val->gender; ?></td>
                                <td class="px-6 py-4"><?= $val->location; ?></td>
                                <td>
                                    <a href="update/<?= $val->id; ?>" class="bg-blue-500 text-white p-2.5 rounded">Edit</a>
                                    <a href="delete/<?= $val->id; ?>" class="bg-red-500 text-white p-2.5 rounded">Delete</a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="assets/js/tailwindcss.js"></script>

</body>

</html>