<?php
namespace Getresponse\Sdk\Operation\Model;

class ECommerceProductPurchasedCondition extends ConditionType
{
    private string $value = self::FIELD_NOT_SET;


    /**
     * @param string $shopScope
     * @param string $categoryScope
     * @param string $operatorType
     * @param string $operator
     * @param string $productScope
     * @param string $dateOperator
     */
    public function __construct(private $shopScope, private $categoryScope, private $operatorType, private $operator, private $productScope, private $dateOperator)
    {
        parent::__construct('ecommerce_product_purchased');
    }


    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'shopScope' => $this->shopScope,
            'categoryScope' => $this->categoryScope,
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'productScope' => $this->productScope,
            'dateOperator' => $this->dateOperator,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
