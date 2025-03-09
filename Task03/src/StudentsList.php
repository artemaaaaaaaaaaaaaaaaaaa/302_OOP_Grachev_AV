<?php

namespace App;

class StudentsList
{
    private array $students = [];

    public function add(Student $student): void
    {
        $this->students[] = $student;
    }

    public function count(): int
    {
        return count($this->students);
    }

    public function get(int $index): Student
    {
        if (!isset($this->students[$index])) {
            throw new \OutOfRangeException("Студент с индексом {$index} не найден.");
        }
        return $this->students[$index];
    }

    public function store(string $fileName): void
    {
        file_put_contents($fileName, serialize($this->students));
    }

    public function load(string $fileName): void
    {
        if (!file_exists($fileName)) {
            throw new \RuntimeException("Файл {$fileName} не найден.");
        }
        $this->students = unserialize(file_get_contents($fileName)) ?: [];
    }
}
