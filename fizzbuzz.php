<?php
$count3 = 0;
$count5 = 0;
for($i=1; $i<16; $i++){
    $count3++;
    $count5++;

    if($count3 != 3 && $count5 != 5){
        echo $i;
    }else{
        if($count3 == 3){
            echo 'fizz';
            $count3 = 0;
        }
        if($count5 == 5){
            echo 'buzz';
            $count5 = 0;
        }
    }
    echo '<br>';
}
