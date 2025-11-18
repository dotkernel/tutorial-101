<?php

declare(strict_types=1);

namespace Light\App;

use Light\App\Factory\GetIndexViewHandlerFactory;
use Light\App\Handler\GetIndexViewHandler;
use Mezzio\Application;

class ConfigProvider
{
    /**
    @return array{
     *     dependencies: array<mixed>,
     *     templates: array<mixed>,
     * }
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * @return array{
     *     delegators: array<class-string, array<class-string>>,
     *     factories: array<class-string, class-string>,
     * }
     */
    public function getDependencies(): array
    {
        return [
            'delegators' => [
                Application::class => [
                    RoutesDelegator::class,
                ],
            ],
            'factories'  => [
                GetIndexViewHandler::class => GetIndexViewHandlerFactory::class,
            ],
        ];
    }

    /**
     * @return array{
     *     paths: array{
     *          app: array{literal-string&non-falsy-string},
     *          error: array{literal-string&non-falsy-string},
     *          layout: array{literal-string&non-falsy-string},
     *          partial: array{literal-string&non-falsy-string},
     *     }
     * }
     */
    public function getTemplates(): array
    {
        return [
            'paths' => [
                'app'     => [__DIR__ . '/../templates/app'],
                'error'   => [__DIR__ . '/../templates/error'],
                'layout'  => [__DIR__ . '/../templates/layout'],
                'partial' => [__DIR__ . '/../templates/partial'],
            ],
        ];
    }
}
