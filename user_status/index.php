<?php

header("Content-Type: application/json");

echo json_encode([
    "status" => "active",
    "username" => "mrlost10",
    "expiry" => "2099-12-31",
    "plan" => "ADMIN",
    "active" => true
]);

?>
