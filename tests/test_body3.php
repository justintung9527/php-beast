<?php

function test_string_with_function_keyword() {
    $str = "function is a keyword";
    echo $str;
}

function test_with_closure() {
    $closure = function($name) {
        return "Hello " . $name;
    };
    echo $closure("World");
}

function test_nested_if() {
    $a = 10;
    $b = 20;
    if ($a > $b) {
        echo "a > b";
    } else {
        echo "a <= b";
    }
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
}

echo "All complex tests passed\n";
