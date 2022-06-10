<?php
    
# Structure functions 
    /* 
        funtion myFunction() {
            echo "Hello World";
        }
    */

/* 
    function sumNumbers($a, $b) {
        return $a + $b;
    }
    echo sumNumbers(1,2);
 */

/* 
    function sumNumbers($a, $b, $print = FALSE) {
        $sum = $a + $b;
        if ( $print == TRUE ) {
            echo "Add Numbers is = " .$sum. "<br />";
        } else {
            return $sum;
        }
    }
    echo sumNumbers(10,40,true);
    // echo sumNumbers(10,40);
 */

# Funcion anonima
/*     
$sayGoodbye = function() {
    echo "Last class of PHP for beginners" . "<br />";
};

$sayGoodbye();
 */


function endCourse(Closure $course, $name) {
    return $course($name);
};

$php = function ($name) {
    return "Hello " .$name. " you are going to finish the course of PHP";
};

$laravel = function ($name) {
    return "Hello " .$name. " you are going to finish the course of LARAVEL";
};

echo endCourse($php, "Anthony");
echo endCourse($laravel, "Ana");


?>}