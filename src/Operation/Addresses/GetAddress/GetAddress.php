<?php
namespace Getresponse\Sdk\Operation\Addresses\GetAddress;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAddress extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/addresses/{addressId}';

    private ?\Getresponse\Sdk\Operation\Addresses\GetAddress\GetAddressFields $fields = null;


    /**
     * @param string $addressId
     */
    public function __construct(private $addressId)
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
     * @return $this
     */
    public function setFields(GetAddressFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getFieldsParameterArray($this->fields);
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
