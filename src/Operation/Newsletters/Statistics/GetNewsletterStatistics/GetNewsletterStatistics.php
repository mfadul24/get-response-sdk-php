<?php
namespace Getresponse\Sdk\Operation\Newsletters\Statistics\GetNewsletterStatistics;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetNewsletterStatistics extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/newsletters/{newsletterId}/statistics';

    private ?\Getresponse\Sdk\Operation\Newsletters\Statistics\GetNewsletterStatistics\GetNewsletterStatisticsSearchQuery $query = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\Newsletters\Statistics\GetNewsletterStatistics\GetNewsletterStatisticsFields $fields = null;


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
    public function setQuery(GetNewsletterStatisticsSearchQuery $query)
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
    public function setFields(GetNewsletterStatisticsFields $fields)
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
