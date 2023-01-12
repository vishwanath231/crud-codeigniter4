<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <div class="text-center text-xl font-bold p-6 bg-[#14213d] text-white tracking-wider">USER MANAGEMENT SYSTEM</div>

    <div class="max-w-screen-lg mx-auto mt-16 mb-5 px-5">
        <div class="mb-12 flex justify-between items-center">
            <a href="/register" class="w-fit bg-gray-300 text-black p-2.5 rounded shadow-md">Add user</a>
            <form class="flex items-center">
                <input type="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-60 p-2.5 mr-5" placeholder="Search name..." />
                <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-26 px-5 py-2.5 text-center">Search</button>
            </form>
            <button onclick="RemoveRule();" class="bg-black p-2.5 rounded-full">
                <img src="assets/img/refresh.png" class="w-6 h-6" alt="">
            </button>
        </div>
        <div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500" id="myTable">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-6 py-3">Profile</th>
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
                        if (!empty($user) && is_array($user))

                            foreach ($user as $val) {
                        ?>

                            <tr>
                                <td class="px-4 py-4"><img src="upload/<?= esc($val->profile); ?>" class="w-10 h-10 object-cover rounded-full" alt=""></td>
                                <td class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap"><?= $val->name; ?></td>
                                <td class="px-4 py-4"><?= esc($val->email); ?></td>
                                <td class="px-4 py-4"><?= $val->phone; ?></td>
                                <td class="px-4 py-4"><?= $val->gender; ?></td>
                                <td class="px-4 py-4"><?= $val->location; ?></td>
                                <td class="flex py-4">
                                    <a href="view/<?= esc($val->id, 'url'); ?>" class="bg-white shadow p-2.5 rounded-full">
                                        <img src="assets/img/view.png" class="w-6 h-6" alt="">
                                    </a>
                                    <a href="update/<?= esc($val->id, 'url'); ?>" class="bg-white shadow p-2.5 mx-2 rounded-full">
                                        <img src="assets/img/edit.png" class="w-6 h-6" alt="">
                                    </a>
                                    <a href="delete/<?= esc($val->id); ?>" class="bg-white shadow p-2.5 rounded-full">
                                        <img src="assets/img/delete.png" class="w-6 h-6" alt="">
                                    </a>
                                </td>
                            </tr>

                        <?php
                            }
                        else {

                        ?>
                            <h2>No records</h2>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="assets/js/tailwindcss.js"></script>
    <script type="text/javascript">
        function RemoveRule() {
            window.location.href = window.location.href.split('?')[0];
        }
    </script>

</body>

</html>