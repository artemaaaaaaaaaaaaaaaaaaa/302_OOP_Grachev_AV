<?php

<<<<<<< HEAD
namespace App;

class ProductCollection
{
    private $products = array();

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function filter(ProductFilteringStrategy $filterStrategy): ProductCollection
    {
        $filteredProducts = array();
        // ===================================
        //@TODO Добавить код для фильтрации товара из $this->products в $filteredProducts,
        //@TODO используя вызов $filterStrategy->filter()
        // ===================================

        return new ProductCollection($filteredProducts);
    }

    public function getProductsArray()
    {
        return $this->products;
    }
}
=======
class ProductCollection {
    private $products;

    public function __construct(array $products = []) {
        $this->products = array_values($products);
    }

    public function filter(ProductFilteringStrategy $filterStrategy): ProductCollection {
        $filteredProducts = $filterStrategy->filter($this->products);
        return new ProductCollection($filteredProducts);
    }

    public function getProductsArray(): array {
        return $this->products;
    }
}
>>>>>>> student/Task06
