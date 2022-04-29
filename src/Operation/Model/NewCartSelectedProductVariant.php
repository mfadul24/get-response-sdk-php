<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewCartSelectedProductVariant extends BaseModel
{
    /**
     * @param string $variantId
     * @param int $quantity
     * @param float $price
     * @param float $priceTax
     */
    public function __construct(private $variantId, private $quantity, private $price, private $priceTax)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'variantId' => $this->variantId,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'priceTax' => $this->priceTax,
        ];

        return $this->filterUnsetFields($data);
    }
}
