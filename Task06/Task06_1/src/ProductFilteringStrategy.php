<?php

<<<<<<< HEAD
namespace App;

interface ProductFilteringStrategy
{
    public function filter(Product $product): bool;
}
=======
interface ProductFilteringStrategy {
    public function filter(array $products): array;
}
>>>>>>> student/Task06
