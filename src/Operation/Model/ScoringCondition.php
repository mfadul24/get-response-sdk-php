<?php
namespace Getresponse\Sdk\Operation\Model;

class ScoringCondition extends ConditionType
{
    private string $operator = self::FIELD_NOT_SET;

    private string|int $value = self::FIELD_NOT_SET;


    /**
     * @param string $operatorType
     */
    public function __construct(private $operatorType)
    {
        parent::__construct('scoring');
    }


    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
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
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
