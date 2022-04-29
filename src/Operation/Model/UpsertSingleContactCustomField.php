<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertSingleContactCustomField extends BaseModel
{
    /**
     * @param string $customFieldId
     * @param array $value
     */
    public function __construct(private $customFieldId, private readonly array $value)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customFieldId' => $this->customFieldId,
            'value' => $this->value,
        ];

        return $this->filterUnsetFields($data);
    }
}
