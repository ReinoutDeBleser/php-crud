<?php
    declare(strict_types=1);
    require ("../../Model/Teacher.php");

    $firstName = $_POST['firstName'];
    $lasttName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $classroom = $_POST['classroom'];

    // echo $firstName;
    $teacher = new Teacher();
    
    if(isset($_POST['submit'])){      
        
        $teacher->create($firstName, $lasttName, $email, $phone, $classroom);
    }
