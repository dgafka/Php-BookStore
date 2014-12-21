<?php

namespace Dgafka\BookStore\Business\Service\Repository\Query;

use Dgafka\BookStore\Business\Model\Entity;

interface AuthorRepository {

	/**
	 * @param $id string
	 * @return Entity\Author
	 */
	public function findById($id);

	/**
	 * @param $orderBy string
	 * @param $type string
	 * @return Entity\Author[]
	 */
	public function findBy($orderBy, $type);

} 