<?php
namespace Getresponse\Sdk\Operation\Shops\Carts\GetCart;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetCart extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/carts/{cartId}';

    private ?\Getresponse\Sdk\Operation\Shops\Carts\GetCart\GetCartFields $fields = null;


    /**
     * @param string $shopId
     * @param string $cartId
     */
    public function __construct(private $shopId, private $cartId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{cartId}'],
            [$this->shopId, $this->cartId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetCartFields $fields)
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
