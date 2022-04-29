<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class AccountBilling extends BaseModel
{
    private string $listSize = self::FIELD_NOT_SET;

    private string $paymentPlan = self::FIELD_NOT_SET;

    private string $subscriptionPrice = self::FIELD_NOT_SET;

    private string $renewalDate = self::FIELD_NOT_SET;

    private string $currencyCode = self::FIELD_NOT_SET;

    private string $accountBalance = self::FIELD_NOT_SET;

    private string $price = self::FIELD_NOT_SET;

    private string $paymentMethod = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\AccountBillingCreditCard $creditCard = self::FIELD_NOT_SET;

    /** @var \Getresponse\Sdk\Operation\Model\AccountBillingAddOn[] */
    private string|array $addons = self::FIELD_NOT_SET;


    /**
     * @param string $listSize
     */
    public function setListSize($listSize)
    {
        $this->listSize = $listSize;
    }


    /**
     * @param string $paymentPlan
     */
    public function setPaymentPlan($paymentPlan)
    {
        $this->paymentPlan = $paymentPlan;
    }


    /**
     * @param string $subscriptionPrice
     */
    public function setSubscriptionPrice($subscriptionPrice)
    {
        $this->subscriptionPrice = $subscriptionPrice;
    }


    /**
     * @param string $renewalDate
     */
    public function setRenewalDate($renewalDate)
    {
        $this->renewalDate = $renewalDate;
    }


    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }


    /**
     * @param string $accountBalance
     */
    public function setAccountBalance($accountBalance)
    {
        $this->accountBalance = $accountBalance;
    }


    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    /**
     * @param string $paymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }


    public function setCreditCard(AccountBillingCreditCard $creditCard)
    {
        $this->creditCard = $creditCard;
    }


    /**
     * @param \Getresponse\Sdk\Operation\Model\AccountBillingAddOn[] $addons
     */
    public function setAddons(array $addons)
    {
        $this->addons = $addons;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'listSize' => $this->listSize,
            'paymentPlan' => $this->paymentPlan,
            'subscriptionPrice' => $this->subscriptionPrice,
            'renewalDate' => $this->renewalDate,
            'currencyCode' => $this->currencyCode,
            'accountBalance' => $this->accountBalance,
            'price' => $this->price,
            'paymentMethod' => $this->paymentMethod,
            'creditCard' => $this->creditCard,
            'addons' => $this->addons,
        ];

        return $this->filterUnsetFields($data);
    }
}
