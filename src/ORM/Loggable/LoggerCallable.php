<?php

/**
 * This file is part of the KnpDoctrineBehaviors package.
 *
 * (c) KnpLabs <http://knplabs.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Knp\DoctrineBehaviors\ORM\Loggable;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * LoggerCallable can be invoked to log messages using symfony2 logger
 */
class LoggerCallable
{
    /**
     * @var Container
     */
    private $container;

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __invoke($message)
    {
        $this->container->get('logger')->debug($message);
    }
}
