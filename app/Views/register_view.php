<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <div class="text-center text-xl font-bold p-6 bg-[#14213d] text-white tracking-wide">USER MANAGEMENT SYSTEM</div>

    <div class="block max-w-screen-lg mx-auto mt-14 mb-5 px-5">
        <a href="/" class="w-fit bg-green-400 p-2.5 rounded shadow-md">View users</a>
    </div>


    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="text-center">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>


    <div class="max-w-screen-lg mx-auto mt-16 mb-5 px-5 flex justify-center">
        <div class="w-full md:w-1/2">
            <div class="mb-5 text-3xl font-medium">Register</div>
            <form action="<?php echo base_url(); ?>/register" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="mb-4">
                    <label for="profile" class="block mb-2 text-sm font-medium text-gray-900">profile</label>
                    <input type="file" name="profile" id="profile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" name="name" value="<?= set_value('name') ?>" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john">
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="email" value="<?= set_value('email') ?>" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="exampl@support.com">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone</label>
                    <input type="tel" name="phone" value="<?= set_value('phone') ?>" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="1234567890">
                </div>
                <div class="mb-4">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Gender</label>
                    <input type="radio" name="gender" id="gender" value="Male" class="mr-2">Male
                    <input type="radio" name="gender" id="gender" value="Female" class="mr-2">Female
                </div>
                <div class="mb-4">
                    <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Location</label>
                    <input type="text" name="location" value="<?= set_value('location') ?>" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="london">
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>

    <script src="assets/js/tailwindcss.js"></script>
</body>

</html>