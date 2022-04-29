<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewNewsletter extends BaseModel
{
    private string|\Getresponse\Sdk\Operation\Model\MessageFlagsArray $flags = self::FIELD_NOT_SET;

    private string $name = self::FIELD_NOT_SET;

    private string $type = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\MessageEditorEnum $editor = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $replyTo = self::FIELD_NOT_SET;

    private string $sendOn = self::FIELD_NOT_SET;

    /** @var NewsletterAttachment[] */
    private string|array $attachments = self::FIELD_NOT_SET;


    /**
     * @param string $subject
     * @param FromFieldReference $fromField
     * @param CampaignReference $campaign
     * @param MessageContent $content
     * @param NewsletterSendSettings $sendSettings
     */
    public function __construct(private $subject, private readonly FromFieldReference $fromField, private readonly CampaignReference $campaign, private readonly MessageContent $content, private readonly NewsletterSendSettings $sendSettings)
    {
    }


    public function setFlags(MessageFlagsArray $flags)
    {
        $this->flags = $flags;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    public function setEditor(MessageEditorEnum $editor)
    {
        $this->editor = $editor;
    }


    public function setReplyTo(FromFieldReference $replyTo)
    {
        $this->replyTo = $replyTo;
    }


    /**
     * @param string $sendOn
     */
    public function setSendOn($sendOn)
    {
        $this->sendOn = $sendOn;
    }


    /**
     * @param NewsletterAttachment[] $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'flags' => $this->flags,
            'name' => $this->name,
            'type' => $this->type,
            'editor' => $this->editor,
            'subject' => $this->subject,
            'fromField' => $this->fromField,
            'replyTo' => $this->replyTo,
            'campaign' => $this->campaign,
            'sendOn' => $this->sendOn,
            'content' => $this->content,
            'attachments' => $this->attachments,
            'sendSettings' => $this->sendSettings,
        ];

        return $this->filterUnsetFields($data);
    }
}
