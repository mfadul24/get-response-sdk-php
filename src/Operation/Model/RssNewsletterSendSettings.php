<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

abstract class RssNewsletterSendSettings extends BaseModel
{
    private string|int $maxArticles = self::FIELD_NOT_SET;

    private string|array $selectedCampaigns = self::FIELD_NOT_SET;

    private string|array $selectedSegments = self::FIELD_NOT_SET;

    private string|array $selectedSuppressions = self::FIELD_NOT_SET;

    private string|array $excludedCampaigns = self::FIELD_NOT_SET;

    private string|array $excludedSegments = self::FIELD_NOT_SET;


    /**
     * @param string $frequency
     * @param string $filter
     */
    public function __construct(private $frequency, private $filter)
    {
    }


    /**
     * @param int $maxArticles
     */
    public function setMaxArticles($maxArticles)
    {
        $this->maxArticles = $maxArticles;
    }


    /**
     * @param array $selectedCampaigns
     */
    public function setSelectedCampaigns(array $selectedCampaigns)
    {
        $this->selectedCampaigns = $selectedCampaigns;
    }


    /**
     * @param array $selectedSegments
     */
    public function setSelectedSegments(array $selectedSegments)
    {
        $this->selectedSegments = $selectedSegments;
    }


    /**
     * @param array $selectedSuppressions
     */
    public function setSelectedSuppressions(array $selectedSuppressions)
    {
        $this->selectedSuppressions = $selectedSuppressions;
    }


    /**
     * @param array $excludedCampaigns
     */
    public function setExcludedCampaigns(array $excludedCampaigns)
    {
        $this->excludedCampaigns = $excludedCampaigns;
    }


    /**
     * @param array $excludedSegments
     */
    public function setExcludedSegments(array $excludedSegments)
    {
        $this->excludedSegments = $excludedSegments;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'frequency' => $this->frequency,
            'filter' => $this->filter,
            'maxArticles' => $this->maxArticles,
            'selectedCampaigns' => $this->selectedCampaigns,
            'selectedSegments' => $this->selectedSegments,
            'selectedSuppressions' => $this->selectedSuppressions,
            'excludedCampaigns' => $this->excludedCampaigns,
            'excludedSegments' => $this->excludedSegments,
        ];

        return $this->filterUnsetFields($data);
    }
}
