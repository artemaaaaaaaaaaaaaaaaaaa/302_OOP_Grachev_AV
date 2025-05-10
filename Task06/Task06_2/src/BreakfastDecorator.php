<?php

class BreakfastDecorator extends RoomDecorator {
    public function getDescription(): string {
        return $this->room->getDescription() . ', завтрак "шведский стол"';
    }

    public function getCost(): float {
        return $this->room->getCost() + 500;
    }
}