<?php
namespace Getresponse\Sdk\Operation\Contacts\GetContact;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetContact extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/contacts/{contactId}';

    private ?\Getresponse\Sdk\Operation\Contacts\GetContact\GetContactFields $fields = null;


    /**
     * @param string $contactId
     */
    public function __construct(private $contactId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{contactId}'],
            [$this->contactId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetContactFields $fields)
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
