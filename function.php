<?php
function writeName(){
		echo "Abdur Rahim";
	}
	
	echo "My name is ";
	writeName();
	echo "<br>";
?>

<?php
 function familyMember($name, $birthYear) {
 echo "Familiy Membe Name- $name, জন্ম সাল-$birthYear<br>";
}	
familyMember("Name_01", "1988");
familyMember("Name_02","1991");
familyMember("Name_03","1994");
?>

<?php
echo "ফাংশন থেকে ভ্যালু রিটার্ন করার জন্য return স্টেটমেন্ট ব্যবহার করা হয়<br><br>";
	function calculate($numberOne, $numberTwo) {
	    $total = $numberOne + $numberTwo;
	    return $total;
	}	
echo "11 + 9 = " . calculate(11, 9) . "<br>";
echo "8 + 7 = " . calculate(8, 7) . "<br>";
echo "3 + 2 = " . calculate(3, 2);
?>
