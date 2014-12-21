<?php

namespace Dgafka\BookStore\Business\Service\Dto\Query\Book;

class GetByIdQuery
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
