<?php

declare(strict_types=1);

namespace Light\App\Factory;

use Light\Book\Handler\GetBooksHandler;
use Light\Book\Repository\BookRepository;
use Mezzio\Template\TemplateRendererInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

use function assert;

class BookHandlerFactory
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, string $requestedName): GetBooksHandler
    {
        $repository = $container->get(BookRepository::class);
        $template   = $container->get(TemplateRendererInterface::class);

        assert($repository instanceof BookRepository);
        assert($template instanceof TemplateRendererInterface);

        return new GetBooksHandler($template, $repository);
    }
}
