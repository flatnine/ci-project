<?php

namespace Flatnine;

class FriendlyTimeTest extends \PHPUnit_Framework_TestCase 
{
    public function testGetFriendlyTime()
    {
        $ft = new FriendlyTime('2000-01-01');
        $expected = "It's only 2000-01-01";
        $this->assertSame($expected, $ft->getFriendlyTime());
    }
}
