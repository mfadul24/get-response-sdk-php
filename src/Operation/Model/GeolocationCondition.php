<?php
namespace Getresponse\Sdk\Operation\Model;

class GeolocationCondition extends ConditionType
{
    /**
     * @param string $scope
     * @param string $operatorType
     * @param string $operator
     * @param string $value
     */
    public function __construct(private $scope, private $operatorType, private $operator, private $value)
    {
        parent::__construct('geo');
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'scope' => $this->scope,
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
