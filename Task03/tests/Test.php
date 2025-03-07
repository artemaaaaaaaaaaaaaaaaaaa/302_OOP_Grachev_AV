<?php

namespace App\Tests;

use App\Student;
use App\StudentsList;

class Test
{
    public static function runTest()
    {
        echo "Тестирование класса Student...\n";
        $student = new Student("Иванов", "Сергей", "ФМиИТ", "303");
        echo $student;

        echo "\nТестирование цепочки сеттеров...\n";
        $student->setName("Вячеслав")->setLastname("Шестаков")->setFaculty("ФМиИТ")->setGroup("302");
        echo $student;

        echo "\nТестирование класса StudentsList...\n";
        $list = new StudentsList();
        $list->add(new Student("Грачёв", "Артём", "ФМиИТ", "302"));
        $list->add(new Student("Симонов", "Александр", "ФМиИТ", "302"));
        echo "Количество студентов: " . $list->count() . "\n";

        echo "\nСохранение списка в файл...\n";
        $list->store("students.dat");

        echo "\nЗагрузка списка из файла...\n";
        $loadedList = new StudentsList();
        $loadedList->load("students.dat");
        echo "Количество загруженных студентов: " . $loadedList->count() . "\n";

        echo "Вывод первого студента:\n";
        echo $loadedList->get(0);
    }
}
