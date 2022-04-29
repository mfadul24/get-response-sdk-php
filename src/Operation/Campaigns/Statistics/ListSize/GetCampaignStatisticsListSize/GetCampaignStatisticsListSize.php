<?php
namespace Getresponse\Sdk\Operation\Campaigns\Statistics\ListSize\GetCampaignStatisticsListSize;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCampaignStatisticsListSize extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/campaigns/statistics/list-size';


    /**
     * @param GetCampaignStatisticsListSizeSearchQuery $query
     */
    public function __construct(private readonly GetCampaignStatisticsListSizeSearchQuery $query)
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
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, null, null);
    }
}
