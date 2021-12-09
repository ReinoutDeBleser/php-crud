<?php

require_once './class/Database.php';

class ClassroomLoader
{

    public function getAllClassroom() {
        $classrooms = Database::query("SELECT * FROM classroom");
        foreach($classrooms as $key => $classroom) {
            $teacher = new TeacherLoader();
            $teach = $teacher->readOneTeacher($classroom['teacher_id']);
            $classrooms[$key]['teacher'] = $teach[0];
        }
        return $classrooms;
    }

    public function getClassroom($id) {
        return Database::query("SELECT * FROM classroom WHERE id='$id'");
    }
}