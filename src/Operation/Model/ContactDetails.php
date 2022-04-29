<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ContactDetails extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $email = self::FIELD_NOT_SET;

    private string $note = self::FIELD_NOT_SET;

    private string $dayOfCycle = self::FIELD_NOT_SET;

    private string $changedOn = self::FIELD_NOT_SET;

    private string $timeZone = self::FIELD_NOT_SET;

    private string $ipAddress = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\ContactGeolocation $geolocation = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\TagListElement[] */
    private string|array $tags = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\ContactCustomFieldListElement[] */
    private string|array $customFieldValues = self::FIELD_NOT_SET;

    private string $scoring = self::FIELD_NOT_SET;


    /**
     * @param string $contactId
     * @param string $href
     * @param string $origin
     * @param string $activities
     * @param \Getresponse\Sdk\Operation\Model\ShortCampaign $campaign
     * @param string $createdOn
     */
    public function __construct(private $contactId, private $href, private $origin, private $activities, private readonly ShortCampaign $campaign, private $createdOn)
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
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }


    /**
     * @param string $dayOfCycle
     */
    public function setDayOfCycle($dayOfCycle)
    {
        $this->dayOfCycle = $dayOfCycle;
    }


    /**
     * @param string $changedOn
     */
    public function setChangedOn($changedOn)
    {
        $this->changedOn = $changedOn;
    }


    /**
     * @param string $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }


    /**
     * @param string $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }


    public function setGeolocation(ContactGeolocation $geolocation)
    {
        $this->geolocation = $geolocation;
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\TagListElement[] $tags
     */
    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\ContactCustomFieldListElement[] $customFieldValues
     */
    public function setCustomFieldValues(array $customFieldValues)
    {
        $this->customFieldValues = $customFieldValues;
    }


    /**
     * @param string $scoring
     */
    public function setScoring($scoring)
    {
        $this->scoring = $scoring;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'contactId' => $this->contactId,
            'href' => $this->href,
            'name' => $this->name,
            'email' => $this->email,
            'note' => $this->note,
            'origin' => $this->origin,
            'dayOfCycle' => $this->dayOfCycle,
            'changedOn' => $this->changedOn,
            'timeZone' => $this->timeZone,
            'ipAddress' => $this->ipAddress,
            'activities' => $this->activities,
            'campaign' => $this->campaign,
            'createdOn' => $this->createdOn,
            'geolocation' => $this->geolocation,
            'tags' => $this->tags,
            'customFieldValues' => $this->customFieldValues,
            'scoring' => $this->scoring,
        ];

        return $this->filterUnsetFields($data);
    }
}
