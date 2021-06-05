<?php

function fizzBuzzFor($x): void
{
    echo '<br>';

    for ($i = 1; $i <= $x; $i++) {
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
}
// fizzBuzzFor(35);


function fizzBuzzWhile($x)
{
    $i = 1;
    echo '<br>';
    while ($i <= $x) {
        switch ($i) {
            case ($i / 15 >= 1 && $i % 15 == 0):
                echo "FizzBuzz" . '<br>';
                break;
                case ($i % 3 == 0 && $i / 3 >=1):
                    echo "Fizz" . '<br>';
                    break;
                    case ($i % 5 == 0 && $i / 5 >=1):
                        echo "Buzz" . '<br>';
                        break;
                        default:
                        echo $i . '<br>';
                    }
        $i++;
    }
}
// fizzBuzzWhile(35);