<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertContactTags extends BaseModel
{
    /**
     * @param NewContactTag[] $tags
     */
    public function __construct(private readonly array $tags)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'tags' => $this->tags,
        ];

        return $this->filterUnsetFields($data);
    }
}
