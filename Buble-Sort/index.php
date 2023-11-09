<?php

function bubleSort($array){
    $count = count($array);
    echo $count;
    $swapped = true;
    while($swapped){
        $swapped = false;
        for($i = 0; $i < $count - 1; $i++){
            if($array[$i] > $array[$i+1]){
                $temperory = $array[$i];
                $array[$i] = $array[$i+1];
                $array[$i+1] = $temperory;
                $swapped = true;
            }
        }
    }
    return $array;
}

$unsortedArray = [3, 6, 8, 10, 1, 2, 1];
$sortedArray = bubleSort($unsortedArray);

echo "Unsorted Array: " . implode(", ", $unsortedArray) . "\n";
echo "Sorted Array: " . implode(", ", $sortedArray) . "\n";