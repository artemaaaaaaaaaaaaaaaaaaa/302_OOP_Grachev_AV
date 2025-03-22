<?php

namespace App;

class Stack implements StackInterface
{
    private array $stack = [];

    public function __construct(...$elements)
    {
        $this->push(...$elements);
    }

    public function push(...$elements): void
    {
        foreach ($elements as $element) {
            $this->stack[] = $element;
        }
    }

    public function pop()
    {
        return array_pop($this->stack) ?? null;
    }

    public function top()
    {
        return $this->stack[count($this->stack) - 1] ?? null;
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function copy(): Stack
    {
        return new Stack(...$this->stack);
    }

    public function __toString(): string
    {
        return "[" . implode("->", array_reverse($this->stack)) . "]";
    }
}