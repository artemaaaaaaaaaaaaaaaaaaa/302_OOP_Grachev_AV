<?php

<<<<<<< HEAD
namespace App;

class ManufacturerFilter implements ProductFilteringStrategy
{
    // ===================================
    //@TODO Реализовать стратегию фильтрации по производителю товара
    // ===================================
}
=======
class ManufacturerFilter implements ProductFilteringStrategy {
    private $manufacturer;

    public function __construct(string $manufacturer) {
        $this->manufacturer = $manufacturer;
    }

    public function filter(array $products): array {
        return array_values(array_filter($products, function (Product $product) {
            return $product->manufacturer === $this->manufacturer;
        }));
    }
}
>>>>>>> student/Task06
