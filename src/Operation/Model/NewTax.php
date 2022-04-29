<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewTax extends BaseModel
{
    /**
     * @param string $name
     * @param float $rate
     */
    public function __construct(private $name, private $rate)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'rate' => $this->rate,
        ];

        return $this->filterUnsetFields($data);
    }
}
