<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ContactCustomField extends BaseModel
{
    /**
     * @param string $customFieldId
     * @param string $values
     */
    public function __construct(private $customFieldId, private $values)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'customFieldId' => $this->customFieldId,
            'values' => $this->values,
        ];

        return $this->filterUnsetFields($data);
    }
}
