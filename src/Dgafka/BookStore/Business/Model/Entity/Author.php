<?php

namespace Dgafka\BookStore\Business\Model\Entity;

class Author
{

	private $id;

	private $name;

	private $surname;

	public function __construct($id, $name, $surname) {
		$this->id   = $id;
		$this->name = $name;
		$this->surname = $surname;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getSurname()
	{
		return $this->surname;
	}

	/**
	 * @param mixed $surname
	 */
	public function setSurname($surname)
	{
		$this->surname = $surname;
	}

}
