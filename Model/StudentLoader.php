<?php

require_once './class/Database.php';
require_once './Model/ClassroomLoader.php';
require_once './Model/TeacherLoader.php';

class StudentLoader
{
    public function getAllStudent() {
        $students = Database::query("SELECT * FROM student");
        foreach($students as $key => $student) {
            if ($student['classroom_id'] != null) {
            $classroom = new ClassroomLoader();
            $room = $classroom->getClassroom($student['classroom_id']);
            $students[$key]['classroom'] = $room[0];
            }
        }
        return $students;
    }

    public function getStudent($id) {
        $student = Database::query("SELECT * FROM student WHERE id=$id");
        $classroomLoader = new ClassroomLoader();
        $classroom = $classroomLoader->getClassroom($student[0]['classroom_id']);
        $teacherLoader = new TeacherLoader();
        $teacher =  $teacherLoader->readOneTeacher($classroom[0]['teacher_id']);
        $student['classroom'] = $classroom[0];
        $student['teacher'] = $teacher[0];
        return $student;
    }

    public function search($q) {
        $students= Database::query("SELECT * FROM student WHERE firstname LIKE '%$q%' OR lastname LIKE '%$q%' OR email LIKE '%$q%'");
        foreach($students as $key => $student) {
            $classroom = new ClassroomLoader();
            $room = $classroom->getClassroom($student['classroom_id']);
            $students[$key]['classroom'] = $room[0];
        }
        return $students;
    }

    public function getStudentByClassroom($classroom_id){
        return Database::query('SELECT * FROM student WHERE classroom_id = ' . $classroom_id);
    }

    public function  getStudentByTeacher($teacher_id){
        $classroom = Database::query("SELECT * FROM classroom WHERE teacher_id=$teacher_id");
        $students =  Database::query('SELECT * FROM  student WHERE classroom_id = ' . $classroom[0]['id']);
        foreach($students as $key => $student) {
            $classroom = new ClassroomLoader();
            $room = $classroom->getClassroom($student['classroom_id']);
            $students[$key]['classroom'] = $room[0];
        }
        return $students;
    }
}