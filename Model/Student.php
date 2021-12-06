<?php

require_once './class/Database.php';

class Student
{
    private $table = "student";
    private $firstname;
    private $lastname;
    private $email;
    private $phone;
    private $classroom;

    public function __construct($id)
    {
        $row = Database::query('SELECT * FROM ' . $this->table . ' WHERE id = ' . $id);
        $this->firstname = $row[0]['firstname'];
        $this->lastname = $row[0]['lastname'];
        $this->email = $row[0]['email'];
        $this->phone = $row[0]['phone'];
        $this->classroom = $row[0]['classroom'];
    }

    public function edit() {
        // $row = Database::query(UPDATE * FROM ' . $this->table . ' WHERE id = ' . $id);
    }

}