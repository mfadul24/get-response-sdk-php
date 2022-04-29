<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewProductImage extends BaseModel
{
    /**
     * @param string $src
     * @param string $position
     */
    public function __construct(private $src, private $position)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'src' => $this->src,
            'position' => $this->position,
        ];

        return $this->filterUnsetFields($data);
    }
}
