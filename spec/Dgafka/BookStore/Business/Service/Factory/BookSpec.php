<?php

namespace spec\Dgafka\BookStore\Business\Service\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dgafka\BookStore\Business\Model\Entity;

class BookSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\BookStore\Business\Service\Factory\Book');
    }

	function it_should_create_new_book(Entity\Author $author) {

		$id     = Argument::type('string');
		$name   = Argument::type('string');
		$description = Argument::type('string');

		/** @var Entity\Book $book */
		$book = $this->create($id, $author, $name, $description);
		$book->shouldHaveType('Dgafka\BookStore\Business\Model\Entity\Book');

		$book->getId()->shouldReturn($id);
		$book->getName()->shouldReturn($name);
		$book->getDescription()->shouldReturn($description);
	}


}
