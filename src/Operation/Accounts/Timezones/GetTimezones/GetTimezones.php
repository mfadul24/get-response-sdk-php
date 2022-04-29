<?php
namespace Getresponse\Sdk\Operation\Accounts\Timezones\GetTimezones;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTimezones extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/accounts/timezones';

    private ?\Getresponse\Sdk\Operation\Accounts\Timezones\GetTimezones\GetTimezonesFields $fields = null;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @return $this
     */
    public function setFields(GetTimezonesFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
