<?php
$date  = '01/01/1993 14:49';
$date = date("Y-m-d",strtotime("01/01/1993"));
//$date = preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#', '$3-$2-$1', $date);
//$date = preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#', '$3-$2-$1 $4', $date);
echo $date;