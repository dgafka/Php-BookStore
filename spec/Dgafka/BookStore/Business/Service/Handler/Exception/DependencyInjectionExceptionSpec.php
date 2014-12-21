<?php

namespace spec\Dgafka\BookStore\Business\Service\Handler\Exception;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DependencyInjectionExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('\Exception');
    }
}
