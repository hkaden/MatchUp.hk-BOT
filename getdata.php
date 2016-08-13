<?php
include 'libs/phpQuery/phpQuery.php';

try {
$pq = phpQuery::newDocumentFile('https://matchup.hk/event.php');
} catch ( Exception $e ){
  echo ' <font color=red>Server Error!</font> '.date('h:i:s a m/d/Y', time());
  exit();
}

$iconlist = array();
//echo 'NOW: '.pq('#page-title h1',$pq)->text().' ';

foreach (pq('.iconlist li',$pq) as $li) {
     $iconlist[] = pq($li)->text();
}

echo '[LOG] '.pq('#page-title h1',$pq)->text().' MAN: '.$iconlist[2].' FEMALE: '.$iconlist[3].' RANGE: '.$iconlist[2] / $iconlist[3];
if ( $iconlist[2] / $iconlist[3] < 2.5 )
  echo ' CAN JOIN?: <font color=green>YES</font> ';
else
  echo ' CAN JOIN?: <font color=red>NO</font> ';

echo date('h:i:s A m/d/Y', time());



?>
