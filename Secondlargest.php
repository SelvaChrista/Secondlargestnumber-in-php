<?php
function findSecondLargest(array $arr) {
    
    //If array is empty then return
    if(empty($arr)) {
        return;
    }
    
    //Initialize largest and second largest with negative values
    $largest = PHP_INT_MIN;
    $secondLargest = PHP_INT_MIN;
    
    //Traverse the whole array
    foreach($arr as $num) {
        
        //If element is greater than the value of current largest
        if($num > $largest) {
            //update largest and second largest
            $secondLargest = $largest;
            $largest = $num;
        }
        
        //If element is greater than secondLargest and less than largest
        if($num > $secondLargest && $num < $largest) {
            //update second largest
            $secondLargest = $num;
        }
    }
    //return second largest value of array
    return $secondLargest;
}
 
//create an array of numbers
$arr = array(1,2,3,4,5,6,7,8,9);

//call the function and print output
echo "Second-largest number : ".findSecondLargest($arr);

?>