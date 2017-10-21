<?php
$class_result = array(
    'course_totals' => array(
        'math' => 100,
        'phy' => 100,
        'chem' => 100,
        'ur' => 100,
    ),
    'course_names' => array(
        'math' => 'Mathemetics',
        'phy' => 'Physics',
        'chem' => 'Chemistry',
        'ur' => 'Urdu',
    ),
    'students' => array(
        array('name' => 'Saad', 'result' => array('math' => 90, 'phy' => 89, 'chem' => 88, 'ur' => 78)),
        array('name' => 'Zahid', 'result' => array('math' => 78, 'phy' => 89, 'chem' => 67, 'ur' => 58)),
        array('name' => 'Shahid', 'result' => array('math' => 87, 'phy' => 89, 'chem' => 87, 'ur' => 88)),
        array('name' => 'Akbar', 'result' => array('math' => 95, 'phy' => 89, 'chem' => 56, 'ur' => 68)),
        array('name' => 'Zeeshan', 'result' => array('math' => 58, 'phy' => 89, 'chem' => 98, 'ur' => 67)),
    )
);
echo $class_result['students'][2]['name'] . ", Math: " . $class_result['students'][2]['result']['math'];
echo '<br>';
echo $class_result['students'][0]['result']['math'];
// repeatitive structure, loops

// 1. for loop
// 2. while
// 3. do - while
// 4. foreach
$i=0;
$i++; // $i = $i+1;
$i--; // $i = $i-1;
echo '<br>';
$table_for = 2;
for($i=0; $i<10; $i++) {
    echo $table_for*$i;
    echo $i . ' | ';
}
echo '<br>';
$j = 0;
while($j<10) {
    echo $j . ' | ';
    $j++;
}
echo '<br>';
$k=0;
do {
    echo $k;
    $k++;
} while($k<10);
$fruits = array('Apple', 'Banana', 'Mango', 'Pineapple');
$new_fruits = array('A', 'B', 'C', 'D');
foreach($fruits as $fruit) {
    echo '<br>';
    echo $fruit;
    foreach($new_fruits as $new_fruit) {
        echo '<br>';
        echo $new_fruit;
    }
};
echo count($fruits);
for($i=0; $i<count($fruits); $i++) {
    $fruits[$i];
}
/*
****
****
****
****
*/
echo '<br>';
for($i=0; $i<4; $i++) {
    for($j=0; $j<4; $j++) {
        echo '*';
    }
    echo '<br>';
}

exit;
