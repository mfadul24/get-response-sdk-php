<?php

namespace Getresponse\Sdk\Authentication;

use Getresponse\Sdk\Client\Authentication\AuthenticationProvider;
use Psr\Http\Message\RequestInterface;

/**
 * Class ApiKey
 * @package Getresponse\Sdk\Authentication
 */
class ApiKey implements AuthenticationProvider
{
    final const HEADER_PREFIX = 'api-key ';

    /**
     * ApiKey constructor.
     * @param string $apiKey
     */
    public function __construct(private $apiKey)
    {
    }

    /**
     * @return RequestInterface
     */
    public function authenticate(RequestInterface $request)
    {
        return $request->withHeader('X-Auth-Token', self::HEADER_PREFIX . $this->apiKey);
    }
}
