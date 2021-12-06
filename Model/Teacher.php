<?php
    declare(strict_types=1);

    require ('../../class/Database.php');

// teacher = Teacher.show(1)

    class Teacher
    {
        private $firstName;
        private $lastName;
        private $email;
        private $phone;
        private $studet;
        private $classroom;

        public function __construct(){
        }

        public function readOneTeacher($id){
            $row = Database::query('SELECT * FROM teacher' . 'WHERE id = '. $id);
            $this->firstName = $row['firstName'];
            $this->lastName = $row['lastName'];
            $this->email = $row['email'];
            $this->phone = $row['phone'];
            $this->classroom = $row['classroom'];
        }

        public function readAllTeacher(){
            $row = $row = Database::query('SELECT * FROM teacher');
            $query = Database::query($row);

            while ($query = Database::query($row)){
                $teachers[] = array("id" => $id, "firstName" => $row['firstName'], "lastName" => $row['lastName'], "email" => $row['email'], 
                "phone" => $row['phone'], "class" => $row['classroom']);

            }
            if(!isset($teachers)){
                return null;
        }else{
                return $teachers;
        }
        }

        // public static function show($id) {
        //     $row = Database::query('SELECT * FROM' . $this->table . 'WHERE id = '. $id);
        //     return new Teacher($row['firstName'], )
        // }

        // public static function show($id) {
        //     $rows = Database::query('SELECT * FROM' . $this->table);
        //     return new Teacher($row['firstName'], )
        // }

        public function create($firstName, $lastName, $email, $phone, $classroom){
            $query = "INSERT INTO teacher (firstName, lastName, email, phone, classroom)
            VALUES ('$firstName', '$lastName', '$email', '$phone', '$classroom')";

            $insert = Database::query($query);
            var_dump($insert);

            if ($insert) {
                echo "<p> Your registration is complete! </p><br>";
            } else {
                echo "<p> Unable to register, try again!</p>";
            }
        }

        
        public function update($id, $firstName, $lastName, $email, $phone, $classroom){
            $query = 'UPDATE teacher
            SET firstName =' . $firstName. ', lastName =' . $lastName . ', email = ' . $email . ', phone = ' . $phone . ', 
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