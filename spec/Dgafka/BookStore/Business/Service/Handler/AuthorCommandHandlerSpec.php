<?php

namespace spec\Dgafka\BookStore\Business\Service\Handler;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Dgafka\BookStore\Business\Service\Repository;

use Dgafka\BookStore\Business\Service\Factory;
use Dgafka\BookStore\Business\Service\Dto\Command;
use Dgafka\BookStore\Business\Model\Entity;

class AuthorCommandHandlerSpec extends ObjectBehavior
{

	/**
	 * @var Repository\Command\AuthorRepository
	 */
	private $repository;

	/**
	 * @var Factory\Author
	 */
	private $factory;

	function let(Repository\Command\AuthorRepository $authorRepository, Factory\Author $authorFactory) {
		$this->repository = $authorRepository;
		$this->factory    = $authorFactory;

		$this->beConstructedWith($authorRepository, $authorFactory);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\BookStore\Business\Service\Handler\AuthorCommandHandler');
    }

	function it_should_handle_create_command(Entity\Author $author) {

		$command = new Command\Author\CreateCommand('test', 'test', 'test');

		$this->factory->create($command->id, $command->name, $command->surname)->willReturn($author);
		$this->repository->save($author)->shouldBeCalledTimes(1);

		$this->handleCreateCommand($command);
	}


}
