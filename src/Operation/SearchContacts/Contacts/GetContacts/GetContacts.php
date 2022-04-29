<?php
namespace Getresponse\Sdk\Operation\SearchContacts\Contacts\GetContacts;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetContacts extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/search-contacts/{searchContactId}/contacts';

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\SearchContacts\Contacts\GetContacts\GetContactsFields $fields = null;


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
    public function setPagination(Pagination $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }


    /**
     * @return $this
     */
    public function setFields(GetContactsFields $fields)
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
           $this->getPaginationParametersArray($this->pagination),
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
