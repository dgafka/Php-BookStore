<?php

namespace Dgafka\BookStore\Application\InMemory\Repository\Command;

use Dgafka\BookStore\Business\Service\Repository;
use Dgafka\BookStore\Business\Model\Entity;
use Dgafka\BookStore\Application\InMemory\Repository\Query;

class AuthorRepository implements Repository\Command\AuthorRepository {


	private static $authors;

	public function __construct() {
		self::$authors = [];
    }

	public function save(Entity\Author $author) {

        self::$authors[$author->getId()] = $author;

        Query\AuthorRepository::$authors = self::$authors;
    }

} 