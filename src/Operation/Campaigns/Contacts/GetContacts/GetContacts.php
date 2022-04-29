<?php
namespace Getresponse\Sdk\Operation\Campaigns\Contacts\GetContacts;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetContacts extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/campaigns/{campaignId}/contacts';

    private ?\Getresponse\Sdk\Operation\Campaigns\Contacts\GetContacts\GetContactsSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\Campaigns\Contacts\GetContacts\GetContactsSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\Campaigns\Contacts\GetContacts\GetContactsFields $fields = null;


    /**
     * @param string $campaignId
     */
    public function __construct(private $campaignId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{campaignId}'],
            [$this->campaignId],
            self::METHOD_URL
        );
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
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getPaginationParametersArray($this->pagination),
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, $this->sort, $extra);
    }
}
