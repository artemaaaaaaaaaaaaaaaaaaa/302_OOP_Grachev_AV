<?php

class MaxPriceFilter implements ProductFilteringStrategy {
    private $maxPrice;

    public function __construct(float $maxPrice) {
        $this->maxPrice = $maxPrice;
    }

    public function filter(array $products): array {
        return array_values(array_filter($products, function (Product $product) {
            $effectivePrice = $product->sellingPrice ?? $product->listPrice;
            return $effectivePrice <= $this->maxPrice;
        }));
    }
}