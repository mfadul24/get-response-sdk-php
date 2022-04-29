<?php
namespace Getresponse\Sdk\Operation\Model;

class AutoresponderDayCondition extends ConditionType
{
    private string|int $value = self::FIELD_NOT_SET;


    /**
     * @param string $operatorType
     * @param string $operator
     */
    public function __construct(private $operatorType, private $operator)
    {
        parent::__construct('phase');
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
