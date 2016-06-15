<?php

require './src/number_to_string.php';

class NumberTest extends PHPUnit_Framework_TestCase {

    public function testNumber100() {
        $this->assertEquals('sto', numberToString(100));
    }

    public function testNumber200() {
        $this->assertEquals('dwieście', numberToString(200));
    }

    public function testNumber0() {
        $this->assertEquals('zero', numberToString(0));
    }

    public function testNumberMoreThan999() {
        $this->assertFalse(numberToString(4444));
    }

    public function testNumber40() {
        $this->assertEquals('czterdzieści', numberToString(40));
    }
    
    public function testNumber140() {
        $this->assertEquals('sto czterdzieści', numberToString(140));
    }
    
    public function testNumber11() {
        $this->assertEquals('jedenaście', numberToString(11));
    }
    
    public function testNumber146() {
        $this->assertEquals('sto czterdzieści sześć', numberToString(146));
    }
    
    public function testNumberMinus40() {
        $this->assertEquals('minus czterdzieści', numberToString(-40));
    }

}
