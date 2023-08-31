<?php 
$users=['Rahim', 'Karim', 'Jalil', 'Rajshahi', 'Dhaka', 'Rongpur'];

$indexes=array_rand($users,5);

foreach($indexes as $index){
    echo $users[$index]."<br>";
}
echo "<hr>";
echo "Use of shuffle funtion";

$user_name=['Rahim', 'Karim', 'Jalil', 'Rajshahi', 'Dhaka', 'Rongpur'];

shuffle($user_name);

echo "<pre>";

print_r ($user_name);

echo "</pre>";
?>