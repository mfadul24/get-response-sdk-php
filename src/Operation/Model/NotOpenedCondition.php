<?php
namespace Getresponse\Sdk\Operation\Model;

class NotOpenedCondition extends ConditionType
{
    private string $scope = self::FIELD_NOT_SET;

    private string $value = self::FIELD_NOT_SET;


    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $dateOperator
     */
    public function __construct(private $operatorType, private $operator, private $dateOperator)
    {
        parent::__construct('not_opened');
    }


    /**
     * @param string $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
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
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'scope' => $this->scope,
            'dateOperator' => $this->dateOperator,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
