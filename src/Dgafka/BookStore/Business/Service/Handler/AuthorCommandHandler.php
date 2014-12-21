<?php

namespace Dgafka\BookStore\Business\Service\Handler;

use Dgafka\BookStore\Business\Service\Dto\Command;
use Dgafka\BookStore\Business\Service\Repository;
use Dgafka\BookStore\Business\Service\Factory;

class AuthorCommandHandler
{

	/**
	 * @var Repository\Command\AuthorRepository
	 */
	private $repository;

	/**
	 * @var Factory\Author
	 */
	private $factory;

    public function __construct(Repository\Command\AuthorRepository $authorRepository, Factory\Author $factory)
    {
        $this->repository       = $authorRepository;
	    $this->factory          = $factory;
    }

	/**
	 * @param Command\Author\CreateCommand $command
	 */
    public function handleCreateCommand(Command\Author\CreateCommand $command)
    {
        $author = $this->factory->create($command->id, $command->name, $command->surname);

	    $this->repository->save($author);
    }
}
