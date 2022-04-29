<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\Statistics\GetRssNewslettersStatistics;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetRssNewslettersStatistics extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/rss-newsletters/statistics';

    private ?\Getresponse\Sdk\Operation\RssNewsletters\Statistics\GetRssNewslettersStatistics\GetRssNewslettersStatisticsSearchQuery $query = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\RssNewsletters\Statistics\GetRssNewslettersStatistics\GetRssNewslettersStatisticsFields $fields = null;


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
    public function setQuery(GetRssNewslettersStatisticsSearchQuery $query)
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
    public function setFields(GetRssNewslettersStatisticsFields $fields)
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
