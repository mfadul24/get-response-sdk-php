<?php
namespace Getresponse\Sdk\Operation\Accounts\GetAccounts;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAccounts extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/accounts';

    private ?\Getresponse\Sdk\Operation\Accounts\GetAccounts\GetAccountsFields $fields = null;


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
    public function setFields(GetAccountsFields $fields)
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
