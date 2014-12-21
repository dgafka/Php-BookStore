<?php

namespace Dgafka\BookStore\Business\Service\Dto;

class BookCollection
{

	/**
	 * @var Book;
	 */
	public $books;

	/**
	 * @param array $books
	 */
	public function __construct(array $books) {
		$this->books = $books;
	}

}
