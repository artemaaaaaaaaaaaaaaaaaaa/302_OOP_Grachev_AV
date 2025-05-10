<?php

class LuxeRoom implements Room {
    public function getDescription(): string {
        return 'Люкс';
    }

    public function getCost(): float {
        return 3000;
    }
}