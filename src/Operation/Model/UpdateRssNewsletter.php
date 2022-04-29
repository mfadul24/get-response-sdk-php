<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateRssNewsletter extends BaseModel
{
    private string|\Getresponse\Sdk\Operation\Model\MessageFlagsArray $flags = self::FIELD_NOT_SET;

    private string $rssFeedUrl = self::FIELD_NOT_SET;

    private string $subject = self::FIELD_NOT_SET;

    private string $name = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\StatusEnum $status = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\MessageEditorEnum $editor = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $fromField = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $replyTo = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\MessageContent $content = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\RssNewsletterSendSettings $sendSettings = self::FIELD_NOT_SET;


    public function setFlags(MessageFlagsArray $flags)
    {
        $this->flags = $flags;
    }


    /**
     * @param string $rssFeedUrl
     */
    public function setRssFeedUrl($rssFeedUrl)
    {
        $this->rssFeedUrl = $rssFeedUrl;
    }


    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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


    public function setSendSettings(RssNewsletterSendSettings $sendSettings)
    {
        $this->sendSettings = $sendSettings;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'flags' => $this->flags,
            'rssFeedUrl' => $this->rssFeedUrl,
            'subject' => $this->subject,
            'name' => $this->name,
            'status' => $this->status,
            'editor' => $this->editor,
            'fromField' => $this->fromField,
            'replyTo' => $this->replyTo,
            'content' => $this->content,
            'sendSettings' => $this->sendSettings,
        ];

        return $this->filterUnsetFields($data);
    }
}
