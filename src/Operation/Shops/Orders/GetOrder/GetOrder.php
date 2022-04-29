<?php
namespace Getresponse\Sdk\Operation\Shops\Orders\GetOrder;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetOrder extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/orders/{orderId}';

    private ?\Getresponse\Sdk\Operation\Shops\Orders\GetOrder\GetOrderFields $fields = null;


    /**
     * @param string $shopId
     * @param string $orderId
     */
    public function __construct(private $shopId, private $orderId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{orderId}'],
            [$this->shopId, $this->orderId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetOrderFields $fields)
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
