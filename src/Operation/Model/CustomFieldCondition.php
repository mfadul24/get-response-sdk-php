<?php
namespace Getresponse\Sdk\Operation\Model;

class CustomFieldCondition extends ConditionType
{
    private string $operatorType = self::FIELD_NOT_SET;

    private string $value = self::FIELD_NOT_SET;


    /**
     * @param string $scope
     * @param string $operator
     */
    public function __construct(private $scope, private $operator)
    {
        parent::__construct('custom');
    }


    /**
     * @param string $operatorType
     */
    public function setOperatorType($operatorType)
    {
        $this->operatorType = $operatorType;
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
            'scope' => $this->scope,
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
