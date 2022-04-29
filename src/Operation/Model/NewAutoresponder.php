<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewAutoresponder extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $campaignId = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\MessageEditorEnum $editor = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $fromField = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $replyTo = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\MessageFlagsArray $flags = self::FIELD_NOT_SET;


    /**
     * @param string $subject
     * @param StatusEnum $status
     * @param MessageContent $content
     * @param AutoresponderSendSettings $sendSettings
     * @param AutoresponderTriggerSettings $triggerSettings
     */
    public function __construct(private $subject, private readonly StatusEnum $status, private readonly MessageContent $content, private readonly AutoresponderSendSettings $sendSettings, private readonly AutoresponderTriggerSettings $triggerSettings)
    {
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $campaignId
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    }


    public function setEditor(MessageEditorEnum $editor)
    {
        $this->editor = $editor;
    }


    public function setFromField(FromFieldReference $fromField)
    {
        $this->fromField = $fromField;
    }


    public function setReplyTo(FromFieldReference $replyTo)
    {
        $this->replyTo = $replyTo;
    }


    public function setFlags(MessageFlagsArray $flags)
    {
        $this->flags = $flags;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'subject' => $this->subject,
            'campaignId' => $this->campaignId,
            'status' => $this->status,
            'editor' => $this->editor,
            'fromField' => $this->fromField,
            'replyTo' => $this->replyTo,
            'content' => $this->content,
            'flags' => $this->flags,
            'sendSettings' => $this->sendSettings,
            'triggerSettings' => $this->triggerSettings,
        ];

        return $this->filterUnsetFields($data);
    }
}
