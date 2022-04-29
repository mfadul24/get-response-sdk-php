<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AccountBillingAddOn extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $price = self::FIELD_NOT_SET;

    private string $active = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    /**
     * @param string $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'price' => $this->price,
            'active' => $this->active,
        ];

        return $this->filterUnsetFields($data);
    }
}
