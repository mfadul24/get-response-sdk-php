<?php
namespace Getresponse\Sdk\Operation\Campaigns\Statistics\Subscriptions\GetCampaignStatisticsSubscriptions;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCampaignStatisticsSubscriptions extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/campaigns/statistics/subscriptions';


    /**
     * @param GetCampaignStatisticsSubscriptionsSearchQuery $query
     */
    public function __construct(private readonly GetCampaignStatisticsSubscriptionsSearchQuery $query)
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
