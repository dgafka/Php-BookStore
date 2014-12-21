<?php

namespace spec\Dgafka\BookStore\Business\Service\Service\Converter\Book;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dgafka\BookStore\Business\Service\Service\Converter;
use Dgafka\BookStore\Business\Model\Entity;
use Dgafka\BookStore\Business\Service\Dto;

class EntityToDtoSpec extends ObjectBehavior
{

	/**
	 * @var Converter\Author\EntityToDto
	 */
	private $converter;

	function let(Converter\Author\EntityToDto $converter) {
		$this->beConstructedWith($converter);
		$this->converter = $converter;
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\BookStore\Business\Service\Service\Converter\Book\EntityToDto');
    }

	function it_should_convert_entity_to_dto(Entity\Book $book, Entity\Author $author, Dto\Author $dtoAuthor) {

		$id = Argument::type('string');
		$name = Argument::type('string');
		$description = Argument::type('string');;

		$book->getId()->willReturn($id);
		$book->getName()->willReturn($name);
		$book->getDescription()->willReturn($description);
		$book->getAuthor()->willReturn($author);
		$this->converter->convert($author)->willReturn($dtoAuthor);

		/** @var Dto\Book $book */
		$book = $this->convert($book);
		$book->shouldHaveType('Dgafka\BookStore\Business\Service\Dto\Book');
		$book->id->shouldReturn($id);
		$book->name->shouldReturn($name);
		$book->description->shouldReturn($description);
		$book->author->shouldHaveType('Dgafka\BookStore\Business\Service\Dto\Author');
	}

}
