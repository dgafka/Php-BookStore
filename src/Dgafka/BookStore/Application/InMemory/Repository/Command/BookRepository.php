<?php

namespace Dgafka\BookStore\Application\InMemory\Repository\Command;

use Dgafka\BookStore\Business\Service\Repository;
use Dgafka\BookStore\Business\Model\Entity;
use Dgafka\BookStore\Application\InMemory\Repository\Query;

class BookRepository implements Repository\Command\BookRepository {

	private static $books;

	public function __construct() {
		self::$books = [];
    }


	public function save(Entity\Book $book) {
        self::$books[$book->getId()] = $book;

        Query\BookRepository::$books = self::$books;
    }

	public function remove(Entity\Book $book) {
		self::$books[$book->getId()] = null;
        unset(self::$books[$book->getId()]);

        Query\BookRepository::$books = self::$books;
    }

    public function findById($id) {
		if (!(array_key_exists($id, self::$books))) {
			return null;
		}

		return self::$books[$id];
    }

} 