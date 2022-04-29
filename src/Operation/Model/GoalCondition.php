<?php
namespace Getresponse\Sdk\Operation\Model;

class GoalCondition extends ConditionType
{
    private string|int $value = self::FIELD_NOT_SET;


    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $scope
     */
    public function __construct(private $operatorType, private $operator, private $scope)
    {
        parent::__construct('goal');
    }


    /**
     * @param int $value
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
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'value' => $this->value,
            'scope' => $this->scope,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
