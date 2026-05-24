<?php

header("Content-Type: application/json");

echo json_encode([
    "status" => "success",
    "message" => "ACCESS GRANTED. WELCOME ADMIN.",
    "token" => "mrlost10_token",
    "session" => "mrlost10_session"
]);

?>
