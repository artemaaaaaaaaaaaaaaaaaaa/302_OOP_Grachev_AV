<?php

class StandardRoom implements Room {
    public function getDescription(): string {
        return 'Стандарт';
    }

    public function getCost(): float {
        return 2000;
    }
}