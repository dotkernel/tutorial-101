<?php

/**
 * Uncomment below configurations and customize extra providers according to your project's needs.
 *
 * Improve extra data processors by extending them via a custom class and configure it under *Provider.processor.class.
 * Overwrite extra data processors by creating a custom class and configure it under *Provider.processor.class.
 *
 * Read more about providers/processors here: https://docs.dotkernel.org/dot-errorhandler/v4/extra/introduction/
 */

declare(strict_types=1);

use Dot\ErrorHandler\Extra\ExtraProvider;
use Dot\ErrorHandler\Extra\Provider\CookieProvider;
use Dot\ErrorHandler\Extra\Provider\HeaderProvider;
use Dot\ErrorHandler\Extra\Provider\RequestProvider;
use Dot\ErrorHandler\Extra\Provider\ServerProvider;
use Dot\ErrorHandler\Extra\Provider\SessionProvider;
use Dot\ErrorHandler\Extra\Provider\TraceProvider;
use Dot\Log\Formatter\Json;
use Dot\Log\Logger;

return [
    'dot-errorhandler' => [
        'loggerEnabled'           => true,
        'logger'                  => 'dot-log.default_logger',
        ExtraProvider::CONFIG_KEY => [
            CookieProvider::class  => [
                'enabled' => false,
//                'processor' => [
//                    'class'               => \Dot\ErrorHandler\Extra\Processor\CookieProcessor::class,
//                    'replacementStrategy' => \Dot\ErrorHandler\Extra\ReplacementStrategy::Full,
//                    'sensitiveParameters' => [
//                        \Dot\ErrorHandler\Extra\Processor\ProcessorInterface::ALL,
//                    ],
//                ],
            ],
            HeaderProvider::class  => [
                'enabled' => false,
//                'processor' => [
//                    'class'               => \Dot\ErrorHandler\Extra\Processor\HeaderProcessor::class,
//                    'replacementStrategy' => \Dot\ErrorHandler\Extra\ReplacementStrategy::Full,
//                    'sensitiveParameters' => [],
//                ],
            ],
            RequestProvider::class => [
                'enabled' => false,
//                'processor' => [
//                    'class'               => \Dot\ErrorHandler\Extra\Processor\RequestProcessor::class,
//                    'replacementStrategy' => \Dot\ErrorHandler\Extra\ReplacementStrategy::Full,
//                    'sensitiveParameters' => [
//                        'password',
//                    ],
//                ],
            ],
            ServerProvider::class  => [
                'enabled' => true,
//                'processor' => [
//                    'class'               => \Dot\ErrorHandler\Extra\Processor\ServerProcessor::class,
//                    'replacementStrategy' => \Dot\ErrorHandler\Extra\ReplacementStrategy::Full,
//                    'sensitiveParameters' => [
//                        \Dot\ErrorHandler\Extra\Processor\ProcessorInterface::ALL,
//                    ],
//                ],
            ],
            SessionProvider::class => [
                'enabled' => false,
//                'processor' => [
//                    'class'               => \Dot\ErrorHandler\Extra\Processor\SessionProcessor::class,
//                    'replacementStrategy' => \Dot\ErrorHandler\Extra\ReplacementStrategy::Full,
//                    'sensitiveParameters' => [],
//                ],
            ],
            TraceProvider::class   => [
                'enabled' => true,
//                'processor' => [
//                    'class'               => \Dot\ErrorHandler\Extra\Processor\TraceProcessor::class,
//                    'replacementStrategy' => \Dot\ErrorHandler\Extra\ReplacementStrategy::Full,
//                    'sensitiveParameters' => [],
//                ],
            ],
        ],
    ],
    'dot_log'          => [
        'loggers' => [
            'default_logger' => [
                'writers' => [
                    'FileWriter' => [
                        'name'    => 'stream',
                        'level'   => Logger::ALERT,
                        'options' => [
                            'stream' => __DIR__ . '/../../log/error-log-{Y}-{m}-{d}.log',
                            // explicitly log all messages
                            'filters'   => [
                                'allMessages' => [
                                    'name'    => 'level',
                                    'options' => [
                                        'operator' => '>=',
                                        'level'    => Logger::EMERG,
                                    ],
                                ],
                            ],
                            'formatter' => [
                                'name' => Json::class,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
