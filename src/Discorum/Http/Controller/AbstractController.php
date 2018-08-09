<?php 

/**
 * This file is part of the Discorum package.
 *
 * (c) Nicholas Sylke <hello@nsylke.me>
 * (c) TJ Richards <hello@tjr.gg>
 *
 * For the full copyright and license information, please vieew the
 * LICENSE file that was distributed with this source code.
 */

namespace Discorum\Http\Controller;

use Psr\Container\ContainerInterface;

/**
 * The base controller for all controllers within Discorum.
 * 
 * @author Nicholas Sylke <hello@nsylke.me>
 * @author TJ Richards <hello@tjr.gg>
 */
abstract class AbstractController
{
    /**
     * The container interface.
     * 
     * @var \Psr\Container\ContainerInterface
     */
    protected $container;

    /**
     * Constructor.
     * 
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Retrieve container items.
     * 
     * @param string $property The property item
     */
    public function __get(string $property)
    {
        if ($this->container->has($property)) {
            return $this->container->get($property);
        }

        trigger_error('Undefined property: ' . $property);
    }
}