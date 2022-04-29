<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ShortCampaign extends BaseModel
{
    private string $campaignId = self::FIELD_NOT_SET;

    private string $href = self::FIELD_NOT_SET;

    private string $name = self::FIELD_NOT_SET;


    /**
     * @param string $campaignId
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    }


    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'campaignId' => $this->campaignId,
            'href' => $this->href,
            'name' => $this->name,
        ];

        return $this->filterUnsetFields($data);
    }
}
