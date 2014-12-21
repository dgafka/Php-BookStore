<?php

namespace spec\Dgafka\BookStore\Business\Model\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AuthorSpec extends ObjectBehavior
{

	function let() {
		$this->beConstructedWith(Argument::type('string'), Argument::type('string'), Argument::type('string'));
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\BookStore\Business\Model\Entity\Author');
    }
}
