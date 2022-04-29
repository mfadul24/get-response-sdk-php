<?php
namespace Getresponse\Sdk\Operation\Shops\Taxes\GetTax;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetTax extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/shops/{shopId}/taxes/{taxId}';

    private ?\Getresponse\Sdk\Operation\Shops\Taxes\GetTax\GetTaxFields $fields = null;


    /**
     * @param string $shopId
     * @param string $taxId
     */
    public function __construct(private $shopId, private $taxId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{shopId}', '{taxId}'],
            [$this->shopId, $this->taxId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetTaxFields $fields)
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
