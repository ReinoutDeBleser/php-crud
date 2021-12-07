<php

declare(strict_types=1);

require '../../Controller/teacher/CreateTeacherController.php';

$teacher = new CreateTeacherController();
$teacher->render($_GET,$_POST);
