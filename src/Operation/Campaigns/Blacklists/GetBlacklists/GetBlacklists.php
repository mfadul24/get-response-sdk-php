<?php
namespace Getresponse\Sdk\Operation\Campaigns\Blacklists\GetBlacklists;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetBlacklists extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/campaigns/{campaignId}/blacklists';

    private ?\Getresponse\Sdk\Operation\Campaigns\Blacklists\GetBlacklists\GetBlacklistsSearchQuery $query = null;


    /**
     * @param string $campaignId
     */
    public function __construct(private $campaignId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{campaignId}'],
            [$this->campaignId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setQuery(GetBlacklistsSearchQuery $query)
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
