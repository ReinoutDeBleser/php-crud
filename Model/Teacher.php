<?php
    declare(strict_types=1);

    require ('class/Database.php');

// teacher = Teacher.show(1)

    class Teacher
    {
        private $id;
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
            $query = 'SELECT * FROM teacher';
            $row = Database::query($query);
            return $row;
        }

        public function create($firstName, $lastName, $email, $phone, $classroom){
            $query = "INSERT INTO teacher (firstname, lastname, email, phone, classroom)
            VALUES ('$firstName', '$lastName', '$email', '$phone', '$classroom')";

            $insert = Database::query($query);
        }

        
        public function update($id, $firstname, $lastname, $email, $phone, $classroom){
            $query = "UPDATE teacher
            SET firstname ='$firstname', lastname ='$lastname', email = '$email ', phone = '$phone', classroom = '$classroom'
            WHERE id = $id;";

            $update = Database::query($query);
        }

        public function delete($id){
            $query = 'DELETE FROM teacher WHERE id =' . $id;
            $delete = Database::query($query);
        }




    }