<?php

namespace Dgafka\BookStore\Business\Service\Dto\Command\Book;

class CreateCommand
{
	/**
	 * @var string
	 */
	public $id;
	/**
	 * @var string
	 */
	public $author;
	/**
	 * @var string
	 */
	public $name;
	/**
	 * @var string
	 */
	public $description;


	/**
	 * @param string $id
	 * @param string $author
	 * @param string $name
	 * @param string $description
	 */
	public function __construct($id, $author, $name, $description) {
		$this->id = $id;
		$this->author = $author;
		$this->name = $name;
		$this->description = $description;
	}

}
