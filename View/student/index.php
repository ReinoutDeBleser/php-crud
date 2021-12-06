<?php

require_once '../../Controller/StudentController.php';

$student = new StudentController();
$student->render($_GET,$_POST);

