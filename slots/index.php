<?php

header("Content-Type: application/json");

echo json_encode([
    "activeSlots" => 999,
    "maxSlots" => 999,
    "onlineUsers" => 1,
    "status" => "success"
]);

?>
