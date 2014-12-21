<?php

namespace Dgafka\BookStore\Business\Service\Handler;

use Dgafka\BookStore\Business\Service\Service\Converter;
use Dgafka\BookStore\Business\Service\Repository;
use Dgafka\BookStore\Business\Service\Dto;
use Dgafka\BookStore\Business\Model\Entity;

class BookQueryHandler
{

	/**
	 * @var Repository\Query\BookRepository
	 */
	private $repository;

	/**
	 * @var Converter\Book\EntityToDto
	 */
	private $converter;

	public function __construct(Repository\Query\BookRepository $repository, Converter\Book\EntityToDto $converter)
	{
		$this->repository = $repository;
		$this->converter  = $converter;
	}

	public function handleGetByQuery(Dto\Query\Book\GetByQuery $query)
	{
		$bookResults = [];

		$bookCollection = $this->repository->findBy($query->orderBy, $query->type);
		if(empty($bookCollection)) {
			throw new Exception\NotFoundException("Results not found");
		}

		foreach($bookCollection as $book) {
			$bookResults[] = $this->converter->convert($book);
		}

		$bookCollection = new Dto\BookCollection($bookResults);

		return $bookCollection;
	}

	public function handleGetByIdQuery(Dto\Query\Book\GetByIdQuery $query)
	{

		$book = $this->repository->findById($query->id);
		if(!($book instanceof Entity\Book)) {
			throw new Exception\NotFoundException("Results not found.");
		}

		$book = $this->converter->convert($book);

		return $book;
	}

}
