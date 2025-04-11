<?php
namespace App\Tests;

use App\Truncater;
use PHPUnit\Framework\TestCase;

class TruncaterTest extends TestCase
{
    //<= max length test
    public function testNoTruncation()
    {
        $truncater = new Truncater();
        $this->assertSame($truncater->truncate('Грачёв Артём Владимирович'), 'Грачёв Артём Владимирович');
    }

    //empty string test
    public function testEmptyString()
    {
        $truncater = new Truncater();
        $this->assertSame($truncater->truncate(''), '');
    }

    //> max length test
    public function testTruncateWithDefaultLength()
    {
        $truncater = new Truncater();
        $this->assertSame(
            $truncater->truncate('Грачёв Артём Владимирович', ['length' => 10]),
            'Грачёв Арт...'
        );
    }

    //user separate test
    public function testCustomSeparator()
    {
        $truncater = new Truncater();
        $this->assertSame(
            $truncater->truncate('Грачёв Артём Владимирович', ['length' => 10, 'separator' => '*']),
            'Грачёв Арт*'
        );
    }

    //redefine test
    public function testOverrideDefaults()
    {
        $truncater = new Truncater(['length' => 20, 'separator' => '#']);
        $this->assertSame(
            $truncater->truncate('Грачёв Артём Владимирович'),
            'Грачёв Артём Владими#'
        );
    }

    //< 0 length test
    public function testNegativeLength()
    {
        $truncater = new Truncater();
        $this->assertSame(
            $truncater->truncate('Грачёв Артём Владимирович', ['length' => -10]),
            'Грачёв Артём Вл...'
        );
    }

    //< max test
    public function testShorterThanLength()
    {
        $truncater = new Truncater();
        $this->assertSame(
            $truncater->truncate('Грачёв Артём Владимирович', ['length' => 50]),
            'Грачёв Артём Владимирович'
        );
    }

    //<= max length with separate test
    public function testSeparatorWithoutTruncation()
    {
        $truncater = new Truncater(['separator' => '*']);
        $this->assertSame(
            $truncater->truncate('Грачёв Артём Владимирович', ['length' => 50]),
            'Грачёв Артём Владимирович'
        );
    }

    //empty separate test
    public function testEmptySeparator()
    {
        $truncater = new Truncater(['separator' => '']);
        $this->assertSame(
            $truncater->truncate('Грачёв Артём Владимирович', ['length' => 10]),
            'Грачёв Арт'
        );
    }
}
