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
?>
<table border="1" width="500" cellspacing="0" cellpadding="2">
    <tr><td colspan="4">Name: <?php echo $student_name; ?></td></tr>
    <!--<tr><td colspan="4">====================================================</td></tr>-->
    <tr>
        <td>Subject</td>
        <td>Total</td>
        <td>Obtained</td>
        <td>Percentage</td>
    </tr>
    <tr>
        <td>Math</td>
        <td><?php echo $math_obtained ?></td>
        <td><?php echo $math_total ?></td>
        <td><?php echo round($math_obtained/$math_total*100, 2); ?></td>
    </tr>
    <tr>
        <td>Physics</td>
        <td><?php echo $phy_obtained ?></td>
        <td><?php echo $phy_total ?></td>
        <td><?php echo round($phy_obtained/$phy_total*100, 2); ?></td>
    </tr>
    <tr>
        <td>Chemistry</td>
        <td><?php echo $chem_obtained ?></td>
        <td><?php echo $chem_total ?></td>
        <td><?php echo round($chem_obtained/$chem_total*100, 2); ?></td>
    </tr>
    <tr>
        <td>Urdu</td>
        <td><?php echo $urdu_obtained ?></td>
        <td><?php echo $urdu_total ?></td>
        <td><?php echo round($urdu_obtained/$urdu_total*100, 2); ?></td>
    </tr>
    <tr>
        <!--<td>&nbsp;</td>-->
        <td align="right" colspan="3">Total Marks: </td>
        <td><?php echo $total_marks; ?></td>
    </tr>
    <tr>
        <!--<td>&nbsp;</td>-->
        <td align="right" colspan="3">Obtained Marks: </td>
        <td><?php echo $marks; ?></td>
    </tr>
    <tr>
        <!--<td>&nbsp;</td>-->
        <td align="right" colspan="3">Percentage: </td>
        <td><?php echo sprintf('%.2f', $percent); ?></td>
    </tr>
    <tr>
        <!--<td>&nbsp;</td>-->
        <td align="right" colspan="3">Grade: </td>
        <td><?php echo $grade; ?></td>
    </tr>
</table>