<?php

use PHPUnit\Framework\TestCase;

class ProductFilterTest extends TestCase {
    public function testManufacturerFilter() {
        $p1 = new Product();
        $p1->name = 'Шоколад';
        $p1->manufacturer = 'Красный Октябрь';
        $p1->listPrice = 100;

        $p2 = new Product();
        $p2->name = 'Мармелад';
        $p2->manufacturer = 'Ламзурь';
        $p2->listPrice = 100;

        $collection = new ProductCollection([$p1, $p2]);
        $filtered = $collection->filter(new ManufacturerFilter('Ламзурь'));

        $this->assertCount(1, $filtered->getProductsArray());
        $this->assertEquals('Мармелад', $filtered->getProductsArray()[0]->name);
    }

    public function testMaxPriceFilterWithDiscount() {
        $p1 = new Product();
        $p1->name = 'Шоколад';
        $p1->listPrice = 100;
        $p1->sellingPrice = 50;

        $p2 = new Product();
        $p2->name = 'Мармелад';
        $p2->listPrice = 100;

        $collection = new ProductCollection([$p1, $p2]);
        $filtered = $collection->filter(new MaxPriceFilter(50));

        $this->assertCount(1, $filtered->getProductsArray());
        $this->assertEquals('Шоколад', $filtered->getProductsArray()[0]->name);
    }

    public function testMaxPriceFilterNoDiscount() {
        $p1 = new Product();
        $p1->name = 'Шоколад';
        $p1->listPrice = 40;

        $p2 = new Product();
        $p2->name = 'Мармелад';
        $p2->listPrice = 100;

        $collection = new ProductCollection([$p1, $p2]);
        $filtered = $collection->filter(new MaxPriceFilter(50));

        $this->assertCount(1, $filtered->getProductsArray());
        $this->assertEquals('Шоколад', $filtered->getProductsArray()[0]->name);
    }
}