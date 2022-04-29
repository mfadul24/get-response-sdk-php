<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewContact extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $dayOfCycle = self::FIELD_NOT_SET;

    private string|float $scoring = self::FIELD_NOT_SET;

    private string $ipAddress = self::FIELD_NOT_SET;

    /** @var NewContactTag[] */
    private string|array $tags = self::FIELD_NOT_SET;

    /** @var NewContactCustomFieldValue[] */
    private string|array $customFieldValues = self::FIELD_NOT_SET;


    /**
     * @param CampaignReference $campaign
     * @param string $email
     */
    public function __construct(private readonly CampaignReference $campaign, private $email)
    {
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $dayOfCycle
     */
    public function setDayOfCycle($dayOfCycle)
    {
        $this->dayOfCycle = $dayOfCycle;
    }


    /**
     * @param float $scoring
     */
    public function setScoring($scoring)
    {
        $this->scoring = $scoring;
    }


    /**
     * @param string $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }


    /**
     * @param NewContactTag[] $tags
     */
    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }


    /**
     * @param NewContactCustomFieldValue[] $customFieldValues
     */
    public function setCustomFieldValues(array $customFieldValues)
    {
        $this->customFieldValues = $customFieldValues;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'campaign' => $this->campaign,
            'email' => $this->email,
            'dayOfCycle' => $this->dayOfCycle,
            'scoring' => $this->scoring,
            'ipAddress' => $this->ipAddress,
            'tags' => $this->tags,
            'customFieldValues' => $this->customFieldValues,
        ];

        return $this->filterUnsetFields($data);
    }
}
