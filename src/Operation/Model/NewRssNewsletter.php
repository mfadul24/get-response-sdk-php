<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewRssNewsletter extends BaseModel
{
    private string|\Getresponse\Sdk\Operation\Model\MessageFlagsArray $flags = self::FIELD_NOT_SET;

    private string $name = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\MessageEditorEnum $editor = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $replyTo = self::FIELD_NOT_SET;


    /**
     * @param string $rssFeedUrl
     * @param string $subject
     * @param StatusEnum $status
     * @param FromFieldReference $fromField
     * @param MessageContent $content
     * @param RssNewsletterSendSettings $sendSettings
     */
    public function __construct(private $rssFeedUrl, private $subject, private readonly StatusEnum $status, private readonly FromFieldReference $fromField, private readonly MessageContent $content, private readonly RssNewsletterSendSettings $sendSettings)
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


    public function setEditor(MessageEditorEnum $editor)
    {
        $this->editor = $editor;
    }


    public function setReplyTo(FromFieldReference $replyTo)
    {
        $this->replyTo = $replyTo;
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
