<?php

declare(strict_types=1);

require 'Controller/teacher/TeacherController.php';

$teacher = new TeacherController();
$teacher->render($_GET,$_POST);