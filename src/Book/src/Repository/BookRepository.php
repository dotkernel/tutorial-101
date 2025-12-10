<?php

declare(strict_types=1);

namespace Light\Book\Repository;

use Light\App\Repository\AbstractRepository;
use Light\Book\Entity\Book;

class BookRepository extends AbstractRepository
{
    /**
     * @return array<int, array{id: non-empty-string, title: string}>
     */
    public function getTitles(): array
    {
        $qb = $this->getQueryBuilder()
            ->select('book.id, book.title')
            ->from(Book::class, 'book');

        return $qb->getQuery()->getResult();
    }

    /**
     * @return array<int, array{id: non-empty-string, author: string}>
     */
    public function getAuthors(): array
    {
        $qb = $this->getQueryBuilder()
            ->select('book.id, book.author')
            ->from(Book::class, 'book');

        return $qb->getQuery()->getResult();
    }
}
