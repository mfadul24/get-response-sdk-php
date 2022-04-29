<?php
namespace Getresponse\Sdk\Operation\Shops\Products\GetProducts;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetProducts extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/products';

    private ?\Getresponse\Sdk\Operation\Shops\Products\GetProducts\GetProductsSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\Shops\Products\GetProducts\GetProductsSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\Shops\Products\GetProducts\GetProductsFields $fields = null;


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
    public function setQuery(GetProductsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetProductsSortParams $sort)
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
    public function setFields(GetProductsFields $fields)
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
