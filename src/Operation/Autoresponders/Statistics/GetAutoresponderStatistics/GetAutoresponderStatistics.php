<?php
namespace Getresponse\Sdk\Operation\Autoresponders\Statistics\GetAutoresponderStatistics;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAutoresponderStatistics extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/autoresponders/{autoresponderId}/statistics';

    private ?\Getresponse\Sdk\Operation\Autoresponders\Statistics\GetAutoresponderStatistics\GetAutoresponderStatisticsSearchQuery $query = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\Autoresponders\Statistics\GetAutoresponderStatistics\GetAutoresponderStatisticsFields $fields = null;


    /**
     * @param string $autoresponderId
     */
    public function __construct(private $autoresponderId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{autoresponderId}'],
            [$this->autoresponderId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setQuery(GetAutoresponderStatisticsSearchQuery $query)
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
    public function setFields(GetAutoresponderStatisticsFields $fields)
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
