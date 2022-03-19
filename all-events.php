<?php
 include_once "Database/connect.php";
 $query ="SELECT id,title,start,end FROM event LIMIT 20";
 $result = mysqli_query($conn,$query);
 $alldata = array();
 while($row =mysqli_fetch_assoc($result)){
     $start =strtotime($rows['start']) * 1000;
     $end = strtotime($rows['end']) * 1000;
     $alldata[]= array(
      'id' =>$row['id'],
      'title' => $rows['title'],
      'url' => "#",
      "class" => 'event-important',
      'start' => "$start",
      'end' => "$end"
     );
 }
mysqli_free_result($result);
mysqli_close($conn);
echo json_encode($alldata);
 
 ?>