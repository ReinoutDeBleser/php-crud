<?php
declare(strict_types=1);

require './Controller/StudentController.php';

$student = new StudentController();
$student->render($_GET,$_POST);