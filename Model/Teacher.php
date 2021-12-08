<?php
    declare(strict_types=1);

    require ('class/Database.php');
    require ('Student.php');

// teacher = Teacher.show(1)

    class Teacher
    {
        private $id;
        private $firstname;
        private $lastname;
        private $email;
        private $phone;
        private $studet;
        private $classroom;

        public function __construct(){
        }

        public function readOneTeacher($id){
            $row = Database::query('SELECT * FROM teacher' . 'WHERE id = '. $id);
            $this->firstName = $row['firstname'];
            $this->lastName = $row['lastname'];
            $this->email = $row['email'];
            $this->phone = $row['phone'];
            $this->classroom = $row['classroom'];
        }

        public function readAllTeacher(){
            $query = 'SELECT * FROM teacher';
            $row = Database::query($query);
            return $row;
        }

        public function create($firstname, $lastname, $email, $phone, $classroom){
            $query = "INSERT INTO teacher (firstname, lastname, email, phone, classroom)
            VALUES ('$firstname', '$lastname', '$email', '$phone', '$classroom')";

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

        public function getStudentsByTeacher($id){
            $row = Database::query('SELECT * FROM teacher' . 'WHERE id = '. $id);
            $classroom_id = $row[0]['classroom_id'];

            $student = new Student();
            return $student->getStudentByClassroom($classroom_id);
        }




    }