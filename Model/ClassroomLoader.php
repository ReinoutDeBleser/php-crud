<?php

require_once './class/Database.php';

class ClassroomLoader
{

    public function getAllClassroom() {
        $classrooms = Database::query("SELECT * FROM classroom");
        return $classrooms;
    }

    public function getClassroom($id) {
        return Database::query("SELECT * FROM classroom WHERE id='$id'");
    }

}