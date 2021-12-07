<?php
    declare(strict_types=1);
    require ("Model/Teacher.php");


class TeacherController
{
    public function render(array $GET, array $POST)
    {

        $data = new Teacher();

        $teachers = $data->readAllTeacher();

        if(isset($_GET['view']) && $_GET['view'] == 'create') {
            require './View/teacher/create.php';
        }

        

        


        if(isset($_POST['delete'])){
            $data->delete(9);
        }

        if(isset($_POST['update'])){
            $data->update(12);
        }

        require 'View/teacher/index.php';

        // code to create a teacher

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])){
            $teacher = new Teacher();
            $check = true;
            $firstname = $lastname = $email = $phone = $classroom = "";            
    
            var_dump($firstname, $lastname, $email, $phone, $classroom);
    
            if(empty($_POST['firstname'])){
                $errors['firstname'] = "An name is required!";
                $check = false;
            }else{
                $firstname = $_POST['firstname'];
            }
            if(empty($_POST['lastname'])){
                $errors['lastname'] = "A last name is required!";
                $check = false;
            }else{
                $lastname = $_POST['lastname'];
            }
            
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "A valid email is required!";
            }else{
                $email = $_POST["email"];
            }
    
            if(empty($_POST['phone'])){
                $errors['phone'] = "A phone is required!";
                $check = false;
            }else{
                $phone = $_POST['phone'];
            }
    
            if(empty($_POST['classroom'])){
                $errors['classroom'] = "Which classroom doe this student belongs to?";
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


