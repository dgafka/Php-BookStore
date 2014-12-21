<?php

namespace spec\Dgafka\BookStore\Business\Service\Handler;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dgafka\BookStore\Business\Service\Dto;
use Dgafka\BookStore\Business\Service\Repository;
use Dgafka\BookStore\Business\Service\Service\Converter;
use Dgafka\BookStore\Business\Service\Handler\Exception;
use Dgafka\BookStore\Business\Model\Entity;

class AuthorQueryHandlerSpec extends ObjectBehavior
{

	/**
	 * @var Repository\Query\AuthorRepository
	 */
	private $repository;

	/**
	 * @var Converter\Author\EntityToDto
	 */
	private $converter;

	function let(Repository\Query\AuthorRepository $repository, Converter\Author\EntityToDto $converter) {
		$this->repository = $repository;
		$this->converter  = $converter;

		$this->beConstructedWith($repository, $converter);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\BookStore\Business\Service\Handler\AuthorQueryHandler');
    }


	function it_should_handle_get_by_query(Entity\Author $author, Dto\Author $authorDto) {
		$query = new Dto\Query\Author\GetByQuery('test', 'test');

		$this->repository->findBy($query->orderBy, $query->type)->willReturn([$author]);
		$this->converter->convert($author)->willReturn($authorDto);

		$this->handleGetByQuery($query)->shouldHaveType('Dgafka\BookStore\Business\Service\Dto\AuthorCollection');
	}

	function it_should_handle_get_by_id_query(Entity\Author $author, Dto\Author $authorDto) {
		$query = new Dto\Query\Author\GetByIdQuery('test');

		$this->repository->findById($query->id)->willReturn($author);
		$this->converter->convert($author)->willReturn($authorDto);

		$this->handleGetByIdQuery($query)->shouldReturn($authorDto);
	}

}
