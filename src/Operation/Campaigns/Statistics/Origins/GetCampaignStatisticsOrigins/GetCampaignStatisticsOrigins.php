<?php
namespace Getresponse\Sdk\Operation\Campaigns\Statistics\Origins\GetCampaignStatisticsOrigins;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCampaignStatisticsOrigins extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/campaigns/statistics/origins';


    /**
     * @param GetCampaignStatisticsOriginsSearchQuery $query
     */
    public function __construct(private readonly GetCampaignStatisticsOriginsSearchQuery $query)
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
