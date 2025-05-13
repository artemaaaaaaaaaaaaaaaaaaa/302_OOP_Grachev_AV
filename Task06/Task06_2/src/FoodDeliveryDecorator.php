<?php

class FoodDeliveryDecorator extends RoomDecorator {
    public function getDescription(): string {
        return $this->room->getDescription() . ', доставка еды в номер';
    }

    public function getCost(): float {
        return $this->room->getCost() + 300;
    }
}