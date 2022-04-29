<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AutoresponderTriggerSettings extends BaseModel
{
    private string|array $selectedSegments = self::FIELD_NOT_SET;


    /**
     * @param string $type
     * @param int $dayOfCycle
     * @param array $selectedCampaigns
     */
    public function __construct(private $type, private $dayOfCycle, private readonly array $selectedCampaigns)
    {
    }


    public function setSelectedSegments(array $selectedSegments)
    {
        $this->selectedSegments = $selectedSegments;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'type' => $this->type,
            'dayOfCycle' => $this->dayOfCycle,
            'selectedCampaigns' => $this->selectedCampaigns,
            'selectedSegments' => $this->selectedSegments,
        ];

        return $this->filterUnsetFields($data);
    }
}
