<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateAutoresponder extends BaseModel
{
    private string $name = self::FIELD_NOT_SET;

    private string $subject = self::FIELD_NOT_SET;

    private string $campaignId = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\StatusEnum $status = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\MessageEditorEnum $editor = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $fromField = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $replyTo = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\MessageContent $content = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\MessageFlagsArray $flags = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\AutoresponderSendSettings $sendSettings = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\AutoresponderTriggerSettings $triggerSettings = self::FIELD_NOT_SET;


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }


    /**
     * @param string $campaignId
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    }


    public function setStatus(StatusEnum $status)
    {
        $this->status = $status;
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


    public function setContent(MessageContent $content)
    {
        $this->content = $content;
    }


    public function setFlags(MessageFlagsArray $flags)
    {
        $this->flags = $flags;
    }


    public function setSendSettings(AutoresponderSendSettings $sendSettings)
    {
        $this->sendSettings = $sendSettings;
    }


    public function setTriggerSettings(AutoresponderTriggerSettings $triggerSettings)
    {
        $this->triggerSettings = $triggerSettings;
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
