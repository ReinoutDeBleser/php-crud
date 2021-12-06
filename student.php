<?php
declare(strict_types=1);

require './Controller/Student/CreateStudentController.php';

$student = new CreateStudentController();
$student->render($_GET,$_POST);