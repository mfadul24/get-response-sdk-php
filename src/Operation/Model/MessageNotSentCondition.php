<?php
namespace Getresponse\Sdk\Operation\Model;

class MessageNotSentCondition extends ConditionType
{
    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $value
     */
    public function __construct(private $operatorType, private $operator, private $value)
    {
        parent::__construct('not_sent');
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
