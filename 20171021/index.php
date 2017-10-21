<?php
for($i=1; $i<=100; $i++) {
    echo '*';
    if($i%10==0) {
        echo '<br>';
    }
}

$n = 2.5;
for($i=1; $i<=10; $i++) {
    echo "$n x $i = ".$n*$i;
    echo '<br>';
}

