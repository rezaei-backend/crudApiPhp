<?php 
require_once "../../../functions/pdo.php";

$data = json_decode(file_get_contents("php://input"), true);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $sql = "INSERT INTO `students` (`name` , `lastname` , `phone`)VALUES(? , ? , ?)";
    $stm=$conn->prepare($sql);
    $stm->execute([$data['name'] , $data['lastname'] , $data['phone']]);
    echo "افزوده شد";
}else {
    echo "متد نامعتبر";
}