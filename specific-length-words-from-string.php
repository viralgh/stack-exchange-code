<?php

# http://stackoverflow.com/questions/32305449/php-get-words-with-length-longer-than-3-from-string/32305573


$fulltext = "there is ongoing work on creating a formal PHP specification.";

$words = array_filter(explode(' ', $fulltext), function($val){
             return strlen($val) > 3; // filter words having length > 3 in array
         });

$fulltext_method_solution = implode(' ', $words); // join words into sentence