<?php
namespace Getresponse\Sdk\Operation\Contacts\Activities\GetActivities;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetActivities extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/contacts/{contactId}/activities';

    private ?\Getresponse\Sdk\Operation\Contacts\Activities\GetActivities\GetActivitiesSearchQuery $query = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\Contacts\Activities\GetActivities\GetActivitiesFields $fields = null;


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
    public function setQuery(GetActivitiesSearchQuery $query)
    {
        $this->query = $query;
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
    public function setFields(GetActivitiesFields $fields)
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

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, null, $extra);
    }
}
