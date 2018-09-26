<?php
require '../../app/common.php';
$taskId = intval($_GET['taskId'] ?? 0);

echo $taskId;
