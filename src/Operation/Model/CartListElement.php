<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CartListElement extends BaseModel
{
    private string $externalId = self::FIELD_NOT_SET;

    private string $totalTaxPrice = self::FIELD_NOT_SET;

    private string $cartUrl = self::FIELD_NOT_SET;


    /**
     * @param string $cartId
     * @param string $contactId
     * @param string $currency
     * @param string $totalPrice
     * @param \Getresponse\Sdk\Operation\Model\CartSelectedVariants[] $selectedVariants
     * @param string $href
     * @param string $createdOn
     * @param string $updatedOn
     */
    public function __construct(private $cartId, private $contactId, private $currency, private $totalPrice, private readonly array $selectedVariants, private $href, private $createdOn, private $updatedOn)
    {
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @param string $totalTaxPrice
     */
    public function setTotalTaxPrice($totalTaxPrice)
    {
        $this->totalTaxPrice = $totalTaxPrice;
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
            'cartId' => $this->cartId,
            'contactId' => $this->contactId,
            'currency' => $this->currency,
            'totalPrice' => $this->totalPrice,
            'selectedVariants' => $this->selectedVariants,
            'externalId' => $this->externalId,
            'totalTaxPrice' => $this->totalTaxPrice,
            'cartUrl' => $this->cartUrl,
            'href' => $this->href,
            'createdOn' => $this->createdOn,
            'updatedOn' => $this->updatedOn,
        ];

        return $this->filterUnsetFields($data);
    }
}
