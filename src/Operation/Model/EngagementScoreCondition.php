<?php
namespace Getresponse\Sdk\Operation\Model;

class EngagementScoreCondition extends ConditionType
{
    private string $operatorType = self::FIELD_NOT_SET;


    /**
     * @param string $operator
     * @param int $value
     */
    public function __construct(private $operator, private $value)
    {
        parent::__construct('engagement_score');
    }


    /**
     * @param string $operatorType
     */
    public function setOperatorType($operatorType)
    {
        $this->operatorType = $operatorType;
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
