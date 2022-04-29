<?php
namespace Getresponse\Sdk\Operation\Addresses\GetAddresses;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetAddresses extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/addresses';

    private ?\Getresponse\Sdk\Operation\Addresses\GetAddresses\GetAddressesSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\Addresses\GetAddresses\GetAddressesSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\Addresses\GetAddresses\GetAddressesFields $fields = null;


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
    public function setQuery(GetAddressesSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetAddressesSortParams $sort)
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
    public function setFields(GetAddressesFields $fields)
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
