<?php

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
}