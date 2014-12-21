<?php

namespace Dgafka\BookStore\Business\Service\Repository\Command;

use Dgafka\BookStore\Business\Model\Entity;

interface BookRepository {

	/**
	 * @param Entity\Book $book
	 * @return null
	 */
	public function save(Entity\Book $book);

	/**
	 * @param Entity\Book $book
	 * @return null
	 */
	public function remove(Entity\Book $book);

	/**
	 * @param string $id
	 * @return mixed
	 */
	public function findById($id);

} 