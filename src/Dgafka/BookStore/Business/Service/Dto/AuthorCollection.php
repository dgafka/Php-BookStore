<?php

namespace Dgafka\BookStore\Business\Service\Dto;

class AuthorCollection
{

	/**
	 * @var Author[]
	 */
	public $authors;

	/**
	 * @param array $authors
	 */
	public function __construct(array $authors) {
		$this->authors = $authors;
	}

}
