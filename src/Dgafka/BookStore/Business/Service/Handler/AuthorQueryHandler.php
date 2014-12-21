<?php

namespace Dgafka\BookStore\Business\Service\Handler;

use Dgafka\BookStore\Business\Service\Dto;
use Dgafka\BookStore\Business\Service\Repository;
use Dgafka\BookStore\Business\Service\Service\Converter;
use Dgafka\BookStore\Business\Service\Handler\Exception;
use Dgafka\BookStore\Business\Model\Entity;

class AuthorQueryHandler
{

	/**
	 * @var Repository\Query\AuthorRepository
	 */
	private $repository;

	/**
	 * @var Converter\Author\EntityToDto
	 */
	private $converter;

    public function __construct(Repository\Query\AuthorRepository $repository, Converter\Author\EntityToDto $converter)
    {
        $this->repository = $repository;
	    $this->converter  = $converter;
    }

    public function handleGetByQuery(Dto\Query\Author\GetByQuery $query)
    {
        $authorResults = [];

	    $authorCollection = $this->repository->findBy($query->orderBy, $query->type);
	    if(empty($authorCollection)) {
		    throw new Exception\NotFoundException("Results not found");
	    }

	    foreach($authorCollection as $author) {
		    $authorResults[] = $this->converter->convert($author);
	    }

	    $authorCollection = new Dto\AuthorCollection($authorResults);

	    return $authorCollection;
    }

    public function handleGetByIdQuery(Dto\Query\Author\GetByIdQuery $query)
    {

	    $author = $this->repository->findById($query->id);
	    if(!($author instanceof Entity\Author)) {
		    throw new Exception\NotFoundException("Results not found.");
	    }

	    $author = $this->converter->convert($author);

        return $author;
    }
}
