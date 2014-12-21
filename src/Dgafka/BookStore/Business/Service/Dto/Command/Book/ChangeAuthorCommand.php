<?php

namespace Dgafka\BookStore\Business\Service\Dto\Command\Book;

class ChangeAuthorCommand
{

	/**
	 * @var string
	 */
	public $bookId;

	/**
	 * @var string
	 */
	public $authorId;

	/**
	 * @param string $bookId
	 * @param string $authorId
	 */
	public function __construct($bookId, $authorId) {
		$this->bookId = $bookId;
		$this->authorId = $authorId;
	}

}
