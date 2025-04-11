<?php
namespace App;

class Truncater
{
    private $options;

    public static $defaultOptions = [
        'separator' => '...',
        'length' => 50,
    ];

    public function __construct(array $options = [])
    {
        $this->options = array_merge(self::$defaultOptions, $options);
    }

    public function truncate($string, $options = [])
    {
        $options = array_merge($this->options, $options);

        // Если строка меньше или равна заданной длине, не добавляем разделитель
        if (mb_strlen($string) <= $options['length']) {
            return $string;
        }

        // Обрезаем строку до заданной длины
        $newMessage = mb_substr($string, 0, $options['length']);

        // Если строка была обрезана, добавляем разделитель
        if (mb_strlen($newMessage) < mb_strlen($string)) {
            $newMessage .= $options['separator'];
        }

        return $newMessage;
    }
}
