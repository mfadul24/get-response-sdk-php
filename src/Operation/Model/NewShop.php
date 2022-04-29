<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewShop extends BaseModel
{
    /**
     * @param string $name
     * @param string $locale
     * @param string $currency
     */
    public function __construct(private $name, private $locale, private $currency)
    {
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
