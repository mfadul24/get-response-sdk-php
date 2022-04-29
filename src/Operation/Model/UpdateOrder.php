<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateOrder extends BaseModel
{
    private string $contactId = self::FIELD_NOT_SET;

    private string $orderUrl = self::FIELD_NOT_SET;

    private string $externalId = self::FIELD_NOT_SET;

    private string|float $totalPrice = self::FIELD_NOT_SET;

    private string|float $totalPriceTax = self::FIELD_NOT_SET;

    private string $currency = self::FIELD_NOT_SET;

    private string $status = self::FIELD_NOT_SET;

    private string $cartId = self::FIELD_NOT_SET;

    private string $description = self::FIELD_NOT_SET;

    private string|float $shippingPrice = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\NewAddress $shippingAddress = self::FIELD_NOT_SET;

    private string $billingStatus = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\NewAddress $billingAddress = self::FIELD_NOT_SET;

    private string $processedAt = self::FIELD_NOT_SET;

    /** @var NewSelectedProductVariant[] */
    private string|array $selectedVariants = self::FIELD_NOT_SET;

    /** @var NewMetaField[] */
    private string|array $metaFields = self::FIELD_NOT_SET;


    /**
     * @param string $contactId
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    }


    /**
     * @param string $orderUrl
     */
    public function setOrderUrl($orderUrl)
    {
        $this->orderUrl = $orderUrl;
    }


    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
    }


    /**
     * @param float $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }


    /**
     * @param float $totalPriceTax
     */
    public function setTotalPriceTax($totalPriceTax)
    {
        $this->totalPriceTax = $totalPriceTax;
    }


    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }


    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * @param string $cartId
     */
    public function setCartId($cartId)
    {
        $this->cartId = $cartId;
    }


    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


    /**
     * @param float $shippingPrice
     */
    public function setShippingPrice($shippingPrice)
    {
        $this->shippingPrice = $shippingPrice;
    }


    public function setShippingAddress(NewAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }


    /**
     * @param string $billingStatus
     */
    public function setBillingStatus($billingStatus)
    {
        $this->billingStatus = $billingStatus;
    }


    public function setBillingAddress(NewAddress $billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }


    /**
     * @param string $processedAt
     */
    public function setProcessedAt($processedAt)
    {
        $this->processedAt = $processedAt;
    }


    /**
     * @param NewSelectedProductVariant[] $selectedVariants
     */
    public function setSelectedVariants(array $selectedVariants)
    {
        $this->selectedVariants = $selectedVariants;
    }


    /**
     * @param NewMetaField[] $metaFields
     */
    public function setMetaFields(array $metaFields)
    {
        $this->metaFields = $metaFields;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'contactId' => $this->contactId,
            'orderUrl' => $this->orderUrl,
            'externalId' => $this->externalId,
            'totalPrice' => $this->totalPrice,
            'totalPriceTax' => $this->totalPriceTax,
            'currency' => $this->currency,
            'status' => $this->status,
            'cartId' => $this->cartId,
            'description' => $this->description,
            'shippingPrice' => $this->shippingPrice,
            'shippingAddress' => $this->shippingAddress,
            'billingStatus' => $this->billingStatus,
            'billingAddress' => $this->billingAddress,
            'processedAt' => $this->processedAt,
            'selectedVariants' => $this->selectedVariants,
            'metaFields' => $this->metaFields,
        ];

        return $this->filterUnsetFields($data);
    }
}
