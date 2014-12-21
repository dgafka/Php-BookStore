<?php

namespace spec\Dgafka\BookStore\Business\Model\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dgafka\BookStore\Business\Model\Entity;

class BookSpec extends ObjectBehavior
{
	function let(Entity\Author $author) {
		$this->beConstructedWith(Argument::type('string'), $author, Argument::type('string'), Argument::type('string'));
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\BookStore\Business\Model\Entity\Book');
    }
}
