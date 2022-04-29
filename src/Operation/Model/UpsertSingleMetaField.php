<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertSingleMetaField extends BaseModel
{
    /**
     * @param string $metaFieldId
     */
    public function __construct(private $metaFieldId)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'metaFieldId' => $this->metaFieldId,
        ];

        return $this->filterUnsetFields($data);
    }
}
