<?php

class SofaDecorator extends RoomDecorator {
    public function getDescription(): string {
        return $this->room->getDescription() . ', дополнительный диван';
    }

    public function getCost(): float {
        return $this->room->getCost() + 500;
    }
}