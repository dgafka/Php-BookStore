<?php

namespace spec\Dgafka\BookStore\Business\Service\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dgafka\BookStore\Business\Model\Entity;

class AuthorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\BookStore\Business\Service\Factory\Author');
    }

	function it_should_create_new_author() {
		$id      = Argument::type('integer');
		$name    = Argument::type('string');
		$surname = Argument::type('string');

		/** @var Entity\Author $author */
		$author = $this->create($id, $name, $surname);
		$author->shouldHaveType('\Dgafka\BookStore\Business\Model\Entity\Author');
		$author->getId()->shouldReturn($id);
		$author->getName()->shouldReturn($name);
		$author->getSurname()->shouldReturn($surname);
	}

}
