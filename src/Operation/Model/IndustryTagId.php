<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class IndustryTagId extends BaseModel
{
    private string $industryTagId = self::FIELD_NOT_SET;


    /**
     * @param string $industryTagId
     */
    public function setIndustryTagId($industryTagId)
    {
        $this->industryTagId = $industryTagId;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'industryTagId' => $this->industryTagId,
        ];

        return $this->filterUnsetFields($data);
    }
}
