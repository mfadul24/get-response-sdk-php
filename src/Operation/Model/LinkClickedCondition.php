<?php
namespace Getresponse\Sdk\Operation\Model;

class LinkClickedCondition extends ConditionType
{
    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $scope
     * @param string $clickTrackId
     */
    public function __construct(private $operatorType, private $operator, private $scope, private $clickTrackId)
    {
        parent::__construct('clicked');
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
            'clickTrackId' => $this->clickTrackId,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
