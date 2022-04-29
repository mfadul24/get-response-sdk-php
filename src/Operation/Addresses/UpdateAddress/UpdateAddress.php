<?php
namespace Getresponse\Sdk\Operation\Addresses\UpdateAddress;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\UpdateAddress as ModelUpdateAddress;

class UpdateAddress extends CommandOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/addresses/{addressId}';


    /**
     * @param ModelUpdateAddress $data
     * @param string $addressId
     */
    public function __construct(protected ModelUpdateAddress $data, private $addressId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{addressId}'],
            [$this->addressId],
            self::METHOD_URL
        );
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
