<?php
$input = 5; //pls change the value from 1-20 for testing

if ($input >= 1 && $input <= 20) {
    $output = fibonacci($input);
	echo "Input: $input ,Output: " . implode(', ', $output);
} else {
    echo "Input value must be between 1 and 20.";
}

function fibonacci($n) {
    $fib_sequence = [0, 1];
    while (count($fib_sequence) < $n) {
        $next_num = $fib_sequence[count($fib_sequence) - 1] + $fib_sequence[count($fib_sequence) - 2];
		
        array_push($fib_sequence, $next_num);
    }
    return $fib_sequence;
}
?>