<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class SimpleMetaField extends BaseModel
{
    /**
     * @param string $metaFieldId
     * @param string $href
     * @param string $name
     * @param string $value
     * @param string $valueType
     */
    public function __construct(private $metaFieldId, private $href, private $name, private $value, private $valueType)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'metaFieldId' => $this->metaFieldId,
            'href' => $this->href,
            'name' => $this->name,
            'value' => $this->value,
            'valueType' => $this->valueType,
        ];

        return $this->filterUnsetFields($data);
    }
}
