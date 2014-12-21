<?php

namespace Dgafka\BookStore\Business\Service\Factory;

use Dgafka\BookStore\Business\Model\Entity;

class Author
{

	/**
	 * @param string $id
	 * @param string $name
	 * @param string $surname
	 * @return Entity\Author
	 */
    public function create($id, $name, $surname)
    {

	    $author = new Entity\Author($id, $name, $surname);

	    return $author;
    }

}
