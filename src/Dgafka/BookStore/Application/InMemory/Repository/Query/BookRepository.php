<?php

namespace Dgafka\BookStore\Application\InMemory\Repository\Query;

use Dgafka\BookStore\Business\Service\Repository;

class BookRepository implements Repository\Query\BookRepository {

	public static $books;

	public function __construct() {
		self::$books = [];
    }

	public function findById($id) {
        if (!(array_key_exists($id, self::$books))) {
            return null;
        }

		return self::$books[$id];
    }

    public function findBy($orderBy, $type) {
		return self::$books;
	}

} 