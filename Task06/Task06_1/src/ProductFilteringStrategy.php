<?php

interface ProductFilteringStrategy {
    public function filter(array $products): array;
}