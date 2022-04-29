<?php
namespace Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariant;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetVariant extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/products/{productId}/variants/{variantId}';

    private ?\Getresponse\Sdk\Operation\Shops\Products\Variants\GetVariant\GetVariantFields $fields = null;


    /**
     * @param string $shopId
     * @param string $productId
     * @param string $variantId
     */
    public function __construct(private $shopId, private $productId, private $variantId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{productId}', '{variantId}'],
            [$this->shopId, $this->productId, $this->variantId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetVariantFields $fields)
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
