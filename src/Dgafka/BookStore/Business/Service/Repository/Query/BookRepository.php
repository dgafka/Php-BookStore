<?php

namespace Dgafka\BookStore\Business\Service\Repository\Query;

use Dgafka\BookStore\Business\Model\Entity;

/**
 * Interface BookRepository
 * @package Dgafka\BookStore\Business\Service\Repository\Query
 */
interface BookRepository {

	/**
	 * @param $id string
	 * @return Entity\Book
	 */
	public function findById($id);

	/**
	 * @param $orderBy string
	 * @param $type string
	 * @return Entity\Book[]
	 */
	public function findBy($orderBy, $type);


} 