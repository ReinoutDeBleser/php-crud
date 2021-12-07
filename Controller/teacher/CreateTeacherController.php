<?php
    declare(strict_types=1);
    require ("../../Model/Teacher.php");


// class CreateTeacherController
// {
    $firstName = $_POST['firstName'];
    $lasttName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $classroom = $_POST['classroom'];
    echo $firstName;

    echo $firstName;
    $teacher = new Teacher();

    // public function render(array $GET, array $POST)
    // {
    //     // require './View/student/create.php';
    //     die("test");
    // }
    
    if(isset($_POST['create'])){              
        create($firstName, $lasttName, $email, $phone, $classroom);
    }

    $firstName = $lasttName = $email = $phone = $classroom = "";
    $firstNameErr = $lasttNameErr = $emailErr = $phoneErr = $classroomErr = "";

    function create($firstname,$lastname,$email,$phone,$classroom) {
        $status = '';
        $response = [];
        if(!isset($firstname) || empty($firstname)) {
            $firstNameErr = "First name is required";
            $status = 'error';
        }
        if(!isset($lastname) || empty($lastname)) {
            $errors['lastname'] = "Last name is required";
            $status = 'error';
        }
        if(!isset($email) || empty($email)) {
            $errors['email'] = "Email address is required";
            $status = 'error';
        }
        if(!isset($phone) || empty($phone)) {
            $errors['phone'] = "Phone number is required";
            $status = 'error';
        }
        if(!isset($classroom) || empty($classroom)) {
            $errors['classroom'] = "Which classroom does this teacher belongs to?";
            $status = 'error';
        }

        if($status != 'error') {
            $teacher->create($firstName, $lasttName, $email, $phone, $classroom);
        }

        else {
          $response['status'] = 'error';
          $response['errors'] = $errors;
        }
        return $response;

    }
// }

    