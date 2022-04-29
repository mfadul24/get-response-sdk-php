<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertMetaField extends BaseModel
{
    /**
     * @param UpsertSingleMetaField[] $metaFields
     */
    public function __construct(private readonly array $metaFields)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'metaFields' => $this->metaFields,
        ];

        return $this->filterUnsetFields($data);
    }
}
