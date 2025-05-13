<?php

class EconomyRoom implements Room {
    public function getDescription(): string {
        return 'Эконом';
    }

    public function getCost(): float {
        return 1000;
    }
}