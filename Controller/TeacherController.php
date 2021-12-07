<?php
    declare(strict_types=1);
    require ("Model/Teacher.php");


class TeacherController
{
    public function render(array $GET, array $POST)
    {

        if(isset($_GET['view']) && $_GET['view'] == 'create') {
            require './View/teacher/create.php';
        }

        // code to read all teachers

        $data = new Teacher();

        $teachers = $data->readAllTeacher();
        // var_dump($teachers);


        if(isset($_POST['delete'])){
            $data->delete(9);
        }

        if(isset($_POST['update'])){
            $data->update(12);
        }

        require 'View/teacher/page.php';

        // code to create a teacher

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
            $teacher = new Teacher();
            $check = true;
            $firstname = $lastname = $email = $phone = $classroom = "";
            $firstnameErr = $lastnameErr  = $emailErr  = $phoneErr  = $classroomErr  = "";
            
    
            var_dump($firstname, $lastname, $email, $phone, $classroom);
    
            if(empty($_POST['firstName'])){
                $firstnameErr = "An name is required!";
                $check = false;
            }else{
                $firstname = $_POST['firstName'];
            }
            if(empty($_POST['lastName'])){
                $lastnameErr = "A last name is required!";
                $check = false;
            }else{
                $lastname = $_POST['lastName'];
            }
            
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $emailErr = "A valid email is required!";
            }else{
                $email = $_POST["email"];
            }
    
            if(empty($_POST['phone'])){
                $phoneErr = "A phone is required!";
                $check = false;
            }else{
                $phone = $_POST['phone'];
            }
    
            if(empty($_POST['classroom'])){
                $classroomErr = "A classroom is required!";
                $check = false;
            }else{
                $classroom = $_POST['classroom'];
            }
    
            if($check !== false){
                $teacher->create($firstname, $lastname, $email, $phone, $classroom);
            }
        }

    }
}

            

    

    // require('../../View/teacher/create.php');


