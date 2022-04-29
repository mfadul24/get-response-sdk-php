<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TransactionalEmailRecipients extends BaseModel
{
    /** @var TransactionalEmailRecipient[] */
    private string|array $cc = self::FIELD_NOT_SET;

    /** @var TransactionalEmailRecipient[] */
    private string|array $bcc = self::FIELD_NOT_SET;


    /**
     * @param TransactionalEmailRecipientTo $to
     */
    public function __construct(private readonly TransactionalEmailRecipientTo $to)
    {
    }


    /**
     * @param TransactionalEmailRecipient[] $cc
     */
    public function setCc(array $cc)
    {
        $this->cc = $cc;
    }


    /**
     * @param TransactionalEmailRecipient[] $bcc
     */
    public function setBcc(array $bcc)
    {
        $this->bcc = $bcc;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'to' => $this->to,
            'cc' => $this->cc,
            'bcc' => $this->bcc,
        ];

        return $this->filterUnsetFields($data);
    }
}
