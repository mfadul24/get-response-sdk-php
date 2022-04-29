<?php
namespace Getresponse\Sdk\Operation\Accounts\Blacklists\GetBlacklists;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetBlacklists extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/accounts/blacklists';

    private ?\Getresponse\Sdk\Operation\Accounts\Blacklists\GetBlacklists\GetBlacklistsSearchQuery $query = null;


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
