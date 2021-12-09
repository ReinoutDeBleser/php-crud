<?php
if(isset($_POST) && !empty($_POST['update'])) {
    $classroom = new ClassroomController();
    $id = intval($_GET['id']);
    $classname = $_POST['classname'];
    $location = $_POST['location'];
    $teacher = $_POST['teacher_id'];
    $data = $classroom-> updateClassroom($id, $classname, $location, $teacher);
    if(isset($data['status']) && $data['status'] == 'error') {
        $errors = $data['errors'];
    }
}
?>

<?php require_once './View/includes/header.php'; ?>

<div class="max-w-screen-md mx-auto w-full my-12">
    <div class="w-full mx-4 px-6 py-6 border-gray-200 shadow-md">
        <h1 class="text-2xl text-gray-700 font-light py-2 border-b-4 border-double border-gray-300">Update Class</h1>
        <form action="" method="post" class="my-8">
            <div class="my-4">
                <label for="name" class="<?php if(isset($errors['name'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-md font-bold">Name</label>
                <input
                    type="text"
                    name="classname"
                    class="w-full h-12 px-4 mt-2 mb-1 border outline:none focus:outline-none shadow-sm <?php if(isset($errors['email'])) { echo 'border-red-500 focus:border-red-000'; } else { echo 'border-gray-300 focus:border-blue-400'; } ?>"
                    placeholder="Name of the Class"
                    value="<?php if(isset($classname)) { echo $classname; } else { echo $classroom[0]['name']; } ?>"
                >
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['classname'])) { echo $errors['classname']; } ?>
                </span>
            </div>

            <div class="my-4">
                <label for="lastname" class="<?php if(isset($errors['location'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-md font-bold">Location</label>
                <select
                        name="location"
                        class="w-full h-12 px-4 mt-2 mb-1 border border-gray-300 outline:none focus:outline-none focus:border-blue-400"
                >
                    <option value="Antwerp">Antwerp</option>
                    <option value="Ghent">Ghent</option>
                    <option value="Charleroi">Charleroi</option>
                    <option value="Brussels">Brussels</option>
                    <option value="Liège">Liège</option>
                </select>

                <span class="font-sm text-red-500">
                    <?php if(isset($errors['location'])) { echo $errors['location']; } ?>
                </span>
            </div>

            <div class="my-y">
                <label for="teacher" class="<?php if(isset($errors['teacher_id'])) { echo 'text-red-700'; } else { echo 'text-gray-700'; } ?> text-md font-bold">Teacher</label>
                <select
                        name="teacher_id"
                        class="w-full h-12 px-4 mt-2 mb-1 border border-gray-300 outline:none focus:outline-none focus:border-blue-400"
                >
                    <?php foreach ($allTeachers as $teacher) { ?>
                        <option value="<?php echo $teacher['id']; ?>"> <?php echo $teacher['firstname']; ?></option>

                    <?php }?>
                </select>
                <span class="font-sm text-red-500">
                    <?php if(isset($errors['teacher'])) { echo $errors['teacher']; } ?>
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

<?php require_once './View/includes/footer.php'; ?>

