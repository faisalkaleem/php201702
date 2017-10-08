<?php

// 91 - 100 => A+
// 81 - 90 => A
// 71 - 80 => B+
// 61 - 70 => B-
// 56 - 60 => C+
// 50 - 55 => C-

$total_marks = 1100;
$marks = 970;

//$percent = 78.5;
//$percent = 90;
$percent = $marks/$total_marks*100;//; 970/1100*100
//$percent = round($percent, 2);
// Conditioal Operators: <, >, ==, <=, >=, !=
// Operands

if($percent>90) { // $marks>90 is condition
    $grade = 'A+';
} else if($percent>80 && $percent<91) {
    $grade = 'A';
} else if($percent>70 && $percent<81) {
    $grade = 'B';
} else if($percent>60 && $percent<71) {
    $grade = 'C';
} else if($percent>56 && $percent<61) {
    $grade = 'D';
} else if($percent>=50 && $percent<56) {
    $grade = 'E';
} else {
    $grade = 'F';
}
echo '-----------------------------<br>';
echo 'Mathematics&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo 60;
echo '<br>';

$percent = sprintf('%.2f', $percent);
echo "Total Marks: $total_marks<br>";
echo "Obtained Marks: $marks<br>";
echo "Percentage: $percent%<br>";
echo "Grade: $grade<br>";