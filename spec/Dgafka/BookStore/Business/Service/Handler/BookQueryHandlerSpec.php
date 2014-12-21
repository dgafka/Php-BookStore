<?php

namespace spec\Dgafka\BookStore\Business\Service\Handler;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dgafka\BookStore\Business\Service\Service\Converter;
use Dgafka\BookStore\Business\Service\Repository;
use Dgafka\BookStore\Business\Service\Dto;
use Dgafka\BookStore\Business\Model\Entity;

class BookQueryHandlerSpec extends ObjectBehavior
{

	/**
	 * @var Repository\Query\BookRepository
	 */
	private $repository;

	/**
	 * @var Converter\Book\EntityToDto
	 */
	private $converter;

	function let(Repository\Query\BookRepository $repository, Converter\Book\EntityToDto $converter) {
		$this->repository = $repository;
		$this->converter  = $converter;

		$this->beConstructedWith($repository, $converter);
	}


	function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\BookStore\Business\Service\Handler\BookQueryHandler');
    }


	function it_should_handle_get_by_query(Entity\Book $book, Dto\Book $bookDto) {
		$query = new Dto\Query\Book\GetByQuery('test', 'test');

		$this->repository->findBy($query->orderBy, $query->type)->willReturn([$book]);
		$this->converter->convert($book)->willReturn($bookDto);

		$this->handleGetByQuery($query)->shouldHaveType('Dgafka\BookStore\Business\Service\Dto\BookCollection');
	}

	function it_should_handle_get_by_id_query(Entity\Book $book, Dto\Book $bookDto) {
		$query = new Dto\Query\Book\GetByIdQuery('test');

		$this->repository->findById($query->id)->willReturn($book);
		$this->converter->convert($book)->willReturn($bookDto);

		$this->handleGetByIdQuery($query)->shouldReturn($bookDto);
	}

}
