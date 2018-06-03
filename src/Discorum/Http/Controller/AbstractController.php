<?php 

namespace Discorum\Http\Controller;

use Interpol\Container\ContainerInterface;

abstract class AbstractController
{
	/**
     * The container interface
     * 
     * @var \Interpol\Container\ContainerInterface
     */
	protected $container;

	/**
     * Constructor
     * 
     * @param ContainerInterface $container
     */
	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}

	/**
     * Retrieve container items
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