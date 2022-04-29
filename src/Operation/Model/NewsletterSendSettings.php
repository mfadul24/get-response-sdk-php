<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewsletterSendSettings extends BaseModel
{
    private string|array $selectedCampaigns = self::FIELD_NOT_SET;

    private string|array $selectedSegments = self::FIELD_NOT_SET;

    private string|array $selectedSuppressions = self::FIELD_NOT_SET;

    private string|array $excludedCampaigns = self::FIELD_NOT_SET;

    private string|array $excludedSegments = self::FIELD_NOT_SET;

    private string|array $selectedContacts = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\StringBooleanEnum $timeTravel = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\StringBooleanEnum $perfectTiming = self::FIELD_NOT_SET;


    public function setSelectedCampaigns(array $selectedCampaigns)
    {
        $this->selectedCampaigns = $selectedCampaigns;
    }


    public function setSelectedSegments(array $selectedSegments)
    {
        $this->selectedSegments = $selectedSegments;
    }


    public function setSelectedSuppressions(array $selectedSuppressions)
    {
        $this->selectedSuppressions = $selectedSuppressions;
    }


    public function setExcludedCampaigns(array $excludedCampaigns)
    {
        $this->excludedCampaigns = $excludedCampaigns;
    }


    public function setExcludedSegments(array $excludedSegments)
    {
        $this->excludedSegments = $excludedSegments;
    }


    public function setSelectedContacts(array $selectedContacts)
    {
        $this->selectedContacts = $selectedContacts;
    }


    public function setTimeTravel(StringBooleanEnum $timeTravel)
    {
        $this->timeTravel = $timeTravel;
    }


    public function setPerfectTiming(StringBooleanEnum $perfectTiming)
    {
        $this->perfectTiming = $perfectTiming;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'selectedCampaigns' => $this->selectedCampaigns,
            'selectedSegments' => $this->selectedSegments,
            'selectedSuppressions' => $this->selectedSuppressions,
            'excludedCampaigns' => $this->excludedCampaigns,
            'excludedSegments' => $this->excludedSegments,
            'selectedContacts' => $this->selectedContacts,
            'timeTravel' => $this->timeTravel,
            'perfectTiming' => $this->perfectTiming,
        ];

        return $this->filterUnsetFields($data);
    }
}
