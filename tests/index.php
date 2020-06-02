<?php

require '../index.php';

use PHPUnit\Framework\TestCase;

class Tests extends TestCase 
{

    public function testGreet_name() {

        $name = 'Bob';
        $expected = 'Hello, Bob.';

        $result = greet($name);

        $this->assertEquals($expected, $result);

    }

    public function testGreet_null() {

        $name = null;
        $expected = 'Hello, my friend.';

        $result = greet($name);

        $this->assertEquals($expected, $result);

    }

    public function testGreet_noName() {

        $expected = 'Hello, my friend.';

        $result = greet();

        $this->assertEquals($expected, $result);

    }

    public function testGreet_shout() {

        $name = 'BOB';

        $expected = 'HELLO, BOB!';

        $result = greet($name);

        $this->assertEquals($expected, $result);

    }

    public function testGreet_twoNameArray() {

        $name = ['Bob', 'Jane'];

        $expected = 'Hello, Bob and Jane.';

        $result = greet($name);

        $this->assertEquals($expected, $result);

    }

    public function testGreet_multipleNameArray() {

        $name = ['Amy', 'Brian', 'Charlotte'];

        $expected = 'Hello, Amy, Brian, and Charlotte.';

        $result = greet($name);

        $this->assertEquals($expected, $result);

    }

    public function testGreet_multipleNameArrayMultipleCapital() {

        $name = ['JAMES', 'Brian', 'Charlotte', 'MIKE', 'Sam', 'DAVE'];

        $expected = 'Hello, Brian, Charlotte, and Sam. AND HELLO, JAMES, MIKE, AND DAVE!';

        $result = greet($name);

        $this->assertEquals($expected, $result);

    }

    public function testGreet_multipleNameArrayDifferentAmountCapital() {

        $name = ['MIKE', 'Sam', 'DAVE'];

        $expected = 'Hello, Sam. AND HELLO, MIKE AND DAVE!';

        $result = greet($name);

        $this->assertEquals($expected, $result);

    }

    public function testGreet_commas() {

        $name = ['James', 'Beth, Dmitri, Test'];

        $expected = 'Hello, James, Beth, Dmitri, and Test.';

        $result = greet($name);

        $this->assertEquals($expected, $result);

    }

    public function testGreet_commasWithCapitals() {

        $name = ['James', 'Beth, DMITRI, Test', 'DAN'];

        $expected = 'Hello, James, Beth, and Test. AND HELLO, DMITRI AND DAN!';

        $result = greet($name);

        $this->assertEquals($expected, $result);

    }
}


