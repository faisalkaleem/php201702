<?php
$student_name = 'Zahid Munir';
$math_total = 150;
$math_obtained = 137;
$phy_total = 150;
$phy_obtained = 127;
$chem_total = 150;
$chem_obtained = 117;
$urdu_total = 100;
$urdu_obtained = 89;



$total_marks = $math_total+$phy_total+$chem_total+$urdu_total;
$marks = $math_obtained+$phy_obtained+$chem_obtained+$urdu_obtained;

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
echo '<pre>';
echo "Name: $student_name\n";
echo "====================================================\n";
echo "Subject\t\tTotal\tObtained\tPercentage\n";
echo "====================================================\n";
echo "Math\t\t$math_total\t$math_obtained\t\t".round($math_obtained/$math_total*100, 2)."\n";
echo "Physics\t\t$phy_total\t$phy_obtained\t\t".round($phy_obtained/$phy_total*100, 2)."\n";
echo "Physics\t\t$chem_total\t$chem_obtained\t\t".round($chem_obtained/$chem_total*100, 2)."\n";
echo "Physics\t\t$urdu_total\t$urdu_obtained\t\t".round($urdu_obtained/$urdu_total*100, 2)."\n";
echo "====================================================\n";
$percent = sprintf('%.2f', $percent);
echo "Total Marks: $total_marks<br>";
echo "Obtained Marks: $marks<br>";
echo "Percentage: $percent%<br>";
echo "Grade: $grade<br>";