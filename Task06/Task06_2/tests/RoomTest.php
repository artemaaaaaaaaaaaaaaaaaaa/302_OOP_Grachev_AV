<?php

use PHPUnit\Framework\TestCase;

class RoomTest extends TestCase {
    public function testEconomyRoomWithInternetAndSofa() {
        $room = new EconomyRoom();
        $roomWithInternet = new InternetDecorator($room);
        $roomWithInternetAndSofa = new SofaDecorator($roomWithInternet);

        $this->assertEquals('Эконом, выделенный Интернет, дополнительный диван', 
            $roomWithInternetAndSofa->getDescription());
        $this->assertEquals(1600, $roomWithInternetAndSofa->getCost());
    }

    public function testLuxeRoomWithBreakfastAndDinner() {
        $room = new LuxeRoom();
        $roomWithBreakfast = new BreakfastDecorator($room);
        $roomWithBreakfastAndDinner = new DinnerDecorator($roomWithBreakfast);

        $this->assertEquals('Люкс, завтрак "шведский стол", ужин', 
            $roomWithBreakfastAndDinner->getDescription());
        $this->assertEquals(4300, $roomWithBreakfastAndDinner->getCost());
    }

    public function testStandardRoomWithoutDecorators() {
        $room = new StandardRoom();

        $this->assertEquals('Стандарт', $room->getDescription());
        $this->assertEquals(2000, $room->getCost());
    }

    public function testMultipleDecorators() {
        $room = new EconomyRoom();
        $room = new BreakfastDecorator($room);
        $room = new DinnerDecorator($room);
        $room = new InternetDecorator($room);
        $room = new SofaDecorator($room);

        $this->assertEquals(
            'Эконом, завтрак "шведский стол", ужин, выделенный Интернет, дополнительный диван',
            $room->getDescription()
        );
        $this->assertEquals(1000 + 500 + 800 + 100 + 500, $room->getCost());
    }
}