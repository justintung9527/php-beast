<?php

function hello($name) {
    echo "Hello, " . $name . "!\n";
    $secret = "This is a secret message";
    return $secret;
}

class MyClass {
    private $data = "private data";

    public function show($prefix) {
        $result = $prefix . ": " . $this->data;
        return $result;
    }

    public function complex($a, $b) {
        if ($a > $b) {
            $max = $a;
            $min = $b;
        } else {
            $max = $b;
            $min = $a;
        }
        return $max - $min;
    }
}

function empty_body() {
}

hello("World");

$obj = new MyClass();
echo $obj->show("Test") . "\n";
echo $obj->complex(10, 5) . "\n";
