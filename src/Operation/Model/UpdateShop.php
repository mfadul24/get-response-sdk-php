<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateShop extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $locale = self::FIELD_NOT_SET;

    private string $currency = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }


    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'locale' => $this->locale,
            'currency' => $this->currency,
        ];

        return $this->filterUnsetFields($data);
    }
}
