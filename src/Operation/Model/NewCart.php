<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewCart extends BaseModel
{
    private string|float $totalTaxPrice = self::FIELD_NOT_SET;

    private string $externalId = self::FIELD_NOT_SET;

    private string $cartUrl = self::FIELD_NOT_SET;


    /**
     * @param string $contactId
     * @param float $totalPrice
     * @param string $currency
     * @param NewCartSelectedProductVariant[] $selectedVariants
     */
    public function __construct(private $contactId, private $totalPrice, private $currency, private readonly array $selectedVariants)
    {
    }


    /**
     * @param float $totalTaxPrice
     */
    public function setTotalTaxPrice($totalTaxPrice)
    {
        $this->totalTaxPrice = $totalTaxPrice;
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @param string $cartUrl
     */
    public function setCartUrl($cartUrl)
    {
        $this->cartUrl = $cartUrl;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'contactId' => $this->contactId,
            'totalPrice' => $this->totalPrice,
            'totalTaxPrice' => $this->totalTaxPrice,
            'currency' => $this->currency,
            'selectedVariants' => $this->selectedVariants,
            'externalId' => $this->externalId,
            'cartUrl' => $this->cartUrl,
        ];

        return $this->filterUnsetFields($data);
    }
}
