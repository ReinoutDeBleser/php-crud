<php
require "./Controler/teacher/TeacherController.php";

$teacher = new TeacherController();

$teacher->render($_GET, $_POST);