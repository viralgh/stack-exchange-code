<?php

# http://stackoverflow.com/questions/32709640/check-if-comma-separated-value-exists-in-database-with-php/32710028


$bloggerscat = '2,5'; // Your input here (string)

$set = explode(',',$bloggerscat); // get the numbers in $set array

$query = 'SELECT * FROM `table` WHERE '; // construct query

foreach ($set as $search)
{
    $query .= "FIND_IN_SET($search, column_name) OR "; // append every time for set 
}

$query = rtrim($query, ' OR'); // remove last OR

echo $query; // test

# SELECT * FROM `table` WHERE FIND_IN_SET(2, column_name) OR FIND_IN_SET(5, column_name)