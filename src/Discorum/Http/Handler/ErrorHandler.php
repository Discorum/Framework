<?php

namespace Discorum\Http\Handler;

use Exception;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Handlers\Error;

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