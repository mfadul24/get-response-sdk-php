<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateCustomField extends BaseModel
{
    /**
     * @param StringBooleanEnum $hidden
     * @param array $values
     */
    public function __construct(private readonly StringBooleanEnum $hidden, private readonly array $values)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'hidden' => $this->hidden,
            'values' => $this->values,
        ];

        return $this->filterUnsetFields($data);
    }
}
