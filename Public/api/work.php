<?php
//get taskId from the URL params
require '../../app/common.php'
$taskId = intval($_GET['taskId'] ?? 0);
 echo 'tASKiD'.$taskId;
//Fetch the work from the db
