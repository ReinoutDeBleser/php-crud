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
    private $classroom_id;

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
                $this->classroom_id = $row[0]['classroom_id'];
            }
        }
    }

    public function create($firstname,$lastname,$email,$phone,$classroom_id) {
        $query = "INSERT INTO student (firstname, lastname, email, phone, classroom_id)
                    VALUES ('$firstname', '$lastname', '$email', '$phone', $classroom_id)";
        $create = Database::query($query);
        return 'success';
    }
    public function update($id,$firstname,$lastname,$email,$phone,$classroom_id) {
       $query = "UPDATE student SET firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', classroom_id = $classroom_id WHERE id = $id;";
       $update = Database::query($query);
       return 'success';
    }
    public function delete() {
        $query = "DELETE FROM student WHERE id = $this->id";
        $delete = Database::query($query);
        return 'success';
    }

}