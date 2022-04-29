<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewFolder extends BaseModel
{
    /**
     * @param string $name
     */
    public function __construct(private $name)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
        ];

        return $this->filterUnsetFields($data);
    }
}
