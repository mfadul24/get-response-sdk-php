<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TaxDetails extends BaseModel
{
    /**
     * @param string $taxId
     * @param string $href
     * @param string $name
     * @param string $rate
     * @param string $createdOn
     * @param string $updatedOn
     */
    public function __construct(private $taxId, private $href, private $name, private $rate, private $createdOn, private $updatedOn)
    {
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
            'createdOn' => $this->createdOn,
            'updatedOn' => $this->updatedOn,
        ];

        return $this->filterUnsetFields($data);
    }
}
