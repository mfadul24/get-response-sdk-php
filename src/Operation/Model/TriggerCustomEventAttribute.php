<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TriggerCustomEventAttribute extends BaseModel
{
    /**
     * @param string $name
     * @param string $value
     */
    public function __construct(private $name, private $value)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'value' => $this->value,
        ];

        return $this->filterUnsetFields($data);
    }
}
