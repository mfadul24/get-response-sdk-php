<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CampaignSubscriptionNotifications extends BaseModel
{
    private string|\Getresponse\Sdk\Operation\Model\StatusEnum $status = self::FIELD_NOT_SET;

    /** @var FromFieldReference[] */
    private string|array $recipients = self::FIELD_NOT_SET;


    public function setStatus(StatusEnum $status)
    {
        $this->status = $status;
    }


    /**
     * @param FromFieldReference[] $recipients
     */
    public function setRecipients(array $recipients)
    {
        $this->recipients = $recipients;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'status' => $this->status,
            'recipients' => $this->recipients,
        ];

        return $this->filterUnsetFields($data);
    }
}
