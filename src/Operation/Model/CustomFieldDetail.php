<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CustomFieldDetail extends BaseModel
{
    private string $format = self::FIELD_NOT_SET;


    /**
     * @param string $customFieldId
     * @param string $href
     * @param string $name
     * @param string $fieldType
     * @param string $valueType
     * @param string $type
     * @param string $hidden
     * @param array $values
     */
    public function __construct(private $customFieldId, private $href, private $name, private $fieldType, private $valueType, private $type, private $hidden, private readonly array $values)
    {
    }


    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customFieldId' => $this->customFieldId,
            'href' => $this->href,
            'name' => $this->name,
            'fieldType' => $this->fieldType,
            'format' => $this->format,
            'valueType' => $this->valueType,
            'type' => $this->type,
            'hidden' => $this->hidden,
            'values' => $this->values,
        ];

        return $this->filterUnsetFields($data);
    }
}
