<?php

class DinnerDecorator extends RoomDecorator {
    public function getDescription(): string {
        return $this->room->getDescription() . ', ужин';
    }

    public function getCost(): float {
        return $this->room->getCost() + 800;
    }
}