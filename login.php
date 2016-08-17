<?php
include 'class/phpQuery.php';
$loginlink = pq('.col_full a', phpQuery::newDocumentFile('https://matchup.hk/login.php'))->attr('href');
echo $loginlink;
?>
