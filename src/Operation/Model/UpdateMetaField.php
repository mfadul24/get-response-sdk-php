<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateMetaField extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $value = self::FIELD_NOT_SET;

    private string $valueType = self::FIELD_NOT_SET;

    private string $description = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


    /**
     * @param string $valueType
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
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
            'name' => $this->name,
            'value' => $this->value,
            'valueType' => $this->valueType,
            'description' => $this->description,
        ];

        return $this->filterUnsetFields($data);
    }
}
