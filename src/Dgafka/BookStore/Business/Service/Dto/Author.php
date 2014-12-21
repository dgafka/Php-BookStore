<?php

namespace Dgafka\BookStore\Business\Service\Dto;

class Author
{

	/**
	 * @var string
	 */
	public $id;

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var string
	 */
	public $surname;

	/**
	 * @param string $id
	 * @param string $name
	 * @param string $surname
	 */
	public function __construct($id, $name, $surname) {
		$this->id      = $id;
		$this->name    = $name;
		$this->surname = $surname;
	}

}
