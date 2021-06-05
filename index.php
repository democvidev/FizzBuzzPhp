<?php


for ($i = 1; $i <= 30; $i++) {
    // x | 15 => FizzBuzz

    if ($i / 15 >= 1 && $i % 15 == 0) {
        echo 'FizzBuzz' . '<br>';
        continue;
    }

    // x | 3 => Fizz
    if ($i % 3 == 0 && $i / 3 >=1) {
        echo 'Fizz' . '<br>';
        continue;
    }

    // x | 5 => Buzz
    if ($i % 5 == 0 && $i / 5 >=1) {
        echo 'Buzz' . '<br>';
        continue;
    }

    // x
    echo $i . '<br>';
}
