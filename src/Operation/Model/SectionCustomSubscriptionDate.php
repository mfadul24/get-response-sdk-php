<?php
namespace Getresponse\Sdk\Operation\Model;

class SectionCustomSubscriptionDate extends SearchContactSection
{
    /**
     * @param array $campaignIdsList
     * @param string $logicOperator
     * @param array $subscriberCycle
     * @param CustomDateRange $customDate
     */
    public function __construct(array $campaignIdsList, $logicOperator, array $subscriberCycle, private readonly CustomDateRange $customDate)
    {
        parent::__construct($campaignIdsList, $logicOperator, $subscriberCycle, 'custom');
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customDate' => $this->customDate,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
