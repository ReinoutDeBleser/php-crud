<?php

require_once './Model/Student.php';
require_once './Model/StudentLoader.php';
require_once './Model/ClassroomLoader.php';

class StudentController
{
    public function render(array $GET, array $POST)
    {
        if(isset($_GET['view']) && $_GET['view'] == 'create') {
            $classroom = new ClassroomLoader();
            require './View/student/create.php';
        }

        else if(isset($_GET['view']) && $_GET['view'] == 'update') {
            if(!isset($_GET['id'])) {
                require './View/errors/404.php';
            }
            else {
                $student = $this->singleStudent($_GET['id']);
                $classroom = new ClassroomLoader();
                if(count($student) == 0) {
                    require './View/errors/404.php';
                }
                else {
                    $room = new ClassroomLoader();
                    $classrooms = $room->getAllClassroom();
                    require './View/student/update.php';
                }
            }
        }

        else if(isset($_GET['view']) && $_GET['view'] == 'student') {
            if(!isset($_GET['id'])) {
                require './View/errors/404.php';
            }
            else {
                $student = $this->singleStudent($_GET['id']);

                if(count($student) == 0) {
                    require './View/errors/404.php';
                }
                else {
                    require './View/student/single.php';
                }
            }
        }

        else if(isset($_GET['view']) && $_GET['view'] == 'delete') {
            if(!isset($_GET['id'])) {
                require './View/errors/404.php';
            }
            else {
                $student = $this->singleStudent($_GET['id']);

                if(count($student) == 0) {
                    require './View/errors/404.php';
                }
                else {
                    $this->deleteStudent($_GET['id']);
                    header('Location: index.php');
                }
            }
        }

        else if(isset($_GET['view']) && $_GET['view'] == 'search') {
            if(!isset($_GET['q'])) {
                require './View/errors/404.php';
            }
            else {
                $students = $this->searchStudent($_GET['q']);
                require './View/student/index.php';
            }
        }

        else if(!isset($_GET['view']) || $_GET['view'] == 'all') {
            $students = $this->allStudent();
            require './View/student/index.php';
        }
        else {
            require './View/errors/404.php';
        }
    }

    public function createStudent($firstname,$lastname,$email,$phone,$classroom_id) {
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
        if(!isset($classroom_id) || empty($classroom_id)) {
            $errors['classroom_id'] = "Which classroom doe this student belongs to?";
            $status = 'error';
        }

        if($status != 'error') {
            $student = new Student();
            $student->create($firstname,$lastname,$email,$phone,$classroom_id);
            $response['status'] = 'success';
        }

        else {
            $response['status'] = $status;
            $response['errors'] = $errors;
        }
        return $response;

    }

    public function updateStudent($id,$firstname,$lastname,$email,$phone,$classroom_id) {
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
        if(!isset($classroom_id) || empty($classroom_id)) {
            $errors['classroom_id'] = "Which classroom doe this student belongs to?";
            $status = 'error';
        }

        if($status != 'error') {
            $student = new Student();
            $student->update($id,$firstname,$lastname,$email,$phone,$classroom_id);
            $response['status'] = 'success';
        }

        else {
            $response['status'] = $status;
            $response['errors'] = $errors;
        }
        return $response;

    }


    public function singleStudent($id) {
        $student = new StudentLoader();
        return $student->getStudent($id);
    }

    public function deleteStudent($id) {
        $student = new Student($id);
        return $student->delete();
    }

    public function allStudent() {
        $student = new StudentLoader();
        return $student->getAllStudent();
    }

    public function searchStudent($q) {
        $student = new StudentLoader();
        return $student->search($q);
    }
}