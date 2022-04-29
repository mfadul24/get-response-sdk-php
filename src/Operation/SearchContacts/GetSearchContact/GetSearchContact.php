<?php
namespace Getresponse\Sdk\Operation\SearchContacts\GetSearchContact;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetSearchContact extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/search-contacts/{searchContactId}';

    private ?\Getresponse\Sdk\Operation\SearchContacts\GetSearchContact\GetSearchContactFields $fields = null;


    /**
     * @param string $searchContactId
     */
    public function __construct(private $searchContactId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{searchContactId}'],
            [$this->searchContactId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetSearchContactFields $fields)
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
