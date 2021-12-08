<?php
declare(strict_types=1);

require_once 'Controller/ClassroomController.php';

$controller = new ClassroomController();
$controller->render($_GET, $_POST);

//ClassroomController->render

