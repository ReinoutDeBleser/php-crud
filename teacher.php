<?php

declare(strict_types=1);

require 'Controller/TeacherController.php';

$teacher = new TeacherController();
$teacher->render($_GET,$_POST);