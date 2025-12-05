<?php

declare(strict_types=1);

namespace Light\App\Factory;

use Doctrine\ORM\EntityManager;
use Light\Book\Entity\Book;
use Light\Book\Repository\BookRepository;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

use function assert;

class BookRepositoryFactory
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container): BookRepository
    {
        $entityManager = $container->get(EntityManager::class);

        $repository = $entityManager->getRepository(Book::class);
        assert($repository instanceof BookRepository);

        return $repository;
    }
}
