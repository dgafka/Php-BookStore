<?php

namespace Dgafka\BookStore\Business\Service\Dto\Query\Author;

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
