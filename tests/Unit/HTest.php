<?php

namespace Chep6915\ISocial\Tests\Unit;

use Chep6915\ISocial\Facades\ISocial;
use Chep6915\ISocial\htt;
use Chep6915\ISocial\Tests\TestCase;

class HTest extends TestCase
{
    /**
     * @covers Chep6915\ISocial\htt::response
     */
    function testResponse()
    {
        $this->assertEquals(55, ISocial::response());
    }

    /**
     * @covers Chep6915\ISocial\htt::response
     */
    function testRoute()
    {
        $this->withoutExceptionHandling();
        $this->get('test-route')->assertSee(55);
    }

    function testView()
    {
//        $this->withoutExceptionHandling();
        $this->get('test-view')->assertViewIs('i_social::home');
    }
}