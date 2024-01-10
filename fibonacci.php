<?php 


class Fibonacci {

    public function create_fibonacci($num){
        $range = $num;

        $first_number = 0;
        $second_number = 1;
        $fibonacci_series = [];
        $next_number = 0;
        for($i = 0; $i <= $range;$i++){
            $fibonacci[] = $first_number;
            $next_number = $first_number + $second_number;
            $first_number = $second_number;
            $second_number = $next_number;
        }

        return $fibonacci;
    }
}

$fibonacci = new Fibonacci();

$range = 8;
$result_array = $fibonacci->create_fibonacci($range);

// print_r($result_array);
echo 'Range: '.$range."<br>";
echo "Fibonacci Series: ".implode(',',$result_array);
