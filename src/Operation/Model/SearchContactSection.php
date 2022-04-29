<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

abstract class SearchContactSection extends BaseModel
{
    /** @var ConditionType[] */
    private string|array $conditions = self::FIELD_NOT_SET;


    /**
     * @param array $campaignIdsList
     * @param string $logicOperator
     * @param array $subscriberCycle
     * @param string $subscriptionDate
     */
    public function __construct(private readonly array $campaignIdsList, private $logicOperator, private readonly array $subscriberCycle, private $subscriptionDate)
    {
    }


    /**
     * @param ConditionType[] $conditions
     */
    public function setConditions(array $conditions)
    {
        $this->conditions = $conditions;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'campaignIdsList' => $this->campaignIdsList,
            'logicOperator' => $this->logicOperator,
            'subscriberCycle' => $this->subscriberCycle,
            'conditions' => $this->conditions,
            'subscriptionDate' => $this->subscriptionDate,
        ];

        return $this->filterUnsetFields($data);
    }
}
