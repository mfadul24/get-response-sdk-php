<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class CreateTransactionalEmail extends BaseModel
{
    private string|\Getresponse\Sdk\Operation\Model\FromFieldReference $replyTo = self::FIELD_NOT_SET;

    private string|\Getresponse\Sdk\Operation\Model\NewTransactionalEmailTag $tag = self::FIELD_NOT_SET;

    /** @var TransactionalEmailAttachment[] */
    private string|array $attachments = self::FIELD_NOT_SET;


    /**
     * @param FromFieldReference $fromField
     * @param string $subject
     * @param TransactionalEmailContent $content
     * @param TransactionalEmailRecipients $recipients
     */
    public function __construct(private readonly FromFieldReference $fromField, private $subject, private readonly TransactionalEmailContent $content, private readonly TransactionalEmailRecipients $recipients)
    {
    }


    public function setReplyTo(FromFieldReference $replyTo)
    {
        $this->replyTo = $replyTo;
    }


    public function setTag(NewTransactionalEmailTag $tag)
    {
        $this->tag = $tag;
    }


    /**
     * @param TransactionalEmailAttachment[] $attachments
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
            'fromField' => $this->fromField,
            'replyTo' => $this->replyTo,
            'subject' => $this->subject,
            'tag' => $this->tag,
            'content' => $this->content,
            'recipients' => $this->recipients,
            'attachments' => $this->attachments,
        ];

        return $this->filterUnsetFields($data);
    }
}
