<?php

function selectionSort(&$arr) {
    $n = count($arr);
    
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i; // Assume the current index has the minimum value
        
        // Find the index of the minimum element in the unsorted portion
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        
        // Swap the minimum element with the first element of the unsorted portion
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
        
        // Print the current state of the array
        echo "Array after sorting pass " . ($i + 1) . ": ";
        foreach ($arr as $element) {
            echo $element . " ";
        }
        echo "\n";
    }
}

echo "Enter the number of elements in the array: ";
$n = intval(fgets(STDIN));

$arr = array();

echo "Enter the elements of the array:\n";
for ($i = 0; $i < $n; $i++) {
    $arr[] = intval(fgets(STDIN));
}

echo "Original array: ";
foreach ($arr as $element) {
    echo $element . " ";
}
echo "\n";

selectionSort($arr);

echo "Sorted array: ";
foreach ($arr as $element) {
    echo $element . " ";
}
echo "\n";

?>
