<?php
    declare(strict_types=1);
    require ("Model/Teacher.php");


class TeacherController
{

    public function render(array $GET, array $POST)
    {
              
        if(isset($_GET['view']) && $_GET['view'] == 'create') {
            $model = new Teacher();
            $teachers = $model->readAllTeacher();
            require './View/teacher/create.php';
        }

        else if(isset($_GET['view']) && $_GET['view'] == 'update') {
            if(!isset($_GET['id'])) {
                require './View/errors/404.php';
            }
            else {               
                $model = new Teacher();
                $oneTeacher = $model->readOneTeacher($_GET['id']);
                var_dump($oneTeacher);
                if(count($oneTeacher) == 0) {
                    require './View/errors/404.php';
                }
                else {
                    require './View/teacher/update.php';
                }
            }
        }


        // if(isset($_POST['delete'])){
        //     $data->delete(9);
        // }

        // if(isset($_POST['update'])){
        //     $data->update(12);
        // }

        require 'View/teacher/index.php';

        // code to create a teacher
    }

    public function createTeacher(){
        $teacher = new Teacher();
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $check = true;
            $response =[];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $classroom = $_POST['classroom']; 
                    
            if(empty($_POST['firstname'])){
                $errors['firstname'] = "An name is required!";
                $check = false;
            }
            if(empty($_POST['lastname'])){
                $errors['lastname'] = "A last name is required!";
                $check = false;
            }
            
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "A valid email is required!";
            }
    
            if(empty($_POST['phone'])){
                $errors['phone'] = "A phone is required!";
                $check = false;
            }
    
            if(empty($_POST['classroom'])){
                $errors['classroom'] = "Which classroom doe this student belongs to?";
                $check = false;
            }
    
            if($check === true){
                $teacher->create($firstname, $lastname, $email, $phone, $classroom);
                $response['status'] = 'success';

            }else{
                $response['status'] = 'error';
                $response['errors'] = $errors;
            }
           return $response;
        }
    }

    public function updateTeacher(){
        $teacher = new Teacher();
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $check = true;
            $response =[];
            $id = intval($_GET['id']);
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $classroom = intval($_POST['classroom']);

            if(empty($_POST['firstname'])){
                $errors['firstname'] = "An name is required!";
                $check = false;
            }
            if(empty($_POST['lastname'])){
                $errors['lastname'] = "A last name is required!";
                $check = false;
            }
            
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "A valid email is required!";
            }
    
            if(empty($_POST['phone'])){
                $errors['phone'] = "A phone is required!";
                $check = false;
            }
    
            if(empty($_POST['classroom'])){
                $errors['classroom'] = "Which classroom doe this student belongs to?";
                $check = false;
            }
    
            if($check === true){
                $teacher->update($id, $firstname, $lastname, $email, $phone, $classroom);
                $response['status'] = 'success';

            }else{
                $response['status'] = 'error';
                $response['errors'] = $errors;
            }
                return $response;
                var_dump("ola");
        }
    }
}
    

            

    

    // require('../../View/teacher/create.php');


