<?php
    require './View/includes/header.php';
?>

<div class="max-w-screen-md mx-auto w-full my-12">
    <div class="w-full mx-4 px-6 py-6 border-gray-200 shadow-md">
        <h1 class="text-2xl text-gray-700 font-light py-2 border-b-4 border-double border-gray-300">Add New Teacher</h1>
        <form action="" method="post" class="my-8">
            <div class="my-4">
                <label for="firstname" class="<?php if(isset($errors['firstname'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-md font-bold">Firstname</label>
                <input
                        type="text"
                        name="firstname"
                        class="w-full h-12 px-4 mt-2 mb-1 border outline:none focus:outline-none shadow-sm <?php if(isset($errors['email'])) { echo 'border-red-500 focus:border-red-000'; } else { echo 'border-gray-300 focus:border-blue-400'; } ?>"
                        placeholder="Firstname of the teacher"
                        value="<?php if(isset($firstname)) { echo $firstname; } else { echo $teacher[0]['firstname']; } ?>"
                >
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['firstname'])) { echo $errors['firstname']; } ?>
                </span>
            </div>

            <div class="my-4">
                <label for="lastname" class="<?php if(isset($errors['lastname'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-md font-bold">Lastname</label>
                <input
                        type="text"
                        name="lastname"
                        class="w-full h-12 px-4 mt-2 mb-1 border outline:none focus:outline-none shadow-sm <?php if(isset($errors['email'])) { echo 'border-red-500 focus:border-red-000'; } else { echo 'border-gray-300 focus:border-blue-400'; } ?>"
                        placeholder="Lastname of the teacher"
                        value="<?php if(isset($lastname)) { echo $lastname; } else { echo $teacher[0]['lastname']; } ?>"
                >
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['lastname'])) { echo $errors['lastname']; } ?>
                </span>
            </div>

            <div class="my-4">
                <label for="email" class="<?php if(isset($errors['email'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-md font-bold">Email</label>
                <input
                        type="text"
                        name="email"
                        class="w-full h-12 px-4 mt-2 mb-1 border outline:none focus:outline-none shadow-sm <?php if(isset($errors['email'])) { echo 'border-red-500 focus:border-red-000'; } else { echo 'border-gray-300 focus:border-blue-400'; } ?>"
                        placeholder="Email Address of the teacher"
                        value="<?php if(isset($email)) { echo $email; } else { echo $teacher[0]['email']; } ?>"
                >
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['email'])) { echo $errors['email']; } ?>
                </span>
            </div>

            <div class="my-y">
                <label for="phone" class="<?php if(isset($errors['phone'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-md font-bold">Phone</label>
                <input
                        type="text"
                        name="phone"
                        class="w-full h-12 px-4 mt-2 mb-1 border border-gray-300 outline:none focus:outline-none focus:border-blue-400"
                        placeholder="Phone number of the teacher"
                        value="<?php if(isset($phone)) { echo $phone; } else { echo $teacher[0]['phone']; } ?>"
                >
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['phone'])) { echo $errors['phone']; } ?>
                </span>
            </div>

            <div class="my-3">
                <label for="classroom" class="<?php if(isset($errors['classroom'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-md font-bold">Classroom</label>
                <select
                        name="classroom"
                        class="w-full h-12 px-4 mt-2 mb-1 border border-gray-300 outline:none focus:outline-none focus:border-blue-400"
                >
                    <option value="">Choose one</option>
                    <option value="2">Lamarr 4.13</option>
                </select>
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['classroom'])) { echo $errors['classroom']; } ?>
                </span>
            </div>

            <div class="my-6 text-right">
                <input
                        type="submit"
                        name="update"
                        value="Update"
                        class="px-8 h-12 text-sm text-white bg-blue-500 hover:bg-blue-600 border-bg-500"
                >
            </div>

        </form>
    </div>
</div>


<?php
    require './View/includes/footer.php';
?>