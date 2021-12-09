<?php require_once './View/includes/header.php';
?>
<div class="w-full max-w-screen-sm mx-auto my-12">
    <div class="w-full h-96 mx-4 my-4 px-6 py-6 border border-gray-300 shadow-xl">
        Class overview:<br>
        <?php echo $classroom[0]['name']; ?>
        <?php echo $classroom[0]['location'];?>
        <br>
        Teacher: <br>
        <?php echo $classTeach[0]["firstname"];?>
        <?php echo $classTeach[0]["lastname"];?>

        <br><br>
        Enrolled students:<br>
        <?php
        foreach($students->getStudentByClassroom($_GET['id']) as $student)
        {
        echo $student['firstname'];
        echo $student['lastname']."<br>";
        echo $student['email']."<br>";
        echo $student['phone']."<br>"."<br>";
        }
        ?>
    </div>
</div>