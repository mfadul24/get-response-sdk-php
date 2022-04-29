<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CampaignConfirmation extends BaseModel
{
    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $fromField = self::FIELD_NOT_SET;

    private string $redirectType = self::FIELD_NOT_SET;

    private string $mimeType = self::FIELD_NOT_SET;

    private string $redirectUrl = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $replyTo = self::FIELD_NOT_SET;

    private string $subscriptionConfirmationBodyId = self::FIELD_NOT_SET;

    private string $subscriptionConfirmationSubjectId = self::FIELD_NOT_SET;


    public function setFromField(FromFieldReference $fromField)
    {
        $this->fromField = $fromField;
    }


    /**
     * @param string $redirectType
     */
    public function setRedirectType($redirectType)
    {
        $this->redirectType = $redirectType;
    }


    /**
     * @param string $mimeType
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }


    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }


    public function setReplyTo(FromFieldReference $replyTo)
    {
        $this->replyTo = $replyTo;
    }


    /**
     * @param string $subscriptionConfirmationBodyId
     */
    public function setSubscriptionConfirmationBodyId($subscriptionConfirmationBodyId)
    {
        $this->subscriptionConfirmationBodyId = $subscriptionConfirmationBodyId;
    }


    /**
     * @param string $subscriptionConfirmationSubjectId
     */
    public function setSubscriptionConfirmationSubjectId($subscriptionConfirmationSubjectId)
    {
        $this->subscriptionConfirmationSubjectId = $subscriptionConfirmationSubjectId;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'fromField' => $this->fromField,
            'redirectType' => $this->redirectType,
            'mimeType' => $this->mimeType,
            'redirectUrl' => $this->redirectUrl,
            'replyTo' => $this->replyTo,
            'subscriptionConfirmationBodyId' => $this->subscriptionConfirmationBodyId,
            'subscriptionConfirmationSubjectId' => $this->subscriptionConfirmationSubjectId,
        ];

        return $this->filterUnsetFields($data);
    }
}
