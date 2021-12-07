<?php

require_once './class/Database.php';

class Student
{
    private $table = "student";
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $phone;
    private $classroom;

    public function __construct($id = null)
    {
        if($id != null) {
            $row = Database::query('SELECT * FROM ' . $this->table . ' WHERE id = ' . $id);
            if(count($row) == 1) {
                $this->id = $id;
                $this->firstname = $row[0]['firstname'];
                $this->lastname = $row[0]['lastname'];
                $this->email = $row[0]['email'];
                $this->phone = $row[0]['phone'];
                $this->classroom = $row[0]['classroom'];
            }
        }
    }

    public function create($firstname,$lastname,$email,$phone,$classroom) {
        $query = "INSERT INTO student (firstname, lastname, email, phone, classroom)
                    VALUES ('$firstname', '$lastname', '$email', '$phone', $classroom)";
        $create = Database::query($query);
        return 'success';
    }
    public function update($id,$firstname,$lastname,$email,$phone,$classroom) {
       $query = "UPDATE student SET firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', classroom = $classroom WHERE id = $id;";
       $update = Database::query($query);
       return 'success';
    }
    public function delete() {
        $query = "DELETE FROM student WHERE id = $this->id";
        $delete = Database::query($query);
        return 'success';
    }
    public function getAllStudent() {
        $students = Database::query("SELECT * FROM student");
        return $students;
    }

    public function getStudent() {
        $students = [];
        if($this->id) {
            $students = Database::query("SELECT * FROM student WHERE id=$this->id");
        }
        return $students;
    }
}