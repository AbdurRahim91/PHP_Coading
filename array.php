<?php
$city = array("Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal");
//count() ফাংশনের মাধ্যমে একটি Array এর দৈর্ঘ্য(এলিমেন্টের সংখ্যা) রিটার্ণ করা যায়
// ইনডেক্স Array তে for লুপের ব্যবহার
$arraylength = count($city);
echo "Array Length is: $arraylength.<br>";
for($i = 0; $i < $arraylength; $i++) {
    echo $city[$i];
    echo "<br>";
}
               echo "print by key/index no.3 [key no start with 0]<br>";
  // print by index no.
Print "$city[5]";
?>
