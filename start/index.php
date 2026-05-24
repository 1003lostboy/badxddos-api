<?php

header("Content-Type: application/json");

echo json_encode([
    "status" => "success",
    "message" => "TASK STARTED",
    "taskId" => "MRLOST10",
    "slotsRemaining" => 999
]);

?>
