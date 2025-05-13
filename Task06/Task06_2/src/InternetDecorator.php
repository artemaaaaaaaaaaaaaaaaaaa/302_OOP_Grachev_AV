<?php

class InternetDecorator extends RoomDecorator {
    public function getDescription(): string {
        return $this->room->getDescription() . ', выделенный Интернет';
    }

    public function getCost(): float {
        return $this->room->getCost() + 100;
    }
}