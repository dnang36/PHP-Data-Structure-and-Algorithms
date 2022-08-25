<?php

function binarySearch(Array $arr, $x){
    if(count($arr)===0) return false;

    $left = 0;
    $right = count($arr) - 1 ;

    while ($left<=$right){
        $mid = floor(($right+$left)/2);

        if($arr[$mid]==$x) {
            echo "vi tri trong mang la ".$mid."\n";
            return true;
        }
        elseif ($arr[$mid]<$x){
            $left = $mid +1;
        }
        else{
            $right = $mid -1 ;
        }
    }
    return false;
}

$arr = [1,2,3,5,6,8];
$value = 9;
if (binarySearch($arr,$value)==true){
    echo $value. "tim thay\n";
}
else{
    echo $value. "khong tim thay\n";
}
