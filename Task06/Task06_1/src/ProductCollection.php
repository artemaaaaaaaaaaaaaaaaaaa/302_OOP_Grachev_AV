<?php

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