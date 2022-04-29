<?php

namespace Getresponse\Sdk\Authentication;

use Getresponse\Sdk\Client\Authentication\AuthenticationProvider;
use Psr\Http\Message\RequestInterface;

/**
 * Class OAuth
 * @package Getresponse\Sdk\Authentication
 */
class OAuth implements AuthenticationProvider
{
    final const HEADER_PREFIX = 'Bearer ';

    /**
     * OAuth constructor.
     * @param string $accessToken
     */
    public function __construct(private $accessToken)
    {
    }

    /**
     * @return RequestInterface
     */
    public function authenticate(RequestInterface $request)
    {
        return $request->withHeader('Authorization', self::HEADER_PREFIX . $this->accessToken);
    }
}
