<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewCustomField extends BaseModel
{
    private string|\Getresponse\Sdk\Operation\Model\CustomFieldFormatEnum $format = self::FIELD_NOT_SET;


    /**
     * @param string $name
     * @param CustomFieldTypeEnum $type
     * @param StringBooleanEnum $hidden
     * @param array $values
     */
    public function __construct(private $name, private readonly CustomFieldTypeEnum $type, private readonly StringBooleanEnum $hidden, private readonly array $values)
    {
    }


    public function setFormat(CustomFieldFormatEnum $format)
    {
        $this->format = $format;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'type' => $this->type,
            'format' => $this->format,
            'hidden' => $this->hidden,
            'values' => $this->values,
        ];

        return $this->filterUnsetFields($data);
    }
}
