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
            $classroomLoader = new ClassroomLoader();
            $classroom = $classroomLoader->getTeacherFromClassroom($id);
            if(count($classroom) == 0) {
                $query = 'DELETE FROM teacher WHERE id =' . $id;
                $delete = Database::query($query);
            }
        }

    }