<?php
namespace Getresponse\Sdk\Operation\TransactionalEmails\Statistics\GetStatistics;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetStatistics extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/transactional-emails/statistics';

    private ?\Getresponse\Sdk\Operation\TransactionalEmails\Statistics\GetStatistics\GetStatisticsFields $fields = null;


    /**
     * @param GetStatisticsSearchQuery $query
     */
    public function __construct(private readonly GetStatisticsSearchQuery $query)
    {
    }


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
    public function setFields(GetStatisticsFields $fields)
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

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, null, $extra);
    }
}
