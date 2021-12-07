<?php
    declare(strict_types=1);
    require ("../../Model/Teacher.php");


// class CreateTeacherController
// {
    $teacher = new Teacher();

    $check = true;
    $firstName = $lastName = $email = $phone = $classroom = "";
    $firstNameErr = $lastNameErr  = $emailErr  = $phoneErr  = $classroomErr  = "";

    echo $firstName;
    

    // public function render(array $GET, array $POST)
    // {
    //     // require '../../View/teacher/create.php';
    //     die("test");
    // }
    

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['firstName'])){
             $firstNameErr = "An name is required!";
             $check = false;
        }else{
             $username = $_POST['firstName'];
        }

        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
             $emailErr = "A valid email is required!";
        }else{
             $email = $_POST["email"];
        }

        if(empty($_POST['lastName'])){
             $lastNameErr = "A last name is required!";
             $check = false;
        }else{
             $password1 = $_POST['lastName'];
        }

        if(empty($_POST['phone'])){
             $phoneErr = "A phone is required!";
             $check = false;
        }

        if(empty($_POST['classroom'])){
            $classroomErr = "A classroom is required!";
            $check = false;
        }
    }

    if($check == true && $firstName == $_POST['firstName'] && $lastName == $_POST['lastName'] && 
        $email == $_POST["email"] && $phone == $_POST['phone'] && $classroom == $_POST['classroom']){
            if(isset($_POST['submit'])){
                saveData($firstName, $lastName, $email, $phone, $classroom);
            }
    }else{
        echo "nao deu certo";
    }

   function saveData(){
    $teacher->create($firstName, $lastName, $email, $phone, $classroom);
   }
// }

    