<?php

require '../class/Database.php';

class Teacher
{
    private $firstName;
    private $lasttName;
    private $email;
    private $phone;
    private $studet;
    private $classroom;

    public function __construct(){
    }

    public function read($id){
        $row = Database::query('SELECT * FROM' . $this->table . 'WHERE id = '. $id);
        $this->firstName = $row['firstName'];
        $this->lastName = $row['lastName'];
        $this->email = $row['email'];
        $this->phone = $row['phone'];
        $this->classroom = $row['classroom'];
    }

    public function create($firstName, $lasttName, $email, $phone, $classroom){
        $query = "INSERT INTO teacher (firstName, lasttName, email, phone, classroom)
        VALUES ('$firstName', '$lasttName', '$email', '$phone', '$classroom')";

        $insert = Databese::query($query);

        if ($insert) {
            echo "<p> Your registration is complete! </p><br>";
        } else {
            echo "<p> Unable to register, try again!</p>";
        }
    }

    
    public function update($id, $firstName, $lasttName, $email, $phone, $classroom){
        $query = 'UPDATE teacher
        SET firstName =' . $firstName. ', lasttName =' . $lasttName . ', email = ' . $email . ', phone = ' . $phone . ', 
        classroom = ' . $classroom .
        'WHERE id = '.$id;

        $update = Database::query($query);

        if ($update) {
            echo "<p> Your update is complete! </p><br>";
        } else {
            echo "<p> Unable to update, try again!</p>";
        }

    }

    public function delete($id){
        $query = 'DELETE FROM teacher WHERE id =' . $id;
        $delete = Database::query($query);

        if ($delete) {
            echo "<p> It was deleted! </p><br>";
        } else {
            echo "<p> It is not working, try again!</p>";
        }
    }




}