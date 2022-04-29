<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ContactCustomFieldListElement extends BaseModel
{
    private string $fieldType = self::FIELD_NOT_SET;

    private string $valueType = self::FIELD_NOT_SET;


    /**
     * @param string $customFieldId
     * @param string $name
     * @param string $value
     * @param string $values
     * @param string $type
     */
    public function __construct(private $customFieldId, private $name, private $value, private $values, private $type)
    {
    }


    /**
     * @param string $fieldType
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;
    }


    /**
     * @param string $valueType
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customFieldId' => $this->customFieldId,
            'name' => $this->name,
            'value' => $this->value,
            'values' => $this->values,
            'type' => $this->type,
            'fieldType' => $this->fieldType,
            'valueType' => $this->valueType,
        ];

        return $this->filterUnsetFields($data);
    }
}
