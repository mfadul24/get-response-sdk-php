<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewMetaField extends BaseModel
{
    private string $description = self::FIELD_NOT_SET;


    /**
     * @param string $name
     * @param string $value
     * @param string $valueType
     */
    public function __construct(private $name, private $value, private $valueType)
    {
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
