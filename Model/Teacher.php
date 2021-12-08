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

                $row = Database::query('SELECT * FROM teacher WHERE id = '. $id);
                return $row;
            
        }

        public function readAllTeacher(){
            $query = 'SELECT * FROM teacher';
            $row = Database::query($query);
            return $row;
        }

        public function create($firstname, $lastname, $email, $phone){
            $query = "INSERT INTO teacher (firstname, lastname, email, phone)
            VALUES ('$firstname', '$lastname', '$email', '$phone')";

            $insert = Database::query($query);
        }

        
        public function update($id, $firstname, $lastname, $email, $phone){
            $query = "UPDATE teacher
            SET firstname ='$firstname', lastname ='$lastname', email = '$email ', phone = '$phone'
            WHERE id = $id;";

            $update = Database::query($query);
            return 'success';
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