<?php


echo "First Method Palindrome check!";
echo '<br>';
$word = "burj";
echo "Word: ".$word;
echo '<br>';
//split into array
$str_arr = str_split($word);

//empty array
$check_arr = [];

//get length of array -1 because of starting with 0 index
$length_array = count($str_arr) - 1; 

//loop it to reverse the array
for($i = $length_array; $i >= 0; $i--){
    $check_arr[] = $str_arr[$i];
}

$reversed_word = implode($check_arr);

// First method check
if($word == $reversed_word){
    echo 'Palindrome';
}else{
    echo 'not Palindrome';
}


//second method check
echo '<br>';
echo '<br>';
echo "Second Method Palindrome check!";
echo '<br>';
$word2 =  'burj';
echo "Word: ".$word2;
$reverse_word2 = strrev($word2);
echo '<br>';

if($word2 == $reverse_word2){
    echo 'Palindrome';
}else{
    echo 'not Palindrome';
}
