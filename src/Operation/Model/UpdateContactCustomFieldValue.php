<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateContactCustomFieldValue extends BaseModel
{
    /**
     * @param string $customFieldId
     * @param string $value
     */
    public function __construct(private $customFieldId, private $value)
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
