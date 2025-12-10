<?php

declare(strict_types=1);

namespace Light\Book;

use Light\Book\Handler\GetBooksHandler;
use Mezzio\Application;
use Psr\Container\ContainerInterface;

use function assert;

class RoutesDelegator
{
    public function __invoke(ContainerInterface $container, string $serviceName, callable $callback): Application
    {
        $app = $callback();
        assert($app instanceof Application);

        $app->get('/books', [GetBooksHandler::class], 'books::list');

        return $app;
    }
}
