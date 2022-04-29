<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewPredefinedField extends BaseModel
{
    /**
     * @param string $name
     * @param string $value
     * @param CampaignReference $campaign
     */
    public function __construct(private $name, private $value, private readonly CampaignReference $campaign)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'value' => $this->value,
            'campaign' => $this->campaign,
        ];

        return $this->filterUnsetFields($data);
    }
}
