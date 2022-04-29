<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class SimpleTaxDetails extends BaseModel
{
    private string $href = self::FIELD_NOT_SET;


    /**
     * @param string $taxId
     * @param string $name
     * @param string $rate
     */
    public function __construct(private $taxId, private $name, private $rate)
    {
    }


    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'taxId' => $this->taxId,
            'href' => $this->href,
            'name' => $this->name,
            'rate' => $this->rate,
        ];

        return $this->filterUnsetFields($data);
    }
}
