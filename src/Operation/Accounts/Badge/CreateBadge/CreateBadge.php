<?php
namespace Getresponse\Sdk\Operation\Accounts\Badge\CreateBadge;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;

class CreateBadge extends CommandOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/accounts/badge';


    /**
     * @param \Getresponse\Sdk\Operation\Model\AccountBadgeStatus $data
     */
    public function __construct(protected \Getresponse\Sdk\Operation\Model\AccountBadgeStatus $data)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate();
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return Operation::POST;
    }


    /**
     * @return string
     * @throws InvalidCommandDataException
     */
    public function getBody()
    {
        return $this->encode($this->data->jsonSerialize());
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 200;
    }
}
