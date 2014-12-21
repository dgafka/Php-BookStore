<?php

namespace Dgafka\BookStore\Business\Service\Repository\Command;

use Dgafka\BookStore\Business\Model\Entity;

interface AuthorRepository {

	/**
	 * @param Entity\Author $author
	 * @return null
	 */
	public function save(Entity\Author $author);

} 