<?php

require_once './class/Database.php';
require_once './Model/ClassroomLoader.php';

class TeacherLoader
{
    public function readOneTeacher($id){

        $teacher = Database::query("SELECT * FROM teacher WHERE id=$id");
        $classroom = New ClassroomLoader();
        $room = $classroom->getTeacherFromClassroom($id);
        $teacher['classroom'] = $room[0];
        return $teacher;
    }

    public function readAllTeacher(){
        $teachers = Database::query("SELECT * FROM teacher");
        foreach($teachers as $key => $teacher) {
            $classroom = new ClassroomLoader();
            $room = $classroom->getTeacherFromClassroom($teacher['id']);
            $teachers[$key]['classroom'] = $room[0];
        }
        return $teachers;
    }

    public function readTeacherByClassroom($classroom_id){
        $classroom = Database::query("SELECT * FROM classroom WHERE id= $classroom_id");

        $id = $classroom[0]['teacher_id'];

        $teacher = Database::query("SELECT * FROM teacher WHERE id= $id");

        return $teacher;
    }
}