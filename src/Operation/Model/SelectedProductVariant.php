<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class SelectedProductVariant extends BaseModel
{
    private string $href = self::FIELD_NOT_SET;


    /**
     * @param string $variantId
     * @param string $quantity
     * @param string $price
     * @param string $priceTax
     * @param \Getresponse\Sdk\Operation\Model\SimpleTaxDetails[] $taxes
     */
    public function __construct(private $variantId, private $quantity, private $price, private $priceTax, private readonly array $taxes)
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
            'variantId' => $this->variantId,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'priceTax' => $this->priceTax,
            'taxes' => $this->taxes,
            'href' => $this->href,
        ];

        return $this->filterUnsetFields($data);
    }
}
