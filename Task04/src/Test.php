<?php


namespace App;

require_once __DIR__ . '/Functions.php';

function runTest(): void
{
    
    echo "Тестирование методов стека:\n";
    
    
    $stack = new Stack(1, 2, 3);
    echo "Изначальный стек: " . $stack->__toString() . "\n"; 

    
    $popped = $stack->pop();
    echo "После вызова pop(), снятый элемент: " . $popped . "\n"; 
    echo "Стек после pop(): " . $stack->__toString() . "\n"; 

    
    $top = $stack->top();
    echo "Элемент на вершине стека (top): " . $top . "\n"; 

    
    $isEmpty = $stack->isEmpty() ? 'Да' : 'Нет';
    echo "Стек пуст? " . $isEmpty . "\n"; 

    
    $stack->push(4, 5);
    echo "Стек после push(4, 5): " . $stack->__toString() . "\n"; 

    
    $copy = $stack->copy();
    echo "Копия стека: " . $copy->__toString() . "\n"; 

    
    echo "\nТестирование функции проверки сбалансированности скобок:\n";
    
    
    $expression = "(ab[cd{}])";
    $isBalanced = checkIfBalanced($expression) ? 'Сбалансировано' : 'Не сбалансировано';
    echo "Строка '{$expression}' - {$isBalanced}\n"; 

    
    $expression = "(ab[cd{})";
    $isBalanced = checkIfBalanced($expression) ? 'Сбалансировано' : 'Не сбалансировано';
    echo "Строка '{$expression}' - {$isBalanced}\n"; 

    
    $expression = "(ab[cd{]})";
    $isBalanced = checkIfBalanced($expression) ? 'Сбалансировано' : 'Не сбалансировано';
    echo "Строка '{$expression}' - {$isBalanced}\n"; 

    echo "\nТестирование завершено.\n";
}
