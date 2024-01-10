<?php 

class Anagram {

    public function check_anagram($string1,$string2){
        $filter_string1 = strtolower(str_replace(" ","",$string1));
        $filter_string2 = strtolower(str_replace(" ","",$string2));

        if(count_chars($filter_string1) == count_chars($filter_string2)){
            return "Is Anagram";
        }else{
            return "Is Not Anagram";
        }
    }
}

$input_string1 = "listen"; 
$input_string2 = "silent"; 

$anagram = new Anagram();

echo $anagram->check_anagram($input_string1,$input_string2);
