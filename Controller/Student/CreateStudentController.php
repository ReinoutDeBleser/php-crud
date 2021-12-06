<?php

declare(strict_types = 1);

require_once './class/Database.php';

class CreateStudentController
{
    private $student_table = "student";
    public $errors = [];

    public function render(array $GET, array $POST)
    {
        require './View/student/create.php';
    }

    public function create($firstname,$lastname,$email,$phone,$classroom) {
        $status = '';
        $response = [];
        if(!isset($firstname) || empty($firstname)) {
            $errors['firstname'] = "First name is required";
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
            $errors['classroom'] = "Which classroom doe this student belongs to?";
            $status = 'error';
        }

        if($status != 'error') {
            $query = "INSERT INTO student (firstname, lastname, email, phone, classroom)
                    VALUES ('$firstname', '$lastname', '$email', '$phone', $classroom)";
            $create = Database::query($query);
            $status = 'success';
        }

        else {
          $response['status'] = 'error';
          $response['errors'] = $errors;
        }
        return $response;

    }
}