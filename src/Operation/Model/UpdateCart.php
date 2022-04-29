<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateCart extends BaseModel
{
    private string $contactId = self::FIELD_NOT_SET;

    private string|float $totalPrice = self::FIELD_NOT_SET;

    private string|float $totalTaxPrice = self::FIELD_NOT_SET;

    private string $currency = self::FIELD_NOT_SET;

    /** @var NewCartSelectedProductVariant[] */
    private string|array $selectedVariants = self::FIELD_NOT_SET;

    private string $externalId = self::FIELD_NOT_SET;

    private string $cartUrl = self::FIELD_NOT_SET;


    /**
     * @param string $contactId
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    }


    /**
     * @param float $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }


    /**
     * @param float $totalTaxPrice
     */
    public function setTotalTaxPrice($totalTaxPrice)
    {
        $this->totalTaxPrice = $totalTaxPrice;
    }


    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }


    /**
     * @param NewCartSelectedProductVariant[] $selectedVariants
     */
    public function setSelectedVariants(array $selectedVariants)
    {
        $this->selectedVariants = $selectedVariants;
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
