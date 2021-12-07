<?php
    // require('../../Controller/teacher/TeacherController.php');
    // require_once ('../View/includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
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
        

    </form>
</body>
</html>
   
<?php 
    // require_once '../View/includes/footer.php'; 
?>

