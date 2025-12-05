<?php

declare(strict_types=1);

namespace Light\Book;

use Doctrine\ORM\Mapping\Driver\AttributeDriver;
use Doctrine\Persistence\Mapping\Driver\MappingDriver;
use Light\App\Factory\BookHandlerFactory;
use Light\App\Factory\BookRepositoryFactory;
use Light\Book\Handler\GetBooksHandler;
use Light\Book\Repository\BookRepository;
use Mezzio\Application;

/**
 * @phpstan-type ConfigType array{
 *      doctrine: DoctrineConfigType,
 * }
 * @phpstan-type DoctrineConfigType array{
 *      driver: array{
 *          orm_default: array{
 *              drivers: array<non-empty-string, non-empty-string>,
 *          },
 *          BookEntities: array{
 *              class: class-string<MappingDriver>,
 *              cache: non-empty-string,
 *              paths: non-empty-string[],
 *          },
 *      },
 * }
 * @phpstan-type DependenciesType array{
 *       delegators: array<class-string, array<class-string>>,
 *       factories: array<class-string, class-string>,
 *  }
 */
class ConfigProvider
{
    /**
     * @return ConfigType
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'doctrine'     => $this->getDoctrineConfig(),
        ];
    }

    /**
     * @return DependenciesType
     */
    private function getDependencies(): array
    {
        return [
            'delegators' => [
                Application::class => [
                    RoutesDelegator::class,
                ],
            ],
            'factories'  => [
                GetBooksHandler::class => BookHandlerFactory::class,
                BookRepository::class  => BookRepositoryFactory::class,
            ],
        ];
    }

    /**
     * @return DoctrineConfigType
     */
    private function getDoctrineConfig(): array
    {
        return [
            'driver' => [
                'orm_default'  => [
                    'drivers' => [
                        'Light\Book\Entity' => 'BookEntities',
                    ],
                ],
                'BookEntities' => [
                    'class' => AttributeDriver::class,
                    'cache' => 'array',
                    'paths' => [__DIR__ . '/Entity'],
                ],
            ],
        ];
    }
}
