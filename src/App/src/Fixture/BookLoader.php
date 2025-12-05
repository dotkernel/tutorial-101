<?php

declare(strict_types=1);

namespace Light\App\Fixture;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Light\Book\Entity\Book;

class BookLoader extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $book1 = new Book();
        $book1->setTitle('A Game of Thrones');
        $book1->setAuthor('George Martin');
        $manager->persist($book1);

        $book2 = new Book();
        $book2->setTitle('The Lord of the Rings');
        $book2->setAuthor('J.R.R. Tolkien');
        $manager->persist($book2);

        $book3 = new Book();
        $book3->setTitle('Dune');
        $book3->setAuthor('Frank Herbert');
        $manager->persist($book3);

        $manager->flush();
    }
}
