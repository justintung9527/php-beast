<?php

function test_simple() {
    echo "simple function\n";
}

function test_with_args($a, $b) {
    $c = $a + $b;
    echo $c;
}

function test_with_defaults($a = 10, $b = "hello") {
    return $a;
}

function test_with_return_type(): string {
    return "hello";
}

function test_with_nullable_return_type(): ?int {
    return 42;
}

function test_with_reference(&$a) {
    $a = 100;
}

function test_with_type_hints(string $a, int $b): bool {
    return true;
}

echo "All tests passed\n";
