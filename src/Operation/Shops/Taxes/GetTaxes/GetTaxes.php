<?php
namespace Getresponse\Sdk\Operation\Shops\Taxes\GetTaxes;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTaxes extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/taxes';

    private ?\Getresponse\Sdk\Operation\Shops\Taxes\GetTaxes\GetTaxesSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\Shops\Taxes\GetTaxes\GetTaxesSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\Shops\Taxes\GetTaxes\GetTaxesFields $fields = null;


    /**
     * @param string $shopId
     */
    public function __construct(private $shopId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}'],
            [$this->shopId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setQuery(GetTaxesSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetTaxesSortParams $sort)
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
    public function setFields(GetTaxesFields $fields)
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
