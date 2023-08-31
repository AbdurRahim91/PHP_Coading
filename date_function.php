<?php
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A") . "<br>";


echo "Set the Dhaka timezone". "<br>";
date_default_timezone_set('Asia/dhaka');
$date = date('d-m-y h:i:s');
$day_name=date("l") . "<br>";
echo 'Toaday date and Time is'.$date. "<br>";


echo "Date to Day Name". "<br>";
$date_test = date('l');
echo $date_test. "<br>";
$day_name='Friday';

if($date_test==$day_name){
    echo "True";
} else{
    echo "False";
}




?>