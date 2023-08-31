<?php
phpinfo();

$array1 = ['A', 'B', 'C', 'D', 'E'];
$array2 = ['1', '2', '3', '4', '5', '6', '7'];

$output = [];
$count1 = count($array1);
$count2 = count($array2);

$maxLength = max($count1, $count2);

for ($i = 0; $i < $maxLength; $i++) {
    if ($i < $count1) {
        $output[] = '"' . $array1[$i] . '"';
    }
    if ($i < $count2) {
        $output[] = '"' . $array2[$i] . '"';
    }
}

echo 'Result='.implode(', ', $output);

?>