<?php
    require('../../Controller/teacher/TeacherController.php');
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
    <form method="post">
        <?php foreach ($teachers AS $i => $teacher): ?>
            <?php echo $teacher['firstname'] ?>          

            <input type="text" name="updateTeacher">
            <button type="submit" name="update">Update</buttonn>
            <button type="submit" name="delete">delete</button><br>
        <?php endforeach; ?>
        

    </form>
    
</body>
</html>

