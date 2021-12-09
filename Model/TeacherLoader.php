<?php

require_once './class/Database.php';
require_once './Model/ClassroomLoader.php';

class TeacherLoader
{
    public function readOneTeacher($id){

        $row = Database::query("SELECT * FROM teacher WHERE id=$id");
        return $row;
    }
    public function readAllTeacher(){
        $query = 'SELECT * FROM teacher';
        $row = Database::query($query);
        return $row;
    }
    public function readTeacherByClassroom($classroom_id){
        $classroom = Database::query("SELECT * FROM classroom WHERE id= $classroom_id");

        $id = $classroom[0]['teacher_id'];

        $teacher = Database::query("SELECT * FROM teacher WHERE id= $id");

        return $teacher;
    }
}