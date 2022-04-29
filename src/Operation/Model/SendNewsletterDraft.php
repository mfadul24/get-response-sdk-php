<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class SendNewsletterDraft extends BaseModel
{
    private string $sendOn = self::FIELD_NOT_SET;


    /**
     * @param string $messageId
     * @param NewsletterSendSettings $sendSettings
     */
    public function __construct(private $messageId, private readonly NewsletterSendSettings $sendSettings)
    {
    }


    /**
     * @param string $sendOn
     */
    public function setSendOn($sendOn)
    {
        $this->sendOn = $sendOn;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'messageId' => $this->messageId,
            'sendOn' => $this->sendOn,
            'sendSettings' => $this->sendSettings,
        ];

        return $this->filterUnsetFields($data);
    }
}
