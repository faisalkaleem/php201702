<?php
include 'db.php';
include 'helper.php';

$sql_count = "SELECT COUNT(id) AS total_students FROM student";
// Alias
$result_count = mysqli_query($connection, $sql_count);
$record_count = mysqli_fetch_assoc($result_count);
//printR($record_count);
//exit;

$total_students = $record_count['total_students'];
$p=1;
if(isset($_GET['p']) && $_GET['p']>0) {
    $p = $_GET['p'];
}
$limit_start = $p-1;
$how_much_records_to_fetch = 4;
$sql = 'SELECT id, name, dob AS date_of_birth, class FROM student LIMIT ' . "$limit_start,$how_much_records_to_fetch";
$result = mysqli_query($connection, $sql);
//printR($result);
echo '<table border="1">';
echo '<tr><th>ID</th><th>Name</th><th>DOB</th><th>Class</th></tr>';
while(($record = mysqli_fetch_assoc($result))) {
//    printR($record);
    echo "<tr><td>".$record['id']."</td><td>".$record['name']."</td><td>".
            $record['date_of_birth']."</td><td>".$record['class']."</td></tr>";
}
echo '</table>';
//$page_num = $_GET['p'];
//2*2-1 = 3
//echo ceil(1.9);
//echo floor(1.9);
$num_of_pages = ceil($total_students/$how_much_records_to_fetch);
for($i=1; $i<=$num_of_pages; $i++) {
    $page_to_dispaly = $i * $how_much_records_to_fetch-$how_much_records_to_fetch+1;
    echo '<a href="?p='.$page_to_dispaly.'">'.$i.'</a>';
}
printR($_GET); // its an array
echo '<p></p>';
//  Query String:
//  ?q=goole&ie=utf-8&oe=utf-8&client=firefox-b-ab

// Query String parameters
// Super Global
?>
<a href="?page=2">Page 2</a>