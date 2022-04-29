<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateSuppression extends BaseModel
{
    /**
     * @param string $name
     * @param array $masks
     */
    public function __construct(private $name, private readonly array $masks)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'masks' => $this->masks,
        ];

        return $this->filterUnsetFields($data);
    }
}
