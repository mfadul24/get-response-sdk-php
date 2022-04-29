<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateTax extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string|float $rate = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param float $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
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
