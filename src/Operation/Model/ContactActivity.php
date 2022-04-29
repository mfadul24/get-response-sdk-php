<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ContactActivity extends BaseModel
{
    private string $previewUrl = self::FIELD_NOT_SET;


    /**
     * @param string $activity
     * @param string $subject
     * @param string $createdOn
     * @param \Getresponse\Sdk\Operation\Model\ContactActivityResource $resource
     */
    public function __construct(private $activity, private $subject, private $createdOn, private readonly ContactActivityResource $resource)
    {
    }


    /**
     * @param string $previewUrl
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->previewUrl = $previewUrl;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'activity' => $this->activity,
            'subject' => $this->subject,
            'createdOn' => $this->createdOn,
            'previewUrl' => $this->previewUrl,
            'resource' => $this->resource,
        ];

        return $this->filterUnsetFields($data);
    }
}
