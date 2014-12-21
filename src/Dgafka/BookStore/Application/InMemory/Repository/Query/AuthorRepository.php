<?php

namespace Dgafka\BookStore\Application\InMemory\Repository\Query;

use Dgafka\BookStore\Business\Service\Repository;

class AuthorRepository implements Repository\Query\AuthorRepository {

	public static $authors;

	public function __construct() {
		self::$authors = [];
    }

	public function findById($id) {
        if (!(array_key_exists($id, self::$authors))) {
            return null;
        }

		return self::$authors[$id];
    }

    public function findBy($orderBy, $type) {
		return self::$authors;
	}

} 