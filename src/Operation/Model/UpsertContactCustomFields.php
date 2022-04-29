<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertContactCustomFields extends BaseModel
{
    /**
     * @param NewContactCustomFieldValue[] $customFieldValues
     */
    public function __construct(private readonly array $customFieldValues)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customFieldValues' => $this->customFieldValues,
        ];

        return $this->filterUnsetFields($data);
    }
}
