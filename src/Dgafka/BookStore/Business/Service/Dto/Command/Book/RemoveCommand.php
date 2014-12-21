<?php

namespace Dgafka\BookStore\Business\Service\Dto\Command\Book;

class RemoveCommand
{
	/**
	 * @var string
	 */
	public $id;

	/**
	 * @param string $id
	 */
	public function __construct($id) {
		$this->id = $id;
	}

}
