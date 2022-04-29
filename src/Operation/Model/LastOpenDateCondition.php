<?php
namespace Getresponse\Sdk\Operation\Model;

class LastOpenDateCondition extends ConditionType
{
    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $value
     */
    public function __construct(private $operatorType, private $operator, private $value)
    {
        parent::__construct('last_open_date');
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
