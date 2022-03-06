<?php

$allArray = array(2,5,2,10,5,5,8,16, 20, 10, 5, 20, 1, 4, 5, 30);


$uniqueArry = array();
 
foreach($allArray as $val) { //Loop1 
    
    foreach($uniqueArry as $uniqueValue) { //Loop2 

        if($val == $uniqueValue) {
            continue 2; // Referring Outer loop (Loop 1)
        }
    }
    $uniqueArry[] = $val;
}
echo "<pre>";
print_r($uniqueArry);
echo "</pre>";
