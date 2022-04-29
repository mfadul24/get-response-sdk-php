<?php
namespace Getresponse\Sdk\Operation\Shops\Products\GetProduct;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetProduct extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/products/{productId}';

    private ?\Getresponse\Sdk\Operation\Shops\Products\GetProduct\GetProductFields $fields = null;


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
    public function setFields(GetProductFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getFieldsParameterArray($this->fields);
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
