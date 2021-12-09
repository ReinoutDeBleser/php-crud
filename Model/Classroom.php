<?php

require_once './class/Database.php';
require_once './Model/Student.php';

class Classroom
{
    // Properties
    private $table ='classroom';
    private $id;
    private $classname;
    private $location;
    private $teacher;

    public function __construct($id = null)
    {
        //gets a row with a specific id, returns the values of that row.
        if($id != null) {
            $row = Database::query('SELECT * FROM ' . $this->table . ' WHERE id = ' . $id);
            if(count($row) == 1) {
                $this->id= $id;
                $this->classname = $row[0]['name'];
                $this->location = $row[0]['location'];
                $this->teacher = $row[0]['teacher_id'];
            }
        }
    }

    public function create($classname, $location, $teacher) {
        $query = "INSERT INTO classroom (name, location, teacher_id)
                    VALUES ('$classname', '$location', '$teacher')";
        $create = Database::query($query);
        return 'success';
    }
    //id needed to update a specifically assigned classroom
    public function update($id, $classname, $location, $teacher){
        $query = "UPDATE classroom SET name = '$classname', location = '$location', teacher_id = '$teacher' WHERE id = '$id';";
        $update = Database::query($query);
        return 'success';
    }
    //delete knows it need $id variable because it's default.
    public function delete() {
        $query = "DELETE FROM classroom WHERE id = $this->id";
        $delete = Database::query($query);
        $students = new Student();
        $students->removeClassroomFromStudent($this->id);
    }
}