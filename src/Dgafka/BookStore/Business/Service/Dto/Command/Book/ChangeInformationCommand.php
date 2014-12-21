<?php

namespace Dgafka\BookStore\Business\Service\Dto\Command\Book;

class ChangeInformationCommand
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
	public $description;

	/**
	 * @param string $id
	 * @param string $name
	 * @param string $description
	 */
	public function __construct($id, $name, $description) {
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
	}

}
