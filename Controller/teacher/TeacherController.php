<?php
    declare(strict_types=1);
    require ("../../Model/Teacher.php");
// class TeacherController
// {
//     public function render(array $GET, array $POST)
//     {
//         require './View/teacher/page.php';
//     }
// }

$data = new Teacher();

$teachers = $data->readAllTeacher();
// var_dump($teachers);


if(isset($_POST['delete'])){
    $data->delete(1);
}

if(isset($_POST['update'])){
    $data->update(12);
}


