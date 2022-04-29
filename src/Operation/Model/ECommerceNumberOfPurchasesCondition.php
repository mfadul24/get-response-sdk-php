<?php
namespace Getresponse\Sdk\Operation\Model;

class ECommerceNumberOfPurchasesCondition extends ConditionType
{
    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $scope
     * @param int $value
     */
    public function __construct(private $operatorType, private $operator, private $scope, private $value)
    {
        parent::__construct('ecommerce_number_of_purchases');
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'scope' => $this->scope,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
