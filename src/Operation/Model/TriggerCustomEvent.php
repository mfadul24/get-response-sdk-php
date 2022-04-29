<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TriggerCustomEvent extends BaseModel
{
    /** @var TriggerCustomEventAttribute[] */
    private string|array $attributes = self::FIELD_NOT_SET;


    /**
     * @param string $name
     * @param string $contactId
     */
    public function __construct(private $name, private $contactId)
    {
    }


    /**
     * @param TriggerCustomEventAttribute[] $attributes
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
            'contactId' => $this->contactId,
            'attributes' => $this->attributes,
        ];

        return $this->filterUnsetFields($data);
    }
}
