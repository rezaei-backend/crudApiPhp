<?php
require_once "../../../functions/pdo.php";


header("Content-Type: application/json");

if (isset($_GET['id']) ) {
    $id=(int)$_GET['id'];
    $students = $conn->query("SELECT * FROM `students` WHERE id = $id")->fetch();
    if ($students) {
         echo json_encode($students);
       
    }else {
        //    http_response_code(404);
        echo "کاربر یافت نشد";
    }
} else {
    $students = $conn->query("SELECT * FROM `students`")->fetchAll();
    echo json_encode($students);
}
