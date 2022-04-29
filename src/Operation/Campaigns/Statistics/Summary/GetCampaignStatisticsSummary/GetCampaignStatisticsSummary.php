<?php
namespace Getresponse\Sdk\Operation\Campaigns\Statistics\Summary\GetCampaignStatisticsSummary;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCampaignStatisticsSummary extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/campaigns/statistics/summary';

    private ?\Getresponse\Sdk\Operation\Campaigns\Statistics\Summary\GetCampaignStatisticsSummary\GetCampaignStatisticsSummarySearchQuery $query = null;


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
    public function setQuery(GetCampaignStatisticsSummarySearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, null, null);
    }
}
