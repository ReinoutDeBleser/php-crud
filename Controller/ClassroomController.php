<?php

declare(strict_types = 1);

require_once './class/Database.php';
require_once 'Model/Classroom.php';

class ClassroomController
{
    // Rendering a view means showing up a View eg html part to user or browser. in the function it contains the logic with view to show to user.
    public function render(array $GET, array $POST)
    {
        //
        if (isset($_GET['view']) && $_GET['view'] == 'create') {
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
        $varrays = ["$classname", "$location", "$teacher"];
        $this->errorChecker($varrays, $classname, $location,$teacher);
    }


// updating the classroom
    public function updateClassroom($classname, $location, $teacher) {
        $varrays = ["$classname", "$location", "$teacher"];
        $this->errorChecker($varrays, $classname, $location, $teacher);
    }

//basic errorchecker: contains values otherwise, error
    public function errorChecker($varrays, $classname, $location,$teacher) {
        $status = '';
        $response = [];
        foreach ($varrays as $varray) {
            if(!isset($varray) || empty($varray)) {
                $errors['"'.$varray.'"'] = $varray." required";
                $status = 'error';
            }
        }
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

    public function singleClassroom($id) {
        $classroom = new Classroom($id);
        return $classroom->getClassroom();
    }

    public function deleteClassroom($id) {
        $classroom = new Classroom($id);
        return $classroom->delete();
    }

    public function allClassroom() {
        $classroom = new Classroom();
        return $classroom->getAllClassroom();
    }
}