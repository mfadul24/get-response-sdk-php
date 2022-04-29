<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdatePredefinedField extends BaseModel
{
    /**
     * @param string $value
     */
    public function __construct(private $value)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'value' => $this->value,
        ];

        return $this->filterUnsetFields($data);
    }
}
