

<?php

$host = 'loacalhost';
$usr = 'root';
$pass = '';


//include 'DB.php';

$con = mysqli_connect('127.0.0.1', 'root', '', 'todo');

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = 'SELECT * FROM lists LEFT OUTER JOIN tasks ON lists.Id = tasks.listId';

$result = mysqli_query($con, $sql);
$lists = mysqli_fetch_all($result);

$currentList = null;
$AllLists = array();
$Alltasks = array();


class Task {
    function Task($id, $description, $duration, $status){
        $this->id = $id;
        $this->description = $description;
        $this->duration = $duration;
        $this->status = $status;
    }
}

class ListItem {
    function ListItem($id, $title){
        $this->id = $id;
        $this->title = $title;
        $this->tasks = array();
    }

    function __toString(){
      return $this->id;
    }
}


foreach ($lists as $list):
    array_push($Alltasks, new Task($list[3], $list[5], $list[6], $list[7]));
    if($currentList != $list[0]){
        array_push($AllLists, new ListItem($list[0], $list[1]));
        $currentList = $list[0];
    }
endforeach;

foreach($AllLists as $list):
    foreach($Alltasks as $task):
        if($list->id == $task->id){
            array_push($list->tasks, new Task($task->id, $task->description, $task->duration, $task->status));
        }
    endforeach;
endforeach; 

?><?php



$AllLists = array_unique($AllLists);

print_r($AllLists[0]->tasks[0]);

// usort($row, function($a, $b) {
//   return $a[7] - $b[7];
// });


mysqli_close($con);

?>

