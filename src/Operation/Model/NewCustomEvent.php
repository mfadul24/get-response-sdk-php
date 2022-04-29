<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewCustomEvent extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    /** @var CustomEventAttributeDetails[] */
    private string|array $attributes = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param CustomEventAttributeDetails[] $attributes
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'attributes' => $this->attributes,
        ];

        return $this->filterUnsetFields($data);
    }
}
