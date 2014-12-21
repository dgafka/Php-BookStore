<?php

namespace spec\Dgafka\BookStore\Business\Service\Service\Converter\Author;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Dgafka\BookStore\Business\Model\Entity;
use Dgafka\BookStore\Business\Service\Dto;

class EntityToDtoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\BookStore\Business\Service\Service\Converter\Author\EntityToDto');
    }

	public function it_should_convert_entity_to_dto(Entity\Author $author) {
		$id = Argument::type('string');
		$name = Argument::type('string');
		$surname = Argument::type('string');

		$author->getId()->willReturn($id);
		$author->getName()->willReturn($name);
		$author->getSurname()->willReturn($surname);

		/** @var Dto\Author $dto */
		$dto = $this->convert($author);
		$dto->shouldHaveType('Dgafka\BookStore\Business\Service\Dto\Author');
		$dto->id->shouldReturn($id);
		$dto->name->shouldReturn($name);
		$dto->surname->shouldReturn($surname);
	}

}
