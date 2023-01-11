<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <div class="text-center text-xl font-bold p-6 bg-[#14213d] text-white tracking-wide">USER MANAGEMENT SYSTEM</div>

    <div class="block max-w-screen-lg mx-auto mt-14 mb-5 px-5">
        <a href="/" class="w-fit bg-green-400 p-2.5 rounded shadow-md">View users</a>
    </div>


    <div class="max-w-screen-lg mx-auto mt-16 mb-5 px-5 flex justify-center">
        <div class="w-full md:w-1/2">
            <?php
            if (!empty($user) && is_array($user)) {

                foreach ($user as $val) {
            ?>

                    <div class="flex flex-col justify-center">
                        <div class="flex justify-center items-center text-center mb-5">
                            <img src="/upload/<?= $val->profile ?>" class="w-40 h-40 object-cover rounded-full" alt="">
                        </div>
                        <div class="flex p-2.5">
                            <div class="mr-5">Name: </div>
                            <div><?= $val->name; ?></div>
                        </div>
                        <div class="flex p-2.5">
                            <div class="mr-5">Email: </div>
                            <div><?= $val->email; ?></div>
                        </div>
                        <div class="flex p-2.5">
                            <div class="mr-5">Phone: </div>
                            <div><?= $val->phone; ?></div>
                        </div>
                        <div class="flex p-2.5">
                            <div class="mr-5">Gender: </div>
                            <div><?= $val->gender; ?></div>
                        </div>
                        <div class="flex p-2.5">
                            <div class="mr-5">Location: </div>
                            <div><?= $val->location; ?></div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>

    <script src="/assets/js/tailwindcss.js"></script>
</body>

</html>