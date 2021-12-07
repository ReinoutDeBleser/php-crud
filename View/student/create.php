<?php
    if(isset($_POST) && !empty($_POST['create'])) {
       $student = new StudentController();
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $classroom = intval($_POST['classroom']);
       $data = $student->createStudent($firstname,$lastname,$email,$phone,$classroom);
        if(isset($data['status']) && $data['status'] == 'error') {
            $errors = $data['errors'];
        }
    }
?>

<?php require_once './View/includes/header.php'; ?>

<div class="max-w-screen-md mx-auto w-full my-12">
    <div class="w-full mx-4 p-6 md:p-8 lg:p-12 border-gray-200 shadow-xl">
        <h1 class="text-2xl text-gray-700 font-light py-2 border-b-4 border-double border-gray-300">Add New Student</h1>
        <form action="" method="post" class="my-8">
            <div class="my-4">
                <label for="firstname" class="<?php if(isset($errors['firstname'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-sm font-bold">Firstname</label>
                <input
                        type="text"
                        name="firstname"
                        class="w-full h-12 px-4 mt-2 mb-1 border outline:none focus:outline-none shadow-sm <?php if(isset($errors['email'])) { echo 'border-red-500 focus:border-red-000'; } else { echo 'border-gray-300 focus:border-blue-400'; } ?>"
                        placeholder="Firstname of the student"
                >
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['firstname'])) { echo $errors['firstname']; } ?>
                </span>
            </div>

            <div class="my-4">
                <label for="lastname" class="<?php if(isset($errors['lastname'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-sm font-bold">Lastname</label>
                <input
                        type="text"
                        name="lastname"
                        class="w-full h-12 px-4 mt-2 mb-1 border outline:none focus:outline-none shadow-sm <?php if(isset($errors['email'])) { echo 'border-red-500 focus:border-red-000'; } else { echo 'border-gray-300 focus:border-blue-400'; } ?>"
                        placeholder="Lastname of the student"
                >
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['lastname'])) { echo $errors['lastname']; } ?>
                </span>
            </div>

            <div class="my-4">
                <label for="email" class="<?php if(isset($errors['email'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-sm font-bold">Email</label>
                <input
                        type="text"
                        name="email"
                        class="w-full h-12 px-4 mt-2 mb-1 border outline:none focus:outline-none shadow-sm <?php if(isset($errors['email'])) { echo 'border-red-500 focus:border-red-000'; } else { echo 'border-gray-300 focus:border-blue-400'; } ?>"
                        placeholder="Email Address of the student"
                >
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['email'])) { echo $errors['email']; } ?>
                </span>
            </div>

            <div class="my-y">
                <label for="phone" class="<?php if(isset($errors['phone'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-sm font-bold">Phone</label>
                <input
                        type="text"
                        name="phone"
                        class="w-full h-12 px-4 mt-2 mb-1 border border-gray-300 outline:none focus:outline-none focus:border-blue-400"
                        placeholder="Phone number of the student"
                >
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['phone'])) { echo $errors['phone']; } ?>
                </span>
            </div>

            <div class="my-3">
                <label for="classroom" class="<?php if(isset($errors['classroom'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-sm font-bold">Classroom</label>
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

            <div class="mt-12 text-center">
                <input
                        type="submit"
                        name="create"
                        value="Create"
                        class="px-8 h-12 text-sm mx-auto text-white bg-blue-500 hover:bg-blue-600 border-bg-500 rounded-full cursor-pointer"
                >
            </div>



        </form>
    </div>
</div>

<?php require_once './View/includes/footer.php'; ?>

