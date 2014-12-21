<?php

namespace Dgafka\BookStore\Business\Service\Service\Converter\Book;

use Dgafka\BookStore\Business\Service\Service\Converter;
use Dgafka\BookStore\Business\Model\Entity;
use Dgafka\BookStore\Business\Service\Dto;

class EntityToDto
{

	/**
	 * @var Converter\Author\EntityToDto
	 */
	private $authorConverter;

    public function __construct(Converter\Author\EntityToDto $converter)
    {
        $this->authorConverter = $converter;
    }

    public function convert(Entity\Book $book)
    {
	    $authorDto = $this->authorConverter->convert($book->getAuthor());
        $bookDto   = new Dto\Book($book->getId(), $authorDto, $book->getName(), $book->getDescription());

	    return $bookDto;
    }
}
