<?php

declare(strict_types=1);

namespace Light\Page;

use Light\Page\Factory\GetPageViewHandlerFactory;
use Light\Page\Factory\PageServiceFactory;
use Light\Page\Handler\GetPageViewHandler;
use Light\Page\Service\PageService;
use Light\Page\Service\PageServiceInterface;
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
    @return array{
     *     delegators: array<class-string, array<class-string>>,
     *     factories: array<class-string, class-string>,
     *     aliases: array<class-string, class-string>
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
                GetPageViewHandler::class => GetPageViewHandlerFactory::class,
                PageService::class        => PageServiceFactory::class,
            ],
            'aliases'    => [
                PageServiceInterface::class => PageService::class,
            ],
        ];
    }

    /**
    @return array{
     *     paths: array{page: array{literal-string&non-falsy-string}}
     * }
     */
    public function getTemplates(): array
    {
        return [
            'paths' => [
                'page' => [__DIR__ . '/../templates/page'],
            ],
        ];
    }
}
