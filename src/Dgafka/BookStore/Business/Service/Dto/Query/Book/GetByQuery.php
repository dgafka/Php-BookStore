<?php

namespace Dgafka\BookStore\Business\Service\Dto\Query\Book;

class GetByQuery
{

	/**
	 * @var string
	 */
	public $orderBy;

	/**
	 * @var string
	 */
	public $type;

	/**
	 * @param string $orderBy
	 * @param string $type
	 */
	public function __construct($orderBy, $type) {
		$this->orderBy = $orderBy;
		$this->type    = $type;
	}

}
