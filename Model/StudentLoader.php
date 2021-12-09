<?php

require_once './class/Database.php';
require_once './Model/ClassroomLoader.php';

class StudentLoader
{
    public function getAllStudent() {
        $students = Database::query("SELECT * FROM student");
        foreach($students as $key => $student) {
            $classroom = new ClassroomLoader();
            $room = $classroom->getClassroom($student['classroom_id']);
            $students[$key]['classroom'] = $room[0];
        }
        return $students;
    }

    public function getStudent($id) {
        return Database::query("SELECT * FROM student WHERE id=$id");
    }


    public function  getStudentByClassroom($classroom_id){
        return Database::query('SELECT * FROM student WHERE classroom_id = ' . $classroom_id);
    }

    public function  getStudentByTeacher($teacher_id){
        $classroom = Database::query("SELECT * FROM classroom WHERE id=$teacher_id");
        $students = Database::query('SELECT * FROM  student WHERE classroom_id = ' . $classroom['id']);
        foreach($students as $key => $student) {
            $classroom = new ClassroomLoader();
            $room = $classroom->getClassroom($student['classroom_id']);
            $students[$key]['classroom'] = $room[0];
        }
        return $students;
    }
}