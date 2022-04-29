<?php
namespace Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariants;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetVariants extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/products/{productId}/variants';

    private ?\Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariants\GetVariantsSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariants\GetVariantsSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariants\GetVariantsFields $fields = null;


    /**
     * @param string $shopId
     * @param string $productId
     */
    public function __construct(private $shopId, private $productId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{productId}'],
            [$this->shopId, $this->productId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setQuery(GetVariantsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetVariantsSortParams $sort)
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
    public function setFields(GetVariantsFields $fields)
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
