<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class FormVariantListElement extends BaseModel
{
    private string $formId = self::FIELD_NOT_SET;

    private string $webformId = self::FIELD_NOT_SET;

    private string $variant = self::FIELD_NOT_SET;

    private string $variantName = self::FIELD_NOT_SET;

    private string $winner = self::FIELD_NOT_SET;

    private string $status = self::FIELD_NOT_SET;

    private string $createdOn = self::FIELD_NOT_SET;

    private string $numberOfVisitors = self::FIELD_NOT_SET;

    private string $numberOfUniqueVisitors = self::FIELD_NOT_SET;

    private string $numberOfSubscribers = self::FIELD_NOT_SET;

    private string $subscriptionRate = self::FIELD_NOT_SET;


    /**
     * @param string $formId
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;
    }


    /**
     * @param string $webformId
     */
    public function setWebformId($webformId)
    {
        $this->webformId = $webformId;
    }


    /**
     * @param string $variant
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }


    /**
     * @param string $variantName
     */
    public function setVariantName($variantName)
    {
        $this->variantName = $variantName;
    }


    /**
     * @param string $winner
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
    }


    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * @param string $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }


    /**
     * @param string $numberOfVisitors
     */
    public function setNumberOfVisitors($numberOfVisitors)
    {
        $this->numberOfVisitors = $numberOfVisitors;
    }


    /**
     * @param string $numberOfUniqueVisitors
     */
    public function setNumberOfUniqueVisitors($numberOfUniqueVisitors)
    {
        $this->numberOfUniqueVisitors = $numberOfUniqueVisitors;
    }


    /**
     * @param string $numberOfSubscribers
     */
    public function setNumberOfSubscribers($numberOfSubscribers)
    {
        $this->numberOfSubscribers = $numberOfSubscribers;
    }


    /**
     * @param string $subscriptionRate
     */
    public function setSubscriptionRate($subscriptionRate)
    {
        $this->subscriptionRate = $subscriptionRate;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'formId' => $this->formId,
            'webformId' => $this->webformId,
            'variant' => $this->variant,
            'variantName' => $this->variantName,
            'winner' => $this->winner,
            'status' => $this->status,
            'createdOn' => $this->createdOn,
            'numberOfVisitors' => $this->numberOfVisitors,
            'numberOfUniqueVisitors' => $this->numberOfUniqueVisitors,
            'numberOfSubscribers' => $this->numberOfSubscribers,
            'subscriptionRate' => $this->subscriptionRate,
        ];

        return $this->filterUnsetFields($data);
    }
}
