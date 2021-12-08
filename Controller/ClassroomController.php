<?php

declare(strict_types = 1);

require_once './class/Database.php';
require_once 'Model/Classroom.php';
require_once 'Model/ClassroomLoader.php';
require_once 'Model/TeacherLoader.php';

class ClassroomController
{
    // Rendering a view means showing up a View eg html part to user or browser. in the function it contains the logic with view to show to user.
    public function render(array $GET, array $POST)
    {
        //
        if (isset($_GET['view']) && $_GET['view'] == 'create') {
            $teachers = new TeacherLoader();
            $allTeachers = $teachers->readAllTeacher();
            require './View/classroom/create.php';
        }
        //
        else if (isset($_GET['view']) && $_GET['view'] == 'update') {
            if (!isset($_GET['id'])) {
                require './View/errors/404.php';
            } else {
                $classroom = $this->singleClassroom($_GET['id']);

                if (count($classroom) == 0) {
                    require './View/errors/404.php';
                } else {
                    require './View/classroom/update.php';
                }
            }
        }

        else if (isset($_GET['view']) && $_GET['view'] == 'classroom') {
            if (!isset($_GET['id'])) {
                require './View/errors/404.php';
            } else {
                $classroom = $this->singleClassroom($_GET['id']);

                if (count($classroom) == 0) {
                    require './View/errors/404.php';
                } else {
                    require './View/classroom/single.php';
                }
            }
        } else if (isset($_GET['view']) && $_GET['view'] == 'delete') {
            if (!isset($_GET['id'])) {
                require './View/errors/404.php';
            } else {
                $classroom = $this->singleClassroom($_GET['id']);

                if (count($classroom) == 0) {
                    require './View/errors/404.php';
                } else {
                    $this->deleteClassroom($_GET['id']);
                    header('Location: classroom.php');
                }
            }
        } else if (!isset($_GET['view']) || $_GET['view'] == 'all') {
            $classrooms = $this->allClassroom();
            require './View/classroom/index.php';
        } else {
            require './View/errors/404.php';
        }
    }
//for a classroom all you need is a name and a location. id will be created and teacher will be assignable dynamically as more teachers are created through a select.
// a classroom can NEVER be created without a teacher though.
    public function createClassroom($classname, $location, $teacher)
    {
        $status = '';
        $response = [];
        $varrays = ["$classname", "$location", "$teacher"];
        $this->errorChecker($varrays);
        if($status != 'error') {
            $classroom = new Classroom();
            $classroom->create($classname, $location, $teacher);
            $response['status'] = 'success';
        }
        else {
            $response['status'] = $status;
            $response['errors'] = $errors;
        }
        return $response;
    }


 //updating the classroom
    public function updateClassroom($id, $classname, $location, $teacher) {
        $status = '';
        $response = [];
        $varrays = ["$classname", "$location", "$teacher"];
        $this->errorChecker($varrays);
        if ($status != 'error'){
            $classroom = new Classroom();
            $classroom->update($id, $classname, $location, $teacher);
            $response['status'] ='success';
        }
        else {
            $response['status'] = $status;
            $response['errors'] = $errors;
        }
    }

//basic errorchecker: contains values otherwise, error
    public function errorChecker($varrays) {
        foreach ($varrays as $varray) {
            if(!isset($varray) || empty($varray)) {
                $errors['"'.$varray.'"'] = $varray." required";
                $status = 'error';
            }
        }
    }

    public function singleClassroom($id) {
        $classroom = new ClassroomLoader();
        return $classroom->getClassroom($id);
    }

    public function deleteClassroom($id) {
        $classroom = new Classroom($id);
        $classroom->delete();
    }

    public function allClassroom() {
        $classroom = new ClassroomLoader();
        return $classroom->getAllClassroom();
    }
}