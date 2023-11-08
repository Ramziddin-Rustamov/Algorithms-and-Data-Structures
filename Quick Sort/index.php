<?php

function quickSort($array){
    $length = count($array);
    if($length < 2){
        return $array;
    }

    $left = $right = array();
    $pivot = $array[0];
    for($i = 1; $i < $length; $i++){
        if($array[$i] < $pivot){
            $left[] = $array[$i];
        }else{
            $right[] = $array[$i];
        }   
    }
    return array_merge( quickSort($left) , array($pivot), quickSort($right));

}

$unsortedArray = [3, 6, 8, 10, 1, 2, 1];
$sortedArray = quickSort($unsortedArray);

echo "Unsorted Array: " . implode(", ", $unsortedArray) . "\n";
echo "Sorted Array: " . implode(", ", $sortedArray) . "\n";