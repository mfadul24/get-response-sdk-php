<?php
namespace Getresponse\Sdk\Operation\Newsletters\GetNewsletters;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetNewsletters extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/newsletters';

    private ?\Getresponse\Sdk\Operation\Newsletters\GetNewsletters\GetNewslettersSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\Newsletters\GetNewsletters\GetNewslettersSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\Newsletters\GetNewsletters\GetNewslettersFields $fields = null;


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
    public function setQuery(GetNewslettersSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetNewslettersSortParams $sort)
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
    public function setFields(GetNewslettersFields $fields)
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
