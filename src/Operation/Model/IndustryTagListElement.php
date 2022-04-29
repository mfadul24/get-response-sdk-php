<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class IndustryTagListElement extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $description = self::FIELD_NOT_SET;


    /**
     * @param string $industryTagId
     */
    public function __construct(private $industryTagId)
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
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'industryTagId' => $this->industryTagId,
            'name' => $this->name,
            'description' => $this->description,
        ];

        return $this->filterUnsetFields($data);
    }
}
