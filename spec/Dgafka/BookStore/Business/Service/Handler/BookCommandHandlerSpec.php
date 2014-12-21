<?php

namespace spec\Dgafka\BookStore\Business\Service\Handler;

use Dgafka\BookStore\Business\Service\Handler\BookCommandHandler;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dgafka\BookStore\Business\Service\Dto\Command;
use Dgafka\BookStore\Business\Service\Repository;
use Dgafka\BookStore\Business\Service\Factory;
use Dgafka\BookStore\Business\Model\Entity;

/**
 * Class BookCommandHandlerSpec
 * @package spec\Dgafka\BookStore\Business\Service\Handler
 * @mixin BookCommandHandler
 */
class BookCommandHandlerSpec extends ObjectBehavior
{

	/**
	 * @var Repository\Command\BookRepository
	 */
	private $bookRepository;
	/**
	 * @var Repository\Query\AuthorRepository
	 */
	private $authorRepository;
	/**
	 * @var Factory\Book
	 */
	private $factory;

	function let(Repository\Command\BookRepository $bookRepository, Repository\Query\AuthorRepository $authorRepository, Factory\Book $bookFactory) {
		$this->bookRepository = $bookRepository;
		$this->authorRepository = $authorRepository;
		$this->factory = $bookFactory;

		$this->beConstructedWith($bookRepository);
		$this->setBookFactory($bookFactory);
		$this->setAuthorRepository($authorRepository);
	}

	function it_should_handle_create_command(Entity\Author $author, Entity\Book $book){
		$command = new Command\Book\CreateCommand('test', 'test', 'test', 'test');

		$this->authorRepository->findById($command->author)->willReturn($author);
		$this->factory->create($command->id, $author, $command->name, $command->description)->willReturn($book);

		$this->bookRepository->save($book)->shouldBeCalledTimes(1);

		$this->handleCreateCommand($command);
	}

	function it_should_handle_change_author_command(Entity\Author $author, Entity\Book $book) {
		$command = new Command\Book\ChangeAuthorCommand('test', 'test');

		$this->authorRepository->findById($command->authorId)->willReturn($author);
		$this->bookRepository->findById($command->bookId)->willReturn($book);
		$book->setAuthor($author)->shouldBeCalledTimes(1);
		$this->bookRepository->save($book)->shouldBeCalledTimes(1);

		$this->handleChangeAuthorCommand($command);
	}

	function it_should_handle_remove_command(Entity\Book $book) {
		$command = new Command\Book\RemoveCommand('test');

		$this->bookRepository->findById($command->id)->willReturn($book);
		$this->bookRepository->remove($book)->shouldBeCalledTimes(1);

		$this->handleRemoveCommand($command);
	}

	function it_should_handle_change_information_command(Entity\Book $book) {
		$command = new Command\Book\ChangeInformationCommand('test', 'test', 'test');

		$this->bookRepository->findById($command->id)->willReturn($book);
		$book->setName($command->name)->shouldBeCalledTimes(1);
		$book->setDescription($command->description)->shouldBeCalledTimes(1);
		$this->bookRepository->save($book)->shouldBeCalledTimes(1);

		$this->handleChangeInformationCommand($command);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\BookStore\Business\Service\Handler\BookCommandHandler');
    }
}
