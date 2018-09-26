<?php
class Work
{
  public $work_id;
  public $team_id;
  public $task_id;
  public $start_date;
  public $stop_date;
  public $hours;

  public function _construct($data){

  }

  public static function findByTaskId($taskId){
    //Get DB connection
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);
    die;
    //Prepare SQL statement
    //Execute statement

  }
}
