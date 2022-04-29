<?php
namespace Getresponse\Sdk\Operation\Model;

class ECommerceTotalSpentCondition extends ConditionType
{
    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $scope
     * @param float $value
     * @param string $currency
     */
    public function __construct(private $operatorType, private $operator, private $scope, private $value, private $currency)
    {
        parent::__construct('ecommerce_total_spent');
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
            'currency' => $this->currency,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
