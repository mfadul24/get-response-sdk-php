<?php
namespace Getresponse\Sdk\Operation\Shops\Orders\CreateOrder;

use Getresponse\Sdk\Client\Exception\InvalidCommandDataException;
use Getresponse\Sdk\Client\Operation\CommandOperation;
use Getresponse\Sdk\Client\Operation\Operation;
use Getresponse\Sdk\OperationVersionTrait;
use Getresponse\Sdk\Operation\Model\NewOrder;

class CreateOrder extends CommandOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/orders';

    private ?\Getresponse\Sdk\Operation\Shops\Orders\CreateOrder\CreateOrderAdditionalFlags $additionalFlags = null;


    /**
     * @param NewOrder $data
     * @param string $shopId
     */
    public function __construct(protected NewOrder $data, private $shopId)
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
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getAdditionalFlagsParameterArray($this->additionalFlags);
        return $this->buildUrlFromTemplate() . $this->buildUrlQuery(null, $extra);
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return Operation::POST;
    }


    /**
     * @return string
     * @throws InvalidCommandDataException
     */
    public function getBody()
    {
        return $this->encode($this->data->jsonSerialize());
    }


    /**
     * @return $this
     */
    public function setAdditionalFlags(CreateOrderAdditionalFlags $additionalFlags)
    {
        $this->additionalFlags = $additionalFlags;
        return $this;
    }


    /**
     * @return int
     */
    public function getSuccessCode()
    {
        return 201;
    }
}
