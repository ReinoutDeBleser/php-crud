<php

declare(strict_types=1);

require './Controller/Student/CreateTeacherController.php';

$teacher = new CreateTeacherController();
$teacher->render($_GET,$_POST);
