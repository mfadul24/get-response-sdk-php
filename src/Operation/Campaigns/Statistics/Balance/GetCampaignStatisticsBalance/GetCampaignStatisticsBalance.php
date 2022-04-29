<?php
namespace Getresponse\Sdk\Operation\Campaigns\Statistics\Balance\GetCampaignStatisticsBalance;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCampaignStatisticsBalance extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/campaigns/statistics/balance';


    /**
     * @param GetCampaignStatisticsBalanceSearchQuery $query
     */
    public function __construct(private readonly GetCampaignStatisticsBalanceSearchQuery $query)
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
