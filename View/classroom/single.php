<?php require_once './View/includes/header.php';
require_once './Model/StudentLoader.php'
?>



<div class="w-full max-w-screen-sm mx-auto my-12">
    <div class="w-full h-96 mx-4 my-4 px-6 py-6 border border-gray-300 shadow-xl">
        Class overview:<br>
        <?php echo $classroom[0]['name']; ?>
        <?php echo $classroom[0]['location'];?>
        <?php echo $classroom[0]['teacher_id'];?>

        <br><br>
        Enrolled students:<br>
        <?php
        foreach ($students as $student)
        {

        echo $student['firstname']; echo $student['lastname'];
        echo $student['email'];
        echo $student['phone'];
        echo $student['classroom']['name'];


        }
        ?>
    </div>
</div>