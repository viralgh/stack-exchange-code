<?php

# http://stackoverflow.com/questions/33169071/set-current-prev-next-in-array-after-ajax-post/33170348


$array = array( 1 => 1, 4 => 4, 5 => 5, 7 => 7, 13 => 13 ) ;
// your initial array

$current_message = 4;
// current is 4

$keys = array_keys($array);
// make array indexed from 0    

$search = array_search($current_message , $keys);
// search inside indexed array the key

$prev = $next = 0; // initailize to 0

if($current_message != reset($array)) // check if current is not first
    $prev = $keys[$search-1];

if($current_message != end($array)) // check if current is not last
    $next = $keys[$search+1];

var_dump($prev,$next);