<?php

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$key = $data["licenseKey"] ?? "";

if($key == "mrlost10") {

    echo json_encode([
        "status" => "success"
    ]);

} else {

    echo json_encode([
        "status" => "failed"
    ]);
}
?>
