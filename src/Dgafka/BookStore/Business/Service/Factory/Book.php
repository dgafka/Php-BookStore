<?php

namespace Dgafka\BookStore\Business\Service\Factory;

use Dgafka\BookStore\Business\Model\Entity;

class Book
{

	/**
	 * @param string $id
	 * @param Entity\Author $author
	 * @param string $name
	 * @param string $description
	 * @return Entity\Book
	 */
    public function create($id, Entity\Author $author, $name, $description)
    {
        $book = new Entity\Book($id, $author, $name, $description);

	    return $book;
    }
}
