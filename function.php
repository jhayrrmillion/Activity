<?php function oddeven($number){
    if (!is_numeric($number)) {
        return "Invalid input: Please provide a number.";
    }
    if ($number % 2 == 0) {
        return "even";
} else {    
    return "odd";
} }


$number = 3; 
$result = oddeven($number);
?>