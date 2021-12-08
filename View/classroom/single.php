<?php require_once './View/includes/header.php'; ?>

<div class="w-full max-w-screen-sm mx-auto my-12">
    <div class="w-full h-96 mx-4 my-4 px-6 py-6 border border-gray-300 shadow-xl">
        Class overview:<br>
        <?php echo $classroom[0]['name']; ?>
        <?php echo $classroom[0]['location'];?>
        <?php echo $classroom[0]['teacher'];?>

        <br><br>
        Enrolled students:<br>
        <?php
        //here i want to add all enrolled students. need to get these from sushanta using classroom as a checker?
        ?>
    </div>
</div>