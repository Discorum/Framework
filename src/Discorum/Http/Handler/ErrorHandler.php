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

namespace Discorum\Http\Handler;

use Exception;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Handlers\Error;

/**
 * The base controller for all controllers within Discorum.
 * 
 * @author Nicholas Sylke <hello@nsylke.me>
 * @author TJ Richards <hello@tjr.gg>
 */
class ErrorHandler extends Error
{
	/**
	 * @inheritdoc
	 */
	public function __construct(bool $details)
	{
		parent::__construct($details)
	}

	/**
	 * @inheritdoc
	 */
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response, Exception $exception)
	{
		return parent::__invoke($request, $response, $exception);
	}
}