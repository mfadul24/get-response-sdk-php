<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateCampaign extends BaseModel
{
    private string $languageCode = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\StringBooleanEnum $isDefault = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\CampaignPostal $postal = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\CampaignConfirmation $confirmation = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\CampaignOptinTypes $optinTypes = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\CampaignSubscriptionNotifications $subscriptionNotifications = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\CampaignProfile $profile = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function __construct(private $name)
    {
    }


    /**
     * @param string $languageCode
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }


    public function setIsDefault(StringBooleanEnum $isDefault)
    {
        $this->isDefault = $isDefault;
    }


    public function setPostal(CampaignPostal $postal)
    {
        $this->postal = $postal;
    }


    public function setConfirmation(CampaignConfirmation $confirmation)
    {
        $this->confirmation = $confirmation;
    }


    public function setOptinTypes(CampaignOptinTypes $optinTypes)
    {
        $this->optinTypes = $optinTypes;
    }


    public function setSubscriptionNotifications(CampaignSubscriptionNotifications $subscriptionNotifications)
    {
        $this->subscriptionNotifications = $subscriptionNotifications;
    }


    public function setProfile(CampaignProfile $profile)
    {
        $this->profile = $profile;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'languageCode' => $this->languageCode,
            'isDefault' => $this->isDefault,
            'postal' => $this->postal,
            'confirmation' => $this->confirmation,
            'optinTypes' => $this->optinTypes,
            'subscriptionNotifications' => $this->subscriptionNotifications,
            'profile' => $this->profile,
        ];

        return $this->filterUnsetFields($data);
    }
}
