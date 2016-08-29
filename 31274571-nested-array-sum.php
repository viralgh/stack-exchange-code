<?php

# http://stackoverflow.com/questions/31274571/getting-the-sum-of-values-from-multidimensional-array/31275625


$it = new RecursiveIteratorIterator(new RecursiveArrayIterator($input));
$sum = array_sum(iterator_to_array($it, false));