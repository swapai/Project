<?php
//get taskId from the URL params
require '../../app/common.php'
$taskId = intval($_GET['taskId'] ?? 0);

//Fetch the work from the db
$work = Work::findByTaskId($taskId);

//convert to json and print
echo json_encode($work);
