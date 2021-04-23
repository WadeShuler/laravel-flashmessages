<?php

namespace wadeshuler\FlashMessages\Tests\Feature;

use wadeshuler\FlashMessages\Tests\TestCase;

class FlashMessageTest extends TestCase
{
    public function testSessionWorks()
    {
        $this->withSession(['foo' => 'bar']);

        $test = session('foo');

        $this->assertEquals('bar', $test);
    }
}
