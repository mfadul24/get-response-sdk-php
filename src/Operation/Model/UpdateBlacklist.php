<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateBlacklist extends BaseModel
{
    /**
     * @param array $masks
     */
    public function __construct(private readonly array $masks)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'masks' => $this->masks,
        ];

        return $this->filterUnsetFields($data);
    }
}
