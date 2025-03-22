<?php

namespace App;

function checkIfBalanced(string $expression): bool
{
    $stack = new Stack();

    $pairs = [
        '(' => ')',
        '{' => '}',
        '[' => ']',
        '<' => '>',
    ];

    foreach (str_split($expression) as $char) {
        if (in_array($char, array_keys($pairs))) {
            $stack->push($char);
        } elseif (in_array($char, array_values($pairs))) {
            $top = $stack->pop();
            if ($pairs[$top] !== $char) {
                return false;
            }
        }
    }

    return $stack->isEmpty();
}
