<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CartSelectedVariants extends BaseModel
{
    /**
     * @param string $variantId
     * @param string $quantity
     * @param string $price
     * @param string $priceTax
     * @param string $href
     */
    public function __construct(private $variantId, private $quantity, private $price, private $priceTax, private $href)
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
            'href' => $this->href,
        ];

        return $this->filterUnsetFields($data);
    }
}
