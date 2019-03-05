<?php 

 $date_string = "2012-10-18";
$date_int = strtotime($date_string);
$date_date = date($date_int);
$week_number = date('W', $date_date);
echo "Weeknumber: {$week_number}.";

?>