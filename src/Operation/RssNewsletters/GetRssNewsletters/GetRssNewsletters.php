<?php
namespace Getresponse\Sdk\Operation\RssNewsletters\GetRssNewsletters;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetRssNewsletters extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/rss-newsletters';

    private ?\Getresponse\Sdk\Operation\RssNewsletters\GetRssNewsletters\GetRssNewslettersSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\RssNewsletters\GetRssNewsletters\GetRssNewslettersSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\RssNewsletters\GetRssNewsletters\GetRssNewslettersFields $fields = null;


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
    public function setQuery(GetRssNewslettersSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetRssNewslettersSortParams $sort)
    {
        $this->sort = $sort;
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
    public function setFields(GetRssNewslettersFields $fields)
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

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, $this->sort, $extra);
    }
}
