<?php
    require './View/includes/header.php';
    
    if(isset($_POST) && !empty($_POST['create'])){
        $teacher = new TeacherController();
        $data = $teacher->createTeacher();
        if(isset($data['status']) && $data['status'] == 'error') {
            $errors = $data['errors'];
        }
    }
    
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
                >
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['phone'])) { echo $errors['phone']; } ?>
                </span>
            </div>

            <div class="my-6 text-right">
                <input
                        type="submit"
                        name="create"
                        value="create"
                        class="px-8 h-12 text-sm text-white bg-blue-500 hover:bg-blue-600 border-bg-500"
                >
            </div>



        </form>
    </div>
</div>

<!-- <form method="post" action="">
    <label> First Name: </label>
    <input type="text" name="firstName" id="firstName" class="form-control"> <span> <?php echo $firstnameErr; ?> </span>
    <label> Last Name: </label>
    <input type="text" name="lastName" id="lastName" class="form-control"> <span> <?php echo $lastnameErr; ?> </span>
    <label> Email: </labbel>
    <input type="text" name="email" id="email" class="form-control"> <span> <?php echo $emailErr; ?> </span>
    <label> Phone: </labbel>
    <input type="text" name="phone" id="phone" class="form-control"> <span> <?php echo $phoneErr; ?> </span>
    <label> classroom </labbel>
    <input type="text" name="classroom" id="classroom" class="form-control"> <span><?php echo $classroomErr; ?> </span>
    <button type="submit" id="createTeacher" name="submit"> Create Teacher </button>
    

</form> -->

<?php
    require './View/includes/footer.php';
?>
