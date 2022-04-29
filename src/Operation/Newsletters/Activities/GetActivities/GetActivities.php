<?php
namespace Getresponse\Sdk\Operation\Newsletters\Activities\GetActivities;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetActivities extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/newsletters/{newsletterId}/activities';

    private ?\Getresponse\Sdk\Operation\Newsletters\Activities\GetActivities\GetActivitiesSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\Newsletters\Activities\GetActivities\GetActivitiesSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;


    /**
     * @param string $newsletterId
     */
    public function __construct(private $newsletterId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{newsletterId}'],
            [$this->newsletterId],
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
    public function setSort(GetActivitiesSortParams $sort)
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
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getPaginationParametersArray($this->pagination)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, $this->sort, $extra);
    }
}
