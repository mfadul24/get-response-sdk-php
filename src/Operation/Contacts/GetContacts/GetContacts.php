<?php
namespace Getresponse\Sdk\Operation\Contacts\GetContacts;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetContacts extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/contacts';

    private ?\Getresponse\Sdk\Operation\Contacts\GetContacts\GetContactsSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\Contacts\GetContacts\GetContactsSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\Contacts\GetContacts\GetContactsFields $fields = null;

    private ?\Getresponse\Sdk\Operation\Contacts\GetContacts\GetContactsAdditionalFlags $additionalFlags = null;


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
    public function setQuery(GetContactsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetContactsSortParams $sort)
    {
        $this->sort = $sort;
        return $this;
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
     * @return $this
     */
    public function setAdditionalFlags(GetContactsAdditionalFlags $additionalFlags)
    {
        $this->additionalFlags = $additionalFlags;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getPaginationParametersArray($this->pagination),
           $this->getFieldsParameterArray($this->fields),
           $this->getAdditionalFlagsParameterArray($this->additionalFlags)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, $this->sort, $extra);
    }
}
