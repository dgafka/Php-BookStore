<?php

namespace Dgafka\BookStore\Business\Service\Dto;

class Book
{
	/**
	 * @var string
	 */
	public $id;

	/**
	 * @var Author
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
	 * @param Author $author
	 * @param string $name
	 * @param string $description
	 */
	public function __construct($id, Author $author, $name, $description) {
		$this->id     = $id;
		$this->author = $author;
		$this->name   = $name;
		$this->description = $description;
	}

}
