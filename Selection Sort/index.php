<?php

function selectionSort($array){
    $count = count($array);
    if(empty($array)){
        return [];
    }

    for($i = 0; $i < $count-1; $i++){
        $minIndex = $i;
        for($j = $i +1; $j < $count;$j++ ){

            if($array[$j] < $array[$minIndex]){
                $minIndex = $j;
            }
        }
        if($minIndex != $i){
            // temperory
             $temp = $array[$i];
             $array[$i] = $array[$minIndex];
             $array[$minIndex] = $temp;
        }
    }
    return $array;
}

$unsortedArray = [1,3,5,6,3,2,1,3,5,6,7,5,4,3,2,4,5,6,7,8];
$sortedArray  = selectionSort($unsortedArray);

echo "Unsorted Array: " . implode(", ", $unsortedArray) . "\n";
echo "Sorted Array: " . implode(", ", $sortedArray) . "\n";
