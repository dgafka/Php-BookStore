<?php

namespace Dgafka\BookStore\Business\Service\Service\Converter\Author;

use Dgafka\BookStore\Business\Model\Entity;
use Dgafka\BookStore\Business\Service\Dto;

class EntityToDto
{

    public function convert(Entity\Author $author)
    {
        $authorDto = new Dto\Author($author->getId(), $author->getName(), $author->getSurname());

	    return $authorDto;
    }
}
